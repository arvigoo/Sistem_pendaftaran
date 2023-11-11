<?php
// backend/config.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_kerja_sistem_pendaftaran";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}
?>