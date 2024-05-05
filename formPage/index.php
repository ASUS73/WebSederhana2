<?php
  include "../database/db.php";

  if (isset($_GET["id"])) {
    $id = $_GET["id"];
  }

  $sql = "SELECT * FROM user";
  $result = mysqli_query($connect, $sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="../src/style.css">
    <link rel="stylesheet" type="text/css" href="../src/css/bootstrap.min.css">
  </head>
  <body>
    <!-- NAVBAR -->
    <?php include "../homePage.php"; ?>
    <!-- NAVBAR SELESAI -->

    <!-- MAIN -->
    <div class="container-fluid mt-4">
      <div class="row">
        <div class="col-md-12">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Form</h5>
              <hr />
              <h6 class="card-subtitle mb-2 text-body-secondary">
                Pengertian Form
              </h6>
              <p class="card-text">
                Berdasarkan buku Bahasa HTML oleh L. Erawan, form adalah suatu
                bagian yang berfungsi sebagai input atau masukan dari pengguna
                yang kemudian akan diproses atau diolah agar dapat dipakai
                sesuai kebutuhan.
              </p>
              <h6 class="card-subtitle mb-2 text-body-secondary">
                Fungsi Form
              </h6>
              <div class="card-text">
                form digunakan untuk mengirimkan data ke server. Contohnya,
                proses mengirimkan data, menghapus dan menyunting data,
                menjelajah (browse), serta lain sebagainya.
              </div>
              <br />
              <h6 class="card-subtitle mb-2 text-body-secondary">Sumber</h6>
              <a
                href="https://kumparan.com/kabar-harian/definisi-form-dan-jenis-media-inputnya-1wvimS8amia/1"
                target="_blank"
                class="card-link"
                >Klik Disini</a
              >
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-4">
          <div class="card">
            <img src="../img/form1.png" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Form 1</h5>
              <p class="card-text">
                Pada Form 1 ini di dalam nya terdapat sebuah form formulir yang
                dapat di isi oleh pengunjung web
              </p>
              <a href="form.php" target="_blank" class="btn btn-primary">Klik Untuk Melihat</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="../img/form2.png" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Form 2</h5>
              <p class="card-text">
                Pada Form 2 ini di dalam nya terdapat sebuah form input yang
                dapat di isi oleh pengunjung web
              </p>
              <a href="form2.php" target="_blank" class="btn btn-primary">Klik Untuk Melihat</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="../img/form3_2.png" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Form 3</h5>
              <p class="card-text">
                Pada Form 2 ini di dalam nya terdapat sebuah form daftar mahasiswa yang
                dapat di isi oleh pengunjung web
              </p>
              <a href="WebsiteSederhanaRev/index.php" target="_blank" class="btn btn-primary">Klik Untuk Melihat</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="../src/js/bootstrap.bundle.js"></script>
  </body>
</html>