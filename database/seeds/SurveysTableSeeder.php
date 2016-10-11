<?php

use Illuminate\Database\Seeder;

class SurveysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('surveys')->insert([
            [
                'title'     => 'Layanan Hosting Aplikasi dan/atau Data',
                'deskripsi' => 'Layanan penempatan aplikasi dan/atau data operasional dengan menggunakan infrastruktur TIK yang dimiliki Pusintek',
            ],
            [
                'title'     => 'Layanan Cloud Server',
                'deskripsi' => 'Layanan penyediaan infrastruktur server berupa Virtual Machine baik Production maupun Development dalam sistem Cloud Kemenkeu'
            ],
            [
                'title'     => 'Layanan Co-location',
                'deskripsi' => 'Layanan yang disediakan untuk penitipan server yang digunakan untuk proses pengembangan/development (dengan/atau tanpa rak) dalam pusat data'
            ],
            [
                'title'     => 'Layanan Disaster Recovery Center',
                'deskripsi' => 'Layanan replikasi sistem, co-location dan akses fisik pada DRC Kemenkeu'
            ],
            [
                'title'     => 'Layanan Pertukaran Data Elektronik',
                'deskripsi' => 'Layanan yang mendukung proses pertukaran data elektronik antar unit kerja di lingkungan Kementerian Keuangan'
            ],
            [
                'title'     => 'Layanan Pengembangan Interkoneksi Infrastruktur',
                'deskripsi' => 'Penyediaan koneksi antara Pusintek dengan Kantor Pusat Pelanggan dan/atau unit vertikal di daerah'
            ],
            [
                'title'     => 'Layanan Pengembangan Infrastruktur LAN Unit Pengguna',
                'deskripsi' => 'Layanan pengembangan jaringan LAN'
            ],
            [
                'title'     => 'Layanan Pengembangan dan Pembangunan Sistem TIK',
                'deskripsi' => 'Layanan yang disediakan untuk pembangunan dan pengembangan Sistem TIK'
            ],
            [
                'title'     => 'Layanan Uji Kelayakan Sistem Aplikasi',
                'deskripsi' => 'Layanan yang disediakan untuk menguji tingkat kerentanan dan ketahan dari suatu aplikasi yang akan dihosting di Pusintek meliputi uji kerentanan dan stress test'
            ],
            [
                'title'     => 'Layanan Koneksi Internet',
                'deskripsi' => 'Layanan untuk memberikan akses koneksi internet kepada pengguna dengan menggunakan fasilitas TIK Pusintek untuk kepentingan kedinasan'
            ],
            [
                'title'     => 'Layanan Surat Elektronik(E-mail)',
                'deskripsi' => 'Layanan untuk memberikan fasilitas alamat surat kepada pengguna dengan menggunakan fasilitas TIK Pusintek untuk kepentingan kedinasan'
            ],
            [
                'title'     => 'Layanan Akun Aplikasi dan Sharing Folder',
                'deskripsi' => 'Layanan untuk memberikan akses ke aplikasi yang dikelola Pusintek dan sharing folder kepada pengguna'
            ],
            [
                'title'     => 'Layanan Instalasi Desktop/Notebook',
                'deskripsi' => 'Layanan konfigurasi dan instalasi desktop/notebook'
            ],
            [
                'title'     => 'Layanan Penggunaan Perangkat Lunak Berlisensi',
                'deskripsi' => 'Layanan penggunaan perangkat lunak milik Kementerian Keuangan yang dikelola oleh Pusintek'
            ],
            [
                'title'     => 'Layanan Narasumber Bidang TIK',
                'deskripsi' => 'Layanan jasa tenaga teknis sebagai narasumber bidang TIK'
            ],
            [
                'title'     => 'Layanan Peningkatan Kompetensi TIK',
                'deskripsi' => 'Layanan pelatihan dalam rangka meningkatkan kompetensi di bidang TIK'
            ],
            [
                'title'     => 'Layanan Dukungan Kegiatan Khusus',
                'deskripsi' => 'Layanan untuk mendukung kegiatan khusus kedinasan yang memerlukan fasilitas TIK'
            ],
            [
                'title'     => 'Layanan Video Conference',
                'deskripsi' => 'Layanan komunikasi jarak jauh untuk mendukung fungsi koordinasi di lingkungan Kementerian Keuangan baik internal maupun dengan Presiden, Wakil Presiden dan UKP4 menggunakan perangkat Video Conference'
            ],
            [
                'title'     => 'Layanan Dukungan Pimpinan',
                'deskripsi' => 'Layanan yang disediakan untuk mendukung kegiatan pimpinan di lingkungan Kementerian Keuangan terbatas pada Menteri, Wakil Menteri, Sekretaris Jenderal, Staf Ahli Menteri, Staf Khusus Menteri'
            ],
            [
                'title'     => 'Layanan Informasi Pusintek',
                'deskripsi' => 'Layanan dukungan informasi, mencakup layanan informasi Pusintek dan layanan informasi aplikasi/infrastruktur milik atau yang dikelola Pusintek(CMDB)'
            ]
        ]);
    }
}
