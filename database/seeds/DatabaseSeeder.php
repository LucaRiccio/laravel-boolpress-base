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
        $this->call([
          Users_Table_Seeder::class,
          Avatars_Table_Seeder::class,
          PostsTableSeeder::class
        ]);
    }
}
