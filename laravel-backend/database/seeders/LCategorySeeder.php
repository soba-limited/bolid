<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LCategory;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class LCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('l_categorys')->delete();
        DB::unprepared("ALTER TABLE l_categorys AUTO_INCREMENT = 1 ");

        $parents = [
            [
                'name' => '大カテゴリー1',
                'slug' => 'big_category_1',
                'depth' => '0',
            ],
            [
                'name' => '大カテゴリー2',
                'slug' => 'big_category_2',
                'depth' => '0',
            ],
            [
                'name' => '大カテゴリー3',
                'slug' => 'big_category_3',
                'depth' => '0',
            ],
        ];

        $now = Carbon::now();
        foreach ($parents as $param) {
            $param['created_at'] = $now;
            $param['updated_at'] = $now;
            DB::table('l_categorys')->insert($param);
        }

        $children = [
            [
                'name' => '小カテゴリー1',
                'slug' => 'small_category_1',
                'depth' => '1',
                'parent_slug' => 'big_category_1'
            ],
            [
                'name' => '小カテゴリー2',
                'slug' => 'small_category_2',
                'depth' => '1',
                'parent_slug' => 'big_category_2'
            ],
            [
                'name' => '小カテゴリー3',
                'slug' => 'small_category_3',
                'depth' => '1',
                'parent_slug' => 'big_category_2'
            ],
        ];

        $now = Carbon::now();
        foreach ($children as $param) {
            $param['created_at'] = $now;
            $param['updated_at'] = $now;
            DB::table('l_categorys')->insert($param);
        }
    }
}