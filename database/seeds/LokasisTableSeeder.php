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
                'lokasi' => 'Aceh'
            ],
            [
                'lokasi' => 'Bali'
            ],
            [
            
                'lokasi' => 'Banten'
            ],
            [
                'lokasi' => 'Bengkulu'
            ],
            [
                'lokasi' => 'Gorontalo'
            ],
            [
                'lokasi' => 'Jakarta'
            ],
            [
                'lokasi' => 'Jambi'
            ],
            [
                'lokasi' => 'Jawa Barat'
            ],
            [
                'lokasi' => 'Jawa Tengah'
            ],
            [
                'lokasi' => 'Jawa Timur'
            ],
            [
                'lokasi' => 'Kalimantan Barat'
            ],
            [
                'lokasi' => 'Kalimantan Selatan'
            ],
            [
                'lokasi' => 'Kalimantan Tengah'
            ],
            [
                'lokasi' => 'Kalimantan Timur'
            ],
            [
                'lokasi' => 'Kalimantan Utara'
            ],
            [
                'lokasi' => 'Kepulauan Bangka Belitung'
            ],
            [
                'lokasi' => 'Kepulauan Riau'
            ],
            [
                'lokasi' => 'Lampung'
            ],
            [
                'lokasi' => 'Maluku'
            ],
            [
                'lokasi' => 'Maluku Utara'
            ],
            [
                'lokasi' => 'Nusa Tenggara Barat'
            ],
            [
                'lokasi' => 'Nusa Tenggara Timur'
            ],
            [
                'lokasi' => 'Papua'
            ],
            [
                'lokasi' => 'Papua Barat'
            ],
            [
                'lokasi' => 'Riau'
            ],
            [
                'lokasi' => 'Sulawesi Barat'
            ],
            [
                'lokasi' => 'Sulawesi Selatan'
            ],
            [
                'lokasi' => 'Sulawesi Tengah'
            ],

            [
                'lokasi' => 'Sulawesi Tenggara'
            ],
            [
                'lokasi' => 'Sulawesi Utara'
            ],
            [
                'lokasi' => 'Sumatera Barat'
            ],
            [
                'lokasi' => 'Sumatera Selatan'
            ],
            [
                'lokasi' => 'Sumatera Utara'
            ],
            [
                'lokasi' => 'Yogyakarta'
            ],
        ]);
    }
}
