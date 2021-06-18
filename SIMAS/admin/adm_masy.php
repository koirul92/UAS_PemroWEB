<?php
require "../koneksi.php";
include "../template/adm_nav.php";

require "../functions/function_masyadm.php";
$mhsadm_view = query_view("SELECT * FROM tb_aduan");
?>

<div class="container">
    <div class="table-responsive">
        <h3>Data Aduan Masyarakat</h3>
        <hr>
        </div>
        <table class="table table-stripped table-hover datatabel">
        <thead>
            <tr>
                <th>No</th>
                <th>KTP Msyarakat</th>
                <th>Nama</th>
                <th>Alamat Infrastruktur</th>
                <th>Email</th>
                <th>No. Telpon</th>
                <th>Opsi</th>                         
            </tr>
        </thead>  
        <tbody>
        <?php
            $i = 1;
            foreach($mhsadm_view as $row){
        ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row["ktp_masy"]; ?></td>
                <td><?php echo $row["nama_masy"]; ?></td>
                <td><?php echo $row["alamat"]; ?></td>
                <td><?php echo $row["email_masy"]; ?></td>
                <td><?php echo $row["notlp_masy"]; ?></td>
                <td>
                    <a href="../adm_masy/update_masy.php?id=<?php echo $row["id_masy"];?>" type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-cog"></span> Edit</a>
                    <a href="../adm_masy/hapus_masy.php?id=<?php echo $row["id_masy"];?>" onclick="return confirm('Yakin MENGHAPUS data ?');" type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
                </td>
            </tr>
        <?php
            }
        ?>
        </tbody>
        </table>          
    </div>
</div> <!--container-->

<?php
    include "../template/footer.php";
?>