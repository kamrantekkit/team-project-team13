<?php

namespace App\Jobs\StripeWebhooks;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
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
        $billingDetails = $data['billing_details'];
        $products = json_decode($data['metadata']['products'], true);

        $user = User::where('email', $billingDetails['email'])->first();
        $userID = null;
        if ($user != null) $userID = $user->id;

//        \Log::info($data);
        $email = $billingDetails['email'];
//        \Log::info($userID);
//        \Log::info(gettype($email));
//        \Log::info($id);
//        \Log::info($amount);
//        \Log::info($email);
        $order = Order::create([
            "user_id" => $userID,
            "email" => $email,
            "payment_id" => $id,
            "price" => $amount
        ]);
        \Log::info($products);
        //todo: attach products

        $order->products()->attach($products);

    }
}
