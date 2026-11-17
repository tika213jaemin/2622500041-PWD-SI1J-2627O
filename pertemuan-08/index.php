<?php
$halaman = $_GET['page'] ?? 'beranda';

$halamanDiizinkan = ['beranda', 'profile', 'pendaftaran'];

if (!in_array($halaman, $halamanDiizinkan, true)) {
    $halaman = 'beranda';
}

$pesanFeedback = '';
$dataPendaftaran = null;

$nama = '';
$email = '';
$tanggal = '';
$jenisKelamin = '';
$alamat = '';
$pesan = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $halaman === 'pendaftaran') {

    $nama = trim($_POST['nama'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $tanggal = trim($_POST['tanggal'] ?? '');
    $jenisKelamin = trim($_POST['jenis_kelamin'] ?? '');
    $alamat = trim($_POST['alamat'] ?? '');
    $pesan = trim($_POST['pesan'] ?? '');

    if (
        $nama === '' ||
        $email === '' ||
        $tanggal === '' ||
        $jenisKelamin === '' ||
        $alamat === '' ||
        $pesan === ''
    ) {
        $pesanFeedback = 'Semua kolom wajib diisi.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $pesanFeedback = 'Format email tidak valid.';
    } else {
        $pesanFeedback = 'Pendaftaran berhasil dikirim!';

        $dataPendaftaran = [
            'nama' => $nama,
            'email' => $email,
            'tanggal' => $tanggal,
            'jenis_kelamin' => $jenisKelamin,
            'alamat' => $alamat,
            'pesan' => $pesan,
            'waktu' => date('H:i:s')
        ];
    }
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
            <h1>Blog Pribadi Atikah</h1>
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

                        <figure>
                            <img src="img/Foto-hobi.jpeg" alt="Kegiatan hobi menggambar">
                            <figcaption>Menggambar sebuah anak laki laki</figcaption>
                        </figure>

                        <figure>
                            <img src="img/foto-hobi.PNG" alt="Hasil gambar">
                            <figcaption>Menggambar sebuah anak perempuan</figcaption>
                        </figure>

                        <figure>
                            <img src="img/foto hobi senja.jpeg" alt="Pemandangan senja pertama">
                            <figcaption>Memotret pemandangan senja pertama</figcaption>
                        </figure>

                        <figure>
                            <img src="img/foto hobi.jpeg" alt="Kegiatan hobi lainnya">
                            <figcaption>Menggambar beberapa kartun animasi</figcaption>
                        </figure>

                        <figure>
                            <img src="img/foto-hobi senja.jpeg" alt="Pemandangan senja kedua">
                            <figcaption>Memotret pemandangan senja kedua</figcaption>
                        </figure>

                        <figure>
                            <img src="img/foto.jpeg" alt="Foto kegiatan hobi">
                            <figcaption>Memotret pemandangan senja ketiga</figcaption>
                        </figure>

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

                    <table>
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

                    <form id="contactForm" action="index.php?page=pendaftaran" method="POST">

                        <label for="nama">Nama Lengkap:</label>
                        <input
                            type="text"
                            id="nama"
                            name="nama"
                            placeholder="Masukkan nama lengkap"
                            value="<?php echo htmlspecialchars($nama); ?>"
                            required
                        >

                        <label for="email">Email:</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Masukkan alamat email"
                            value="<?php echo htmlspecialchars($email); ?>"
                            required
                        >

                        <label for="tanggal">Tanggal Lahir:</label>
                        <input
                            type="date"
                            id="tanggal"
                            name="tanggal"
                            value="<?php echo htmlspecialchars($tanggal); ?>"
                            required
                        >

                        <label for="jenis_kelamin">Jenis Kelamin:</label>
                        <select id="jenis_kelamin" name="jenis_kelamin" required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Perempuan" <?php echo $jenisKelamin === 'Perempuan' ? 'selected' : ''; ?>>
                                Perempuan
                            </option>
                            <option value="Laki-laki" <?php echo $jenisKelamin === 'Laki-laki' ? 'selected' : ''; ?>>
                                Laki-laki
                            </option>
                        </select>

                        <label for="alamat">Alamat:</label>
                        <textarea
                            id="alamat"
                            name="alamat"
                            rows="3"
                            placeholder="Masukkan alamat lengkap"
                            required
                        ><?php echo htmlspecialchars($alamat); ?></textarea>

                        <label for="pesan">Alasan Mendaftar:</label>
                        <textarea
                            id="pesan"
                            name="pesan"
                            rows="3"
                            placeholder="Tuliskan alasan mendaftar"
                            required
                        ><?php echo htmlspecialchars($pesan); ?></textarea>

                        <button type="submit">Daftar</button>
                        <form id="contactForm" action="index.php?page=pendaftaran" method="POST">

                        <p id="formFeedback">
                            <?php echo htmlspecialchars($pesanFeedback); ?>
                        </p>

                    </form>

                    <div class="rekap-pendaftaran">

                        <h3>Data Pendaftaran Terakhir 📋</h3>

                        <p>Data pendaftaran yang berhasil dikirim akan ditampilkan pada tabel berikut.</p>

                        <div class="table-responsive">
                            <table class="tabel-rekap">
                                <thead>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <th>Email</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Alasan Mendaftar</th>
                                        <th>Waktu Submit</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php if ($dataPendaftaran !== null): ?>

                                        <tr>
                                            <td>
                                                <?php echo htmlspecialchars($dataPendaftaran['nama']); ?>
                                            </td>

                                            <td>
                                                <?php echo htmlspecialchars($dataPendaftaran['email']); ?>
                                            </td>

                                            <td>
                                                <?php echo htmlspecialchars($dataPendaftaran['tanggal']); ?>
                                            </td>

                                            <td>
                                                <?php echo htmlspecialchars($dataPendaftaran['jenis_kelamin']); ?>
                                            </td>

                                            <td>
                                                <?php echo htmlspecialchars($dataPendaftaran['alamat']); ?>
                                            </td>

                                            <td>
                                                <?php echo htmlspecialchars($dataPendaftaran['pesan']); ?>
                                            </td>

                                            <td>
                                                <?php echo htmlspecialchars($dataPendaftaran['waktu']); ?> WIB
                                            </td>
                                        </tr>

                                    <?php else: ?>

                                        <tr>
                                            <td colspan="7" class="data-kosong">
                                                Belum ada data pendaftar yang dikirim.
                                            </td>
                                        </tr>

                                    <?php endif; ?>

                                </tbody>
                            </table>
                        </div>

                    </div>

                </section>

            <?php endif; ?>

        </main>

    </div>

    <footer>
        <p>© 2026 Atikah Lutfiah Ramadhani Rahman [2622500041]</p>
    </footer>

</body>
</html>
