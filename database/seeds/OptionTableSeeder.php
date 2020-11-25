<?php

use Illuminate\Database\Seeder;
use VCComponent\Laravel\Config\Entities\Option;

class OptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Option::insert([

            [
                'label' => 'slide 1',
                'key'   => 'trang-chu-slide-1',
                'value' => '/assets/images/wallpaper.png',
            ],
            [
                'label' => 'slide 2',
                'key'   => 'trang-chu-slide-2',
                'value' => '/assets/images/wallpaper.png',
            ],
            [
                'label' => 'slide 3',
                'key'   => 'trang-chu-slide-3',
                'value' => '/assets/images/wallpaper.png',
            ],
            [
                'label' => 'slide 4',
                'key'   => 'trang-chu-slide-4',
                'value' => '/assets/images/wallpaper.png',
            ],
            [
                'label' => 'slide 5',
                'key'   => 'trang-chu-slide-5',
                'value' => '/assets/images/wallpaper.png',
            ],
            [
                'label' => 'Header logo',
                'key'   => 'header-logo',
                'value' => 'https://cdn.zeplin.io/5d8877494f3ff161cea03412/assets/6e98e7c5-5202-4868-9b06-528add66309e.png',
            ],
            [
                'label' => 'Website Favicon',
                'key'   => 'website-favicon',
                'value' => '/assets/images/favicon.png',
            ],
            [
                'label' => 'Footer logo',
                'key'   => 'footer-logo',
                'value' => 'https://cdn.zeplin.io/5d8877494f3ff161cea03412/assets/fafaeae0-c771-45b6-afa3-5a6439992b21.png',
            ],

            [
                'label' => 'footer logo facebook',
                'key'   => 'footer-logo-facebook',
                'value' => 'https://cdn.zeplin.io/5d8877494f3ff161cea03412/assets/f3ccce7b-9476-4682-9dd5-756c4082dd4c.svg',
            ],
            [
                'label' => 'footer logo twitter',
                'key'   => 'footer-logo-twitter',
                'value' => 'https://cdn.zeplin.io/5d8877494f3ff161cea03412/assets/fe7c3857-6de3-44a9-a28c-c8ce3f8bb4ba.svg',
            ],
            [
                'label' => 'footer logo instagram',
                'key'   => 'footer-logo-instagram',
                'value' => 'https://cdn.zeplin.io/5d8877494f3ff161cea03412/assets/bc749d9d-e72d-48d2-b3ef-e3ddf97a1bd4.svg',
            ],
            [
                'label' => 'footer copyright by',
                'key'   => 'footer-copyright-by',
                'value' => 'Copyright by Dinks',
            ],
            [
                'label' => 'Footer giấy phép hoạt động',
                'key'   => 'footer-operating-license',
                'value' => 'Giấy phép hoạt động trang thông tin điện tử tổng hợp số 36/GP-ICP-STTTT, HCM ngày 29/08/2016',
            ],
            [
                'label' => 'Bộ phận kỹ thuật',
                'key'   => 'bo-phan-ky-thuat',
                'value' => '+ 84 868 21 08 62',
            ],
            [
                'label' => 'Bộ phận cskh',
                'key'   => 'bo-phan-cham-soc-khach-hang',
                'value' => '+ 84 868 21 08 62',
            ],
            [
                'label' => 'Chi tiết sản phẩm hotline',
                'key'   => 'chi-tiet-san-pham-hot-line',
                'value' => '+ 84 868 21 08 62',
            ],
            [
                'label' => 'Hotline',
                'key'   => 'hotline',
                'value' => '+ 84 868 21 08 62',
            ],
            [
                'label' => 'Liên hệ title',
                'key'   => 'lien-he-title',
                'value' => 'Liên hệ',
            ],
            [
                'label' => 'Liên hệ description',
                'key'   => 'lien-he-description',
                'value' => 'Wedding Store - Chuyên váy cưới, hỗ trợ tổ chức tiệc cưới, địa điểm cưới',
            ],
            [
                'label' => 'Liên hệ website title',
                'key'   => 'lien-he-website-title',
                'value' => 'Website sản phẩm bán hàng',
            ],
            [
                'label' => 'Liên hệ address',
                'key'   => 'lien-he-address',
                'value' => 'Tầng 3, số 14 Pháo Đài Láng, P. Trung Liệt, Q. Đống Đa, TP. Hà Nội',
            ],
            [
                'label' => 'Liên hệ Google Map',
                'key'   => 'lien-he-google-map',
                'value' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.3201271892412!2d105.80386291472446!3d21.019873193457997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab677bc39f5d%3A0x26d043cd1bbe8c4d!2zMTQgUGjDoW8gxJDDoGkgTMOhbmcsIEzDoW5nIFRoxrDhu6NuZywgxJDhu5FuZyDEkGEsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1605495481780!5m2!1svi!2s" width="250" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
            ],
            [
                'label' => 'trang chủ title',
                'key'   => 'trang-chu-title',
                'value' => 'Trang chủ',
            ],
            [
                'label' => 'trang chủ description',
                'key'   => 'trang-chu-description',
                'value' => 'Wedding Store - Chuyên váy cưới, hỗ trợ tổ chức tiệc cưới, địa điểm cưới',
            ],
            [
                'label' => 'Giới thiệu title',
                'key'   => 'gioi-thieu-title',
                'value' => 'Giới thiệu',
            ],
            [
                'label' => 'Giới thiệu description',
                'key'   => 'gioi-thieu-description',
                'value' => 'Wedding Store - Chuyên váy cưới, hỗ trợ tổ chức tiệc cưới, địa điểm cưới',
            ],
            [
                'label' => 'Sản phẩm title',
                'key'   => 'san-pham-title',
                'value' => 'Sản phẩm',
            ],
            [
                'label' => 'Sản phẩm description',
                'key'   => 'san-pham-description',
                'value' => 'Wedding Store - Chuyên váy cưới, hỗ trợ tổ chức tiệc cưới, địa điểm cưới',
            ],
            [
                'label' => 'Dịch vụ title',
                'key'   => 'dich-vu-title',
                'value' => 'Dịch vụ',
            ],
            [
                'label' => 'Dịch vụ description',
                'key'   => 'dich-vu-description',
                'value' => 'Wedding Store - Chuyên váy cưới, hỗ trợ tổ chức tiệc cưới, địa điểm cưới',
            ],
            [
                'label' => 'Tin tức title',
                'key'   => 'tin-tuc-title',
                'value' => 'Tin tức',
            ],
            [
                'label' => 'Tin tức description',
                'key'   => 'tin-tuc-description',
                'value' => 'Wedding Store - Chuyên váy cưới, hỗ trợ tổ chức tiệc cưới, địa điểm cưới',
            ],
            [
                'label' => 'Giỏ hàng title',
                'key'   => 'gio-hang-title',
                'value' => 'Giỏ hàng',
            ],
            [
                'label' => 'Giỏ hàng description',
                'key'   => 'gio-hang-description',
                'value' => 'Wedding Store - Chuyên váy cưới, hỗ trợ tổ chức tiệc cưới, địa điểm cưới',
            ],
        ]);
    }
}
