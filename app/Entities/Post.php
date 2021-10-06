<?php

namespace App\Entities;

use Illuminate\Support\Str;
use VCComponent\Laravel\Category\Traits\HasCategoriesTrait;
use VCComponent\Laravel\Comment\Traits\HasCommentTrait;
use VCComponent\Laravel\MediaManager\HasMediaTrait;
use VCComponent\Laravel\Post\Entities\Post as BasePost;
use VCComponent\Laravel\Tag\Traits\HasTagsTraits;

class Post extends BasePost
{
    use HasCommentTrait, HasCategoriesTrait, HasTagsTraits, HasMediaTrait;

    public function postTypes()
    {
        return [
            'Chính sách'            => 'policy',
            'Khuyến mại'            => 'promotion',
            'Giới thiệu'            => 'aboutus',
            'Dịch vụ sửa chữa'      => 'repairservice',
            'Hình ảnh khách hàng'   => 'customermedias',
            // 'Cảm nhận khách hàng'   => 'customerfeedback',
        ];
    }

    public function getLimitedName($limit = 10)
    {
        return Str::limit($this->name, $limit);
    }

    public function contactSchema()
    {
        return [
            'seo_title' => [
                'type'  => 'text',
                'label' => 'Tiêu đề SEO',
                'rule'  => [],
            ],
            'seo_desc' => [
                'type'  => 'textarea',
                'label' => 'Mô tả SEO',
                'rule'  => [],
            ],
        ];
    }

    public function repairserviceSchema()
    {
        return [
            'seo_title' => [
                'type'  => 'text',
                'label' => 'Tiêu đề SEO',
                'rule'  => [],
            ],
            'seo_desc' => [
                'type'  => 'textarea',
                'label' => 'Mô tả SEO',
                'rule'  => [],
            ],
        ];
    }

    public function policySchema()
    {
        return [
            'seo_title' => [
                'type'  => 'text',
                'label' => 'Tiêu đề SEO',
                'rule'  => [],
            ],
            'seo_desc' => [
                'type'  => 'textarea',
                'label' => 'Mô tả SEO',
                'rule'  => [],
            ],
        ];
    }

    public function promotionSchema()
    {
        return [
            'seo_title' => [
                'type'  => 'text',
                'label' => 'Tiêu đề SEO',
                'rule'  => [],
            ],
            'seo_desc' => [
                'type'  => 'textarea',
                'label' => 'Mô tả SEO',
                'rule'  => [],
            ],
        ];
    }

    public function scopeGetBy($query, $type, $status)
    {
        return $query->where('type', $type)->where('status', $status)->orderBy('id', 'desc');
    }
}
