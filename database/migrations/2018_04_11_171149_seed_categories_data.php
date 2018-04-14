<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedCategoriesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $categories = [
            [
                'name' => 'Laravel',
                'description' => '开发技巧、推荐扩展包等',
            ],
            [
                'name' => 'Linux',
                'description' => '服务器相关知识',
            ],
            [
                'name' => '开发工具',
                'description' => '分享一些开发工具',
            ],
            [
                'name' => '心得体会',
                'description' => '记录从点滴开始',
            ],
        ];

        DB::table('categories')->insert($categories);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('categories')->truncate();
    }
}
