<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'username' => 'rizkyprawira',
                'email' => 'rizkyprawira@kemenkeu.go.id',
                'password' => bcrypt('123456'),
                'isDone' => 0,
                'isAdmin' => 1
            ],
        ]);
    }
}
