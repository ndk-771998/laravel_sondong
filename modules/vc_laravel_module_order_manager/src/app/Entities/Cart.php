<?php

namespace VCComponent\Laravel\Order\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use VCComponent\Laravel\Order\Entities\CartItem;

class Cart extends Model
{
    protected $fillable = [
        'id',
        'total',
    ];

    public $incrementing = false;

    protected $keyType = 'int';


    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

    public static function generateUuid()
    {
        return Str::uuid()->toString();
    }

    public function calculateTotal(): int
    {
        return $this->cartItems->sum('amount');
    }

    public function cartTypes()
    {
        return [
            'cart',
        ];
    }
}
