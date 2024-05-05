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
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">HTML</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">
                Hyper Text Markup Language
              </h6>
              <p class="card-text">
                HTML adalah kependekan dari Hypertext Markup Language yang
                merupakan sebuah bahasa markup. HTML adalah kode untuk membuat
                struktur halaman suatu website yang menarik, saling terhubung
                satu dengan yang lainnya, dan yang pasti dapat diakses melalui
                internet. Awalnya html ditemukan oleh Tim Berners-Lee pada tahun
                1991. HTML adalah solusi untuk membantu ilmuwan dalam mengakses
                dokumen, namun kini html semakin berkembang pesat di dunia
                pemrograman web. Bagi pemula yang ingin memulai belajar
                pemrograman web dan bingung belajar bahasa markup apa, HTML
                adalah jawabannya. HTML dianggap mudah dipahami oleh orang awam
                karena tag dasar html mudah dibaca dan diimplementasikan. HTML
                biasanya ditempatkan atau disimpan pada sebuah file bernama file
                HTML. Isi dari file tersebut yaitu kombinasi simbol dan juga
                teks.
              </p>
              <h6 class="card-subtitle mb-2 text-body-secondary">
                Fungsi HTML
              </h6>
              <div class="card-text">
                <ol type="1">
                  <li>Berfungsi untuk Membuat Website</li>
                  <li>Berfungsi sebagai Hyperlink</li>
                  <li>Sebagai Pondasi Website</li>
                  <li>Berfungsi untuk Menambah Multimedia pada Website</li>
                  <li>Sebagai Penanda Teks dan Bagian Website</li>
                </ol>
              </div>
              <br />
              <h6 class="card-subtitle mb-2 text-body-secondary">Sumber</h6>
              <a
                href="https://www.domainesia.com/berita/html-adalah/"
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
            <img src="../img/table1Html.png" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Table 1</h5>
              <p class="card-text">
                Table 1 ini merupakan contoh sebuah web yang dibuat menggunakan
                HTML yang di dalam nya terdapat sebuah data Mahasiswa di dalam
                table
              </p>
              <a href="table1.php" target="_blank" class="btn btn-primary">Klik Untuk Melihat</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="../img/table3Html.png" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Table 2</h5>
              <p class="card-text">
                Table 2 ini merupakan contoh sebuah web yang dibuat menggunakan
                HTML yang di dalam nya terdapat sebuah data produk di dalam
                table
              </p>
              <a href="table3.php" target="_blank" class="btn btn-primary">Klik Untuk Melihat</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="../img/table4Html.png" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Table 3</h5>
              <p class="card-text">
                Table 3 ini merupakan contoh sebuah web yang dibuat menggunakan
                HTML yang di dalam nya terdapat sebuah data list dan foto di dalam
                table
              </p>
              <a href="table4.php" target="_blank" class="btn btn-primary">Klik Untuk Melihat</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="../src/js/bootstrap.bundle.js"></script>
  </body>
</html>