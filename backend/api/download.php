<?php
// Include your PHP code for database connection here
include 'config.php';

// Membaca ID yang diinginkan dari URL atau form, sesuai dengan kebutuhan aplikasi Anda
$id = $_GET['id']; // Ubah ini sesuai dengan cara Anda mengambil ID

// Query database untuk mendapatkan data dengan ID tertentu
$sql = "SELECT * FROM data_pendaftaran WHERE id = $id";
$result = $conn->query($sql);

// Membuat nama file ZIP
$zipFilename = '';

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $zipFilename = 'data_' . $row['id'] . '_' . str_replace(' ', '_', $row['full_name']);
} else {
    // Jika tidak ada data, tambahkan timestamp
    $zipFilename = 'data_' . date('YmdHis');
}

$zipFilename .= '.zip';

// Menggunakan library ZipArchive untuk membuat arsip
$zip = new ZipArchive();

if ($zip->open($zipFilename, ZipArchive::CREATE) === TRUE) {
    // Tambahkan file ke dalam arsip dengan struktur direktori
    $cvFilePath = 'uploads/cv/' . $row['cv_file'];
    $photoFilePath = 'uploads/photo/' . $row['photo_file'];
    $referenceFilePath = 'uploads/reference/' . $row['reference_file'];
    $ktpFilePath = 'uploads/ktp/' . $row['ktp_file'];

    // Pastikan file ada dan dapat diakses
    if (file_exists($cvFilePath) && file_exists($photoFilePath) && file_exists($referenceFilePath) && file_exists($ktpFilePath)) {
        $zip->addFile($cvFilePath, 'files/cv/' . basename($cvFilePath));
        $zip->addFile($photoFilePath, 'files/photo/' . basename($photoFilePath));
        $zip->addFile($referenceFilePath, 'files/reference/' . basename($referenceFilePath));
        $zip->addFile($ktpFilePath, 'files/ktp/' . basename($ktpFilePath));
        // Tambahkan file lain sesuai kebutuhan
    } else {
        echo "File not found: $cvFilePath, $photoFilePath, $referenceFilePath, or $ktpFilePath\n";
    }

    // Tutup arsip
    $zip->close();

    // Tentukan header untuk browser agar mendownload file
    header("Content-Type: application/zip");
    header("Content-disposition: attachment; filename=$zipFilename");
    header("Content-Length: " . filesize($zipFilename));

    // Baca file dan kirimkan isinya ke browser
    readfile($zipFilename);

    // Hapus file zip setelah diunduh
    unlink($zipFilename);
} else {
    echo "Failed to create zip file.";
}

$conn->close();
?>