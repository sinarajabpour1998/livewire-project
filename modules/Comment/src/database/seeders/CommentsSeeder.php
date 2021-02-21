<?php

namespace Modules\Comment\database\seeders;

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
        ]);
        \DB::table('comments')->insertOrIgnore([
            'id' => '2',
            'user_id' => '1',
            'description' => 'test 2',
        ]);
    }
}
