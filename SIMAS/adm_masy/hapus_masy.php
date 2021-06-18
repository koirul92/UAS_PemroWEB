<?php
require "../functions/function_masyadm.php";

$id = $_GET["id"];

if(hapus($id) > 0 ) {
    echo "
    <script>
        alert('data BERHASIL dihapus');
        document.location.href = '../admin/adm_masy.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('data GAGAL dihapus');
        document.location.href = '../admin/adm_masyphp';
    </script>
    ";
}
?>