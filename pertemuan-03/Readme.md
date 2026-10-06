# Pertemuan 3 - Formulir HTML dan CSS Dasar

## Baseline

- Menggunakan hasil P2 sebagai dasar pengembangan P2
- Menyalin 'index.html' dan 'img/foto-profil.jpg'ke'pertemuan-03/'.

## Implementasi Formulir

- Elemen form yang digunakan: form, label, input, textarea, select, button
- Tipe input yang digunakan: text, email, radio, date, submit,number, nim, chechbox
- Atribut validasi yang digunakan: required, email, minlength, maxlenght, pattern, min, max

## Pengujian GET dan POST

- Hasil pengujian GET: Data form berhasil terkirim dan tampil di URL sebagai query string. Contoh: 2622500041@mahasiswa.atmaluhur.ac.id
- Contoh URL encoding yang ditemukan: Spasi berubah menjadi %20 atau +, contoh: Atikah%20Lutfiah. Simbol @ menjadi %40
- Hasil pengujian POST: Data form berhasil terkirim, data TIDAK tampil di URL, melainkan dikirim melalui body request sehingga lebih aman

## CSS Dasar

Selector elemen: p, ol, h2, label, input, form
- Selector class: .form-group
- Selector ID: #about, #contact
- Properti CSS dasar yang digunakan: margin, padding, border, border-bottom, background-color, color, font-family

## Pengujian dan Perbaikan

- Galat yang ditemukan: Tidak ada / Validasi email tidak berfungsi saat awal
- Penyebab galat: "Lupa menambahkan atribut required dan type="email"
- Penyebab galat: Lupa menambahkan atribut required dan type="email"
- Perbaikan yang dilakukan: Menambahkan atribut required pada semua input wajib dan memastikan type email
- Hasil pengujian ulang: Form berhasil divalidasi oleh browser dan semua data terkirim dengan benar

## GitHub Pages
URL: https://github.com/tika213jaemin/2622500041-PWD-SI1J-2627O.git