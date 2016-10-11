<?php

use Illuminate\Database\Seeder;

class JabatansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jabatans')->insert([
            [
                'jabatan' => 'Eselon I'
            ],
            [
                'jabatan' => 'Eselon II'
            ],
            [
                'jabatan' => 'Eselon III'
            ],
            [
                'jabatan' => 'Eselon IV'
            ],
            [
                'jabatan' => 'Fungsional'
            ],
            [
                'jabatan' => 'Pelaksana'
            ],
        ]);
    }
}
