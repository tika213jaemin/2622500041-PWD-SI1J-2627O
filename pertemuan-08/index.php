<?php
$halaman = $_GET['page'] ?? 'beranda';

$halamanDiizinkan = ['beranda', 'profile', 'pendaftaran'];

if (!in_array($halaman, $halamanDiizinkan, true)) {
    $halaman = 'beranda';
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Pribadi Atikah</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>

<body>

    <header>
        <div class="logo">A</div>

        <div class="header-text">
            <h1>Blog Pribadi</h1>
            <p>Selamat datang di blog pribadi saya</p>
        </div>
    </header>

    <div class="layout">

        <nav>
            <h3>Menu Navigasi</h3>

            <ul>
                <li>
                    <a href="index.php?page=beranda">Beranda</a>
                </li>
                <li>
                    <a href="index.php?page=profile">Profile</a>
                </li>
                <li>
                    <a href="index.php?page=pendaftaran">Pendaftaran</a>
                </li>
            </ul>
        </nav>

        <main>

            <?php if ($halaman === 'beranda'): ?>

                <section id="beranda">
                    <h2>Beranda</h2>

                    <p>
                        Halo, saya Atikah Lutfiah Ramadhani Rahman.
                        Selamat datang di blog pribadi saya.
                    </p>

                    <h3>Hobi Saya</h3>

                    <p>
                        Hobi saya adalah menggambar. Saya senang mengisi
                        waktu luang dengan menggambar. Selain itu, saya
                        juga sangat suka mengabadikan beberapa foto senja.
                    </p>

                    <h3>Galeri Hobi</h3>

                    <div class="galeri-hobi">
                        <img src="img/Foto-hobi.jpg.jpeg" alt="Kegiatan hobi menggambar">
                        <img src="img/foto-hobi.PNG" alt="Hasil gambar">
                        <img src="img/foto hobi senja.jpeg" alt="Pemandangan senja pertama">
                        <img src="img/foto hobi.jpeg" alt="Kegiatan hobi lainnya">
                        <img src="img/foto-hobi senja.jpeg" alt="Pemandangan senja kedua">
                        <img src="img/foto.jpeg" alt="Foto kegiatan hobi">
                    </div>
                </section>

            <?php endif; ?>


            <?php if ($halaman === 'profile'): ?>

                <section id="profile">
                    <h2>Profile</h2>

                    <img
                        class="foto-profil"
                        src="img/foto-profil.jpg"
                        alt="Foto profil Atikah Lutfiah Ramadhani Rahman"
                    >

                    <h3>Biodata</h3>

                    <p>Nama Lengkap: Atikah Lutfiah Ramadhani Rahman</p>
                    <p>NIM: 2622500041</p>
                    <p>Program Studi: Sistem Informasi</p>
                    <p>Kelas: SI1J</p>
                    <p>Semester: 1</p>

                    <h3>Data Dosen</h3>

                    <table border="1" cellpadding="8" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Dosen</th>
                                <th>NIDN</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Dr. Ir. H. Ahmad Fauzi, M.Kom.</td>
                                <td>0001010101</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Budi Santoso, S.Kom., M.T.</td>
                                <td>0002020202</td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Siti Aminah, S.Kom., M.Kom.</td>
                                <td>0003030303</td>
                            </tr>
                        </tbody>
                    </table>
                </section>

            <?php endif; ?>


            <?php if ($halaman === 'pendaftaran'): ?>

                <section id="pendaftaran">
                    <h2>Formulir Pendaftaran</h2>

                    <form id="contactForm">

                        <label for="nama">Nama Lengkap:</label>
                        <input
                            type="text"
                            id="nama"
                            name="nama"
                            placeholder="Masukkan nama lengkap"
                            required
                        >

                        <label for="email">Email:</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Masukkan alamat email"
                            required
                        >

                        <label for="tanggal">Tanggal Lahir:</label>
                        <input
                            type="date"
                            id="tanggal"
                            name="tanggal"
                            required
                        >

                        <label for="jenis_kelamin">Jenis Kelamin:</label>
                        <select id="jenis_kelamin" name="jenis_kelamin" required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Perempuan">Perempuan</option>
                            <option value="Laki-laki">Laki-laki</option>
                        </select>

                        <label for="alamat">Alamat:</label>
                        <textarea
                            id="alamat"
                            name="alamat"
                            rows="3"
                            placeholder="Masukkan alamat lengkap"
                            required
                        ></textarea>

                        <label for="pesan">Alasan Mendaftar:</label>
                        <textarea
                            id="pesan"
                            name="pesan"
                            rows="3"
                            placeholder="Tuliskan alasan mendaftar"
                            required
                        ></textarea>

                        <button type="submit">Daftar</button>

                        <p id="formFeedback"></p>

                    </form>
                </section>

            <?php endif; ?>

        </main>
    </div>

    <footer>
        <p>© 2026 Atikah Lutfiah Ramadhani Rahman [2622500041]</p>
    </footer>

</body>
</html>
