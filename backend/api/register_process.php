<?php
// Koneksi ke database
include 'config.php';

// Ambil data dari formulir
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

// Simpan data ke database
$query = "INSERT INTO users (nama, username, password) VALUES ('$nama', '$username', '$password')";
mysqli_query($conn, $query);

// Redirect ke halaman login
header("Location: login.php");
exit();
?>
