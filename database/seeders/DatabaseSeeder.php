<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\News;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name'     => 'admin',
            'email'    => 'test@example.com',
            'password' => bcrypt('admin123'),
        ]);

        /* Kategori */
        Category::create([
            'nama' => 'Politik',
        ]);
        Category::create([
            'nama' => 'Ekonomi',
        ]);
        Category::create([
            'nama' => 'Olahraga',
        ]);
        Category::create([
            'nama' => 'Sosial',
        ]);
        Category::create([
            'nama' => 'Teknologi',
        ]);
        Category::create([
            'nama' => 'Budaya',
        ]);

        News::create([
            'id_category' => 1,
            'judul'       => 'Politik sepekan, Sahroni dicopot hingga Prabowo melayat ke rumah Affan',
            'konten'      => 'Jakarta (ANTARA) - Berbagai peristiwa politik dalam sepekan mulai dari 25 hingga 30 Agustus 2025, yang menjadi sorotan, di antaranya Anggota DPR RI Fraksi NasDem Ahmad Sahroni dicopot dari Pimpinan Komisi III DPR RI hingga Presiden Prabowo Subianto melayat ke rumah duka pengemudi ojek online yang meninggal saat ada aksi unjuk rasa, Affan Kurniawan.

Berikut rangkuman ANTARA untuk berita politik sepekan yang menarik untuk kembali dibaca:


Ahmad Sahroni diganti dari posisi Pimpinan Komisi III DPR

Anggota DPR RI dari Fraksi Partai NasDem Ahmad Sahroni diganti dari jabatan sebagai pimpinan atau Wakil Ketua Komisi III DPR RI dengan posisi menjadi Anggota Komisi I DPR RI, berdasarkan keputusan fraksi yang diterbitkan pada Jumat ini.


Keputusan itu diteken oleh Ketua Fraksi Partai NasDem DPR RI Viktor Laiskodat melalui Surat Fraksi Partai NasDem dengan nomor F.NasDem/768/DPR-RI/VIII/2025. Hal itu pun dikonfirmasi oleh Sekretaris Jenderal Partai NasDem Hermawi Taslim.

"Rotasi rutin, tidak ada pencopotan, hanya penyegaran," kata Hermawi kepada wartawan di Jakarta, Jumat.

Baca selengkapnya di sini.


Prabowo beri penghargaan 141 tokoh, dari Puan hingga Gombloh


Presiden RI Prabowo Subianto menganugerahi Tanda Kehormatan kepada 141 tokoh, mulai dari Ketua DPR RI Puan Maharani, Mantan Kapolri Jenderal Hoegeng Iman Santoso, hingga musisi Gombloh.

Pemberian Tanda Kehormatan yang merupakan rangkaian dari HUT Ke-80 Kemerdekaan RI tersebut dipimpin langsung oleh Presiden Prabowo di Istana Negara Jakarta, Senin, dengan didahului menyanyikan lagu kebangsaan Indonesia Raya dan mengheningkan cipta.

Para penerima tanda kehormatan itu berasal dari kalangan menteri, pejabat lembaga tinggi negara, pejabat pimpinan lembaga pemerintah dan non-kementerian, pejabat TNI dan Polri, WNI dengan latar belakang profesi, hingga budayawan.

Baca selengkapnya di sini.


Presiden perintahkan TNI-Polri ambil langkah tegas hadapi aksi anarkis


Presiden Prabowo Subianto memerintahkan Kapolri Jenderal Listyo Sigit Prabowo dan Panglima TNI Jenderal Agus Subiyanto mengambil langkah tegas menghadapi aksi anarkis yang terjadi di sejumlah daerah.

“Arahan Presiden jelas, khusus untuk tindakan-tindakan anarkis, TNI dan Polri diminta mengambil langkah tegas sesuai dengan undang-undang,” kata Kapolri didampingi Panglima di Kopi Koneng, Bojongkoneng, Kabupaten Bogor, Jawa Barat, setelah keluar dari kediaman Presiden Prabowo, Sabtu.

Menurut Kapolri, dalam dua hari terakhir kecenderungan aksi unjuk rasa di beberapa wilayah berubah menjadi kerusuhan dengan pembakaran gedung, fasilitas umum, hingga penyerangan markas.

Baca selengkapnya di sini.



Bahlil dan pengurus inti Golkar ke Istana, silaturahmi dengan Presiden

Ketua Umum Partai Golkar Bahlil Lahadalia bersama para pengurus inti dari Dewan Pengurus Partai menyambangi Istana Kepresidenan Jakarta, Rabu, untuk melakukan silaturahmi dengan Presiden RI Prabowo Subianto.

Bahlil beserta rombongan yang mengenakan jas kuning tiba bersama di halaman Istana sekitar pukul 12.45 WIB dengan menggunakan Mercedes Benz Sprinter. Setidaknya ada empat mobil yang tiba dan membawa para pengurus partai berlambang pohon beringin tersebut.

“Hari ini kami dari pengurus DPP Partai Golkar melakukan silaturahmi dengan Bapak Presiden ya,” kata Bahlil saat memberikan keterangan kepada media di Istana Kepresidenan Jakarta, Rabu.

Baca selengkapnya di sini.


Prabowo melayat ke rumah duka Affan Kurniawan

Presiden RI Prabowo Subianto melayat rumah duka Affan Kurniawan, pengemudi ojek online (ojol) yang menjadi korban dalam insiden unjuk rasa yang terjadi di Jakarta pada Kamis (28/8) malam.

Prabowo tiba Jumat malam, sekitar pukul 21.50 WIB. Presiden datang dengan mengenakan setelan safari berwarna krem dan kopiah hitam. Nampak pula Menteri Sekretaris Negara Prasetyo Hadi dan Sekretaris Kabinet Teddy Indra Wijaya turut serta melayat bersama Presiden.

Prabowo berada di rumah duka sekitar 10 menit. Kepala Negara tidak memberikan keterangan pers kepada media dan langsung meninggalkan rumah duka.',
            'waktu'       => now(),
            'gambar'      => 'ak-prabowo.png',
        ]);
    }
}
