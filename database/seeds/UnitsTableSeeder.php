<?php

use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('units')->insert([
            [
                'unit' => 'ITJEN',
                'unitLong' => 'Inspektorat Jenderal'
            ],
            [
                'unit' => 'SETJEN',
                'unitLong' => 'Sekretariat Jenderal'
            ],
            [
                'unit' => 'DJA',
                'unitLong' => 'Direktorat Jenderal Anggaran'
            ],
            [
                'unit' => 'DJPK',
                'unitLong' => 'Direktorat Jenderal Perimbangan Keuangan'
            ],
            [
                'unit' => 'DJP',
                'unitLong' => 'Direktorat Jenderal Pajak'
            ],
            [
                'unit' => 'DJPPR',
                'unitLong' => 'Direktorat Jenderal Pengelolaan dan Pembiayaan Resiko'
            ],
            [
                'unit' => 'DJBC',
                'unitLong' => 'Direktorat Jenderal Bea dan Cukai'
            ],
            [
                'unit' => 'DJPBN',
                'unitLong' => 'Direktorat Jenderal Perbendaharaan'
            ],
            [
                'unit' => 'DJKN',
                'unitLong' => 'Direktorat Jenderal Kekayaan Negara'
            ],
            [
                'unit' => 'BKF',
                'unitLong' => 'Badan Kebijakan Fiskal'
            ],
            [
                'unit' => 'BPPK',
                'unitLong' => 'Badan Pendidikan dan Pelatihan Keuangan'
            ],
            [
                'unit' => '-',
                'unitLong' => '-'
            ],
        ]);
    }
}
