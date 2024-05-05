<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Portfolio</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- jumbotron-header -->
    <div class="jumbotron text-center">
      <img
        src="img/pp-portfolio.png"
        alt="picture-profile"
        class="img-circle"
      />
      <h1>Ammar Bagas</h1>
      <p>Mahasiswa | Programmer | Developer</p>
    </div>
    <!-- jumbotron-header -->

    <!-- about -->
    <section class="about" id="about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">About</h2>
            <hr />
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 col-sm-offset-2">
            <p>Perkenalkan nama saya Ammar Bagas Fathurrahman Wantoro. Saya saat
            ini berumur 19 Tahun.Saat ini saya merupakan Mahasiswa Semester 2
            dari Universitas Jendral Achmad Yani. Di Universitas Jendral Achmad
            Yani saya mengambil jurusan informatika. Sebelum saya memulai kuliah
            saya berasall dari SMA 1 Negeri Ngamprah.</p>
          </div>

          <div class="col-sm-4">
            <p>Pada saat ini saya memiliki keahlian Informatika dasar seperti
            membuat sebuah Program - program sederhana. kemudian saya juga dapat
            membuat sebuah wen sederhana dengan menggunakan HTML CSS dan Java
            Script dengan menggunakan framework dari Bootstrap. Jika anda
            berminat anda dapat menghubungi saya melalui bagian Contact dengan
            mengirimkan email dan nomor telepon anda.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- about -->

    <!-- portfolio -->
    <section class="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2>Portfolio</h2>
            <hr />
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/1.png" alt="" />
            </a>
          </div>
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/2.png" alt="" />
            </a>
          </div>
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/3.png" alt="" />
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- portfolio -->

    <!-- contact -->
    <section class="contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2>Contact</h2>
            <hr />
          </div>
        </div>
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <form>
              <div class="from-group">
                <label for="nama">Nama</label>
                <input
                  type="text"
                  name="nama"
                  id="nama"
                  class="form-control"
                  placeholder="Masukan Nama"
                />
              </div>
              <div class="from-group">
                <label for="nama">Email</label>
                <input
                  type="email"
                  name="email"
                  id="email"
                  class="form-control"
                  placeholder="Masukan Email"
                />
              </div>
              <div class="from-group">
                <label for="telp">Telepon</label>
                <input
                  type="tel"
                  name="telp"
                  id="telp"
                  class="form-control"
                  placeholder="Masukan No Telepon"
                />
              </div>
              <div class="from-group">
                <label for="pesan">Pesan</label>
                <textarea
                  name="pesan"
                  id="pesan"
                  rows="5"
                  class="form-control"
                  placeholder="Masukan Pesan"
                ></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim!</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- contact -->

    <!-- footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <p>
              &copy;Copyright 2017 | built by
              <span class="glyphicon glyphicon-star"></span>
              <a href="https://www.instagram.com/marrrbagas/" target="_blank">Ammar Bagas</a>
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>