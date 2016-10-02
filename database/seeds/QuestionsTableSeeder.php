<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            [
                'survey_id'  => 1,
                'pertanyaan' => "Akses aplikasi dan/atau data melalui internet dan intranet sudah memadai"
            ],
            [
                'survey_id'  => 1,
                'pertanyaan' => "Keamanan infomasi seperti kerahasiaan, keutuhan, dan ketersediaan data sudah memadai"
            ],
            [
                'survey_id'  => 1,
                'pertanyaan' => "Kapasitas komponen layanan (CPU, memory, disk, dan platform) sesuai dengan kebutuhan"
            ],
            [
                'survey_id'  => 1,
                'pertanyaan' => "Ketersediaan sistem dan perangkat pendukung layanan hosting aplikasi dan/atau data telah sesuai dengan yang dijanjikan"
            ],
            [
                'survey_id'  => 1,
                'pertanyaan' => "Penanganan terhadap permasalahan yang terjadi dilakukan dengan tepat"
            ],
            [
                'survey_id'  => 2,
                'pertanyaan' => "Penyediaan fasilitas koneksi intranet  dan/atau internet, sudah sesuai kebutuhan Anda"
            ],
            [
                'survey_id'  => 2,
                'pertanyaan' => "Ketersediaan perangkat keamanan jaringan: Firewall, IPS, dan IDS telah memadai"
            ],
            [
                'survey_id'  => 2,
                'pertanyaan' => "Kapasitas perangkat  sesuai dengan yang sesuai dengan kebutuhan"
            ],
            [
                'survey_id'  => 2,
                'pertanyaan' => "Pemantauan ketersediaan (CPU, Memory dan Disk) dan kinerja perangkat sudah sesuai dengan kebutuhan"
            ],
            [
                'survey_id'  => 3,
                'pertanyaan' => "Penyediaan fasilitas koneksi intranet  dan/atau internet, sudah sesuai kebutuhan Anda"
            ],
            [
                'survey_id'  => 3,
                'pertanyaan' => "Ketersediaan perangkat keamanan jaringan: Firewall, IPS, dan IDS telah memadai"
            ],
            [
                'survey_id'  => 3,
                'pertanyaan' => "Kapasitas perangkat  sesuai dengan yang sesuai dengan kebutuhan"
            ],
            [
                'survey_id'  => 3,
                'pertanyaan' => "Pemantauan fisik, ketersediaan dan kinerja perangkat sudah sesuai dengan kebutuhan"
            ],
            [
                'survey_id'  => 4,
                'pertanyaan' => "Fasilitas koneksi  internet, intranet, dan ruang (rack space or data center space), kelistrikan, AC, dan UPS sudah sesuai kebutuhan Anda"
            ],
            [
                'survey_id'  => 4,
                'pertanyaan' => "Ketersediaan perangkat keamanan jaringan: Firewall, IPS, dan IDS telah memadai"
            ],
            [
                'survey_id'  => 4,
                'pertanyaan' => "Kemudahan dalam mengakses perangkat keras TIK yang dititipkan di pusat data  Kementerian Keuangan"
            ],
            [
                'survey_id'  => 4,
                'pertanyaan' => "Pengamanan, pemantauan fisik, dan koneksi perangkat di ruang Data Center telah memadai"
            ],
            [
                'survey_id'  => 5,
                'pertanyaan' => "Layanan pembuatan dan perubahan akun, permintaan data  dan perubahan kamus data dapat dilaksanakan dengan mudah dan cepat"
            ],
            [
                'survey_id'  => 5,
                'pertanyaan' => "Kesesuaian antara data elektronik yang dipertukarkan dengan kamus data yang berlaku'"
            ],
            [
                'survey_id'  => 5,
                'pertanyaan' => "Koordinasi pertukaran data berjalan efektif dan efisien"
            ],
            [
                'survey_id'  => 5,
                'pertanyaan' => "Penanganan terhadap permasalahan yang terjadi pada layanan pertukaran data elektronik dilakukan dengan tepat"
            ],
            [
                'survey_id'  => 5,
                'pertanyaan' => "Secara keseluruhan, layanan pertukaran data telah memberikan manfaat bagi Unit/Instansi Anda"
            ],
            [
                'survey_id'  => 6,
                'pertanyaan' => "Interkoneksi infrastruktur yang disediakan Pusintek sudah sesuai kebutuhan Anda"
            ],
            [
                'survey_id'  => 6,
                'pertanyaan' => "Keamanan interkoneksi infrastruktur yang digunakan telah memadai"
            ],
            [
                'survey_id'  => 6,
                'pertanyaan' => "Kapasitas interkoneksi yang disediakan telah memadai"
            ],
            [
                'survey_id'  => 6,
                'pertanyaan' => "Penanganan terhadap permasalahan yang terjadi pada layanan Pengembangan Interkoneksi Infrastruktur dilakukan dengan tepat"
            ],
            [
                'survey_id'  => 7,
                'pertanyaan' => "Pengembangan jaringan LAN sudah sesuai kebutuhan Anda"
            ],
            [
                'survey_id'  => 7,
                'pertanyaan' => "Kapasitas koneksi LAN yang diberikan telah memadai"
            ],
            [
                'survey_id'  => 7,
                'pertanyaan' => "Penanganan terhadap permasalahan yang terjadi pada layanan Pengembangan Infrastruktur LAN dilakukan dengan tepat"
            ],
            [
                'survey_id'  => 7,
                'pertanyaan' => "Ketersediaan tenaga pendamping dan konfigurasi perangkat LAN sudah sesuai kebutuhan Anda"
            ],
            [
                'survey_id'  => 7,
                'pertanyaan' => "Layanan Infrastruktur LAN memberikan kemudahan dalam melaksanakan pekerjaan Anda"
            ],
            [
                'survey_id'  => 8,
                'pertanyaan' => "Aplikasi dan basis data yang dibangun Pusintek sudah sesuai kebutuhan Anda"
            ],
            [
                'survey_id'  => 8,
                'pertanyaan' => "Tingkat kesesuaian antara user requirement dengan Sistem TIK yang dihasilkan sesuai kesepakatan"
            ],
            [
                'survey_id'  => 8,
                'pertanyaan' => "Kemudahan mengoperasikan Sistem TIK yang dibangun/dikembangkan Pusintek"
            ],
            [
                'survey_id'  => 8,
                'pertanyaan' => "Ketepatan waktu penyelesaian Pembangunan dan Pengembangan Sistem TIK sesuai kesepakatan"
            ],
            [
                'survey_id'  => 9,
                'pertanyaan' => "Uji kelayakan yang dilakukan sesuai kebutuhan Anda"
            ],
            [
                'survey_id'  => 9,
                'pertanyaan' => "Ketepatan waktu penyelesaian Uji Kelayakan Sistem Aplikasi sesuai dengan yang dijanjikan"
            ],
            [
                'survey_id'  => 9,
                'pertanyaan' => "Dokumen hasil Uji kelayakan dapat dipahami dengan jelas dan mudah"
            ],
            [
                'survey_id'  => 9,
                'pertanyaan' => "Uji Kelayakan Sistem Aplikasi bermanfaat dalam menyempurnakan Sistem Aplikasi yang dibangun/dikembangkan"
            ],
            [
                'survey_id'  => 10,
                'pertanyaan' => "Ketersediaan jaringan internet yang disediakan Pusintek telah sesuai dengan kebutuhan"
            ],
            [
                'survey_id'  => 10,
                'pertanyaan' => "Kemudahan dalam  permintaan pembuatan dan penghapusan akun, pembuatan dan pemberian hak akses public folder, reset kata sandi, hak akses situs, serta log out proxy sesuai harapan Anda"
            ],
            [
                'survey_id'  => 10,
                'pertanyaan' => "Kecepatan akses internet telah memadai"
            ],
            [
                'survey_id'  => 10,
                'pertanyaan' => "Penanganan gangguan sesuai dengan yang dijanjikan"
            ],
            [
                'survey_id'  => 11,
                'pertanyaan' => "Kemudahan dalam mendapatkan Layanan Akun Aplikasi dan sharing folder  sesuai harapan Anda"
            ],
            [
                'survey_id'  => 11,
                'pertanyaan' => "Pemberian hak akses terhadap sharing folder  sesuai dengan kebutuhan Anda"
            ],
            [
                'survey_id'  => 11,
                'pertanyaan' => "Ketersediaan Layanan Akun Aplikasi dan sharing folder  telah memadai"
            ],
            [
                'survey_id'  => 11,
                'pertanyaan' => "Keamanan terhadap sharing folder telah memadai"
            ],
            [
                'survey_id'  => 11,
                'pertanyaan' => "Kapasitas sharing folder yang diberikan telah memadai"
            ],
            [
                'survey_id'  => 12,
                'pertanyaan' => "Penyediaan petugas teknis untuk melakukan konfigurasi,  pendampingan konfigurasi dan/atau UAT memberikan kemudahan bagi Anda"
            ],
            [
                'survey_id'  => 12,
                'pertanyaan' => "Kesesuaian sistem operasi dan aplikasi yang diinstal di desktop/notebook  terhadap kebutuhan Anda"
            ],
            [
                'survey_id'  => 12,
                'pertanyaan' => "Instalasi dan konfigurasi desktop/notebook  dilakukan sesuai dengan waktu yang dijanjikan"
            ],
            [
                'survey_id'  => 13,
                'pertanyaan' => "Kemudahan mendapatkan Layanan Penggunaan Perangkat Lunak Berlisensi"
            ],
            [
                'survey_id'  => 13,
                'pertanyaan' => "Ketersediaan perangkat lunak berlisensi sesuai kebutuhan"
            ],
            [
                'survey_id'  => 13,
                'pertanyaan' => "Kemudahan peminjaman duplikat CD / DVD perangkat lunak berlisensi"
            ],
            [
                'survey_id'  => 14,
                'pertanyaan' => "Kemudahan mendapatkan layanan unduh"
            ],
            [
                'survey_id'  => 14,
                'pertanyaan' => "Pusintek memberikan layanan unduh dengan cepat dan tepat kepada Anda"
            ],
            [
                'survey_id'  => 14,
                'pertanyaan' => "Penyampaian berkas elektronik hasil unduhan telah sesuai harapanAnda"
            ],
            [
                'survey_id'  => 14,
                'pertanyaan' => "Kapasitas pengunduhan file mencukupi kebutuhan anda"
            ],
            [
                'survey_id'  => 15,
                'pertanyaan' => "Kompetensi narasumber yang ditugaskan sesuai dengan kebutuhan anda"
            ],
            [
                'survey_id'  => 15,
                'pertanyaan' => "Masukan narasumber terkait pembangunan, pengembangan, dan pengelolaan TIK yang optimal dapat membantu permasalahan Anda"
            ],
            [
                'survey_id'  => 15,
                'pertanyaan' => "Narasumber mempunyai kemampuan berinteraksi dan berkomunikasi yang memadai"
            ],
            [
                'survey_id'  => 15,
                'pertanyaan' => "Narasumber Pusintek hadir tepat waktu"
            ],
            [
                'survey_id'  => 16,
                'pertanyaan' => "Ketersediaan Ruang kelas dengan sarana pendukung kegiatan: layar, proyektor, whiteboard, microphone, catudaya, desktop dan koneksi intranet telah memadai"
            ],
            [
                'survey_id'  => 16,
                'pertanyaan' => "Kompetensi instruktur/fasilitator sesuai kebutuhan Anda"
            ],
            [
                'survey_id'  => 16,
                'pertanyaan' => "Instruktur/fasilitator mempunyai kemampuan berinteraksi dan berkomunikasiyang memadai dalam menyampaikan materi"
            ],
            [
                'survey_id'  => 16,
                'pertanyaan' => "Kesesuaian materi pelatihan terhadap kebutuhan Anda"
            ],
            [
                'survey_id'  => 16,
                'pertanyaan' => "Ketepatan waktu pelaksanaan layanan peningkatan kompetensi TIK"
            ],
            [
                'survey_id'  => 17,
                'pertanyaan' => "Ketersediaan Infrastruktur TIK untuk mendukung kegiatan khusus sesuai kebutuhan"
            ],
            [
                'survey_id'  => 17,
                'pertanyaan' => "Petugas Teknis instalasi/konfigurasi cepat tanggap dalam memberikan layanan di lokasi kegiatan"
            ],
            [
                'survey_id'  => 17,
                'pertanyaan' => "Petugas teknis instalasi/ konfigurasi merupakan tenaga teknis yang kompeten di bidangnya"
            ],
            [
                'survey_id'  => 18,
                'pertanyaan' => "Penanganan ganggguan TIK dilakukan secara cepat dan tepat"
            ],
            [
                'survey_id'  => 18,
                'pertanyaan' => "Adanya dukungan On Site secara berkala sesuai dengan permintaan pelanggan"
            ],
            [
                'survey_id'  => 18,
                'pertanyaan' => "Ketersediaan petugas Pusintek di lokasi dalam menangani gangguan yang dialami pimpinan"
            ],
            [
                'survey_id'  => 18,
                'pertanyaan' => "Petugas Pusintek merupakan orang-orang yang kompeten dalam menangani gangguan"
            ],
            [
                'survey_id'  => 19,
                'pertanyaan' => "Ketersediaan perangkat infrastruktur Video Conference sesuai kebutuhan"
            ],
            [
                'survey_id'  => 19,
                'pertanyaan' => "Petugas Teknis instalasi/konfigurasi cepat tanggap dalam memberikan layanan"
            ],
            [
                'survey_id'  => 19,
                'pertanyaan' => "Petugas teknis instalasi/ konfigurasi merupakan tenaga teknis yang kompeten di bidangnya"
            ],
            [
                'survey_id'  => 19,
                'pertanyaan' => "Ketersediaan koneksi jaringan sesuai kebutuhan"
            ],
            [
                'survey_id'  => 20,
                'pertanyaan' => "Kemudahan dalam mendapatkan Layanan informasi Pusintek"
            ],
            [
                'survey_id'  => 20,
                'pertanyaan' => "Informasi yang diberikan mudah dimengerti dan  update"
            ],
            [
                'survey_id'  => 20,
                'pertanyaan' => "Kelengkapan informasi yang diberikan Pusintek sesuai kebutuhan Anda"
            ],
        ]);
    }
}
