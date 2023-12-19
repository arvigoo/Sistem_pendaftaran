<?php
// Sertakan file konfigurasi
require_once('config.php');

// Kode backend untuk mengambil data pengajuan dari database
$query = "SELECT * FROM data_pendaftaran";
$result = $conn->query($query);

// Cek apakah ada hasil query
if ($result->num_rows > 0) {
    $no = 1;

    // Loop melalui hasil query
    while ($data_pendaftaran = $result->fetch_assoc()) {
        $statusClass = '';

        switch ($data_pendaftaran['status']) {
            case 'Proses':
                $statusClass = 'text-warning';
                break;
            case 'Diterima':
                $statusClass = 'text-success';
                break;
            case 'Ditolak':
                $statusClass = 'text-danger';
                break;
            default:
                $statusClass = '';
                break;
        }

        echo "<tr>
                <td>{$no}</td>
                <td>{$data_pendaftaran['full_name']}</td>
                <td>{$data_pendaftaran['email']}</td>
                <td class='{$statusClass}'>{$data_pendaftaran['status']}</td>
                
            </tr>";
        $no++;
    }
} else {
    // Jika tidak ada hasil, tampilkan pesan atau aksi yang sesuai
    echo "<tr><td colspan='5'>Tidak ada pengajuan ditemukan.</td></tr>";
}
?>