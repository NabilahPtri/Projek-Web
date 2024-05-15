<?php
// Konfigurasi koneksi ke MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "praktikumweb";

// Membuat koneksi
$koneksi = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Periksa apakah "id" tersedia dalam permintaan POST
if (isset($_POST['id'])) {
    // Ambil nilai "id" dari permintaan POST
    $id = $_POST['id'];

    // Persiapkan pernyataan DELETE
    $sql = "DELETE FROM mahasiswa WHERE id = $id";

    // Lakukan eksekusi pernyataan DELETE
    if (mysqli_query($koneksi, $sql)) {
        echo "Data berhasil dihapus";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
} else {
    echo "ID tidak tersedia dalam permintaan POST";
}
?>
