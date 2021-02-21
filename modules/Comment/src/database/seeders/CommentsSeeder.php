<?php

namespace Modules\Comment\database\seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('comments')->insertOrIgnore([
            'id' => '1',
            'user_id' => '1',
            'description' => 'test 1',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        \DB::table('comments')->insertOrIgnore([
            'id' => '2',
            'user_id' => '1',
            'description' => 'test 2',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
    }
}
