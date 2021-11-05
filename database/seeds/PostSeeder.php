<?php

use App\Entities\Post;
use Illuminate\Database\Seeder;
use VCComponent\Laravel\Post\Entities\PostSchema;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->insertAudio();
        $this->insertPages();
        $this->insertDocuments();
    }

    /**
     * Insert posts schema of posts.
     * Insert posts.
     * 
     * @return void
     */
    public function insertPosts() 
    {
        PostSchema::insert([
            ['name' => 'seo_title', 'Label' => 'Tiêu đề SEO', 'schema_type_id' => 1, 'schema_rule_id' => 3, 'post_type' => 'posts'],
            ['name' => 'seo_desc', 'Label' => 'Mô tả SEO', 'schema_type_id' => 1, 'schema_rule_id' => 3, 'post_type' => 'posts'],
        ]);
        factory(Post::class, 50)->create();
    }

    /**
     * Insert posts schema of posts. Insert page data.
     *
     * @return void
     */
    public function insertPages()
    {
        PostSchema::insert([
            ['name' => 'seo_title', 'Label' => 'Tiêu đề SEO', 'schema_type_id' => 1, 'schema_rule_id' => 3, 'post_type' => 'pages'],
            ['name' => 'seo_desc', 'Label' => 'Mô tả SEO', 'schema_type_id' => 1, 'schema_rule_id' => 3, 'post_type' => 'pages'],
        ]);
        factory(Post::class, 1)->state('pages')->create();
    }

    /**
     * Insert documents post data, and metas.
     *
     * @return void
     */
    public function insertDocuments()
    {
        PostSchema::insert([
            ['name' => 'seo_title', 'Label' => 'Tiêu đề SEO', 'schema_type_id' => 1, 'schema_rule_id' => 3, 'post_type' => 'documents'],
            ['name' => 'seo_desc', 'Label' => 'Mô tả SEO', 'schema_type_id' => 1, 'schema_rule_id' => 3, 'post_type' => 'documents'],
            ['name' => 'agency_issued', 'label' => 'Cơ quan ban hành', 'schema_type_id' => 1, 'schema_rule_id' => 3, 'post_type' => 'documents'],
            ['name' => 'release_date', 'label' => 'Ngày ban hành', 'schema_type_id' => 1, 'schema_rule_id' => 3, 'post_type' => 'documents'],
            ['name' => 'effective_date', 'label' => 'Ngày hiệu lực', 'schema_type_id' => 1, 'schema_rule_id' => 3, 'post_type' => 'documents'],
            ['name' => 'document_file_1', 'label' => 'File văn bản đính kèm', 'schema_type_id' => 1, 'schema_rule_id' => 3, 'post_type' => 'documents'],
            ['name' => 'document_file_2', 'label' => 'File văn bản đính kèm', 'schema_type_id' => 1, 'schema_rule_id' => 3, 'post_type' => 'documents'],
            ['name' => 'document_file_3', 'label' => 'File văn bản đính kèm', 'schema_type_id' => 1, 'schema_rule_id' => 3, 'post_type' => 'documents'],
        ]);
        factory(Post::class, 50)->state('documents')->create()->each(function ($posts) {
            $posts->postMetas()->createMany([
                [
                    'key'   => 'agency_issued',
                    'value' => 'UBND huyện Sơn Động',
                ],
                [
                    'key'   => 'release_date',
                    'value' => '12/10/2019',
                ],
                [
                    'key'   => 'release_date',
                    'value' => '12/10/2019',
                ],
                [
                    'key'   => 'document_file_1',
                    'value' => '1634524798292_15.10 Kế hoạch Cuộc thi sáng tạo TTNNĐ(sonm)(17.10.2021_11h10p22).pdf',
                ],
                [
                    'key'   => 'document_file_2',
                    'value' => '1634184878503_QUY CHẾ HĐTĐKT huyện năm 2021 Lưu NV _signed_signed_signed_signed.pdf',
                ],
            ]);
        });
    }
    
    public function insertAudio(){
        Post::insert([
            ['title' => 'Chương trình phát thanh 06/10/2021','slug' => "chuong-trinh-phat-thanh-ngay-6-10-2021" ,'description' => '(SĐĐT) - Ngày 3/11, Chủ tịch UBND huyện Hoàng Văn Trọng chủ trì hội nghị giao ban với Chủ tịch UBND các xã, thị trấn, thủ trưởng các cơ quan, đơn vị về kết quả thực hiện nhiệm vụ phát triển kinh tế, xã hội, phòng chống dịch Covd-19. Cùng dự có các đồng chí Lê Đức Thắng, Phó Chủ tịch thường trực UBND huyện, Tống Thị Hương Giang, Phó Chủ tịch UBND huyện.', 'content' => 'Hiện đã thi công 25 công trình, giải phóng mặt bằng 9 công trình, đang phê duyệt khởi công 12 công trình. Công tác giải phóng mặt bằng các dự án trọng điểm tiếp tục được đẩy nhanh tiến độ. Trong tháng đã giải quyết 31 đơn thư, khiếu nại; 17/17 xã, thị trấn thực hiện giải quyết thủ tục hành chính công trực tuyến mức độ 3, mức độ 4.
        
            Đối với công tác phòng chống dịch bệnh Covid -19, từ ngày 10/7 đến 31/10 đã kiểm soát 4.139 trường hợp đến, về địa phương, thực hiện xét nghiệm PCR 43.988 mẫu, đã tiêm 35.025 liều vắc xin cho 25.473 người, huyện có 1 khu cách ly tập trung đang cách ly 14 người, 4 công dân đang điều trị tại khu cách ly của Trung tâm Y tế huyện, 161 người đang thực hiện cách ly tại nhà, 287 người theo dõi sức khỏe tại nhà.', 'type' => 'audios', 'thumbnail' => '/audio/sondong.mp3'],
            ['title' => 'Chương trình phát thanh 06/10/2021','slug' => "chuong-trinh-phat-thanh-ngay-6-10-2021" ,'description' => '(SĐĐT) - Ngày 3/11, Chủ tịch UBND huyện Hoàng Văn Trọng chủ trì hội nghị giao ban với Chủ tịch UBND các xã, thị trấn, thủ trưởng các cơ quan, đơn vị về kết quả thực hiện nhiệm vụ phát triển kinh tế, xã hội, phòng chống dịch Covd-19. Cùng dự có các đồng chí Lê Đức Thắng, Phó Chủ tịch thường trực UBND huyện, Tống Thị Hương Giang, Phó Chủ tịch UBND huyện.', 'content' => 'Hiện đã thi công 25 công trình, giải phóng mặt bằng 9 công trình, đang phê duyệt khởi công 12 công trình. Công tác giải phóng mặt bằng các dự án trọng điểm tiếp tục được đẩy nhanh tiến độ. Trong tháng đã giải quyết 31 đơn thư, khiếu nại; 17/17 xã, thị trấn thực hiện giải quyết thủ tục hành chính công trực tuyến mức độ 3, mức độ 4.
        
            Đối với công tác phòng chống dịch bệnh Covid -19, từ ngày 10/7 đến 31/10 đã kiểm soát 4.139 trường hợp đến, về địa phương, thực hiện xét nghiệm PCR 43.988 mẫu, đã tiêm 35.025 liều vắc xin cho 25.473 người, huyện có 1 khu cách ly tập trung đang cách ly 14 người, 4 công dân đang điều trị tại khu cách ly của Trung tâm Y tế huyện, 161 người đang thực hiện cách ly tại nhà, 287 người theo dõi sức khỏe tại nhà.', 'type' => 'audios', 'thumbnail' => '/audio/sondong.mp3'],
            ['title' => 'Chương trình phát thanh 06/10/2021','slug' => "chuong-trinh-phat-thanh-ngay-6-10-2021" ,'description' => '(SĐĐT) - Ngày 3/11, Chủ tịch UBND huyện Hoàng Văn Trọng chủ trì hội nghị giao ban với Chủ tịch UBND các xã, thị trấn, thủ trưởng các cơ quan, đơn vị về kết quả thực hiện nhiệm vụ phát triển kinh tế, xã hội, phòng chống dịch Covd-19. Cùng dự có các đồng chí Lê Đức Thắng, Phó Chủ tịch thường trực UBND huyện, Tống Thị Hương Giang, Phó Chủ tịch UBND huyện.', 'content' => 'Hiện đã thi công 25 công trình, giải phóng mặt bằng 9 công trình, đang phê duyệt khởi công 12 công trình. Công tác giải phóng mặt bằng các dự án trọng điểm tiếp tục được đẩy nhanh tiến độ. Trong tháng đã giải quyết 31 đơn thư, khiếu nại; 17/17 xã, thị trấn thực hiện giải quyết thủ tục hành chính công trực tuyến mức độ 3, mức độ 4.
        
            Đối với công tác phòng chống dịch bệnh Covid -19, từ ngày 10/7 đến 31/10 đã kiểm soát 4.139 trường hợp đến, về địa phương, thực hiện xét nghiệm PCR 43.988 mẫu, đã tiêm 35.025 liều vắc xin cho 25.473 người, huyện có 1 khu cách ly tập trung đang cách ly 14 người, 4 công dân đang điều trị tại khu cách ly của Trung tâm Y tế huyện, 161 người đang thực hiện cách ly tại nhà, 287 người theo dõi sức khỏe tại nhà.', 'type' => 'audios', 'thumbnail' => '/audio/sondong.mp3'],
            ['title' => 'Chương trình phát thanh 06/10/2021','slug' => "chuong-trinh-phat-thanh-ngay-6-10-2021" ,'description' => '(SĐĐT) - Ngày 3/11, Chủ tịch UBND huyện Hoàng Văn Trọng chủ trì hội nghị giao ban với Chủ tịch UBND các xã, thị trấn, thủ trưởng các cơ quan, đơn vị về kết quả thực hiện nhiệm vụ phát triển kinh tế, xã hội, phòng chống dịch Covd-19. Cùng dự có các đồng chí Lê Đức Thắng, Phó Chủ tịch thường trực UBND huyện, Tống Thị Hương Giang, Phó Chủ tịch UBND huyện.', 'content' => 'Hiện đã thi công 25 công trình, giải phóng mặt bằng 9 công trình, đang phê duyệt khởi công 12 công trình. Công tác giải phóng mặt bằng các dự án trọng điểm tiếp tục được đẩy nhanh tiến độ. Trong tháng đã giải quyết 31 đơn thư, khiếu nại; 17/17 xã, thị trấn thực hiện giải quyết thủ tục hành chính công trực tuyến mức độ 3, mức độ 4.
        
            Đối với công tác phòng chống dịch bệnh Covid -19, từ ngày 10/7 đến 31/10 đã kiểm soát 4.139 trường hợp đến, về địa phương, thực hiện xét nghiệm PCR 43.988 mẫu, đã tiêm 35.025 liều vắc xin cho 25.473 người, huyện có 1 khu cách ly tập trung đang cách ly 14 người, 4 công dân đang điều trị tại khu cách ly của Trung tâm Y tế huyện, 161 người đang thực hiện cách ly tại nhà, 287 người theo dõi sức khỏe tại nhà.', 'type' => 'audios', 'thumbnail' => '/audio/sondong.mp3'],
        ]);
    }
}
