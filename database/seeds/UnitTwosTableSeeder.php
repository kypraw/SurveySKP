<?php

use Illuminate\Database\Seeder;

class UnitTwosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unit_twos')->insert([
            [
                'unit_id' => 2,
                'eselon_dua' => 'Biro Perencanaan dan Keuangan'
            ],
            [
                'unit_id' => 2,
                'eselon_dua' => 'Biro Organisasi dan Ketatalaksanaan'
            ],
            [
                'unit_id' => 2,
                'eselon_dua' => 'Biro Hukum'
            ],
            [
                'unit_id' => 2,
                'eselon_dua' => 'Biro Bantuan Hukum'
            ],
            [
                'unit_id' => 2,
                'eselon_dua' => 'Biro Sumber Daya Manusia'
            ],
            [
                'unit_id' => 2,
                'eselon_dua' => 'Biro Komunikasi dan Layanan Informasi'
            ],
            [
                'unit_id' => 2,
                'eselon_dua' => 'Biro Perlengkapan'
            ],
            [
                'unit_id' => 2,
                'eselon_dua' => 'Biro Umum'
            ],
            [
                'unit_id' => 2,
                'eselon_dua' => 'Pusat Sistem Informasi dan Teknologi Keuangan'
            ],
            [
                'unit_id' => 2,
                'eselon_dua' => 'Pusat Pembinaan Profesi Keuangan'
            ],
            [
                'unit_id' => 2,
                'eselon_dua' => 'Pusat Analisis dan Harmonisasi Kebijakan'
            ],
            [
                'unit_id' => 2,
                'eselon_dua' => 'Pusat Layanan Pengadaan Secara Elektronik'
            ],
            [
                'unit_id' => 2,
                'eselon_dua' => 'Sekretariat Pengadilan Pajak'
            ],
            [
                'unit_id' => 2,
                'eselon_dua' => 'Sekretariat Komite Pengawas Perpajakan'
            ],
            [
                'unit_id' => 2,
                'eselon_dua' => 'Lembaga Pengelola Dana Pendidikan'
            ],
        ]);
    }
}
