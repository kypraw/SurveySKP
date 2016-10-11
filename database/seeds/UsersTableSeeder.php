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
            [
                'username' => 'arientawati',
                'email' => 'arientawati@kemenkeu.go.id',
                'password' => bcrypt('123456'),
                'isDone' => 0,
                'isAdmin' => 1
            ],
            [
                'username' => 'asriana.halifah',
                'email' => 'asriana.halifah@kemenkeu.go.id',
                'password' => bcrypt('123456'),
                'isDone' => 0,
                'isAdmin' => 1
            ],
            [
                'username' => 'aulia.fauziyah',
                'email' => 'aulia.fauziyah@kemenkeu.go.id',
                'password' => bcrypt('123456'),
                'isDone' => 0,
                'isAdmin' => 1
            ],
            [
                'username' => 'henny',
                'email' => 'henny@kemenkeu.go.id',
                'password' => bcrypt('123456'),
                'isDone' => 0,
                'isAdmin' => 1
            ],
            [
                'username' => 'komarudin03',
                'email' => 'komarudin03@kemenkeu.go.id',
                'password' => bcrypt('123456'),
                'isDone' => 0,
                'isAdmin' => 1
            ],
            [
                'username' => 'merlinda',
                'email' => 'merlinda@kemenkeu.go.id',
                'password' => bcrypt('123456'),
                'isDone' => 0,
                'isAdmin' => 1
            ],
            [
                'username' => 'piotun',
                'email' => 'piotun@kemenkeu.go.id',
                'password' => bcrypt('123456'),
                'isDone' => 0,
                'isAdmin' => 1
            ],
            [
                'username' => 'edyn',
                'email' => 'edyn@kemenkeu.go.id',
                'password' => bcrypt('123456'),
                'isDone' => 0,
                'isAdmin' => 1
            ],
        ]);
    }
}
