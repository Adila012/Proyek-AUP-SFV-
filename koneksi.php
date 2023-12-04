<?php     //untuk membuat koneksi dari bahasa pemrog PHP ke database yg akan digunakan

    $hostname = "localhost";
    $username = "u200536601_sauzanyulia";
    $password = "Zahra28112003";
    $database = "u200536601_logfish2";

    $koneksi = mysqli_connect($hostname, $username, $password, $database);
    //jika tidak menampilkan apapun maka koneksi ke phpnya berhasil


?>