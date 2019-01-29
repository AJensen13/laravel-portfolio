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
      $chatroom = factory(App\ChatRoom::class, 3)
            ->create()
            ->each(function () {

            });
        //$this->call(UsersTableSeeder::class);
    }
}
