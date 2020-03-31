<?php

namespace VCComponent\Laravel\Tag\Validators;

use VCComponent\Laravel\Vicoders\Core\Validators\AbstractValidator;
use VCComponent\Laravel\Vicoders\Core\Validators\ValidatorInterface;

class TagValidator extends AbstractValidator
{
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'name' => 'required',
        ],
        ValidatorInterface::RULE_UPDATE => [
            'name' => 'required',
            // Rule::unique('taggables')->where(function ($query) use($data1,$data2) {
            //     return $query->where('tag_id', $data1)
            //     ->where('taggable_id', $data2);
            //     }),
        ],

    ];
}
