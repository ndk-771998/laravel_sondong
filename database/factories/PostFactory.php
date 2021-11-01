<?php

use App\Entities\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$domain = config('app.url');

$factory->define(Post::class, function (Faker $faker) use($domain) {
    return [
        'title'       => $faker->randomElement([
            'Đồng chí Chu Quang Khanh được bầu giữ chức Phó bí thư Huyện đoàn Sơn Động',
            'Thu nhập hơn 500 triệu đồng nhờ nuôi bò và trồng cây ăn quả',
            'Tặng máy tính bảng cho học sinh có hoàn cảnh khó khăn huyện Sơn Động',
            'Đưa “lộc rừng” về nhà',
            'Những giá trị tiêu biểu, nổi bật toàn cầu của hệ thống di tích và danh thắng Tây Yên Tử',
            'Mục tiêu chất lượng ISO 9001:2015 của UBND huyện Sơn Động năm 2021',
            'KH Triển khai công tác phòng cháy, chữa cháy rừng mùa khô 2021-2022',
            'Lục Nam tập trung thu gom, xử lý triệt để rác thải ra môi trường',
            'Lục Ngạn: Hỗ trợ nhân dân tiêu thụ cam, bưởi và các sản phẩm đặc trưng ',
            'Hội nghị trực tuyến tập huấn công tác nội chính và phòng, chống tham nhũng',
            'Sơn Động: Khởi công gói thầu số 8a thuộc dự án cải tạo, nâng cấp đường tỉnh 291',
            'Hội LHTN huyện Sơn Động tuyên dương 21 thanh niên tiêu biểu.',
            'Trao kỷ niệm chương và giấy khen cho 28 cá nhân, tập thể có thành tích thi đua nông dân SXKD',
            'Phụ nữ Sơn Động: Biến điểm tồn lưu rác thải thành đường hoa',
            'Sơn Động gặp mặt các doanh nghiệp nhân kỷ niệm ngày doanh nhân Việt Nam',
            'Phụ nữ Sơn Động: Biến điểm tồn lưu rác thải thành đường hoa',
            'Tặng máy tính bảng cho học sinh có hoàn cảnh khó khăn huyện Sơn Động',
            'Quyết định về việc công bố Bộ thủ tục hành chính thuộc phạm vi chức năng quản lý của Thanh tra',
            'Việt Yên huy động toàn dân tập trung thu gom, xử lý rác thải ra môi trường',
            'Hội nghị sơ kết mô hình "Cựu công an xã tham gia bảo đảm ANTT, phòng chống thiên tai, dịch bệnh"',
            'Trao kỷ niệm chương và giấy khen cho 28 cá nhân, tập thể có thành tích thi đua nông dân SXKD'
        ]),
        'description' => '(SĐĐT) - Chiều 7/10, Ban Chấp hành Huyện đoàn Sơn Động tổ chức Hội nghị lần thứ 12, khóa XXI, nhiệm kỳ 2017-2022 bầu kiện toàn chức danh Phó Bí thư Huyện Đoàn. Dự hội nghị có đồng chí Nguyễn Văn Hồng, Uỷ viên Ban Thường vụ, Trưởng Ban Tổ chức Huyện uỷ.',
        'content'     => '<p>Tại hội nghị, với sự tập trung thống nhất cao, Ban Chấp h&agrave;nh Huyện đo&agrave;n đ&atilde; bầu đồng ch&iacute; Chu Quang Khanh, Chuy&ecirc;n vi&ecirc;n Ph&ograve;ng Nội vụ huyện giữ chức vụ Ph&oacute; B&iacute; thư Huyện đo&agrave;n kh&oacute;a XXI, nhiệm kỳ 2017- 2022 với số phiếu t&iacute;n nhiệm đạt 100%.</p>\n<p>Ph&aacute;t biểu nhận nhiệm vụ, t&acirc;n Ph&oacute; B&iacute; thư Huyện đo&agrave;n Chu Quang Khanh đ&atilde; b&agrave;y tỏ niềm vinh dự v&agrave; cảm ơn sự tin tưởng của Ban Thường vụ Huyện ủy, Tỉnh đo&agrave;n, Ban Chấp h&agrave;nh Huyện đo&agrave;n. Tr&ecirc;n cương vị mới được giao, sẽ ph&aacute;t huy tinh thần tr&aacute;ch nhiệm, đo&agrave;n kết c&ugrave;ng Ban Chấp h&agrave;nh Huyện đo&agrave;n cụ thể ho&aacute; c&aacute;c chủ trương, Nghị quyết của Huyện uỷ, Tỉnh đo&agrave;n thực hiện thắng lợi c&ocirc;ng t&aacute;c Đo&agrave;n v&agrave; phong tr&agrave;o Thanh thiếu nhi tr&ecirc;n địa b&agrave;n huyện, x&acirc;y dựng tổ chức Đo&agrave;n ng&agrave;y c&agrave;ng vững mạnh.</p>\n<p><img title=\"Đồng ch&iacute; Nguyễn Văn Hồng, Uỷ vi&ecirc;n BTV, Trưởng Ban Tổ chức Huyện uỷ tặng hoa ch&uacute;c mừng đồng ch&iacute; Chu Quang Khanh.\" src=\"/assets/posts/post_1.jpg\" alt=\"Đồng ch&iacute; Nguyễn Văn Hồng, Uỷ vi&ecirc;n BTV, Trưởng Ban Tổ chức Huyện uỷ tặng hoa ch&uacute;c mừng đồng ch&iacute; Chu Quang Khanh.\" width=\"894\" height=\"537\" /></p>\n<p>Tại hội nghị, với sự tập trung thống nhất cao, Ban Chấp h&agrave;nh Huyện đo&agrave;n đ&atilde; bầu đồng ch&iacute; Chu Quang Khanh, Chuy&ecirc;n vi&ecirc;n Ph&ograve;ng Nội vụ huyện giữ chức vụ Ph&oacute; B&iacute; thư Huyện đo&agrave;n kh&oacute;a XXI, nhiệm kỳ 2017- 2022 với số phiếu t&iacute;n nhiệm đạt 100%.</p>\n<p>Ph&aacute;t biểu nhận nhiệm vụ, t&acirc;n Ph&oacute; B&iacute; thư Huyện đo&agrave;n Chu Quang Khanh đ&atilde; b&agrave;y tỏ niềm vinh dự v&agrave; cảm ơn sự tin tưởng của Ban Thường vụ Huyện ủy, Tỉnh đo&agrave;n, Ban Chấp h&agrave;nh Huyện đo&agrave;n. Tr&ecirc;n cương vị mới được giao, sẽ ph&aacute;t huy tinh thần tr&aacute;ch nhiệm, đo&agrave;n kết c&ugrave;ng Ban Chấp h&agrave;nh Huyện đo&agrave;n cụ thể ho&aacute; c&aacute;c chủ trương, Nghị quyết của Huyện uỷ, Tỉnh đo&agrave;n thực hiện thắng lợi c&ocirc;ng t&aacute;c Đo&agrave;n v&agrave; phong tr&agrave;o Thanh thiếu nhi tr&ecirc;n địa b&agrave;n huyện, x&acirc;y dựng tổ chức Đo&agrave;n ng&agrave;y c&agrave;ng vững mạnh.</p>\n<p><img src=\"/assets/posts/post_2.jpg\" alt=\"\" width=\"893\" height=\"536\" /></p>\n<p>Tại hội nghị, với sự tập trung thống nhất cao, Ban Chấp h&agrave;nh Huyện đo&agrave;n đ&atilde; bầu đồng ch&iacute; Chu Quang Khanh, Chuy&ecirc;n vi&ecirc;n Ph&ograve;ng Nội vụ huyện giữ chức vụ Ph&oacute; B&iacute; thư Huyện đo&agrave;n kh&oacute;a XXI, nhiệm kỳ 2017- 2022 với số phiếu t&iacute;n nhiệm đạt 100%.</p>\n<p>Ph&aacute;t biểu nhận nhiệm vụ, t&acirc;n Ph&oacute; B&iacute; thư Huyện đo&agrave;n Chu Quang Khanh đ&atilde; b&agrave;y tỏ niềm vinh dự v&agrave; cảm ơn sự tin tưởng của Ban Thường vụ Huyện ủy, Tỉnh đo&agrave;n, Ban Chấp h&agrave;nh Huyện đo&agrave;n. Tr&ecirc;n cương vị mới được giao, sẽ ph&aacute;t huy tinh thần tr&aacute;ch nhiệm, đo&agrave;n kết c&ugrave;ng Ban Chấp h&agrave;nh Huyện đo&agrave;n cụ thể ho&aacute; c&aacute;c chủ trương, Nghị quyết của Huyện uỷ, Tỉnh đo&agrave;n thực hiện thắng lợi c&ocirc;ng t&aacute;c Đo&agrave;n v&agrave; phong tr&agrave;o Thanh thiếu nhi tr&ecirc;n địa b&agrave;n huyện, x&acirc;y dựng tổ chức Đo&agrave;n ng&agrave;y c&agrave;ng vững mạnh.</p>',
        'status'      => 1,
        'thumbnail'         => $faker->randomElement([
            $domain . '/assets/posts/post_1.jpg',
            $domain . '/assets/posts/post_2.jpg',
            $domain . '/assets/posts/post_3.jpg',
            $domain . '/assets/posts/post_4.jpg',
            $domain . '/assets/posts/post_5.jpg',
            $domain . '/assets/posts/post_6.jpg',
            $domain . '/assets/posts/post_7.jpg',
            $domain . '/assets/posts/post_8.jpg',
            $domain . '/assets/posts/post_9.jpg',
            $domain . '/assets/posts/post_10.jpg',
            $domain . '/assets/posts/post_11.jpg',
            $domain . '/assets/posts/post_12.jpg',
            $domain . '/assets/posts/post_13.jpg',
            $domain . '/assets/posts/post_14.jpg',
            $domain . '/assets/posts/post_15.jpg',
        ]),
        'type' => 'posts',
    ];
});

$factory->state(Post::class, 'pages', function (Faker $faker) {
    return [
        'type' => 'pages',
    ];
});

$factory->state(Post::class, 'documents', function (Faker $faker) use ($domain) {
    return [
        'title' => $faker->randomElement([
            '2632/UBND-TH',
            '1389/QĐ-UBND',
        ]),
        'description' => 'QĐ v/v thành lập Ban chỉ đạo kiểm kê đất đai, lập bản đồ hiện trạng sử dụng đất năm 2019',
        'content' => '',
        'thumbnail'         => $faker->randomElement([
            $domain . '/assets/posts/lk1.png',
            $domain . '/assets/posts/lk2.png',
            $domain . '/assets/posts/lk3.png',
            $domain . '/assets/posts/lk4.png',
            $domain . '/assets/posts/lk5.png',
        ]),
        'type' => 'documents',
    ];
});
