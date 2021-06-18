<?php
include '../template/adm_nav.php';
require "../functions/function_masyadm.php";

//ambil data url
$id = $_GET["id"];

//data mhs berdasarkan ID
$data_masy = query_view("SELECT * FROM tb_aduan WHERE id_masy = $id")[0];

//cek tombol submit ditekan/belum
if(isset($_POST["submit"])){
    
    //cek berhasil / tidak update data
    if(update($_POST) > 0 ) {
        echo "
            <script>
                alert('data BERHASIL diupdate');
                document.location.href = '../admin/adm_masy.php';
            </script>
        ";
    } else{
        echo "
            <script>
                alert('data GAGAL diupdate');
                document.location.href = '../admin/adm_masy.php';
            </script>
        ";
    }
}
?>

<div class="container">
<div class="panel panel-default">
<div class="panel-heading">
<h1 align="center">Edit Data Aduan</h1>
</div>
<div class="panel-body">
    <form class="form-horizontal" action="" method="post">
    <div class="row">
        <div class="col-lg-6">
            <input type="hidden" name="id" value="<?php echo $data_masy["id_masy"];?>">
            <div class="form-group">
                <label class="control-label col-sm-4" for="ktp_masy">KTP :</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="ktp_masy" name="ktp_masy" readonly value="<?php echo $data_masy["ktp_masy"];?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="nama_masy">Nama Lengkap :</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama_masy" name="nama_masy" required value="<?php echo $data_masy["nama_masy"];?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="agama_masy">Agama :</label>
                <div class="col-sm-8"><select id="agama_masy" name="agama_masy" class="form-control select2" style="width: 100%;">
                    <option value="<?php echo $data_masy["agama_masy"];?>" selected="selected"><?php echo $data_masy["agama_masy"];?></option>
                    <option value="-">---</option>
                    <option value="Muslim">Muslim</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Konghucu">Konghucu</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="tgllapor_masy">Tanggal Lahir :</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="tgllapor_masy" name="tgllapor_masy" required value="<?php echo $data_masy["tgllapor_masy"];?>">
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label class="control-label col-sm-4" for="jk_masy">Jenis Kelamin :</label>
                <div class="col-sm-8"><select id="jk_mhs" name="jk_masy" class="form-control select2" style="width: 100%;">
                    <option value="<?php echo $data_masy["jk_masy"];?>" selected="selected"><?php echo $data_masy["jk_masy"];?></option>
                    <option value="Laki">Laki laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="alamat_masy">Alamat Infrastruktur :</label>
                <div class="col-sm-8">
                    <textarea id="alamat" name="alamat" class="form-control" required><?php echo $data_masy["alamat"];?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="email_masy">Email :</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="email_masy" name="email_masy" required value="<?php echo $data_masy["email_masy"];?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="notlp_masy">No. Telepon :</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="notlp_masy" name="notlp_masy" required value="<?php echo $data_masy["notlp_masy"];?>">
                </div>
            </div>
        </div>
    </div>
    <hr>
    <button type="submit" name="submit" class="btn btn-primary">Edit Data Masyarakat</button>
    <a href="../admin/adm_masy.php" class="btn btn-danger">Batal</a>
    </form>
</div>
</div>
</div>


<?php
include '../template/footer.php';
?>