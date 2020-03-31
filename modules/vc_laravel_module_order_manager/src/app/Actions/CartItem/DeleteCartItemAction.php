<?php

namespace VCComponent\Laravel\Order\Actions\CartItem;

use VCComponent\Laravel\Order\Entities\CartItem;

class DeleteCartItemAction
{
    public function execute(int $id): void
    {
        $cartItem = CartItem::findOrFail($id);
        $cartItem->delete();
    }
}
