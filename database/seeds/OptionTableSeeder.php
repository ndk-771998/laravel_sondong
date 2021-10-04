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
                'label' => 'Header Logo',
                'key'   => 'header-logo',
                'value' => '/assets/images/logo/logo.png',
            ],
            [
                'label' => 'Website Favicon',
                'key'   => 'website-favicon',
                'value' => '/assets/images/logo/logo.png',
            ],
            [
                'label' => 'Đường dây nóng',
                'key'   => 'hotline',
                'value' => '1900.265.1254',
            ],
            [
                'label' => 'Video kết nối cùng chúng tôi (footer)',
                'key'   => 'connective-video',
                'value' => '',
            ],
            [
                'label' => 'Liên kết Facebook',
                'key'   => 'link-facebook',
                'value' => 'https://facebook.com',
            ],
            [
                'label' => 'Liên kết Youtube',
                'key'   => 'link-youtube',
                'value' => 'https://youtube.com',
            ],
            [
                'label' => 'Liên kết LinkedIn',
                'key'   => 'link-linkedin',
                'value' => '#',
            ],
            [
                'label' => 'Thông tin liên hệ (footer)',
                'key'   => 'website-info',
                'value' => '<p>Thienthanh - Chuyên cung thiết bị, dịch vụ, giải pháp máy văn phòng uy tín chất lượng</p>
                <p>
                Địa chỉ: 507 Liễu giai, Quận Ba Đình, Hà Nội.<br> 
                Tổng đài hỗ trợ: 19001221 - Email: cskh@hotro.thienthanh.vn<br>
                Chịu Trách Nhiệm Quản Lý Nội Dung: Nguyễn Đức A - Điện thoại liên hệ: 024 73081221 (ext 4678)<br>
                Mã số doanh nghiệp: 0106773786 do Sở Kế hoạch & Đầu tư TP Hà Nội cấp lần đầu ngày 10/02/2015<br>
                </p>
                <p>© 2021 VMMS. Tất cả các quyền được bảo lưu.</p>
                ',
            ],
            [
                'label' => 'Tiêu đề SEO trang chủ',
                'key'   => 'title-seo-home',
                'value' => 'Trang chủ',
            ],
            [
                'label' => 'Mô tả SEO trang chủ',
                'key'   => 'desc-seo-home',
                'value' => 'Website bán laptop, thiết bị máy thình tốt nhât',
            ],
            [
                'label' => 'Banner 1',
                'key'   => 'banner-1',
                'value' => '/assets/images/banner1.jpg',
            ],
            [
                'label' => 'Đường dẫn banner 1',
                'key'   => 'link-banner-1',
                'value' => '#',
            ],
            [
                'label' => 'Banner 2',
                'key'   => 'banner-2',
                'value' => '/assets/images/banner2.jpg',
            ],
            [
                'label' => 'Đường dẫn banner 2',
                'key'   => 'link-banner-2',
                'value' => '#',
            ],
            [
                'label' => 'Banner 3',
                'key'   => 'banner-3',
                'value' => '/assets/images/banner3.jpg',
            ],
            [
                'label' => 'Đường dẫn banner 3',
                'key'   => 'link-banner-3',
                'value' => '#',
            ],
            [
                'label' => 'Video 1',
                'key'   => 'video-1',
                'va;ue'  => '',
            ],
            [
                'label' => 'Tiêu đề video 1',
                'key'   => 'title-video-1',
                'value'  => '(Review) Lenovo Ideapad 5 (2021) Phá Đảo tầm giá 15 Triệu...!!!',
            ],
        ]);
    }
}
