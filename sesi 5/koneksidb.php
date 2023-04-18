<?php   
    include("konfigurasi.php");

    // echo "host: " .DBHOST;
    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS);
    if($cnn){
        echo "koneksi sukses";
        $sql1 = "CREATE DATABASE " . DBNAME;

        $hasil = mysqli_query($cnn,$sql1);

        if($hasil){
            echo "Database " . DBNAME . "berhasil dibuat";
        }else{
            echo "Database " . DBNAME . "gagal dibuat";
        }
    }else{
        echo "koneksi Gagal<br>" . mysqli_connect_error();
    }