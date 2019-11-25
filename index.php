<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMP IT Permata Madani</title>
    <!-- Favicons -->
    <link href="img/favicon.ico" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
</head>

<body>

    <br>
    <br>
    <!--- Include the above in your HEAD tag ---------->

    <div class="container">
        <form method="post" class="form-horizontal" >
            <p align="center"><img  src='images/logo.png' alt='' width='150px' ></p>
            
            <h1 class="text-center">Pendaftaran Calon Siswa SMP IT Permata Madani </h1>
            <br>
            <div class="form-group">
                <label class="col-sm-3 control-label">NISN*</label>
                <div class="col-sm-9">
                    <input type="number" name="nisn" placeholder="Masukan NISN" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Nama Lengkap*</label>
                <div class="col-sm-9">
                    <input type="text" name="nama" placeholder="Masukan Nama Lengkap" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Alamat*</label>
                <div class="col-sm-9">
                    <input type="text" name="alamat" placeholder="Masukan Alamat" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Jenis Kelamin*</label>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" name="jenis_kelamin" value="P" checked>Perempuan
                            </label>
                        </div>
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" name="jenis_kelamin" value="L">Laki-Laki
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"> Tempat Lahir*</label>
                <div class="col-sm-9">
                    <input type="text" name="tempat_lahir" placeholder="Masukin Tempat Lahir" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Tanggal Lahir*</label>
                <div class="col-sm-9">
                    <input type="date" name="tanggal_lahir" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Asal Sekolah* </label>
                <div class="col-sm-9">
                    <input type="text" name="asal_sekolah" placeholder="Masukin Alamat Asal Sekolah"
                        class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Alamat Asal Sekolah* </label>
                <div class="col-sm-9">
                    <input type="text" name="alamat_asl_sekolah" placeholder="Masukin Alamat Asal Sekolah "
                        class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Nama Orang Tua* </label>
                <div class="col-sm-9">
                    <input type="text" name="nama_orang_tua" placeholder="Masukin Orang Tua " class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Nama Wali* </label>
                <div class="col-sm-9">
                    <input type="text" name="nama_wali" placeholder="Masukin Nama Wali " class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Agama</label>
                <div class="col-sm-9">
                    <select name="agama" class="form-control">
                        <option> Pilih...</option>
                        <option value="islam" selected="">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="katolik">Katolik</option>
                        <option value="hindu">Hindu</option>
                        <option value="buddha">Buddha</option>
                        <option value="konghucu">Konghucu</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">No. Telepon* </label>
                <div class="col-sm-9">
                    <input type="number" name="no_tlp" placeholder="Masukin Nomor Telepon " class="form-control">
                </div>
            </div>

            <button  name="submit" class="btn btn-primary btn-block">Daftar</button>
        </form> <!-- /form -->
    </div> <!-- ./container -->
    <br>
    <br>
    <?php

            if (isset($_POST["submit"])){

              $nisn = $_POST["nisn"];
              $nama = $_POST["nama"];
              $alamat = $_POST["alamat"];
              $jenis_kelamin = $_POST["jenis_kelamin"];
              $tempat_lahir = $_POST["tempat_lahir"];
              $tanggal_lahir = $_POST["tanggal_lahir"];
              $asal_sekolah = $_POST["asal_sekolah"];
              $alamat_asl_sekolah = $_POST["alamat_asl_sekolah"];
              $nama_orang_tua = $_POST["nama_orang_tua"];
              $nama_wali = $_POST["nama_wali"];
              $agama = $_POST["agama"];
              $no_tlp = $_POST["no_tlp"];

                //cek apakah email sudah digunakan
                $ambil = $koneksi->query("SELECT * FROM pendaftaran
                WHERE nisn='$nisn'");
              $yangcocok = $ambil->num_rows;
              if ($yangcocok==1) {
                echo "<script>alert('pendaftaran gagal, nisn sudah digunakan');</script>";
                echo "<script>location='index.php'</script>";
              }else {
             $koneksi->query("INSERT INTO pendaftaran
                  (nisn,nama,alamat,jenis_kelamin,tempat_lahir,tanggal_lahir,asal_sekolah,alamat_asl_sekolah,nama_orang_tua,nama_wali,agama,no_tlp)
                  VALUES('$nisn','$nama','$alamat','$jenis_kelamin','$tempat_lahir','$tanggal_lahir','$asal_sekolah','$alamat_asl_sekolah','$nama_orang_tua','$nama_wali','$agama','$no_tlp') ");

                echo "<script>alert('pendaftaran sukses, silahkan login');</script>";
                echo "<script>location='login.php'</script>";
              }
            }
            ?>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->


</body>

</html>
