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
                'longname' => 'Mohammad Rizky Prawira',
                'email' => 'rizkyprawira@kemenkeu.go.id',
                'password' => bcrypt('123456'),
                'isDone' => 0,
                'isAdmin' => 1
            ],
            [
                'username' => 'arientawati',
                'longname' => 'Arientawati',
                'email' => 'arientawati@kemenkeu.go.id',
                'password' => bcrypt('123456'),
                'isDone' => 0,
                'isAdmin' => 1
            ],
            [
                'username' => 'asriana.halifah',
                'longname' => 'Asriana Halifah',
                'email' => 'asriana.halifah@kemenkeu.go.id',
                'password' => bcrypt('123456'),
                'isDone' => 0,
                'isAdmin' => 1
            ],
            [
                'username' => 'aulia.fauziyah',
                'longname' => 'Aulia Fauziyah',
                'email' => 'aulia.fauziyah@kemenkeu.go.id',
                'password' => bcrypt('123456'),
                'isDone' => 0,
                'isAdmin' => 1
            ],
            [
                'username' => 'henny',
                'longname' => 'Henny',
                'email' => 'henny@kemenkeu.go.id',
                'password' => bcrypt('123456'),
                'isDone' => 0,
                'isAdmin' => 1
            ],
            [
                'username' => 'komarudin03',
                'longname' => 'Komarudin',
                'email' => 'komarudin03@kemenkeu.go.id',
                'password' => bcrypt('123456'),
                'isDone' => 0,
                'isAdmin' => 1
            ],
            [
                'username' => 'merlinda',
                'longname' => 'Merlinda Ratnaningtyas',
                'email' => 'merlinda@kemenkeu.go.id',
                'password' => bcrypt('123456'),
                'isDone' => 0,
                'isAdmin' => 1
            ],
            [
                'username' => 'piotun',
                'longname' => 'Piotun Y. Simanjuntak',
                'email' => 'piotun@kemenkeu.go.id',
                'password' => bcrypt('123456'),
                'isDone' => 0,
                'isAdmin' => 1
            ],
            [
                'username' => 'edyn',
                'longname' => 'Edy Nuryanto',
                'email' => 'edyn@kemenkeu.go.id',
                'password' => bcrypt('123456'),
                'isDone' => 0,
                'isAdmin' => 1
            ],
        ]);
    }
}
