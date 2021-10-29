<?php

namespace App\Entities;

use Exception;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\Models\Media;
use VCComponent\Laravel\Category\Traits\HasCategoriesTrait;
use VCComponent\Laravel\Comment\Traits\HasCommentTrait;
use VCComponent\Laravel\MediaManager\Entities\MediaDimension;
use VCComponent\Laravel\MediaManager\HasMediaTrait;
use VCComponent\Laravel\Post\Entities\Post as BasePost;
use VCComponent\Laravel\Tag\Traits\HasTagsTraits;

class Post extends BasePost
{
    use HasCommentTrait, HasCategoriesTrait, HasTagsTraits, HasMediaTrait;

    public function postTypes()
    {
        return [
            'Bản tin truyền thanh'          => 'ban-tin-truyen-thanh',
            'Bản tin truyền hình'           => 'ban-tin-truyen-hinh',
            'Cơ quan ban ngành liên kết'    => 'co-quan-ban-quanh-lien-ket',
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

    public function customermediasSchema()
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

    public function customerfeedbackSchema()
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

    public function aboutUsSchema()
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

    public function getMetaField($key)
    {
        if (!$this->postMetas->count()) {
            return '';
        }

        try {
            return $this->postMetas->where('key', $key)->first()->value;
        } catch (Exception $e) {
            return '';
        }
    }
    
    public function registerMediaConversions(Media $media = null)
    {
        $media_dimension = MediaDimension::where('model', 'post')->get();

        foreach ($media_dimension as $item) {
            $this->addMediaConversion($item->name)->width($item->width)->height($item->height)->sharpen(10);
        }
    }
}
