<?php

namespace App\Jobs\StripeWebhooks;

use App\Mail\OrderConfirmMail;
use App\Mail\StockNotify;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Psy\Readline\Hoa\Console;
use Spatie\WebhookClient\Models\WebhookCall;

class HandleChargeSucceed implements ShouldQueue
{
    public $webhookCall;

    public function __construct(WebhookCall $webhookCall)
    {
        $this->webhookCall = $webhookCall;
    }

    public function handle()
    {
        // do your work here
        // you can access the payload of the webhook call with `$this->webhookCall->payload`
        $data = $this->webhookCall->payload['data']['object'];
        $id = $data['id'];
        $amount = $data['amount'];
        $billing_details = $data['billing_details'];
        $productData = json_decode($data['metadata']['products'], true);

        $user = User::where('email', $billing_details['email'])->first();
        $userID = null;
        if ($user != null) $userID = $user->id;

        $email = $billing_details['email'];

        $order = Order::create([
            "user_id" => $userID,
            "email" => $email,
            "payment_id" => $id,
            "price" => number_format($amount / 100, 2),
        ]);

        $order->products()->attach($productData);
        $products = $order->products()->get();

        // Decrement stock
        $lowStockProducts = [];
        foreach ($products as $product) {
            $quantity = $productData[$product->id]['quantity'];
            $product->stock->decrement('quantity', $quantity);
            if ($product->stock->quantity <= 10) {
                $lowStockProducts[] = $product;
            }
            Log::info("Product {$product->id} quantity after decrement: {$product->stock->quantity}");
        }

        Log::info("Low Stock Products:" , $lowStockProducts);
        if (!empty($lowStockProducts)) {
            $mail = new StockNotify($lowStockProducts);
            $users = User::where('is_admin', '=',true)->get();
            Log::info("Admins:", $users->pluck('email')->toArray());
            $mail->to($users->pluck('email')->toArray());
            Mail::send($mail);
        }

        $invoiceItems = [];
        foreach ($products as $product) {
            $invoiceItems[] = [
                'name' => $product->name,
                'quantity' => $product['quantity'],
                'price' => $product->pivot->quantity * $product->price
            ];
        }

        $address = [
            'address' => $billing_details['address']['line1'] ?? '',
            'city' => $billing_details['address']['city'] ?? '',
            'state' => $billing_details['address']['state'] ?? '',
            'postal_code' => $billing_details['address']['postal_code'] ?? '',
            'country' => $billing_details['address']['country'] ?? ''
        ];
        Log::info("Name:" . $billing_details['name']);
        // Send email
        $name = $billing_details['name'];
        $mail = new OrderConfirmMail( $name, $invoiceItems, $address);
        Log::info("Mail:" . $email);
        Log::info("Name:" . $name);
        $mail->to($email);
        Mail::send($mail);

    }
}
