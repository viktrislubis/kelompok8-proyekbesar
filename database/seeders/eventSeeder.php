<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class eventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            [
                'nama' => 'Pengukuhan anggota baru HIMASTI',
                'waktu_mulai' => '2022-10-12 00:00:00',
                'waktu_selesai' => '2022-10-12 00:00:00',
                'deskripsi_singkat' => 'Pengukuhan mahasiswa angkatan 2022 sebagai anggota HIMASTI.',
                'jenis' => 'Program Kerja Tahunan HIMASTI',
                'lokasi' => 'Pantai Lumban Bul-Bul',
                'penyelenggara' => 'Kepengurusan HIMASTI',
                'kontak' => 'Reindhard (+6282367xxxxxx)',
                'deskripsi' => 'Kegiatan ini diwajibkan untuk seluruh mahasiswa S1 Informatika angakatan 2019, 2020, 2021, dan 2022. Dengan dresscode training pack Del. ',
                'penjelasan' => 'Pengukuhan mahasiswa angkatan 2022 sebagai anggota HIMASTI. Pengukuhan ini dilakukan sebagai bentuk dan simbol bahwa angakatan 2022 telah dikukuhkan dan disahkan menjadi bagian dari keluarga HIMASTI. Dengan adanya kegiatan ini, diharapkan mahasiswa dan mahasiswi baru dapat merasakan kehangatan dan solidaritas dari keluarga HIMASTI. Setelah menjadi bagian dari keluarga Himpunan Mahasiswa Sarjana Informatika, maka mahasiswa dan mahasiswi Himpunan Mahasiswa Sarjana Informatika secara sadar harus siap menerima dan bertanggung jawab terhadap aturan dan peraturan serta menjaga nama baik Himpunan.',
            ],
            [
                'nama' => 'Natal Himpunan Mahasiswa Informatika',
                'waktu_mulai' => '2022-10-12 00:00:00',
                'waktu_selesai' => '2022-10-12 00:00:00',
                'deskripsi_singkat' => 'Perayaan hari natal untuk semua anggota HIMASTI',
                'jenis' => 'Kegiatan Tahunan Program Studi',
                'lokasi' => 'Gereja HKBP Sitoluama',
                'penyelenggara' => 'Mahasiswa-mahasiswi S1 Informatika',
                'kontak' => 'Guntur (+6282367xxxxxx)',
                'deskripsi' => 'Seluruh mahasiwa dan mahasiswi S1 Informatika diharapkan berpartisipasi dan turut hadir dalam acara natal ini. Dengan dresscode berwarna hijau. ',
                'penjelasan' => 'Perayaan hari natal untuk seluruh anggota HIMASTI. Natal adalah sebuah perayaan yang di lakukan oleh semua umat Kristiani di seluruh dunia untuk menyambut sang Juru Selamat, yaitu Tuhan Yesus Kristus. Tidak perlu dengan perayaan yang besar dan mewah tetapi bagaimana kita benar-benar meresapi dan mengenang bagaimana kedatangan Tuhan Yesus Kristus datang ke dunia ini untuk menyelamatkan kita. Melalui perayaan Natal ini, yang diharapakan mahasiswa/i menjadi generasi muda intelektual yang selalu takut akan Tuhan.',
            ],
            [
                'nama' => 'Malam Keakraban Program Studi S1 Informatika',
                'waktu_mulai' => '2023-02-04 00:00:00',
                'waktu_selesai' => '2022-02-05 00:00:00',
                'deskripsi_singkat' => 'Acara ini bertujuan untuk mempererat tali persaudaraan antar mahasiswa/i informatika dari angkatan terkecil hingga yang terbesar.',
                'jenis' => 'Kegiatan Refreshing',
                'lokasi' => 'Lapangan Napitupulu',
                'penyelenggara' => 'Informatika angkatan 2019',
                'kontak' => ' 08218766xxxx (Judah)',
                'deskripsi' => 'Kegiatan ini diwajibkan untuk seluruh mahasiswa S1 Informatika angakatan 2019, 2020, 2021, dan 2022.',
                'penjelasan' => 'Pada acara ini seluruh mahasiswa/i akan bermalam dengan menggunakan tenda. Setiap mahasiswa/i wajib membawa peralatan pribadi yang mungkin dibutuhkan selama acara. Untuk rangkaian kegiatan yang akan dilakukan, akan dibagikan melalui grup antar angkatan prodi S1 Informatika. Diharapkan seluruh mahasiswa/i Informatika angkatan 2019 hingga 2022 mengikuti kegiatan ini dengan baik dan tertib. Tiada kesan tanpa kehadiran rekan-rekan sekalian.',
            ],
            [
                'nama' => 'HIMASTI Coding Challenge (HCC)',
                'waktu_mulai' => '2023-03-10 00:00:00',
                'waktu_selesai' => '2023-03-15 00:00:00',
                'deskripsi_singkat' => ' Acara ini bertujuan untuk mengasah kemampuan pada mahasiswa/i di Institut Teknologi Del.',
                'jenis' => 'Kompetisi',
                'lokasi' => 'Institut Teknologi Del',
                'penyelenggara' => 'HIMASTI',
                'kontak' => '08137520xxxx (Guntur Sinaga)',
                'deskripsi' => 'Kegiatan ini diwajibkan untuk seluruh mahasiswa S1 Informatika angakatan 2020, 2021, dan 2022.',
                'penjelasan' => 'HIMASTI Coding Challenge adalah sebuah kompetisi yang diadakan oleh pengurus HIMASTI untuk menjelankan salah satu program kerja yang telah mereka rancang di awal pembentukan kepanitian HIMASTI.
                Program ini biasanya di adakan di Institut Teknologi Del dan diikuti oleh mahasiswa/i Institut Teknologi dari berbagai bidang program studi. Dan di rencanakan di tahun ini program ini di berlakukan untuk mahasiswa/i dari luar kampus Institut Teknologi Del.
                Tujuan dari HCC:
                A. Melatih kemampuan mahasiswa/I dan Siswa dalam menyelesaikan suatu masalah dengan menggunakan bahasa pemrograman.
                B. Melatih jiwa kompetitif mahasiswa/I dan Siswa agar mampu bersaing untuk kompetisi yang sama tingkat nasional hingga internasional.
                Menambah pengalaman dan pengetahuan mahasiswa/I dan Siswa yang berhubungan dengan pemrograman kompetitif
                ',
            ],
            [
                'nama' => 'HIMASTI PHOTOGRAPHY COMPETITION ',
                'waktu_mulai' => '2023-01-23 00:00:00',
                'waktu_selesai' => '2023-01-23 00:00:00',
                'deskripsi_singkat' => 'Melakukan event yang dimana seluruh rekan himasti akan mengikuti Kompetisi Fotografi yang mengenai seputar HIMASTI ',
                'jenis' => 'Kompetisi',
                'lokasi' => 'Institut Teknologi Del',
                'penyelenggara' => ' Pengurus HIMASTI Divisi Komunikasi dan Informasi',
                'kontak' => '08218766xxxx (Dian Jorgy)
                ',
                'deskripsi' => '',
                'penjelasan' => 'Himasti Photography Competition ini adalah suatu kegiatan kompetisi yang diselenggarakan oleh kepanitian Himasti untuk seluruh anggota Himasti dalam  hal mengabadikan momen-momen yang ada di Institut Teknologi Del yang sesuai dengan tema yang dibuat oleh penyelenggara.
                Program ini berguna untuk mengembangkan bakat mahasiswa/i Institut Teknologi Del di bidang photography.
                ',
            ],
            [
                'nama' => 'Webinar',
                'waktu_mulai' => '2023-03-20 00:00:00',
                'waktu_selesai' => '2023-03-20 00:00:00',
                'deskripsi_singkat' => 'Mengadakan diskusi dan sharing knowledge oleh alumni kepada seluruh anggota HIMASTI',
                'jenis' => 'Kegiatan Belajar',
                'lokasi' => 'Institut Teknologi Del',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Pendidikan',
                'kontak' => '08218766xxxx (Nanchy Siadari)',
                'deskripsi' => '',
                'penjelasan' => 'Kegiatan webinar ini di adakan guna untuk menambah ilmu setiap mahasiswa/i prodi S1 Informatika terkait ilmu di luar proses pembelajaran yang di sistemkan oleh kampus. Misalnya webinar yang diadakan oleh ikatan alumni untuk memberikan wawasan terkait dunia pekerjaan kepada mahasiswa/i prodi S1 Informatika.',
            ],
            [
                'nama' => 'KM Cup',
                'waktu_mulai' => '2023-01-20 00:00:00',
                'waktu_selesai' => '2023-01-20 00:00:00',
                'deskripsi_singkat' => 'Setiap anggota HIMASTI akan melakukan pertandingan olahraga dan kesenian.
                ',
                'jenis' => 'Kompetisi',
                'lokasi' => 'Institut Teknologi Del',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Minat dan Bakat',
                'kontak' => '08218766xxxx (Kevin Samosir)',
                'deskripsi' => 'Partisipasi akan kegiatan yang diadakan oleh BEM',
                'penjelasan' => 'Kompetisi ini dirancang oleh kepengurusan HIMASTI untuk anggota HIMASTI guna melatih skill dan meningkatkan solidaritas antar setiap anggota HIMASTI.',
            ],
            [
                'nama' => 'Welcoming Party',
                'waktu_mulai' => '2024-01-27 00:00:00',
                'waktu_selesai' => '2024-01-27 00:00:00',
                'deskripsi_singkat' => 'Calon anggota baru HIMASTI dikukuhkan menjadi anggota tetap HIMASTI .
                ',
                'jenis' => 'Event',
                'lokasi' => 'Institut Teknologi Del',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Minat dan Bakat',
                'kontak' => '08116230035 (Pengeran Simamora)',
                'deskripsi' => 'Calon anggota baru HIMASTI dikukuhkan menjadi anggota tetap HIMASTI ',
                'penjelasan' => 'Mempererat hubungan dan rasa kekeluargaan antar mahasiswa Himasti.',
            ],
            [
                'nama' => 'HIMASTI CUP ',
                'waktu_mulai' => '2024-02-3 00:00:00',
                'waktu_selesai' => '2024-02-24 00:00:00',
                'deskripsi_singkat' => 'Setiap anggota tim HIMASTI akan melakukan pertandingan olahraga dan kesenian.',
                'jenis' => 'Kompetisi',
                'lokasi' => 'Institut Teknologi Del',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Minat dan Bakat',
                'kontak' => '08116230035 (Pengeran Simamora)',
                'deskripsi' => 'Setiap anggota tim HIMASTI akan melakukan pertandingan olahraga dan kesenian',
                'penjelasan' => 'Melatih skill olahraga dan meningkatkan solidaritas antar setiap anggota HIMASTI.',
            ],
            [
                'nama' => 'War FITE',
                'waktu_mulai' => '2024-02-15 00:00:00',
                'waktu_selesai' => '2024-02-15 00:00:00',
                'deskripsi_singkat' => 'Setiap anggota tim HIMASTI akan melakukan pertandingan olahraga dan kesenian.',
                'jenis' => 'Kompetisi',
                'lokasi' => 'Institut Teknologi Del',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Minat dan Bakat',
                'kontak' => '08116230035 (Pengeran Simamora)',
                'deskripsi' => 'Setiap anggota tim HIMASTI akan melakukan pertandingan olahraga dan kesenian',
                'penjelasan' => 'Meningkatkan solidaritas mahasiswa IT DEL',
            ],
            [
                'nama' => 'HiCo (Himasti Competition)',
                'waktu_mulai' => '2024-02-15 00:00:00',
                'waktu_selesai' => '2024-02-15 00:00:00',
                'deskripsi_singkat' => 'Membuat kompetisi yang memiliki 2 divisi yaitu HCC (Himasti Coding Competion) dan juga HDC (Himasti Desain Competion)',
                'jenis' => 'Event',
                'lokasi' => 'Auditorium',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Riset dan Teknologi',
                'kontak' => '081260071260(Prans Simarmata)',
                'deskripsi' => 'Setiap anggota tim HIMASTI akan melakukan pertandingan olahraga dan kesenian',
                'penjelasan' => 'Menambah semangat kompetisi dan membuat mahasiswa aktif dalam
mengikuti kegiatan yang diselenggarakan Himasti',
            ],
            [
                'nama' => 'Sharing knowledge',
                'waktu_mulai' => '2024-02-15 00:00:00',
                'waktu_selesai' => '2024-02-15 00:00:00',
                'deskripsi_singkat' => 'Menjadi wadah bagi anggota Himasti untuk bisa saling berbagi pengetahuan.',
                'jenis' => 'Event',
                'lokasi' => 'Menyesuaikan',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Riset dan Teknologi',
                'kontak' => '081260071260(Prans Simarmata)',
                'deskripsi' => 'Menjadi wadah bagi anggota Himasti untuk bisa saling berbagi
pengetahuan dan juga memungkinkan untuk mengadakan webinar dari
alumni untuk anggota Himasti yang berkaitan dengan dunia teknologi',
                'penjelasan' => 'Mempererat hubungan antar anggota Himasti',
            ],
            [
                'nama' => 'Open Pre Order',
                'waktu_mulai' => '2024-02-15 00:00:00',
                'waktu_selesai' => '2024-02-15 00:00:00',
                'deskripsi_singkat' => 'Memberikan layanan promosi berbayar bagi usaha yang ingin
mempromosikan dagangan atau jasanya melalui akun social media ',
                'jenis' => 'Event',
                'lokasi' => 'Auditorium',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Dana dan Usaha',
                'kontak' => '082161800457(Sunanda Munthe)',
                'deskripsi' => 'Menambah Uang Kas Himasti ',
                'penjelasan' => 'Tidak memerlukan biaya operasional yang besar.
● Memanfaatkan popularitas dan jangkauan media sosial HIMASTI.
● Memberikan peluang kolaborasi dengan banyak pihak, terutama
mahasiswa yang memiliki usaha. ',
            ],
            [
                'nama' => 'Membuat dan menjual Souvenir',
                'waktu_mulai' => '2024-02-15 00:00:00',
                'waktu_selesai' => '2024-02-15 00:00:00',
                'deskripsi_singkat' => 'Memberikan layanan promosi berbayar bagi usaha yang ingin mempromosikan dagangan atau jasanya melalui akun social media',
                'jenis' => 'Event',
                'lokasi' => 'Menyesuaikan',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Dana dan Usaha',
                'kontak' => '082161800457(Sunanda Munthe)',
                'deskripsi' => 'Menambah Uang Kas Himasti ',
                'penjelasan' => 'Souvenir dengan tema yang relevan dan menarik bagi mahasiswa dan
alumni DEL.',
            ],
            [
                'nama' => 'Mengadakan Bazar',
                'waktu_mulai' => '2024-02-15 00:00:00',
                'waktu_selesai' => '2024-02-15 00:00:00',
                'deskripsi_singkat' => 'Menjual barang yang ber-Temakan DEL',
                'jenis' => 'Event',
                'lokasi' => 'Menyesuaikan',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Dana dan Usaha',
                'kontak' => '082161800457(Sunanda Munthe)',
                'deskripsi' => 'Menambah Uang Kas Himasti',
                'penjelasan' => '• Kesempatan menjual pada event besar
• Produk yang menarik, seperti makanan atau minuman, yang disukai
oleh berbagai kalangan.
• Lokasi strategis di area acara yang ramai.',
            ],
            [
                'nama' => 'HIMASTI Tutorial',
                'waktu_mulai' => '2024-02-15 00:00:00',
                'waktu_selesai' => '2024-02-15 00:00:00',
                'deskripsi_singkat' => 'Kegiatan ini berfokus pada pembahasan topik yang kurang dipahami mahasiswa, dengan melibatkan mahasiswa yang telah menguasai materi untuk menjadi pengajar.',
                'jenis' => 'Event',
                'lokasi' => 'Menyesuaikan',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Pendidikan',
                'kontak' => '085244275171(Okdini Hutagalung)',
                'deskripsi' => 'Memberikan tambahan pembelajaran untuk membantu mahasiswa, terutama yang masih kesulitan memahami materi perkuliahan yang diajarkan di kelas',
                'penjelasan' => 'Membantu mahasiswa memahami materi perkuliahan dengan lebih
baik.',
            ],
            [
                'nama' => 'Pengumpulan dan Pembagian Referensi Belajar',
                'waktu_mulai' => '2024-02-15 00:00:00',
                'waktu_selesai' => '2024-02-15 00:00:00',
                'deskripsi_singkat' => 'Mengumpulkan soal-soal dari berbagai angkatan untuk disusun menjadi bank soal yang dapat diakses oleh seluruh anggota HIMASTI.',
                'jenis' => 'Event',
                'lokasi' => 'Google Drive',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Pendidikan',
                'kontak' => '085244275171(Okdini Hutagalung)',
                'deskripsi' => 'Menambah koleksi soal untuk membantu mahasiswa lebih percaya diri menghadapi kuis, UTS, dan UAS',
                'penjelasan' => 'Memberikan referensi belajar tambahan bagi mahasiswa.
',
            ],
            [
                'nama' => 'Pengadaan Webinar',
                'waktu_mulai' => '2024-02-15 00:00:00',
                'waktu_selesai' => '2024-02-15 00:00:00',
                'deskripsi_singkat' => 'Mengadakan diskusi dan sesi berbagi pengalaman oleh alumni untuk seluruh anggota HIMASTI',
                'jenis' => 'Event',
                'lokasi' => 'IT DEL / Zoom Meeting',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Pendidikan',
                'kontak' => '085244275171(Okdini Hutagalung)',
                'deskripsi' => 'Membekali mahasiswa dengan wawasan dan keterampilan dasar untuk mempersiapkan diri menghadapi dunia kerja, sekaligus mempererat relasi dengan alumni HIMASTI',
                'penjelasan' => 'Memperkuat hubungan antara mahasiswa aktif HIMASTI dan
alumni. ',
            ],
            [
                'nama' => 'Sharing Knowledge dan Temu Ramah Informatika',
                'waktu_mulai' => '2024-02-15 00:00:00',
                'waktu_selesai' => '2024-02-15 00:00:00',
                'deskripsi_singkat' => 'Program Humas Himasti dimana Mahasiswa Angk. 21, 21 dan 23 diberikan waktu untuk melakukan pendekatan/sharing kepada mahasiswa baru Angk.24.',
                'jenis' => 'Event',
                'lokasi' => 'Lapangan Napitupulu, Lingkungan Kampus IT Del',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Hubungan Masyarakat',
                'kontak' => '085831057136(Esra Silaen)',
                'deskripsi' => '',
                'penjelasan' => 'Memperdekat hubungan antar Mahasiswa Angk. 21, 21 dan 23 kepada Angk.24',
            ],
            [
                'nama' => 'Pengukuhan dan Penyambutan Anggota Baru HIMASTI',
                'waktu_mulai' => '2024-02-15 00:00:00',
                'waktu_selesai' => '2024-02-15 00:00:00',
                'deskripsi_singkat' => 'Program Humas Himasti yang bertujuan untuk memperkenalkan Himasti kepada Calon Anggota Himasti dan sekaligus mengukuhkan Calon Anggota menjadi Anggota resmi Himasti',
                'jenis' => 'Event',
                'lokasi' => 'Pantai Lumban Bul-bul, Balige ',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Hubungan Masyarakat',
                'kontak' => '085831057136(Esra Silaen)',
                'deskripsi' => '• Mengenalkan HIMASTI Memberikan pemahaman kepada mahasiswa baru tentang HIMASTI sebagai wadah untuk berpartisipasi, berkembang, dan bersosialisasi di lingkungan kampus
                                • Pengukuhan Identitas Memberikan penghargaan dan tanda pengenal
                                resmi kepada mahasiswa baru dengan jaket Himpunan sebagai
                                anggota sah HIMASTI
                                • Membangun Persahabatan dan Relasi Menciptakan suasana yang
                                santai dan akrab di acara penyambutan mahasiswa baru sebagai
                                anggota baru HIMASTI untuk memungkinkan mahasiswa baru
                                berkenalan, membentuk hubungan pertemanan, dan membangun
                                jaringan sosial di antara sesama anggota HIMASTI
                                • Mendorong Partisipasi Aktif Merangsang minat dan partisipasi
                                mahasiswa baru untuk berperan aktif dalam berbagai kegiatan yang
                                diadakan oleh HIMASTI selama masa perkuliahan.
                                • Memberikan Informasi Penting Menyampaikan informasi praktis
                                terkait program, kegiatan, dan sumber daya yang dapat diakses oleh
                                anggota HIMASTI, sehingga mahasiswa baru dapat lebih terlibat dan
                                terinformasi.',
                'penjelasan' => 'Anggota baru lebih kenal Himasti dan resmi menjadi
anggota Himasti ',
            ],
            [
                'nama' => 'Pembuatan artikel mengenai Program Studi',
                'waktu_mulai' => '2024-02-15 00:00:00',
                'waktu_selesai' => '2024-02-15 00:00:00',
                'deskripsi_singkat' => 'Artikel ini berfungsi sebagai portal informasi yang memberikan rincian rinci mengenai program studi, termasuk kurikulum yang diikuti, fokus studi yang ditawarkan, dan prospek karir yang dapat diharapkan lulusan',
                'jenis' => 'Event',
                'lokasi' => 'Situs website HIMASTI',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Hubungan Masyarakat',
                'kontak' => '085831057136(Esra Silaen)',
                'deskripsi' => '- Mengenalkan HIMASTI yang dapat diakses melalui website
resmi.
- Memberikan informasi rinci tentang program studi, meliputi
kurikulum, fokus studi, dan prospek karir lulusan
- Mempromosikan kegiatan dan acara yang diselenggarakan oleh
HIMASTI.',
                'penjelasan' => 'Informasi mengenai HIMASTI akan terlihat jelas di artikel yang
ditampilkan website',
            ],
            [
                'nama' => 'Documentary Excellence ',
                'waktu_mulai' => '2024-02-15 00:00:00',
                'waktu_selesai' => '2024-02-15 00:00:00',
                'deskripsi_singkat' => 'Membuat catatan visual setiap momen berharga dalam acara HIMASTI, termasuk webinar, rapat kerja, dan pertemuan anggota HIMASTI.',
                'jenis' => 'Event',
                'lokasi' => 'Situs website HIMASTI',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Komunikasi dan Informasi',
                'kontak' => '081363333029(Yizreel Sipahutar)',
                'deskripsi' => 'Mengabadikan momen berharga dan mempublikasikannya di Instagram resmi HIMASTI.',
                'penjelasan' => 'Mengumpulkan momen-momen penting pada setiap kegiatan',
            ],
            [
                'nama' => 'Creative Design ',
                'waktu_mulai' => '2024-02-15 00:00:00',
                'waktu_selesai' => '2024-02-15 00:00:00',
                'deskripsi_singkat' => 'Membuat desain poster dan banner kreatif ataupun materi visual untuk mendukung acara HIMASTI, baik formal maupun non-formal.',
                'jenis' => 'Event',
                'lokasi' => 'Situs website HIMASTI',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Komunikasi dan Informasi',
                'kontak' => '081363333029(Yizreel Sipahutar)',
                'deskripsi' => 'Menyediakan materi visual berkualitas untuk memperindah acara HIMASTI',
                'penjelasan' => 'Memperindah visual acara HIMASTI .',
            ],
            [
                'nama' => 'HIMASTI Photography Challenge ',
                'waktu_mulai' => '2024-02-15 00:00:00',
                'waktu_selesai' => '2024-02-15 00:00:00',
                'deskripsi_singkat' => 'Anggota HIMASTI atau anggota HIMAPRO lain (jika memungkinkan) berpartisipasi dalam kompetisi, dan menyediakan poster/video promosi yang sesuai dengan tema acara yang akan digelar oleh HIMASTI',
                'jenis' => 'Event',
                'lokasi' => 'Situs website HIMASTI',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Komunikasi dan Informasi',
                'kontak' => '081363333029(Yizreel Sipahutar)',
                'deskripsi' => 'Mendorong anggota HIMASTI untuk mengembangkan kreativitas dalam fotografi melalui kompetisi yang berkaitan dengan HIMASTI',
                'penjelasan' => 'Meningkatkan kreativitas seni fotografi mahasiswa ',
            ],
            [
                'nama' => 'HIMASTI Digital Presence Management ',
                'waktu_mulai' => '2024-02-15 00:00:00',
                'waktu_selesai' => '2024-02-15 00:00:00',
                'deskripsi_singkat' => 'Mengevaluasi setiap foto dan/atau video yang akan atau telah diunggah untuk memastikan kualitas konten yang memadai, mempromosikan citra positif HIMASTI.',
                'jenis' => 'Event',
                'lokasi' => 'Situs website HIMASTI',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Komunikasi dan Informasi',
                'kontak' => '081363333029(Yizreel Sipahutar)',
                'deskripsi' => 'Membuat konten media sosial HIMASTI tetap menarik dan profesional, serta mengembangkan kreativitas anggota dalam bidang visualisasi.',
                'penjelasan' => 'Menghasilkan konten menarik dan informatif untuk anggota HIMASTI ',
            ]
        ]);
    }
}
