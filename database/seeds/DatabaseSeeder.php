<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 10)->create();
        factory(App\ChatRoom::class, 1)->create();
        factory(App\Board::class, 3)->create();
        factory(App\Comment::class,30)->create();
        //$this->call(UsersTableSeeder::class);
    }
}
