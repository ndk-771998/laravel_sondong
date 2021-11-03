<?php

namespace App\Entities;

use Carbon\Carbon;
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
            'Bản tin truyền thanh'          => 'audios',
            'Bản tin truyền hình'           => 'televisions',
            'Cơ quan ban ngành liên kết'    => 'commitees',
            'Văn bản chính sách'            => 'documents'
        ];
    }

    public function getLimitedName($limit = 10)
    {
        return Str::limit($this->name, $limit);
    }

    public function schema()
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

    public function pagesSchema()
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

    public function audiosSchema()
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

    public function televisionsSchema()
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

    public function commiteesSchema()
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
            'link'      => [
                'type'  => 'text',
                'label' => 'Liên kết ban ngành',
                'rule'  => ['require'],
            ]
        ];
    }

    public function documentsSchema()
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
            'agency_issued'      => [
                'type'  => 'text',
                'label' => 'Cơ quan ban hành',
                'rule'  => [],
            ],
            'release_date'      => [
                'type'  => 'text',
                'label' => 'Ngày ban hành',
                'rule'  => [],
            ],
            'effective_date'      => [
                'type'  => 'text',
                'label' => 'Ngày hiệu lực',
                'rule'  => [],
            ],
            'document_file_1'   => [
                'type'  => 'image',
                'label' => 'File văn bản đính kèm',
                'rule'  => []
            ],
            'document_file_2'   => [
                'type'  => 'image',
                'label' => 'File văn bản đính kèm',
                'rule'  => []
            ],
            'document_file_2'   => [
                'type'  => 'image',
                'label' => 'File văn bản đính kèm',
                'rule'  => []
            ]
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

    public function getPublishedDate() {
        $publish_date = $this->published_date ? $this->published_date : $this->created_at;
        return Carbon::parse($publish_date)->format('d-m-Y');
    }
}
