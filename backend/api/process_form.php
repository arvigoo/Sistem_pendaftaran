<?php
// Koneksi ke database
$servername = "localhost";
$username = "root"; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda
$dbname = "db_kerja_sistem_pendaftaran"; // Ganti dengan nama database Anda

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Ambil data dari formulir
$fullName = $_POST['full_name'];
$email = $_POST['email'];
$linkedin = $_POST['linkedin'];

// Fungsi untuk mendapatkan timestamp
function getTimestamp()
{
    date_default_timezone_set('Asia/Jakarta'); // Set zona waktu Indonesia
    return date("Ymdhis");
}

// Proses upload file CV
$cvFileName = "cv_" . strtolower(str_replace(' ', '_', $fullName)) . "_" . getTimestamp() . "_" . $_FILES['cv_file']['name'];
$cvTmpName = $_FILES['cv_file']['tmp_name'];
$cvSize = $_FILES['cv_file']['size'];
$cvType = $_FILES['cv_file']['type'];

$cvUploadPath = "uploads/cv/"; // Direktori tempat menyimpan file CV
$cvTargetPath = $cvUploadPath . $cvFileName;

// Proses upload file foto
$photoFileName = "foto_" . strtolower(str_replace(' ', '_', $fullName)) . "_" . getTimestamp() . "_" . $_FILES['photo_file']['name'];
$photoTmpName = $_FILES['photo_file']['tmp_name'];
$photoSize = $_FILES['photo_file']['size'];
$photoType = $_FILES['photo_file']['type'];

$photoUploadPath = "uploads/photo/"; // Direktori tempat menyimpan file foto
$photoTargetPath = $photoUploadPath . $photoFileName;

// Proses upload file surat referensi
$referenceFileName = "referensi_" . strtolower(str_replace(' ', '_', $fullName)) . "_" . getTimestamp() . "_" . $_FILES['reference_file']['name'];
$referenceTmpName = $_FILES['reference_file']['tmp_name'];
$referenceSize = $_FILES['reference_file']['size'];
$referenceType = $_FILES['reference_file']['type'];

$referenceUploadPath = "uploads/reference/"; // Direktori tempat menyimpan file surat referensi
$referenceTargetPath = $referenceUploadPath . $referenceFileName;

// Proses upload file KTP
$ktpFileName = "ktp_" . strtolower(str_replace(' ', '_', $fullName)) . "_" . getTimestamp() . "_" . $_FILES['ktp_file']['name'];
$ktpTmpName = $_FILES['ktp_file']['tmp_name'];
$ktpSize = $_FILES['ktp_file']['size'];
$ktpType = $_FILES['ktp_file']['type'];

$ktpUploadPath = "uploads/ktp/"; // Direktori tempat menyimpan file KTP
$ktpTargetPath = $ktpUploadPath . $ktpFileName;

// Pindahkan file CV ke direktori yang ditentukan
if (
    move_uploaded_file($cvTmpName, $cvTargetPath) &&
    move_uploaded_file($photoTmpName, $photoTargetPath) &&
    move_uploaded_file($referenceTmpName, $referenceTargetPath) &&
    move_uploaded_file($ktpTmpName, $ktpTargetPath)
) {
    echo "File berhasil diunggah.";
} else {
    echo "Gagal mengunggah file.";
}

// Query SQL untuk menyimpan data ke database
$sql = "INSERT INTO data_pendaftaran (full_name, email, linkedin, cv_file, photo_file, reference_file, ktp_file) VALUES ('$fullName', '$email', '$linkedin', '$cvFileName', '$photoFileName', '$referenceFileName', '$ktpFileName')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Pendaftaran berhasil! Data dan file telah disimpan.'); window.location.href='../../public_html/home.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi ke database
$conn->close();
?>