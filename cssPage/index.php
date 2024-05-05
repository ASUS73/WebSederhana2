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
              <h5 class="card-title">CSS</h5>
              <hr />
              <h6 class="card-subtitle mb-2 text-body-secondary">
                Cascading Style Sheet
              </h6>
              <p class="card-text">
                CSS adalah bahasa Cascading Style Sheet dan biasanya digunakan
                untuk mengatur tampilan elemen yang tertulis dalam bahasa
                markup, seperti HTML. CSS berfungsi untuk memisahkan konten dari
                tampilan visualnya di situs. CSS dibuat dan dikembangkan oleh
                W3C (World Wide Web Consortium) pada tahun 1996 untuk alasan
                yang sederhana. Dulu HTML tidak dilengkapi dengan tags yang
                berfungsi untuk memformat halaman. Anda hanya perlu menulis
                markup untuk situs.
              </p>
              <h6 class="card-subtitle mb-2 text-body-secondary">
                Fungsi HTML
              </h6>
              <div class="card-text">
                <ol type="1">
                  <li>Mengatur Warna (Color)</li>
                  <li>Mengatur Ukuran Font (Font Size)</li>
                  <li>Mengatur Posisi dan Ruang Antar Elemen (Layout)</li>
                  <li>Mengubah Bentuk dan Ukuran Elemen (Box Model)</li>
                  <li>Mengatur Tampilan Gambar (Background)</li>
                  <li>Mengatur Efek Hover (Pseudo-Class)</li>
                  <li>Mengatur Tampilan Responsif (Media Queries)</li>
                  <li>
                    Mengatur Animasi dan Transisi (Animations dan Transitions)
                  </li>
                </ol>
              </div>
              <br />
              <h6 class="card-subtitle mb-2 text-body-secondary">Sumber</h6>
              <a
                href="https://danacita.co.id/blog/apa-itu-css-penjelasan-beserta-fungsi-fungsinya/"
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
            <img src="../img/CSS 1.png" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">CSS 1</h5>
              <p class="card-text">
                Pada Web CSS 1 dibuat dengan menggunakan HTML dan CSS, didalam
                nya terdapat sebuah table yang menggunakan pseudo class
              </p>
              <a href="latihan5.php" target="_blank" class="btn btn-primary">Klik Untuk Melihat</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="../img/CSS 2.png" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">CSS 2</h5>
              <p class="card-text">
                Pada Web CSS 1 dibuat dengan menggunakan HTML dan CSS, didalam
                nya terdapat sebuah form yang dimodifikasi menggunakan CSS
              </p>
              <a href="latihan6.php" target="_blank" class="btn btn-primary">Klik Untuk Melihat</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="../img/CSS 3.png" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">CSS 3</h5>
              <p class="card-text">
                Pada Web CSS 1 dibuat dengan menggunakan HTML dan CSS, didalam
                nya terdapat sebuah bagian-bagian untuk content.
              </p>
              <a href="tugas4.php" target="_blank" class="btn btn-primary">Klik Untuk Melihat</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="../src/js/bootstrap.bundle.js"></script>
  </body>
</html>