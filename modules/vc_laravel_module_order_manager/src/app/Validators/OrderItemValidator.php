<?php

namespace VCComponent\Laravel\Order\Validators;

use VCComponent\Laravel\Vicoders\Core\Validators\AbstractValidator;
use VCComponent\Laravel\Vicoders\Core\Validators\ValidatorInterface;

class OrderItemValidator extends AbstractValidator
{
    protected $rules = [
        ValidatorInterface::RULE_ADMIN_CREATE => [
            'product_id' => ['required'],
            'quantity'   => ['required'],
            'price'      => ['required'],
        ],
        ValidatorInterface::RULE_ADMIN_UPDATE => [
            'product_id' => ['required'],
            'quantity'   => ['required'],
            'price'      => ['required'],
        ],
    ];
}
