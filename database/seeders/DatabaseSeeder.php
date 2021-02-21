<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Comment\database\seeders\CommentsSeeder;
use Modules\Comment\database\seeders\UsersSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            CommentsSeeder::class,
            UsersSeeder::class
        ]);
    }
}
