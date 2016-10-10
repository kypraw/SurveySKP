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
                'username' => 'skp.mltik',
                'password' => bcrypt('SKP2016#oke'),
                'isDone' => 1,
                'isAdmin' => 1
            ],
            [
                'username' => 'rizkyprawira',
                'password' => bcrypt('testing'),
                'isDone' => 0,
                'isAdmin' => 1
            ]
        ]);
    }
}
