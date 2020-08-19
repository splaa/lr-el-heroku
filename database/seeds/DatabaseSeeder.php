<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'name' => 'splaa',
                'email' => 'splaandrey@gmail.com',
                'password' => bcrypt('splaa1977'),
            ]
        );

//         $this->call(UsersTableSeeder::class);
//        $this->call(PostTableSeeder::class);
        $this->call(
            [
//                UsersTableSeeder::class,
                PostTableSeeder::class,
            ]
        );
    }
}
