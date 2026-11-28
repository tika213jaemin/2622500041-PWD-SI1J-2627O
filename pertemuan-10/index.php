<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

// Memanggil file fungsi.php.
require_once("fungsi.php");
// Memproses data formulir menggunakan metode POST.
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nama = trim((string) ($_POST["nama"] ?? ""));
    $email = trim((string) ($_POST["email"] ?? ""));
    $semesterForm = trim((string) ($_POST["semester"] ?? ""));
    $tanggal = trim((string) ($_POST["tanggal"] ?? ""));
    $jenisPesan = trim((string) ($_POST["jenis_pesan"] ?? ""));
    $minat = $_POST["minat"] ?? [];
    $prodi = trim((string) ($_POST["prodi"] ?? ""));
    $pesan = trim((string) ($_POST["pesan"] ?? ""));

    // Memastikan data checkbox berbentuk array.
    if (!is_array($minat)) {
        $minat = [];
    }

    // Menyimpan data formulir ke dalam session.
    $_SESSION["form_data"] = [
        "nama"        => $nama,
        "email"       => $email,
        "semester"    => $semesterForm,
        "tanggal"     => $tanggal,
        "jenis_pesan" => $jenisPesan,
        "minat"       => $minat,
        "prodi"       => $prodi,
        "pesan"       => $pesan
    ];

    // Mengarahkan kembali ke halaman utama.
    header("Location: index.php#contact");
    exit;
}

// Bagian 1: Variabel dan konstanta.
$nim = "2622500041";
$namaMahasiswa = "Atikah Lutfiah Ramadhani Rahman";
$programStudi = "SI";
$tahunAkademik = "2026/2027";
$kelas = "SI1J";
$semester = 1;

$statusAktif = true;
$catatanTambahan = null;

const NAMA_MATA_KULIAH = "Pemrograman Web Dasar";
const PROFIL_GITHUB = "tika213jaemin";

// Bagian 2: Operator.
$batasSemester = 8;
$sisaSemester = $batasSemester - $semester;

$semesterValid = (
    $semester >= 1 &&
    $semester <= $batasSemester
);

$statusSemester = (
    $semesterValid && $statusAktif
) ? "Sesuai rentang" : "Perlu diperiksa";

// Bagian 3: Percabangan if-elseif-else.
if ($semester < 3) {
    $keteranganSemester = "Semester awal";
} elseif ($semester <= 6) {
    $keteranganSemester = "Semester menengah";
} else {
    $keteranganSemester = "Semester akhir";
}

// Percabangan ternary.
$namaProdi = ($programStudi == "SI")
    ? "Sistem Informasi"
    : (($programStudi == "TI")
        ? "Teknik Informatika"
        : "Lainnya");

// Bagian 4: Percabangan switch-case-default.
switch ($programStudi) {
    case "SI":
        $fokusProgramStudi = "Sistem informasi dan proses bisnis";
        break;

    case "TI":
        $fokusProgramStudi = "Komputasi dan pengembangan perangkat lunak";
        break;

    default:
        $fokusProgramStudi = "Belum ditentukan";
        break;
}

// Bagian 5: Array terindeks.
$teknologiWeb = [
    "HTML",
    "CSS",
    "JavaScript",
    "PHP",
    "MySQL"
];

