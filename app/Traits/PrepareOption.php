<?php

namespace App\Traits;

use VCComponent\Laravel\Config\Services\Facades\Option;

trait PrepareOption {
    
    public function prepareOption() {
        Option::prepare([
            'header-logo',
            'website-favicon',
            'hotline',
            'connective-video',
            'link-facebook',
            'link-youtube',
            'link-linkedin',
            'website-info',
            'title-seo-home',
            'desc-seo-home',
            'banner-1',
            'link-banner-1',
            'banner-2',
            'link-banner-2',
            'banner-3',
            'link-banner-3',
            'video-1',
            'title-video-1',
            'video-2',
            'title-video-2',
            'video-3',
            'title-video-3',
            // 'logo-van-chuyen',
            'logo-giam-gia',
            'logo-khach-hang-tin-dung',
            'logo-bao-hanh',
            'title-seo-product',
            'desc-seo-product',
            'title-seo-flash-sale',
            'desc-seo-flash-sale',
            'banner-flash-sale',
        ]);
    }
}