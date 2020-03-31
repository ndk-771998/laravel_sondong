<?php

namespace VCComponent\Laravel\Script\Validators;

use VCComponent\Laravel\Vicoders\Core\Validators\AbstractValidator;
use VCComponent\Laravel\Vicoders\Core\Validators\ValidatorInterface;

class ScriptValidator extends AbstractValidator
{
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'title'    => 'required',
            'position' => ['required','unique'],
            'content'  => 'required',
        ],
        ValidatorInterface::RULE_UPDATE => [
            'title'    => 'required',
            'position' => 'required',
            'content'  => 'required',
        ],
    ];
}
