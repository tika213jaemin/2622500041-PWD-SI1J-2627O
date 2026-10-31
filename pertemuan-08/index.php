<?php
$namaMahasiswa = "Atikah Lutfiah Ramadhani Rahman";
$nim = "2622500041";
$programStudi = "SI";
$kelas = "SI1J";
$mataKuliah = "Pemrograman Web Dasar";

define("NAMA_BLOG", "Blog Pribadi Atikah");

$jumlahFoto = 6;
$jumlahMenu = 3;
$totalKonten = $jumlahFoto + $jumlahMenu;

if ($programStudi == "SI") {
    $namaProdi = "Sistem Informasi";
} elseif ($programStudi == "TI") {
    $namaProdi = "Teknik Informatika";
} else {
    $namaProdi = "Belum ditentukan";
}

switch ($programStudi) {
    case "SI":$fokusProdi = "Sistem informasi dan proses bisnis"; break;
    case "TI":$fokusProdi = "Komputasi dan pengembangan perangkat lunak";break; default:$fokusProdi = "Belum ditentukan";
}

$nama = "";
$email = "";
$tanggal = "";
$jenisKelamin = "";
$alamat = "";
$pesan = "";
$pesanKesalahan = "";
$berhasil = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $tanggal = trim($_POST["tanggal"] ?? "");
    $jenisKelamin = trim($_POST["jenis_kelamin"] ?? "");
    $alamat = trim($_POST["alamat"] ?? "");
    $pesan = trim($_POST["pesan"] ?? "");

    if ($nama === "") {
        $pesanKesalahan .= "Nama lengkap wajib diisi. ";
    } elseif (strlen($nama) < 3 || strlen($nama) > 50) {
        $pesanKesalahan .= "Nama harus 3 sampai 50 karakter. ";
    }

    if ($email === "") {
        $pesanKesalahan .= "Email wajib diisi. ";
    } elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $pesanKesalahan .= "Format email tidak valid. ";
    }

    if ($tanggal === "") {
        $pesanKesalahan .= "Tanggal lahir wajib diisi. ";
    }

    if ($jenisKelamin === "") {
        $pesanKesalahan .= "Jenis kelamin wajib dipilih. ";
    } elseif (!in_array($jenisKelamin, ["Perempuan", "Laki-laki"], true)) {
        $pesanKesalahan .= "Jenis kelamin tidak valid. ";
    }

    if ($alamat === "") {
        $pesanKesalahan .= "Alamat wajib diisi. ";
    }

    if ($pesan === "") {
        $pesanKesalahan .= "Alasan mendaftar wajib diisi. ";
    }

    if ($pesanKesalahan === "") {
        $berhasil = true;
    }
}

