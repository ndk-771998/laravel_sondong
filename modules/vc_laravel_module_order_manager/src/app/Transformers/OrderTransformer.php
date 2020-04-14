<?php

namespace VCComponent\Laravel\Order\Transformers;

use League\Fractal\TransformerAbstract;
use VCComponent\Laravel\Order\Entities\Order;
use VCComponent\Laravel\Order\Entities\OrderItems;
use VCComponent\Laravel\Order\Transformers\OrderItemTransformer;

class OrderTransformer extends TransformerAbstract {
    protected $availableIncludes = [
        'orderItems',
    ];

    public function __construct($includes = []) {
        $this->setDefaultIncludes($includes);
    }

    public function transform(Order $model) {
        return [
            'id'             => (int) $model->id,
            'user_id'        => (int) $model->user_id,
            'phone_number'   => $model->phone_number,
            'email'          => $model->email,
            'address'        => $model->address,
            'username'       => $model->username,
            'total'          => $model->total,
            'order_note'     => $model->order_note,
            'payment_method' => (int) $model->payment_method,
            'payment_status' => (int) $model->payment_status,
            'status_id'      => (int) $model->status_id,
            'cart_id'        => $model->cart_id,
            'timestamps'     => [
                'created_at' => $model->created_at,
                'updated_at' => $model->updated_at,
            ],

        ];
    }

    public function includeOrderItems(Order $Orders) {
        $orderItems = $Orders->orderItems;
        return $this->collection($orderItems, new OrderItemTransformer);
    }
}
