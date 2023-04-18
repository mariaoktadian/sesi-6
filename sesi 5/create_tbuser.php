<?php
    include_once("konfigurasi.php");

    $tbname = "tbUSER";

    $sql = "CREATE TABLE $tbname(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(50) NOT NULL,
        email VARCHAR(255) NOT NULL,
        username VARCHAR(20),
        paskey VARCHAR(255),
        iduser VARCHAR(255)
    );";

    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or die("koneksi Gagal");
    
    $hasil = mysqli_query($cnn,$sql);
    if($hasil){
        echo "tabel $tbname, berhasil dibuat";
    }else{
        echo "tabel $tbname, gagal dibuat";
    }

    mysqli_close($cnn);