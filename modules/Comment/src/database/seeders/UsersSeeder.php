<?php

namespace Modules\Comment\database\seeders;

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insertOrIgnore([
            'id' => '1',
            'name' => 'Sina',
            'email' => 'test.test@gmail.com',
            'email_verified_at' => '2020-12-04 09:17:46',
            'password' => '$2y$10$zMcl8GEne60mUehyJHbj..g4jVW9LD3wQfPFQ4YQIQdOABh4zfgH.'
        ]);
    }
}
