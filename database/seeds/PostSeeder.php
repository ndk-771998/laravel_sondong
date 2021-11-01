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
        $this->insertPosts();
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
}
