<?php

namespace VCComponent\Laravel\Order\Actions\Order;

use VCComponent\Laravel\Order\Actions\Order\CreateOrderItemAction;
use VCComponent\Laravel\Order\Entities\Cart;
use VCComponent\Laravel\Order\Entities\CartItem;
use VCComponent\Laravel\Order\Entities\Order;
use VCComponent\Laravel\Order\Entities\UserOrders;

class CreateOrderAction {
    public function __construct(CreateOrderItemAction $createItem) {
        $this->createItem = $createItem;
    }

    public function execute(array $data = []): Order{
        $attributes = collect($data)
            ->only(['phone_number', 'total'])
            ->toArray();

        if ($data['payment_method'] == 2) {
            $data['payment_status'] = 4;
        }

        $order    = Order::firstOrCreate($attributes, $data);
        $order_id = [
            'order_id' => $order->id,
        ];
        $user = UserOrders::firstOrCreate($order_id);

        Order::where('id', $order->id)->update(['user_id' => $user->id]);

        $cart_id     = $data['cart_id'];
        $order_items = CartItem::where('cart_id', $cart_id)->get();

        foreach ($order_items as $order_item) {
            $data = [
                'product_id' => $order_item->product_id,
                'quantity'   => $order_item->quantity,
                'price'      => $order_item->price,
                'order_id'   => $order->id,
            ];
            $this->createItem->excute($data);
            $order_item->delete();
        }

        $cart = Cart::where('id', $cart_id)->first();
        if ($cart) {
            $cart->delete();
        }

        return $order->refresh();
    }
}
