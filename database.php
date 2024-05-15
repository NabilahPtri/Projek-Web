<?php 
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "praktikumweb"; 
 
    // Membuak koneksi dengan MySQLi 
    $koneksi = new mysqli($servername, $username, $password, $dbname); 
    // Memeriksa kesalahan koneksi 
    if($koneksi){
        echo 'berhasil';
    } else {
        echo 'gagal';
    }
?>