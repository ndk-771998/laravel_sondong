<?php

use App\Entities\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::insert([
            [
                'title' => 'Quy định đổi trả hàng',
                'slug' => 'quy-dinh-doi-tra-hang',
                'description' => '',
                'content' => '<p><strong><span style=\"font-size: 12pt;\">I. QUY ĐỊNH THANH TO&Aacute;N</span></strong></p>\n<p><span style=\"font-size: 12pt;\">1. Đối với dịch vụ vận chuyển (Ship)</span></p>\n<p><span style=\"font-size: 12pt;\">- Khi h&agrave;ng h&oacute;a được vận chuyển đến kho của HNCmua tại Việt Nam (H&agrave; Nội, TP.HCM), HNCmua sẽ th&ocirc;ng b&aacute;o cước vận chuyển m&agrave; kh&aacute;ch h&agrave;ng cần thanh to&aacute;n th&ocirc;ng qua SMS v&agrave; Email.</span><br /><span style=\"font-size: 12pt;\">- Sau khi kh&aacute;ch h&agrave;ng thực hiện thanh to&aacute;n 100% cước vận chuyển, HNCmua sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</span></p>\n<p><span style=\"font-size: 12pt;\">2. Đối với dịch vụ mua hộ (Order)</span></p>\n<p><span style=\"font-size: 12pt;\">- Kh&aacute;ch h&agrave;ng thanh to&aacute;n 100% tổng gi&aacute; trị sau khi chốt đơn h&agrave;ng.</span><br /><span style=\"font-size: 12pt;\">- HNCmua tiến h&agrave;nh mua h&agrave;ng v&agrave; vận chuyển h&agrave;ng h&oacute;a về Việt Nam.</span><br /><span style=\"font-size: 12pt;\">- Sau khi kh&aacute;ch h&agrave;ng thanh to&aacute;n cước vận chuyển, HNCmua sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</span></p>\n<p><strong><span style=\"font-size: 12pt;\">II. H&Igrave;NH THỨC THANH TO&Aacute;N</span></strong></p>\n<p><span style=\"font-size: 12pt;\">1. Đối với dịch vụ vận chuyển (Ship)</span></p>\n<p><span style=\"font-size: 12pt;\">- Khi h&agrave;ng h&oacute;a được vận chuyển đến kho của HNCmua tại Việt Nam (H&agrave; Nội, TP.HCM), HNCmua sẽ th&ocirc;ng b&aacute;o cước vận chuyển m&agrave; kh&aacute;ch h&agrave;ng cần thanh to&aacute;n th&ocirc;ng qua SMS v&agrave; Email.</span><br /><span style=\"font-size: 12pt;\">- Sau khi kh&aacute;ch h&agrave;ng thực hiện thanh to&aacute;n 100% cước vận chuyển, HNCmua sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</span></p>\n<p><span style=\"font-size: 12pt;\">2. Đối với dịch vụ mua hộ (Order)</span></p>\n<p><span style=\"font-size: 12pt;\">- Kh&aacute;ch h&agrave;ng thanh to&aacute;n 100% tổng gi&aacute; trị sau khi chốt đơn h&agrave;ng.</span><br /><span style=\"font-size: 12pt;\">- HNCmua tiến h&agrave;nh mua h&agrave;ng v&agrave; vận chuyển h&agrave;ng h&oacute;a về Việt Nam.</span><br /><span style=\"font-size: 12pt;\">- Sau khi kh&aacute;ch h&agrave;ng thanh to&aacute;n cước vận chuyển, HNCmua sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</span></p>',
                'type' => 'policy',
                'blocks' => '{}',
                'status'    => 1,
                'thumbnail' => '',
            ],
            [
                'title' => 'Quy định thanh toán',
                'slug' => 'quy-dinh-thanh-toan',
                'description' => '',
                'content' => '<p><strong><span style=\"font-size: 12pt;\">I. QUY ĐỊNH THANH TO&Aacute;N</span></strong></p>\n<p><span style=\"font-size: 12pt;\">1. Đối với dịch vụ vận chuyển (Ship)</span></p>\n<p><span style=\"font-size: 12pt;\">- Khi h&agrave;ng h&oacute;a được vận chuyển đến kho của HNCmua tại Việt Nam (H&agrave; Nội, TP.HCM), HNCmua sẽ th&ocirc;ng b&aacute;o cước vận chuyển m&agrave; kh&aacute;ch h&agrave;ng cần thanh to&aacute;n th&ocirc;ng qua SMS v&agrave; Email.</span><br /><span style=\"font-size: 12pt;\">- Sau khi kh&aacute;ch h&agrave;ng thực hiện thanh to&aacute;n 100% cước vận chuyển, HNCmua sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</span></p>\n<p><span style=\"font-size: 12pt;\">2. Đối với dịch vụ mua hộ (Order)</span></p>\n<p><span style=\"font-size: 12pt;\">- Kh&aacute;ch h&agrave;ng thanh to&aacute;n 100% tổng gi&aacute; trị sau khi chốt đơn h&agrave;ng.</span><br /><span style=\"font-size: 12pt;\">- HNCmua tiến h&agrave;nh mua h&agrave;ng v&agrave; vận chuyển h&agrave;ng h&oacute;a về Việt Nam.</span><br /><span style=\"font-size: 12pt;\">- Sau khi kh&aacute;ch h&agrave;ng thanh to&aacute;n cước vận chuyển, HNCmua sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</span></p>\n<p><strong><span style=\"font-size: 12pt;\">II. H&Igrave;NH THỨC THANH TO&Aacute;N</span></strong></p>\n<p><span style=\"font-size: 12pt;\">1. Đối với dịch vụ vận chuyển (Ship)</span></p>\n<p><span style=\"font-size: 12pt;\">- Khi h&agrave;ng h&oacute;a được vận chuyển đến kho của HNCmua tại Việt Nam (H&agrave; Nội, TP.HCM), HNCmua sẽ th&ocirc;ng b&aacute;o cước vận chuyển m&agrave; kh&aacute;ch h&agrave;ng cần thanh to&aacute;n th&ocirc;ng qua SMS v&agrave; Email.</span><br /><span style=\"font-size: 12pt;\">- Sau khi kh&aacute;ch h&agrave;ng thực hiện thanh to&aacute;n 100% cước vận chuyển, HNCmua sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</span></p>\n<p><span style=\"font-size: 12pt;\">2. Đối với dịch vụ mua hộ (Order)</span></p>\n<p><span style=\"font-size: 12pt;\">- Kh&aacute;ch h&agrave;ng thanh to&aacute;n 100% tổng gi&aacute; trị sau khi chốt đơn h&agrave;ng.</span><br /><span style=\"font-size: 12pt;\">- HNCmua tiến h&agrave;nh mua h&agrave;ng v&agrave; vận chuyển h&agrave;ng h&oacute;a về Việt Nam.</span><br /><span style=\"font-size: 12pt;\">- Sau khi kh&aacute;ch h&agrave;ng thanh to&aacute;n cước vận chuyển, HNCmua sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</span></p>',
                'type' => 'policy',
                'blocks' => '{}',
                'status'    => 1,
                'thumbnail' => '',
            ],
            [
                'title' => 'Chính sách giao hàng',
                'slug' => 'chinh-sach-giao-hang',
                'description' => '',
                'content' => '<p><strong><span style=\"font-size: 12pt;\">I. QUY ĐỊNH THANH TO&Aacute;N</span></strong></p>\n<p><span style=\"font-size: 12pt;\">1. Đối với dịch vụ vận chuyển (Ship)</span></p>\n<p><span style=\"font-size: 12pt;\">- Khi h&agrave;ng h&oacute;a được vận chuyển đến kho của HNCmua tại Việt Nam (H&agrave; Nội, TP.HCM), HNCmua sẽ th&ocirc;ng b&aacute;o cước vận chuyển m&agrave; kh&aacute;ch h&agrave;ng cần thanh to&aacute;n th&ocirc;ng qua SMS v&agrave; Email.</span><br /><span style=\"font-size: 12pt;\">- Sau khi kh&aacute;ch h&agrave;ng thực hiện thanh to&aacute;n 100% cước vận chuyển, HNCmua sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</span></p>\n<p><span style=\"font-size: 12pt;\">2. Đối với dịch vụ mua hộ (Order)</span></p>\n<p><span style=\"font-size: 12pt;\">- Kh&aacute;ch h&agrave;ng thanh to&aacute;n 100% tổng gi&aacute; trị sau khi chốt đơn h&agrave;ng.</span><br /><span style=\"font-size: 12pt;\">- HNCmua tiến h&agrave;nh mua h&agrave;ng v&agrave; vận chuyển h&agrave;ng h&oacute;a về Việt Nam.</span><br /><span style=\"font-size: 12pt;\">- Sau khi kh&aacute;ch h&agrave;ng thanh to&aacute;n cước vận chuyển, HNCmua sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</span></p>\n<p><strong><span style=\"font-size: 12pt;\">II. H&Igrave;NH THỨC THANH TO&Aacute;N</span></strong></p>\n<p><span style=\"font-size: 12pt;\">1. Đối với dịch vụ vận chuyển (Ship)</span></p>\n<p><span style=\"font-size: 12pt;\">- Khi h&agrave;ng h&oacute;a được vận chuyển đến kho của HNCmua tại Việt Nam (H&agrave; Nội, TP.HCM), HNCmua sẽ th&ocirc;ng b&aacute;o cước vận chuyển m&agrave; kh&aacute;ch h&agrave;ng cần thanh to&aacute;n th&ocirc;ng qua SMS v&agrave; Email.</span><br /><span style=\"font-size: 12pt;\">- Sau khi kh&aacute;ch h&agrave;ng thực hiện thanh to&aacute;n 100% cước vận chuyển, HNCmua sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</span></p>\n<p><span style=\"font-size: 12pt;\">2. Đối với dịch vụ mua hộ (Order)</span></p>\n<p><span style=\"font-size: 12pt;\">- Kh&aacute;ch h&agrave;ng thanh to&aacute;n 100% tổng gi&aacute; trị sau khi chốt đơn h&agrave;ng.</span><br /><span style=\"font-size: 12pt;\">- HNCmua tiến h&agrave;nh mua h&agrave;ng v&agrave; vận chuyển h&agrave;ng h&oacute;a về Việt Nam.</span><br /><span style=\"font-size: 12pt;\">- Sau khi kh&aacute;ch h&agrave;ng thanh to&aacute;n cước vận chuyển, HNCmua sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</span></p>',
                'type' => 'policy',
                'blocks' => '{}',
                'status'    => 1,
                'thumbnail' => '',
            ],
            [
                'title' => 'Hướng dẫn mua hàng',
                'slug' => 'huong-dan-mua-hang',
                'description' => '',
                'content' => '<p><strong>I. M&atilde; giảm gi&aacute;</strong></p>\n<p>1. Đối với dịch vụ vận chuyển (Ship)</p>\n<p>- Khi h&agrave;ng h&oacute;a được vận chuyển đến kho của Thienthanh tại Việt Nam (H&agrave; Nội, TP.HCM), Thienthanh sẽ th&ocirc;ng b&aacute;o cước vận chuyển m&agrave; kh&aacute;ch h&agrave;ng cần thanh to&aacute;n th&ocirc;ng qua SMS v&agrave; Email.<br />- Sau khi kh&aacute;ch h&agrave;ng thực hiện thanh to&aacute;n 100% cước vận chuyển, Thienthanh sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</p>\n<p>2. Đối với dịch vụ mua hộ (Order)</p>\n<p>- Kh&aacute;ch h&agrave;ng thanh to&aacute;n 100% tổng gi&aacute; trị sau khi chốt đơn h&agrave;ng.<br />- Thienthanh tiến h&agrave;nh mua h&agrave;ng v&agrave; vận chuyển h&agrave;ng h&oacute;a về Việt Nam.<br />- Sau khi kh&aacute;ch h&agrave;ng thanh to&aacute;n cước vận chuyển, Thienthanh sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</p>\n<p><strong>I. M&atilde; giảm gi&aacute;</strong></p>\n<p>1. Đối với dịch vụ vận chuyển (Ship)</p>\n<p>- Khi h&agrave;ng h&oacute;a được vận chuyển đến kho của Thienthanh tại Việt Nam (H&agrave; Nội, TP.HCM), Thienthanh sẽ th&ocirc;ng b&aacute;o cước vận chuyển m&agrave; kh&aacute;ch h&agrave;ng cần thanh to&aacute;n th&ocirc;ng qua SMS v&agrave; Email.<br />- Sau khi kh&aacute;ch h&agrave;ng thực hiện thanh to&aacute;n 100% cước vận chuyển, Thienthanh sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</p>\n<p>2. Đối với dịch vụ mua hộ (Order)</p>\n<p>- Kh&aacute;ch h&agrave;ng thanh to&aacute;n 100% tổng gi&aacute; trị sau khi chốt đơn h&agrave;ng.<br />- Thienthanh tiến h&agrave;nh mua h&agrave;ng v&agrave; vận chuyển h&agrave;ng h&oacute;a về Việt Nam.<br />- Sau khi kh&aacute;ch h&agrave;ng thanh to&aacute;n cước vận chuyển, Thienthanh sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</p>',
                'type' => 'policy',
                'blocks' => '{}',
                'status'    => 1,
                'thumbnail' => '',
            ],
            [
                'title' => 'Giới thiệu',
                'slug' => 'gioi-thieu',
                'description' => '',
                'content' => '<p><strong>I. Về ch&uacute;ng t&ocirc;i</strong></p>\n<p>1. Đối với dịch vụ vận chuyển (Ship)</p>\n<p>- Khi h&agrave;ng h&oacute;a được vận chuyển đến kho của Thienthanh tại Việt Nam (H&agrave; Nội, TP.HCM), Thienthanh sẽ th&ocirc;ng b&aacute;o cước vận chuyển m&agrave; kh&aacute;ch h&agrave;ng cần thanh to&aacute;n th&ocirc;ng qua SMS v&agrave; Email.<br />- Sau khi kh&aacute;ch h&agrave;ng thực hiện thanh to&aacute;n 100% cước vận chuyển, Thienthanh sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</p>\n<p>2. Đối với dịch vụ mua hộ (Order)</p>\n<p>- Kh&aacute;ch h&agrave;ng thanh to&aacute;n 100% tổng gi&aacute; trị sau khi chốt đơn h&agrave;ng.<br />- Thienthanh tiến h&agrave;nh mua h&agrave;ng v&agrave; vận chuyển h&agrave;ng h&oacute;a về Việt Nam.<br />- Sau khi kh&aacute;ch h&agrave;ng thanh to&aacute;n cước vận chuyển, Thienthanh sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</p>\n<p><strong>II. Lịch sử ph&aacute;t triển</strong></p>\n<p>1. Đối với dịch vụ vận chuyển (Ship)</p>\n<p>- Khi h&agrave;ng h&oacute;a được vận chuyển đến kho của Thienthanh tại Việt Nam (H&agrave; Nội, TP.HCM), Thienthanh sẽ th&ocirc;ng b&aacute;o cước vận chuyển m&agrave; kh&aacute;ch h&agrave;ng cần thanh to&aacute;n th&ocirc;ng qua SMS v&agrave; Email.<br />- Sau khi kh&aacute;ch h&agrave;ng thực hiện thanh to&aacute;n 100% cước vận chuyển, Thienthanh sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</p>\n<p>2. Đối với dịch vụ mua hộ (Order)</p>\n<p>- Kh&aacute;ch h&agrave;ng thanh to&aacute;n 100% tổng gi&aacute; trị sau khi chốt đơn h&agrave;ng.<br />- Thienthanh tiến h&agrave;nh mua h&agrave;ng v&agrave; vận chuyển h&agrave;ng h&oacute;a về Việt Nam.<br />- Sau khi kh&aacute;ch h&agrave;ng thanh to&aacute;n cước vận chuyển, Thienthanh sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</p>',
                'type' => 'aboutus',
                'blocks' => '{}',
                'status'    => 1,
                'thumbnail' => '',
            ],
            [
                'title' => 'Khuyến mãi',
                'slug' => 'khuyen-mai',
                'description' => '',
                'content' => '<p><strong>I. Về ch&uacute;ng t&ocirc;i</strong></p>\n<p>1. Đối với dịch vụ vận chuyển (Ship)</p>\n<p>- Khi h&agrave;ng h&oacute;a được vận chuyển đến kho của Thienthanh tại Việt Nam (H&agrave; Nội, TP.HCM), Thienthanh sẽ th&ocirc;ng b&aacute;o cước vận chuyển m&agrave; kh&aacute;ch h&agrave;ng cần thanh to&aacute;n th&ocirc;ng qua SMS v&agrave; Email.<br />- Sau khi kh&aacute;ch h&agrave;ng thực hiện thanh to&aacute;n 100% cước vận chuyển, Thienthanh sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</p>\n<p>2. Đối với dịch vụ mua hộ (Order)</p>\n<p>- Kh&aacute;ch h&agrave;ng thanh to&aacute;n 100% tổng gi&aacute; trị sau khi chốt đơn h&agrave;ng.<br />- Thienthanh tiến h&agrave;nh mua h&agrave;ng v&agrave; vận chuyển h&agrave;ng h&oacute;a về Việt Nam.<br />- Sau khi kh&aacute;ch h&agrave;ng thanh to&aacute;n cước vận chuyển, Thienthanh sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</p>\n<p><strong>II. Lịch sử ph&aacute;t triển</strong></p>\n<p>1. Đối với dịch vụ vận chuyển (Ship)</p>\n<p>- Khi h&agrave;ng h&oacute;a được vận chuyển đến kho của Thienthanh tại Việt Nam (H&agrave; Nội, TP.HCM), Thienthanh sẽ th&ocirc;ng b&aacute;o cước vận chuyển m&agrave; kh&aacute;ch h&agrave;ng cần thanh to&aacute;n th&ocirc;ng qua SMS v&agrave; Email.<br />- Sau khi kh&aacute;ch h&agrave;ng thực hiện thanh to&aacute;n 100% cước vận chuyển, Thienthanh sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</p>\n<p>2. Đối với dịch vụ mua hộ (Order)</p>\n<p>- Kh&aacute;ch h&agrave;ng thanh to&aacute;n 100% tổng gi&aacute; trị sau khi chốt đơn h&agrave;ng.<br />- Thienthanh tiến h&agrave;nh mua h&agrave;ng v&agrave; vận chuyển h&agrave;ng h&oacute;a về Việt Nam.<br />- Sau khi kh&aacute;ch h&agrave;ng thanh to&aacute;n cước vận chuyển, Thienthanh sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</p>',
                'type' => 'aboutus',
                'blocks' => '{}',
                'status'    => 1,
                'thumbnail' => '',
            ],
            [
                'title' => 'Liên hệ',
                'slug' => 'lien-he',
                'description' => '',
                'content' => '<p><strong>I. Về ch&uacute;ng t&ocirc;i</strong></p>\n<p>1. Đối với dịch vụ vận chuyển (Ship)</p>\n<p>- Khi h&agrave;ng h&oacute;a được vận chuyển đến kho của Thienthanh tại Việt Nam (H&agrave; Nội, TP.HCM), Thienthanh sẽ th&ocirc;ng b&aacute;o cước vận chuyển m&agrave; kh&aacute;ch h&agrave;ng cần thanh to&aacute;n th&ocirc;ng qua SMS v&agrave; Email.<br />- Sau khi kh&aacute;ch h&agrave;ng thực hiện thanh to&aacute;n 100% cước vận chuyển, Thienthanh sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</p>\n<p>2. Đối với dịch vụ mua hộ (Order)</p>\n<p>- Kh&aacute;ch h&agrave;ng thanh to&aacute;n 100% tổng gi&aacute; trị sau khi chốt đơn h&agrave;ng.<br />- Thienthanh tiến h&agrave;nh mua h&agrave;ng v&agrave; vận chuyển h&agrave;ng h&oacute;a về Việt Nam.<br />- Sau khi kh&aacute;ch h&agrave;ng thanh to&aacute;n cước vận chuyển, Thienthanh sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</p>\n<p><strong>II. Lịch sử ph&aacute;t triển</strong></p>\n<p>1. Đối với dịch vụ vận chuyển (Ship)</p>\n<p>- Khi h&agrave;ng h&oacute;a được vận chuyển đến kho của Thienthanh tại Việt Nam (H&agrave; Nội, TP.HCM), Thienthanh sẽ th&ocirc;ng b&aacute;o cước vận chuyển m&agrave; kh&aacute;ch h&agrave;ng cần thanh to&aacute;n th&ocirc;ng qua SMS v&agrave; Email.<br />- Sau khi kh&aacute;ch h&agrave;ng thực hiện thanh to&aacute;n 100% cước vận chuyển, Thienthanh sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</p>\n<p>2. Đối với dịch vụ mua hộ (Order)</p>\n<p>- Kh&aacute;ch h&agrave;ng thanh to&aacute;n 100% tổng gi&aacute; trị sau khi chốt đơn h&agrave;ng.<br />- Thienthanh tiến h&agrave;nh mua h&agrave;ng v&agrave; vận chuyển h&agrave;ng h&oacute;a về Việt Nam.<br />- Sau khi kh&aacute;ch h&agrave;ng thanh to&aacute;n cước vận chuyển, Thienthanh sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</p>',
                'type' => 'aboutus',
                'blocks' => '{}',
                'status'    => 1,
                'thumbnail' => '',
            ],
            [
                'title' => 'Mã giảm giá',
                'slug' => 'ma-giam-gia',
                'description' => '',
                'content' => '<p><strong>I. M&atilde; giảm gi&aacute;</strong></p>\n<p>1. Đối với dịch vụ vận chuyển (Ship)</p>\n<p>- Khi h&agrave;ng h&oacute;a được vận chuyển đến kho của Thienthanh tại Việt Nam (H&agrave; Nội, TP.HCM), Thienthanh sẽ th&ocirc;ng b&aacute;o cước vận chuyển m&agrave; kh&aacute;ch h&agrave;ng cần thanh to&aacute;n th&ocirc;ng qua SMS v&agrave; Email.<br />- Sau khi kh&aacute;ch h&agrave;ng thực hiện thanh to&aacute;n 100% cước vận chuyển, Thienthanh sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</p>\n<p>2. Đối với dịch vụ mua hộ (Order)</p>\n<p>- Kh&aacute;ch h&agrave;ng thanh to&aacute;n 100% tổng gi&aacute; trị sau khi chốt đơn h&agrave;ng.<br />- Thienthanh tiến h&agrave;nh mua h&agrave;ng v&agrave; vận chuyển h&agrave;ng h&oacute;a về Việt Nam.<br />- Sau khi kh&aacute;ch h&agrave;ng thanh to&aacute;n cước vận chuyển, Thienthanh sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</p>\n<p><strong>II. M&atilde; giảm gi&aacute;</strong></p>\n<p>1. Đối với dịch vụ vận chuyển (Ship)</p>\n<p>- Khi h&agrave;ng h&oacute;a được vận chuyển đến kho của Thienthanh tại Việt Nam (H&agrave; Nội, TP.HCM), Thienthanh sẽ th&ocirc;ng b&aacute;o cước vận chuyển m&agrave; kh&aacute;ch h&agrave;ng cần thanh to&aacute;n th&ocirc;ng qua SMS v&agrave; Email.<br />- Sau khi kh&aacute;ch h&agrave;ng thực hiện thanh to&aacute;n 100% cước vận chuyển, Thienthanh sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</p>\n<p>2. Đối với dịch vụ mua hộ (Order)</p>\n<p>- Kh&aacute;ch h&agrave;ng thanh to&aacute;n 100% tổng gi&aacute; trị sau khi chốt đơn h&agrave;ng.<br />- Thienthanh tiến h&agrave;nh mua h&agrave;ng v&agrave; vận chuyển h&agrave;ng h&oacute;a về Việt Nam.<br />- Sau khi kh&aacute;ch h&agrave;ng thanh to&aacute;n cước vận chuyển, Thienthanh sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</p>',
                'type' => 'promotion',
                'blocks' => '{}',
                'status'    => 1,
                'thumbnail' => '',
            ],
            [
                'title' => 'Ưu đãi sinh viên',
                'slug' => 'uu-dai-sinh-vien',
                'description' => '',
                'content' => '<p><strong>I. M&atilde; giảm gi&aacute;</strong></p>\n<p>1. Đối với dịch vụ vận chuyển (Ship)</p>\n<p>- Khi h&agrave;ng h&oacute;a được vận chuyển đến kho của Thienthanh tại Việt Nam (H&agrave; Nội, TP.HCM), Thienthanh sẽ th&ocirc;ng b&aacute;o cước vận chuyển m&agrave; kh&aacute;ch h&agrave;ng cần thanh to&aacute;n th&ocirc;ng qua SMS v&agrave; Email.<br />- Sau khi kh&aacute;ch h&agrave;ng thực hiện thanh to&aacute;n 100% cước vận chuyển, Thienthanh sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</p>\n<p>2. Đối với dịch vụ mua hộ (Order)</p>\n<p>- Kh&aacute;ch h&agrave;ng thanh to&aacute;n 100% tổng gi&aacute; trị sau khi chốt đơn h&agrave;ng.<br />- Thienthanh tiến h&agrave;nh mua h&agrave;ng v&agrave; vận chuyển h&agrave;ng h&oacute;a về Việt Nam.<br />- Sau khi kh&aacute;ch h&agrave;ng thanh to&aacute;n cước vận chuyển, Thienthanh sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</p>\n<p><strong>II. M&atilde; giảm gi&aacute;</strong></p>\n<p>1. Đối với dịch vụ vận chuyển (Ship)</p>\n<p>- Khi h&agrave;ng h&oacute;a được vận chuyển đến kho của Thienthanh tại Việt Nam (H&agrave; Nội, TP.HCM), Thienthanh sẽ th&ocirc;ng b&aacute;o cước vận chuyển m&agrave; kh&aacute;ch h&agrave;ng cần thanh to&aacute;n th&ocirc;ng qua SMS v&agrave; Email.<br />- Sau khi kh&aacute;ch h&agrave;ng thực hiện thanh to&aacute;n 100% cước vận chuyển, Thienthanh sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</p>\n<p>2. Đối với dịch vụ mua hộ (Order)</p>\n<p>- Kh&aacute;ch h&agrave;ng thanh to&aacute;n 100% tổng gi&aacute; trị sau khi chốt đơn h&agrave;ng.<br />- Thienthanh tiến h&agrave;nh mua h&agrave;ng v&agrave; vận chuyển h&agrave;ng h&oacute;a về Việt Nam.<br />- Sau khi kh&aacute;ch h&agrave;ng thanh to&aacute;n cước vận chuyển, Thienthanh sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</p>',
                'type' => 'promotion',
                'blocks' => '{}',
                'status'    => 1,
                'thumbnail' => '',
            ],
            [
                'title' => 'Dịch vụ sửa chữa',
                'slug' => 'dich-vu-sua-chua',
                'description' => '',
                'content' => '<p><strong>I. M&atilde; giảm gi&aacute;</strong></p>\n<p>1. Đối với dịch vụ vận chuyển (Ship)</p>\n<p>- Khi h&agrave;ng h&oacute;a được vận chuyển đến kho của Thienthanh tại Việt Nam (H&agrave; Nội, TP.HCM), Thienthanh sẽ th&ocirc;ng b&aacute;o cước vận chuyển m&agrave; kh&aacute;ch h&agrave;ng cần thanh to&aacute;n th&ocirc;ng qua SMS v&agrave; Email.<br />- Sau khi kh&aacute;ch h&agrave;ng thực hiện thanh to&aacute;n 100% cước vận chuyển, Thienthanh sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</p>\n<p>2. Đối với dịch vụ mua hộ (Order)</p>\n<p>- Kh&aacute;ch h&agrave;ng thanh to&aacute;n 100% tổng gi&aacute; trị sau khi chốt đơn h&agrave;ng.<br />- Thienthanh tiến h&agrave;nh mua h&agrave;ng v&agrave; vận chuyển h&agrave;ng h&oacute;a về Việt Nam.<br />- Sau khi kh&aacute;ch h&agrave;ng thanh to&aacute;n cước vận chuyển, Thienthanh sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</p>\n<p><strong>II. M&atilde; giảm gi&aacute;</strong></p>\n<p>1. Đối với dịch vụ vận chuyển (Ship)</p>\n<p>- Khi h&agrave;ng h&oacute;a được vận chuyển đến kho của Thienthanh tại Việt Nam (H&agrave; Nội, TP.HCM), Thienthanh sẽ th&ocirc;ng b&aacute;o cước vận chuyển m&agrave; kh&aacute;ch h&agrave;ng cần thanh to&aacute;n th&ocirc;ng qua SMS v&agrave; Email.<br />- Sau khi kh&aacute;ch h&agrave;ng thực hiện thanh to&aacute;n 100% cước vận chuyển, Thienthanh sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</p>\n<p>2. Đối với dịch vụ mua hộ (Order)</p>\n<p>- Kh&aacute;ch h&agrave;ng thanh to&aacute;n 100% tổng gi&aacute; trị sau khi chốt đơn h&agrave;ng.<br />- Thienthanh tiến h&agrave;nh mua h&agrave;ng v&agrave; vận chuyển h&agrave;ng h&oacute;a về Việt Nam.<br />- Sau khi kh&aacute;ch h&agrave;ng thanh to&aacute;n cước vận chuyển, Thienthanh sẽ giao h&agrave;ng theo chỉ ti&ecirc;u thời gian cam kết.</p>',
                'type' => 'repairservice',
                'blocks' => '{}',
                'status'    => 1,
                'thumbnail' => '',
            ],
            [
                'title' => 'Hoàng Văn',
                'slug' => '',
                'description' => 'Khách hàng thân thiết',
                'content' => '<p>Phần m&aacute;y: M&aacute;y sử dụng tốt, đ&atilde; d&ugrave;ng 1 năm với tần suất cao nhưng chưa bị hỏng h&oacute;c g&igrave; nhiều. Chế độ bảo h&agrave;nh: Si&ecirc;u xuất sắc, tận t&igrave;nh tư vấn. D&ugrave; l&agrave; hết hay c&ograve;n trong thời gian bảo h&agrave;nh, mọi thứ vẫn đều thật y&ecirc;n t&acirc;m. Th&aacute;i độ: C&aacute;c bạn ở đ&acirc;y ai cũng dễ thương, hướng dẫn v&agrave; giải đ&aacute;p mọi thắc mắc với c&acirc;u từ gần gũi.</p> <p>THẬT SỰ RẤT ƯNG &Yacute; V&Agrave; MONG SHOP LU&Ocirc;N HỒNG PH&Aacute;T!</p>',
                'type' => 'customerfeedback',
                'blocks' => '{}',
                'status'    => 1,
                'thumbnail' => '/assets/images/avatar.jpg',
            ],
            [
                'title' => 'Vân Bùi Nguyễn',
                'slug' => '',
                'description' => 'Khách hàng thân thiết',
                'content' => '<p>Thienthanh dịch vụ tốt, tư vấn chăm s&oacute;c kh&aacute;ch h&agrave;ng cực kỳ nhiệt t&igrave;nh v&agrave; c&oacute; t&acirc;m, sản phẩm tốt kh&ocirc;ng phải b&agrave;n c&atilde;i.</p>\n<p>&nbsp;M&igrave;nh xin nhiệt liệt cảm ơn bạn C&ocirc;ng đẹp zai đ&atilde; lăn xả sửa m&aacute;y t&iacute;nh gi&uacute;p m&igrave;nh :)) ❤</p>',
                'type' => 'customerfeedback',
                'blocks' => '{}',
                'status'    => 1,
                'thumbnail' => '/assets/images/avatar.jpg',
            ],
            [
                'title' => 'Hoàng Văn',
                'slug' => '',
                'description' => 'Khách hàng thân thiết',
                'content' => '<p>Thienthanh dịch vụ tốt, tư vấn chăm s&oacute;c kh&aacute;ch h&agrave;ng cực kỳ nhiệt t&igrave;nh v&agrave; c&oacute; t&acirc;m, sản phẩm tốt kh&ocirc;ng phải b&agrave;n c&atilde;i.</p>\n<p>&nbsp;M&igrave;nh xin nhiệt liệt cảm ơn bạn C&ocirc;ng đẹp zai đ&atilde; lăn xả sửa m&aacute;y t&iacute;nh gi&uacute;p m&igrave;nh :)) ❤</p>',
                'type' => 'customerfeedback',
                'blocks' => '{}',
                'status'    => 1,
                'thumbnail' => '/assets/images/avatar.jpg',
            ],
        ]);
    }
}