?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profil Mahasiswa</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <div class="header-top">
            <h1>Profil Mahasiswa</h1>

            <button
                class="nav-toggle"
                id="navToggle"
                type="button"
                aria-label="Buka navigasi"
                aria-controls="navMenu"
                aria-expanded="false">
                &#9776;
            </button>
        </div>

        <nav>
            <ul id="navMenu">
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <main>

        <!-- Bagian Beranda -->
        <section id="home">

            <h2>Selamat Datang</h2>

            <p>
                Halo, saya
                <?= tebal($namaMahasiswa); ?>.
                Saya sedang mempelajari mata kuliah
                <strong>
                    <?= bersihkan(NAMA_MATA_KULIAH); ?>
                </strong>
                pada tahun akademik
                <?= bersihkan($tahunAkademik); ?>.
            </p>

            <img
                src="foto-profil.jpg"
                alt="Foto profil Atikah Lutfiah Ramadhani Rahman">

        </section>

        <!-- Bagian Tentang Saya -->
        <section id="about">

            <h2>Tentang Saya</h2>

            <article>

                <h3>Profil Singkat</h3>

                <p>
                    Nama Lengkap:
                    <?= bersihkan($namaMahasiswa); ?>
                </p>

                <p>
                    NIM:
                    <?= bersihkan($nim); ?>
                </p>

                <p>
                    Kelas:
                    <?= bersihkan($kelas); ?>
                </p>

                <p>
                    Program Studi:
                    <?= bersihkan($namaProdi . " (" . $programStudi . ")"); ?>
                </p>

                <p>
                    Fokus Program Studi:
                    <?= bersihkan($fokusProgramStudi); ?>
                </p>

                <p>
                    Tahun Akademik:
                    <?= bersihkan($tahunAkademik); ?>
                </p>

                <p>
                    Status Mahasiswa:
                    <?= $statusAktif ? "Aktif" : "Tidak aktif"; ?>
                </p>

                <p>
                    Semester:
                    <?= bersihkan($semester . " (" . $keteranganSemester . ")"); ?>
                </p>

                <p>
                    Sisa Semester hingga Batas:
                    <?= bersihkan($sisaSemester); ?>
                </p>

                <p>
                    Pemeriksaan Rentang Semester:
                    <?= bersihkan($statusSemester); ?>
                </p>

                <p>
                    Catatan Tambahan:
                    <?= $catatanTambahan === null
                        ? "Belum ada"
                        : bersihkan($catatanTambahan); ?>
                </p>

                <h3>Target Belajar (Perulangan for)</h3>

                <ol>
                    <?php
                    for ($i = 1; $i <= 5; $i++) {

                        echo "<li>Target belajar ke-" . $i . ": ";

                        switch ($i) {
                            case 1:
                                echo "Memahami sintaks dasar PHP.";
                                break;

                            case 2:
                                echo "Menggunakan variabel dan konstanta.";
                                break;

                            case 3:
                                echo "Menerapkan operator dan percabangan.";
                                break;

                            case 4:
                                echo "Menggunakan perulangan for dan while.";
                                break;

                            default:
                                echo "Memahami penggunaan array.";
                                break;
                        }

                        echo "</li>";
                    }
                    ?>
                </ol>

                <h3>Teknologi Web yang Dipelajari</h3>

                <p>
                    Teknologi pertama yang dipelajari:
                    <?= bersihkan($teknologiWeb[0]); ?>
                </p>

                <p>Daftar teknologi yang dipelajari:</p>

                <ul>
                    <?php foreach ($teknologiWeb as $teknologi): ?>
                        <li><?= bersihkan($teknologi); ?></li>
                    <?php endforeach; ?>
                </ul>

                <h3>Semester (Perulangan while)</h3>

                <ol>
                    <?php
                    $nomorSemester = 1;

                    while ($nomorSemester <= 3) {
                        echo "<li>Semester " . $nomorSemester . "</li>";
                        $nomorSemester++;
                    }
                    ?>
                </ol>

            </article>

        </section>

        <!-- Bagian Kontak -->
        <section id="contact">

            <h2>Kontak</h2>

            <p>
                Kunjungi
                <a
                    target="_blank"
                    rel="noopener noreferrer"
                    href="https://github.com/<?= bersihkan(PROFIL_GITHUB); ?>">
                    profil GitHub saya
                </a>.
            </p>

            <form
                id="contactForm"
                class="js-contact-form"
                data-validation="contact"
                action="index.php"
                method="post"
                novalidate>

                <div class="form-group">
                    <label for="nama">Nama Lengkap</label><br>

                    <input
                        class="input-form"
                        type="text"
                        id="nama"
                        name="nama"
                        placeholder="Masukkan nama lengkap"
                        minlength="3"
                        maxlength="50"
                        required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label><br>

                    <input
                        class="input-form"
                        type="email"
                        id="email"
                        name="email"
                        placeholder="nama@email.com"
                        required>
                </div>

                <div class="form-group">
                    <label for="semester">Semester</label><br>

                    <input
                        class="input-form"
                        type="number"
                        id="semester"
                        name="semester"
                        min="1"
                        max="14"
                        required>
                </div>

                <div class="form-group">
                    <label for="tanggal">Tanggal Kunjungan</label><br>

                    <input
                        class="input-form"
                        type="date"
                        id="tanggal"
                        name="tanggal"
                        required>
                </div>

                <div class="form-group">
                    <p>Jenis Pesan</p>

                    <input
                        type="radio"
                        id="pertanyaan"
                        name="jenis_pesan"
                        value="pertanyaan"
                        required>

                    <label for="pertanyaan">Pertanyaan</label>

                    <input
                        type="radio"
                        id="saran"
                        name="jenis_pesan"
                        value="saran">

                    <label for="saran">Saran</label>
                </div>

                <div class="form-group">
                    <p>Topik yang Diminati</p>

                    <input
                        type="checkbox"
                        id="minat-html"
                        name="minat[]"
                        value="HTML">

                    <label for="minat-html">HTML</label>

                    <input
                        type="checkbox"
                        id="minat-css"
                        name="minat[]"
                        value="CSS">

                    <label for="minat-css">CSS</label>
                </div>

                <div class="form-group">
                    <label for="prodi">Program Studi</label><br>

                    <select
                        class="input-form"
                        id="prodi"
                        name="prodi"
                        required>

                        <option value="">-- Pilih Program Studi --</option>
                        <option value="SI">Sistem Informasi</option>
                        <option value="TI">Teknik Informatika</option>

                    </select>
                </div>

                <div class="form-group">
                    <label for="pesan">Pesan</label><br>

                    <textarea
                        class="input-form"
                        id="pesan"
                        name="pesan"
                        maxlength="300"
                        placeholder="Tulis pesan Anda"
                        required></textarea>
                </div>

                <button type="submit">Kirim</button>
                <button type="reset">Batal</button>

                <p
                    class="form-feedback"
                    data-form-feedback
                    aria-live="polite">
                </p>

            </form>

            <!-- Menampilkan data formulir yang telah dikirim -->
            <?php if (isset($_SESSION["form_data"])): ?>

                <?php
                $labelMap = [
                    "nama"        => "Nama Lengkap",
                    "email"       => "Email",
                    "semester"    => "Semester",
                    "tanggal"     => "Tanggal Kunjungan",
                    "jenis_pesan" => "Jenis Pesan",
                    "prodi"       => "Program Studi"
                ];

                $dataForm = $_SESSION["form_data"];
                ?>

                <article
                    id="hasilKontak"
                    class="submission-result"
                    aria-live="polite">

                    <h3>Data Formulir yang Dikirim</h3>

                    <?php foreach ($labelMap as $key => $label): ?>

                        <p>
                            <strong><?= bersihkan($label); ?>:</strong>
                            <?= bersihkan($dataForm[$key] ?? ""); ?>
                        </p>

                    <?php endforeach; ?>

                    <p><strong>Topik yang Diminati:</strong></p>

                    <?php if (!empty($dataForm["minat"])): ?>

                        <ul>
                            <?php foreach ($dataForm["minat"] as $topik): ?>
                                <li><?= bersihkan($topik); ?></li>
                            <?php endforeach; ?>
                        </ul>

                    <?php else: ?>

                        <p>Belum ada topik yang dipilih.</p>

                    <?php endif; ?>

                    <p>
                        <strong>Pesan:</strong>
                        <?= nl2br(bersihkan($dataForm["pesan"] ?? "")); ?>
                    </p>

                </article>

            <?php endif; ?>

        </section>

    </main>

    <footer>
        <p>
            &copy; <?= date("Y"); ?>
            <?= bersihkan($namaMahasiswa); ?>
            [<?= bersihkan($nim); ?>]
            - <?= bersihkan($kelas); ?>
            - <?= bersihkan(NAMA_MATA_KULIAH); ?>
        </p>
    </footer>

    <script src="script.js"></script>

</body>
</html>
