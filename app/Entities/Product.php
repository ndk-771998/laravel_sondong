<?php

namespace App\Entities;

use VCComponent\Laravel\Category\Traits\HasCategoriesTrait;
use VCComponent\Laravel\Comment\Traits\HasCommentTrait;
use VCComponent\Laravel\MediaManager\HasMediaTrait;
use VCComponent\Laravel\Product\Entities\Product as BaseProduct;
use VCComponent\Laravel\Tag\Traits\HasTagsTraits;

class Product extends BaseProduct
{
    use HasCommentTrait, HasCategoriesTrait, HasTagsTraits, HasMediaTrait;

}
