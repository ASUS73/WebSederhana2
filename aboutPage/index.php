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
    <div class="container-fluid mt-3">
      <div class="row">
        <div class="col-md-4">
          <div class="card pt-3">
            <img
              src="../img/pp-portfolio.png"
              class="card-img-top rounded-circle mx-auto"
              style="width: 220px"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Ammar Bagas F.W</h5>
              <p class="card-text">
                Halo perkenalkan nama saya Ammar Bagas Fathurrahman Wantoro saya
                adalah salah satu pembuat web ini klik tombol portofolio untuk
                melihat lebih lengkap
              </p>
              <a href="portfolio_Ammar/index.php" target="_blank" class="btn btn-primary">Go Portofolio</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card pt-3">
            <img
              src="../img/user.png"
              class="card-img-top rounded-circle mx-auto"
              style="width: 220px"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Muhamad Yusron N</h5>
              <p class="card-text">
                Halo perkenalkan nama saya Muhamad Yusron Noval, saya ikut serta dalam pembuatan website ini. Dalam pembuatan website ini saya berada di posisi Back-End. Klik tombol portofolio untuk melihat lebih lengkap.
              </p>
              <a href="portfolio_Yusron/index.php" target="_blank" class="btn btn-primary">Go Portofolio</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card pt-3">
            <img
              src="../img/admin.jpg"
              class="card-img-top rounded-circle mx-auto"
              style="width: 220px"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Muhammad Abhinaya R.A</h5>
              <p class="card-text">
                Halo perkenalkan nama saya Muhammad Abhinaya Rakan A saya
                adalah salah satu pembuat web ini klik tombol portofolio untuk
                melihat lebih lengkap
              </p>
              <a href="#" target="_blank" class="btn btn-primary">Go Portofolio</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- MAIN -->

    <script type="text/javascript" src="../src/js/bootstrap.bundle.js"></script>
  </body>
</html>