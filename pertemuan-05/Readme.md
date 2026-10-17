Dokumentasi Pertemuan 05 - Pemrograman Web Dasar

## Perubahan Berkas
- index.html: Menghubungkan file JavaScript eksternal script.js sebelum penutup tag 
</body>.
- script.js: Menambahkan kode pengujian JavaScript untuk memverifikasi keterhubungan file.

## Cara Menjalankan Halaman
1. Buka file pertemuan-05/index.html menggunakan peramban web (Google Chrome).
2. Buka DevTools dengan menekan tombol F12 (atau klik kanan > Inspect).
3. Pilih tab Console untuk melihat hasil keluaran JavaScript.

## Catatan Perubahan
- Menambahkan selector elemen HTML pada script.js menggunakan metode 
document.getElementById().
- Mendeklarasikan 3 variabel utama:
  - const navToggle = document.getElementById("navToggle");
  - const navMenu = document.getElementById("navMenu");
  - const contactForm = document.getElementById("contactForm");

## Langkah Pengujian
1. Membuka file index.html di browser Google Chrome / Edge.
2. Membuka menu Developer Tools (tombol F12) lalu masuk ke tab Console.
3. Memeriksa keberadaan elemen dengan mengetikkan perintah berikut pada Console:
   javascript
   document.getElementById("contactForm");