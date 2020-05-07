<?php

namespace VCComponent\Laravel\Order\Actions\CartItem;

use VCComponent\Laravel\Order\Entities\CartItem;
use VCComponent\Laravel\Order\Actions\Cart\CalculateCartTotalAction;

class DeleteCartItemAction
{
    public function __construct(CalculateCartTotalAction $action)
    {
        $this->action = $action;
    }

    public function execute(int $id): void
    {
        $cartItem = CartItem::findOrFail($id);
        $cartItem->delete();
        $this->action->execute($cartItem->cart);
    }
}
