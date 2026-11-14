<?php
# ini untuk penulisan variabel
$nama = "Muhamad Surya Mentari Jingga";
// ini untuk penulisan konstanta
const phi = 3.14;
/*
  true atau false = tipe data boolean
  null = tanpa isi (ketiadaan)
  123 = tipe data angka (int)
  "teks" = tipe data string
  3.14 = tipe data decimal
*/
$paras = false;
$semester = 2;

switch ($semester) {
  case 1:
    $semesterku = "Ku baru mulai belajar wo";
    $pacarku = "Dhea";
    break;
  case 2:
    $semesterku = "Ku lah mulai agak bisa wo";
    $pacarku = "Susana";
    break;
  case 3:
    $semesterku = "Ku lah mulai nakal wo";
    $pacarku = "Eliana";
    break;
  case 4:
    $semesterku = "Ku lah mulai nyesel wo";
    $pacarku = "Calilah";
    break;
  case 5:
    $semesterku = "Ku lah mulai mengejar nilai";
    $pacarku = "Fiola";
    break;
  default:
    $semesterku = "lah kofang wo";
    $pacarku = "lom ade";
    break;
}
?>

<!doctype html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profil <?php echo $nama ?></title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <header>
    <div class="header-top">
      <h1>Profil <?php echo $nama ?></h1>

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
    <section id="home">
      <h2>Selamat Datang</h2>
      <p>
        Halo, saya <?= $nama ?>. Saya sedang mempelajari Pemrograman Web
        Dasar dengan <?= phi ?>.
      </p>

      <img src="img/foto-profil.jpg" alt="Foto profil Nama Mahasiswa" />
    </section>

    <section id="about">
      <h2>Tentang Saya</h2>

      <article>
        <h3>Profil Singkat</h3>
        <p>Saya mahasiswa Program Studi Sistem Informasi.</p>
        <?php
        if ($paras):
          echo "<p>Saya berwajah tampan (calon perwira).</p>";
        endif;
        ?>
        <p>Semester <?php echo $semester ?> (<?= $semesterku ?>). Pacarku <?= $pacarku ?></p>

        <h3>Target Belajar</h3>

        <ol>
          <li>Memahami struktur HTML5.</li>
          <li>Menyusun halaman web semantik.</li>
          <li>Memvalidasi dokumen HTML.</li>
        </ol>
      </article>
    </section>

    <section id="contact">
      <h2>Kontak</h2>

      <p>
        Kunjungi
        <a href="https://github.com/username">profil GitHub saya</a>.
      </p>

      <form id="contactForm" action="index.html" method="get" novalidate>
        <div class="form-group">
          <label for="nama">Nama Lengkap</label><br />

          <input
            class="input-form"
            type="text"
            id="nama"
            name="nama"
            placeholder="Masukkan nama lengkap"
            minlength="3"
            maxlength="50"
            required />
        </div>

        <div class="form-group">
          <label for="email">Email</label><br />

          <input
            class="input-form"
            type="email"
            id="email"
            name="email"
            placeholder="nama@email.com"
            required />
        </div>

        <div class="form-group">
          <label for="semester">Semester</label><br />

          <input
            class="input-form"
            type="number"
            id="semester"
            name="semester"
            min="1"
            max="14"
            required />
        </div>

        <div class="form-group">
          <label for="tanggal">Tanggal Kunjungan</label><br />

          <input
            class="input-form"
            type="date"
            id="tanggal"
            name="tanggal"
            required />
        </div>

        <div class="form-group">
          <p>Jenis Pesan</p>

          <input
            type="radio"
            id="pertanyaan"
            name="jenis_pesan"
            value="pertanyaan"
            required />
          <label for="pertanyaan">Pertanyaan</label>

          <input type="radio" id="saran" name="jenis_pesan" value="saran" />
          <label for="saran">Saran</label>
        </div>

        <div class="form-group">
          <p>Topik yang Diminati</p>

          <input type="checkbox" id="minat-html" name="minat" value="HTML" />
          <label for="minat-html">HTML</label>

          <input type="checkbox" id="minat-css" name="minat" value="CSS" />
          <label for="minat-css">CSS</label>
        </div>

        <div class="form-group">
          <label for="prodi">Program Studi</label><br />

          <select class="input-form" id="prodi" name="prodi" required>
            <option value="">-- Pilih Program Studi --</option>
            <option value="SI">Sistem Informasi</option>
            <option value="TI">Teknik Informatika</option>
          </select>
        </div>

        <div class="form-group">
          <label for="pesan">Pesan</label><br />

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
        <p id="formFeedback"></p>
      </form>
    </section>
  </main>

  <footer>
    <p>&copy; 2026 Nama Mahasiswa [NIM]</p>
  </footer>
  <script src="script.js"></script>
</body>

</html>