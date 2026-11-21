<?php
// P11: Berkas koneksi PHP-MySQL menggunakan MySQLi (dapat digunakan kembali).
// Sejak PHP 8.1, MySQLi默认 melempar exception saat galat.
// Dimatikan agar kegagalan dapat diperiksa secara prosedural.
mysqli_report(MYSQLI_REPORT_OFF);

// Konfigurasi basis data (default Laragon, sesuaikan bila berbeda).
$hostAL = "localhost";
$userAL = "root";
$passAL = "";
$dbAL   = "db_pwd_2611510004";

// suppression (@) agar peringatan teknis tidak tampil di halaman.
$connAL = @mysqli_connect($hostAL, $userAL, $passAL, $dbAL);
$pesanKoneksi = "";

if (!$connAL):
  // Detail teknis dicatat di log peladen, bukan ditampilkan ke pengguna.
  error_log("Koneksi MySQL gagal: " . mysqli_connect_error());
  $pesanKoneksi = "Koneksi ke basis data gagal. Data kontak tidak dapat ditampilkan.";
else:
  mysqli_set_charset($connAL, "utf8mb4");
endif;
