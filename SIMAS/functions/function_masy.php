<?php
require "koneksi.php";

function regis_mhs($data_masy){
    global $koneksi;
    //ambil elemen data
    $ktp = htmlspecialchars($data_masy["ktp_masy"]);
    $nama = htmlspecialchars($data_masy["nama_masy"]);
    $agama = htmlspecialchars($data_masy["agama_masy"]);
    $tgllahir = htmlspecialchars($data_masy["tgllapor_masy"]);
    $jk = htmlspecialchars($data_masy["jk_masy"]);
    $alamat = htmlspecialchars($data_masy["alamat"]);
    $email = htmlspecialchars($data_masy["email_masy"]);
    $notlp = htmlspecialchars($data_masy["notlp_masy"]);

    //query
    $query = "INSERT INTO tb_aduan
                VALUES
                ('','$ktp', '$nama', '$agama', '$tgllahir',
                '$jk', '$alamat', '$email', '$notlp')
            ";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

?>