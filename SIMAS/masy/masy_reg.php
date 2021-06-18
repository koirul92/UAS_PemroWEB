<?php
include '../template/masy_nav.php';
require "../functions/function_masy.php";

//cek tombol submit ditekan/belum
if(isset($_POST["submit"])){
    
    //cek berhasil / tidak tambah data
    if(regis_mhs($_POST) > 0 ) {
        echo "
            <script>
                alert('data BERHASIL ditambahkan');
                document.location.href = '../masy/masy_home.php';
            </script>
        ";
    } else{
        echo "
            <script>
                alert('data GAGAL ditambahkan');
                document.location.href = '../masy/masy_home.php';
            </script>
        ";
    }

}
?>

<div class="container">
<div class="panel panel-default">
<div class="panel-heading">
<h1 align="center">Form Aduan Masyarakat</h1>
</div>
<div class="panel-body">
    <form class="form-horizontal" action="" method="post">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="control-label col-sm-4" for="ktp_mhs">KTP :</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="ktp_masy" name="ktp_masy" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="nama_masy">Nama Lengkap :</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama_masy" name="nama_masy" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="agama_masy">Agama :</label>
                <div class="col-sm-8"><select id="agama_masy" name="agama_masy" class="form-control select2" style="width: 100%;">
                    <option value="-" selected="selected">---</option>
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
                <label class="control-label col-sm-4" for="tgllapor_masy">Tanggal Lapor :</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="tgllapor_masy" name="tgllapor_masy" required>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label class="control-label col-sm-4" for="jk_masy">Jenis Kelamin :</label>
                <div class="col-sm-8"><select id="jk_masy" name="jk_masy" class="form-control select2" style="width: 100%;">
                    <option value="-" selected="selected">---</option>
                    <option value="Laki">Laki laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="alamat">Alamat Infrastruktur :</label>
                <div class="col-sm-8">
                    <textarea id="alamat" name="alamat" class="form-control" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="email_masy">Email :</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="email_masy" name="email_masy" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="notlp_masy">No. Telepon :</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="notlp_masy" name="notlp_masy" required>
                </div>
            </div>
        </div> 
    </div>
    <hr>
    <button type="submit" name="submit" class="btn btn-primary">Register Data</button>
    <a href="../masy/masy_home.php" class="btn btn-danger">Batal</a>
    </form>
</div>
</div>
</div>


<?php
include '../template/footer.php';
?>