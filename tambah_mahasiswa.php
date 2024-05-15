<?php 
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

    // Mengambil nilai dari form
    $nama = $_POST['nama'];
    $domisili = $_POST['domisili'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $email = $_POST['email'];
    $no_tlp = $_POST['no_tlp'];

    // Membuat query
    $query = "INSERT INTO mahasiswa (nama, domisili, tempat_lahir, tanggal_lahir, alamat, jenis_kelamin, email, no_tlp) 
              VALUES ('$nama', '$domisili', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$jenis_kelamin', '$email', '$no_tlp')"; 

    // Menjalankan query
    $result = mysqli_query($koneksi, $query);

    // Memeriksa apakah query berhasil dieksekusi
    if ($result) { 
        $response = array("status" => "success", "id" => mysqli_insert_id($koneksi)); 
        echo json_encode($response); 
    } else { 
        echo json_encode(array("status" => "gagal", "error" => mysqli_error($koneksi))); 
    }
?>
