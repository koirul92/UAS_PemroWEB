<?php
require "koneksi.php";

function query_view($query_view) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query_view);
    $rows = [];

    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function hapus($id_masy){
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM tb_aduan WHERE id_masy = $id_masy");

    return mysqli_affected_rows($koneksi);
}

function update($data_masy) {
    global $koneksi;
    //ambil elemen data
    $id_masy = $data_masy["id"];
    $ktp = htmlspecialchars($data_masy["ktp_masy"]);
    $nama = htmlspecialchars($data_masy["nama_masy"]);
    $agama = htmlspecialchars($data_masy["agama_masy"]);
    $tgllapor = htmlspecialchars($data_masy["tgllapor_masy"]);
    $jk = htmlspecialchars($data_masy["jk_masy"]);
    $alamat = htmlspecialchars($data_masy["alamat"]);
    $email = htmlspecialchars($data_masy["email_masy"]);
    $notlp = htmlspecialchars($data_masy["notlp_masy"]);

    //query
    $query = "UPDATE tb_aduan SET
                ktp_masy = '$ktp',
                nama_masy = '$nama',
                agama_masy = '$agama',
                tgllapor_masy = '$tgllapor',
                jk_masy = '$jk',
                alamat = '$alamat',
                email_masy = '$email',
                notlp_masy = '$notlp'
            WHERE id_masy = $id_masy
            ";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

?>