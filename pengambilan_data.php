<?php 
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "praktikumweb"; 
 
    // Membuat koneksi 
    $koneksi = mysqli_connect($servername, $username, $password, $dbname); 
    
    // Memeriksa kesalahan koneksi 
    if(!$koneksi){
        die('Koneksi gagal: ' . mysqli_connect_error());
    } else {
        echo 'Koneksi berhasil';
    }

    $result = $koneksi->query("SELECT * FROM mahasiswa"); 
    if ($result->num_rows > 0) { 
        $data = array(); 
        while ($row = mysqli_fetch_assoc($result)) { 
            $data[] = array( 
                "id" => $row['id'], 
                "nama" => $row['nama'],
                "domisili" => $row['domisili'], 
                "tempat_lahir" => $row['tempat_lahir'], 
                "tanggal_lahir" => $row['tanggal_lahir'],
                "alamat" => $row['alamat'],
                "jenis_kelamin" => $row['jenis_kelamin'],
                "email" => $row['email'],
                "no_tlp" => $row['no_tlp']
            ); 
        } 
        echo json_encode(array("status" => "success", "data" => $data)); 
    } else { 
        echo json_encode(array("status" => "gagal")); 
    } 
?>
