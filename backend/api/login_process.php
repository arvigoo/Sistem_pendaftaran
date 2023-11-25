<?php
// Koneksi ke database
include 'config.php';

// Ambil data dari formulir
$username = $_POST['username'];
$password = $_POST['password'];

// Ambil data dari database berdasarkan username
$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

// Verifikasi password
if ($user && password_verify($password, $user['password'])) {
    echo "Login berhasil. Selamat datang, " . $user['nama'];
} else {
    echo "Login gagal. Periksa kembali username dan password.";
}
?>