function aman($data) {
    return htmlspecialchars((string) $data, ENT_QUOTES, "UTF-8");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo aman(NAMA_BLOG); ?></title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>

    <header>
        <div class="logo">A</div>
        <div class="header-text">
            <h1><?php echo aman(NAMA_BLOG); ?></h1>
            <p>Selamat datang di blog pribadi saya</p>
        </div>
    </header>

    <div class="layout">
        <nav>
            <h3>Menu Navigasi</h3>
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#profile">Profile</a></li>
                <li><a href="#pendaftaran">Pendaftaran</a></li>
            </ul>
        </nav>

        <main>
            <section id="home">
                <h2>Beranda</h2>
                <p>Halo, saya <strong><?php echo aman($namaMahasiswa); ?></strong>. Selamat datang di blog pribadi saya.</p>
                <p> Saya sedang mempelajari mata kuliah <strong><?php echo aman($mataKuliah); ?></strong>. </p>

                <h3>Hobi Saya</h3>
                <p>Hobi saya adalah menggambar basic dasar. Saya senang mengisi waktu luang dengan menggambar serta saya sangat suka mengabadikan beberapa foto senja.</p>

                <h3>Galeri Hobi</h3>
                <div class="galeri-hobi">
                    <img src="img/Foto-hobi.jpg.jpeg" alt="Hasil gambar hobi 1">
                    <img src="img/foto-hobi.PNG" alt="Hasil gambar hobi 2">
                    <img src="img/foto hobi senja.jpeg" alt="Foto senja 1">
                    <img src="img/foto hobi.jpeg" alt="Hasil gambar hobi 3">
                    <img src="img/foto-hobi senja.jpeg" alt="Foto senja 2">
                    <img src="img/foto.jpeg" alt="Hasil gambar hobi 4">
                </div>

                <p>Jumlah foto: <?php echo $jumlahFoto; ?></p>
                <p>Jumlah menu: <?php echo $jumlahMenu; ?></p>
                <p>Total konten: <?php echo $totalKonten; ?></p>
            </section>

                <p>Mata Kuliah: <?php echo aman($mataKuliah); ?></p>
                <h3>Profil Singkat</h3>
                <p>Fokus Program Studi: <?php echo aman($fokusProdi); ?></p>

                <h3>Target Belajar PHP</h3>
                <ol>
                    <?php for ($i = 1; $i <= 5; $i++) {echo "<li>Target belajar ke-" . $i . ": "; switch ($i) {
                            case 1:echo "Memahami HTML."; break;
                            case 2:echo "Memahami CSS.";break;
                            case 3:echo "Mempelajari JavaScript.";break;
                            case 4:echo "Mempelajari dasar PHP.";break;
                            case 5:echo "Membuat website pribadi.";break;
                        } echo "</li>";
                    }
                    ?>
                </ol>

                <h3>Informasi Blog</h3>
                <ol>
                    <?php $nomor = 1;while ($nomor <= 3) {if ($nomor == 1) {echo "<li>Beranda</li>";} elseif ($nomor == 2) { echo "<li>Profile</li>";
                        } else { echo "<li>Pendaftaran</li>";}$nomor++;}
                    ?>
                </ol>
            </section>

            <section id="pendaftaran">
                <h2>Formulir Pendaftaran</h2>

                <form id="contactForm" action="index.php#pendaftaran" method="POST">
                    <label for="nama">Nama Lengkap:</label>
                    <input type="text"id="nama" name="nama" minlength="3" maxlength="50" required value="<?php echo aman($nama); ?>"

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required value="<?php echo aman($email); ?>"
                  
                    <label for="tanggal">Tanggal Lahir:</label>
                    <input type="date" id="tanggal" name="tanggal" required value="<?php echo aman($tanggal); ?>"

                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <select id="jenis_kelamin" name="jenis_kelamin" required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Perempuan" <?php if ($jenisKelamin == "Perempuan") echo "selected"; ?>>Perempuan</option>
                        <option value="Laki-laki" <?php if ($jenisKelamin == "Laki-laki") echo "selected"; ?>>Laki-laki</option>
                    </select>

                    <label for="alamat">Alamat:</label>
                    <textarea id="alamat" name="alamat" rows="3" required><?php echo aman($alamat); ?></textarea>

                    <label for="pesan">Alasan Mendaftar:</label>
                    <textarea id="pesan" name="pesan" rows="3" required><?php echo aman($pesan); ?></textarea>

                    <button type="submit">Daftar</button>
                    <button type="reset">Batal</button>
                    <p id="formFeedback"></p>
                </form>

                <?php if ($pesanKesalahan !== ""): ?>
                    <p class="form-feedback-error"><?php echo aman($pesanKesalahan); ?></p>
                <?php endif; ?>

                <?php if ($berhasil): ?>
                    <div class="form-feedback-success">
                        <h3>Pendaftaran Berhasil!</h3>
                        <p>Data yang Diterima Peladen:</p>
                        <p>Nama: <?php echo aman($nama); ?></p>
                        <p>Email: <?php echo aman($email); ?></p>
                        <p>Tanggal Lahir: <?php echo aman($tanggal); ?></p>
                        <p>Jenis Kelamin: <?php echo aman($jenisKelamin); ?></p>
                        <p>Alamat: <?php echo aman($alamat); ?></p>
                        <p>Alasan Mendaftar: <?php echo aman($pesan); ?></p>
                    </div>
                <?php endif; ?>
            </section>
        </main>
    </div>

    <footer>
        <p>&copy;<?php echo aman($nim); ?>_<?php echo aman($namaMahasiswa); ?>_<?php echo aman($kelas); ?>_UTS <?php echo aman($mataKuliah); ?>.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>