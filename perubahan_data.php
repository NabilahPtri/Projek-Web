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

    if (isset($_POST['id'])) {
        $id = $_POST['id']; 
        $nama = $_POST['nama']; 
        $domisili = $_POST['domisili']; 
        $tanggal_lahir = $_POST['tanggal_lahir']; 
        $tempat_lahir = $_POST['tempat_lahir']; 
        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $email = $_POST['email'];
        $no_tlp = $_POST['no_tlp'];

        $query = "UPDATE mahasiswa SET nama='$nama', domisili='$domisili', 
            tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', alamat='$alamat', jenis_kelamin='$jenis_kelamin', email='$email', no_tlp='$no_tlp'
            WHERE id='$id'";  

        $result = $koneksi->query($query); 
        if ($result) { 
            $response = array("status" => "success"); 
            echo json_encode($response); 
        } else { 
            echo json_encode(array("status" => "gagal", "error" => $koneksi->error)); 
        }
    }
?>
