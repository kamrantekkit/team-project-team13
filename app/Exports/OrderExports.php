<?php

namespace App\Exports;

use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OrderExports implements FromCollection, WithHeadings
{
    protected $startDate;
    protected $endDate;

    public function __construct($startDate, $endDate)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    public function collection()
    {
        return Order::select('id','user_id','email','price','created_at')
            ->with('user')
            ->whereBetween('created_at', [new Carbon($this->startDate), new Carbon($this->endDate)])
            ->get()
            ->map(function ($order) {

                return [
                    'Order ID' => $order->id,
                    'Name' => $order->user ? $order->user->name : 'Guest',
                    'Email' => $order->email,
                    'Total' => "£" . $order->price,
                    'Created At' => $order->created_at
                ];
            });
    }

    public function headings(): array
    {
        return [
            'Order ID',
            'Name',
            'Email',
            'Total',
            'Created At'
        ];
    }
}
