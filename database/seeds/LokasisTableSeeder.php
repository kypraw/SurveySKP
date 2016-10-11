<?php

use Illuminate\Database\Seeder;

class LokasisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lokasis')->insert([
            [
                'lokasi' => 'DKI Jakarta'
            ],
            [
                'lokasi' => 'Jawa Tengah'
            ],
            [
            
                'lokasi' => 'Sumatera Utara'
            ],
            [
                'lokasi' => 'Bali'
            ],
            [
                'lokasi' => 'Jawa Timur'
            ]
        ]);
    }
}
