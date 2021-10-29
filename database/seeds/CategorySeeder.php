<?php

use App\Entities\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'name' => 'Tin chính trị',
                'slug' => 'tin-chinh-tri',
                'type' => 'posts',
            ],
            [
                'name' => 'Văn hóa - xã hội',
                'slug' => 'van-hoa-xa-hoi',
                'type' => 'posts',
            ],
            [
                'name' => 'Kinh tế',
                'slug' => 'kinh-te',
                'type' => 'posts',
            ],
            [
                'name' => 'Quốc phòng và an ninh',
                'slug' => 'quoc-phong-va-an-ninh',
                'type' => 'posts',
            ],
            [
                'name' => 'Pháp luật',
                'slug' => 'phap-luat',
                'type' => 'posts',
            ],
            [
                'name' => 'Sức khỏe',
                'slug' => 'suc-khoe',
                'type' => 'posts',
            ],
        ]);
        
        $tin_chinh_tri_cate_id = Category::where('slug', 'tin-chinh-tri')->first()->id;
        Category::insert([
            [
                'name' => 'Học tập và làm theo tấm gương đạo đức HCM',
                'slug' => 'hoc-tap-va-lam-theo-tam-guong-dao-duc-HCM',
                'type' => 'posts',
                'parent_id' => $tin_chinh_tri_cate_id,
            ],
            [
                'name' => 'Tin đảng bộ, chính quyền MTTQ và các đoàn thể nhân dân',
                'slug' => 'tin-dang-bo-chinh-quyen-mttq-va-cac-doan-the-nhan-dan',
                'type' => 'posts',
                'parent_id' => $tin_chinh_tri_cate_id,
            ],
            [
                'name' => 'Xây dựng nông thôn mới',
                'slug' => 'xay-dung-nong-thon-moi',
                'type' => 'posts',
                'parent_id' => $tin_chinh_tri_cate_id,
            ]
        ]);
        
        $van_hoa_cate_id = Category::where('slug', 'van-hoa-xa-hoi')->first()->id;
        Category::insert([
            [
                'name' => 'Văn hóa truyền thông',
                'slug' => 'van-hoa-truyen-thong',
                'type' => 'posts',
                'parent_id' => $van_hoa_cate_id,
            ],
            [
                'name' => 'Đặc sản vùng quê',
                'slug' => 'dac-san-vung-que',
                'type' => 'posts',
                'parent_id' => $van_hoa_cate_id,
            ],
            [
                'name' => 'Thông tin văn hóa xã hội',
                'slug' => 'thong-tin-van-hoa-xa-hoi',
                'type' => 'posts',
                'parent_id' => $van_hoa_cate_id,
            ],
        ]);
        
        $kinh_te_cate_id = Category::where('slug', 'kinh-te')->first()->id;
        Category::insert([
            [
                'name' => 'Tiên năng thế mạng',
                'slug' => 'tiem-nang-the-mang',
                'type' => 'posts',
                'parent_id' => $kinh_te_cate_id,
            ],
            [
                'name' => 'Thu hút đầu tư',
                'slug' => 'thu-hut-dau-tu',
                'type' => 'posts',
                'parent_id' => $kinh_te_cate_id,
            ],
            [
                'name' => 'Các mô hình kinh tế tiêu biểu',
                'slug' => 'cac-mo-hinh-kinh-te-tieu-bieu',
                'type' => 'posts',
                'parent_id' => $kinh_te_cate_id,
            ],
            [
                'name' => 'Chính sách thu hút đầu tư',
                'slug' => 'chinh-sach-thu-hut-dau-tu',
                'type' => 'posts',
                'parent_id' => $kinh_te_cate_id,
            ],
            [
                'name' => 'Các mô hình kinh tế giỏi',
                'slug' => 'cac-mo-hinh-kinh-te-gioi',
                'type' => 'posts',
                'parent_id' => $kinh_te_cate_id,
            ],
        ]);
        
        $phap_luat_cate_id = Category::where('slug', 'phap-luat')->first()->id;
        Category::insert([
            [
                'name' => 'Phổ biến pháp luật',
                'slug' => 'pho-bien-phap-luat',
                'type' => 'posts',
                'parent_id' => $phap_luat_cate_id,
            ],
            [
                'name' => 'Thông tin chính sách mới',
                'slug' => 'thong-tin-chinh-sach-moi',
                'type' => 'posts',
                'parent_id' => $phap_luat_cate_id,
            ],
            [
                'name' => 'Chuyên mục an toàn giao thông',
                'slug' => 'chuyen-muc-an-toan-giao-thong',
                'type' => 'posts',
                'parent_id' => $phap_luat_cate_id,
            ],
            [
                'name' => 'Pháp luật và đời sống',
                'slug' => 'phap-luat-va-doi-song',
                'type' => 'posts',
                'parent_id' => $phap_luat_cate_id,
            ],
        ]);
    }
}
