<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>daftar</title>
  <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>

  <!-- navbar-->

  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 >Daftar Pelanggan</h1>
          </div>
          <div class="panel-body">
            <form method="post" class="form-horisontal">
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

              </div>
              <div class="form-group">
                <div class="col-md-7 col-md-offset-3">
                  <button class="btn btn-primary" name="submit">Daftar</button>
                </div>
              </div>
            </form>
            <?php
            //jika ada tombok daftar(ditekan tombol daftar)
            if (isset($_POST["submit"])){
                //mengambil isian nama,email,passwod,alamat,telepon
              $nama = $_POST["nama"];
              $nisn = $_POST["nisn"];


                //cek apakah email sudah digunakan
              $ambil = $koneksi->query("SELECT * FROM pendaftaran
                WHERE nama='$nama'");
              $yangcocok = $ambil->num_rows;
              if ($yangcocok==1) {
                echo "<script>alert('pendaftaran gagal, email sudah digunakan');</script>";
                echo "<script>location='daftar.php'</script>";
              }else {
                  //query insert ke tabel Pelanggan
                $koneksi->query("INSERT INTO pendaftaran
                  (nama,nisn)
                  VALUES('$nama','$nisn') ");

                echo "<script>alert('pendaftaran sukses, silahkan login');</script>";

              }
                //query insert ke tabel pelanggan

            }


            ?>
          </div>
        </div>
      </div>
    </div>

  </div>
</body>
</html>
