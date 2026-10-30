# pertemuan-07 -Pengembangan Formulir PHP
Lokasi proyek: C:\laragon\pertemuan-07
Layanan server: Apache 2.4.68 (port 80) dan MySQL 8.4.3 (port 3306).
Status pengujian: Layanan Apache dan MySQL berhasil dijalankan melalui Laragon.
Alamat akses: http://localhost/PWD/2627/SI1J/2622500041-PWD-SI1J-2627O/pertemuan-07/

Berkas yang digunakan dalam pengembangan P7 adalah:
index.php sebagai halaman utama Profil Mahasiswa.
style.css untuk mengatur tampilan halaman web.
script.js untuk menjalankan fungsi JavaScript.
README.md untuk mencatat proses pengerjaan dan hasil pengujian.
img/foto-profil.jpg sebagai gambar profil mahasiswa.

Hasil Pengujian Halaman Profil Mahasiswa

Halaman Profil Mahasiswa menampilkan informasi mahasiswa, yaitu nama Atikah Lutfiah Ramadhani Rahman, NIM 2622500041, Program Studi Sistem Informasi, mata kuliah Pemrograman Web Dasar, dan tahun akademik 2026/2027.
Teks ucapan selamat datang dan informasi mahasiswa ditampilkan pada halaman web. Foto profil sudah ditempatkan di folder img dengan nama foto-profil.jpg. Namun, pada pengujian awal, foto belum berhasil ditampilkan di browser sehingga alamat gambar perlu diperiksa kembali.

Galat yang ditemukan: Foto profil belum tampil pada halaman web.
Penyebab galat: Alamat atau lokasi gambar perlu diperiksa kembali.
Perbaikan yang dilakukan: Memeriksa struktur folder dan alamat gambar pada index.php.
Hasil pengujian ulang: Belum dipastikan karena foto profil masih perlu diuji kembali melalui browser.

Berkas P7 dikelola menggunakan Git dan dikirim ke repositori GitHub. Berkas yang digunakan meliputi index.php, style.css, script.js, README.md, dan img/foto-profil.jpg.
Perubahan foto profil telah dikirim menggunakan perintah Git setelah file gambar ditambahkan ke repositori.

Kesimpulan
Pengembangan P7 menggunakan PHP dengan Laragon sebagai lingkungan server lokal. Halaman Profil Mahasiswa telah dibuat dengan berkas PHP, CSS, JavaScript, dan foto profil. Pengujian lanjutan masih diperlukan untuk memastikan foto profil tampil dengan benar dan halaman berjalan sesuai kebutuhan.

penggunaan tanda ? untuk pemisah parameter pertama, tanda & untuk pemisah parameter berikutnya, dan URL encoding seperti %40 untuk @
### Hasil Pengujian Pengiriman Formulir GET
Atribut method="get" pada formulir menentukan bahwa data dikirim sebagai parameter URL.
Parameter pada URL diawali dengan tanda ? setelah alamat halaman dan dipisahkan dengan tanda &.
PHP membaca nilai parameter URL tersebut menggunakan $_GET.
Jika kolom wajib dikosongkan atau diisi tidak valid, pesan validasi muncul dan formulir tidak terkirim.
### Demonstrasi GET dan Perubahan ke POST
Berkas pertemuan-07/indexGet.phptersedia sebagai artefak demonstrasi pengiriman data formulir menggunakan metode GET.
Berkas pertemuan-07/index.php diubah menggunakan method="post" agar data dikirim melalui request body, bukan melalui parameter URL.
Atribut action="index.php" menentukan berkas tujuan pemrosesan data.

Berkas PHP dapat membaca nilai nama yang dikirim dari $_POST dan mempresentasikannya sebagai teks HTML.
Kode baru telah memproses parameter nama dari pengiriman formulir POST secara berhasil.

Hasil pengujian pengisian seluruh input formulir (termasuk memilih kedua topik minat HTML & CSS).   Hasil pengujian validasi JavaScript saat hanya memilih 1 topik minat (HTML saja atau CSS saja)

Pengolahan Formulir dengan PHP

Nama: Atikah Lutfiah Ramadhani Rahman
NIM: 2622500041
Program Studi: Sistem Informasi
Mata Kuliah: Pemrograman Web Dasar

## Deskripsi

Pada pertemuan 7 ini, saya mempelajari cara mengolah data formulir menggunakan PHP. Data yang dimasukkan melalui formulir akan diproses menggunakan metode GET dan POST. Saya juga mempelajari cara memeriksa data agar sesuai dengan ketentuan sebelum ditampilkan.

## tujuan
Memahami penggunaan metode GET dan POST.
Mengolah data yang dikirim melalui formulir.
Membuat validasi untuk memastikan data sudah diisi dengan benar.
Memahami cara menampilkan hasil input menggunakan PHP.

## Struktur Folder

pertemuan-07/
├── index.php
├── indexGet.php
├── style.css
├── script.js
├── README.md
└── img/
    └── foto-profil.jpg

## Cara Menjalankan Program
Buka aplikasi Laragon.
Pastikan Apache sudah berjalan.
Buka folder proyek pertemuan-07 melalui VS Code.
Jalankan program melalui browser menggunakan alamat localhost sesuai lokasi folder proyek.

Isi formulir dan tekan tombol kirim untuk melihat hasil pengolahan data.

## Hasil Pengerjaan
Dalam pengerjaan P7, saya membuat dan mempelajari beberapa bagian, yaitu:
Penggunaan metode GET dan POST untuk mengirim data formulir.
Pengambilan data menggunakan variabel $_GET dan $_POST.
Validasi untuk memeriksa data yang wajib diisi.
Pemeriksaan format email dan semester.
Pemeriksaan pilihan jenis pesan, program studi, dan minat.
Menampilkan pesan kesalahan apabila data yang dimasukkan belum sesuai.
Pengujian dilakukan dengan mencoba mengirim formulir dalam kondisi kosong dan mengisi formulir dengan data yang sesuai. Dari pengujian tersebut, saya dapat melihat apakah validasi sudah berjalan dan apakah data dapat diproses dengan benar.

## Kendala dan Perbaikan
Selama pengerjaan, saya menemukan beberapa kesalahan, seperti penulisan nama variabel yang tidak konsisten dan tanda kurung kurawal PHP yang belum lengkap. Kesalahan tersebut diperbaiki dengan menyamakan nama variabel dan melengkapi struktur kode PHP.
Kesimpulan: Melalui tugas P7 ini, saya menjadi lebih memahami cara kerja formulir menggunakan PHP, terutama dalam menerima, memeriksa, dan mengolah data yang dikirim oleh pengguna. Saya juga belajar bahwa validasi diperlukan agar data yang diterima sesuai dengan ketentuan program.