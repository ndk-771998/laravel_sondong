<?php

namespace App\Entities;

use Carbon\Carbon;
use Illuminate\Support\Str;
use VCComponent\Laravel\Comment\Traits\HasCommentTrait;
use VCComponent\Laravel\Product\Entities\Product as BaseProduct;

class Product extends BaseProduct
{
    use HasCommentTrait;

}
