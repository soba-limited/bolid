<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LPickupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $picks = [
            [
                'l_post_id' => '1',
            ],
            [
                'l_post_id' => '2',
            ],
            [
                'l_post_id' => '3',
            ],
            [
                'l_post_id' => '4',
            ],
            [
                'l_post_id' => '5',
            ],
        ];

        $now = Carbon::now();
        foreach ($picks as $pick) {
            $pick['created_at'] = $now;
            $pick['updated_at'] = $now;
            DB::table('l_pickups')->insert($pick);
        }
    }
}