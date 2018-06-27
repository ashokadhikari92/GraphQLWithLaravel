<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('authors')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        factory(\App\Author::class, 100)->create();
    }
}
