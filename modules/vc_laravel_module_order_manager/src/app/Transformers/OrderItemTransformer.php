<?php

namespace VCComponent\Laravel\Order\Transformers;

use League\Fractal\TransformerAbstract;
use VCComponent\Laravel\Order\Entities\OrderItem;

class OrderItemTransformer extends TransformerAbstract
{
    public function transform(OrderItem $model)
    {
        return [
            'id'          => (int) $model->id,
            'product_id'  => (int) $model->product_id,
            'quantity'    => $model->quantity,
            'price'       => $model->price,
            'order_id'    => $model->order_id,
            'timestamps'  => [
                'created_at' => $model->created_at,
                'updated_at' => $model->updated_at,
            ],
        ];
    }
}
