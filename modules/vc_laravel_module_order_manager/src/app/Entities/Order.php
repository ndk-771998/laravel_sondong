<?php

namespace VCComponent\Laravel\Order\Entities;

use Illuminate\Database\Eloquent\Model;
use VCComponent\Laravel\Order\Entities\OrderItem;
use VCComponent\Laravel\Order\Traits\Helpers;

class Order extends Model
{
    use Helpers;

    protected $fillable = [
        'user_id',
        'phone_number',
        'username',
        'email',
        'address',
        'total',
        'order_note',
        'payment_method',
        'payment_status',
        'status_id',
        'cart_id',
    ];

    public function orderItems()
    {
        return $this->HasMany(OrderItem::class);
    }

    public function orderTypes()
    {
        return [
            'order',
        ];
    }
}
