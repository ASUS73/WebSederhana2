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

    <div class="container-fluid mt-4">
      	<div class="row">
        	<div class="col-md-12">
          		<div class="card">
            		<div class="card-body">
              			<h5 class="card-title">PHP</h5>
              			<h6 class="card-subtitle mb-2 text-body-secondary">
                			PHP adalah php: Hypertext Preprocessor
              			</h6>
		              	<p class="card-text">
			                PHP (Hypertext Preprocessor) adalah bahasa pemrograman open-source yang umumnya digunakan untuk membangun aplikasi web dinamis dan interaktif. PHP dapat dijalankan pada server web dan dikombinasikan dengan HTML, CSS, dan JavaScript untuk membuat halaman web yang dinamis.Saat ini, PHP sangat populer di kalangan web developer karena mudah dipelajari dan memiliki kemampuan yang cukup kuat. PHP juga mendukung banyak jenis database, seperti MySQL, PostgreSQL, dan Oracle sehingga memungkinkan pengembang untuk membuat aplikasi web yang lebih kompleks dan fungsional.Sebagai bahasa penulisan skrip atau bahasa yang mengotomatiskan eksekusi task, PHP sebenarnya mirip dengan JavaScript dan Python. Namun yang membedakannya adalah PHP digunakan untuk komunkasi di sisi server. Sedangkan, JavaScript digunakan untuk frontend dan backend, sera Python hanya untuk sisi server (backend).
		              	</p><br>
		              	<h6 class="card-subtitle mb-2 text-body-secondary">
		                	Fungsi PHP
		              	</h6>
				      	<div class="card-text">
				      	  <p class="card-text">
				      	  	Sebagaimana telah diketahui, fungsi PHP umumnya adalah untuk mengubah halaman statis menjadi halaman dinamis. Dengan PHP, website dapat menyesuaikan tampilan konten berdasarkan situasi.Selain itu, PHP juga memiliki beberapa fungsi lainnya, seperti untuk mengumpulkan data form, menambahkan, menghapus, dan memodifikasi data di database, serta mengontrol akses pengguna, enkripsi data.
				      	  </p>
				      	</div>
		              	<br />
		              	<h6 class="card-subtitle mb-2 text-body-secondary">Sumber</h6>
		              	<a
		              	  href="https://www.biznetgio.com/news/apa-itu-php"
		              	  target="_blank"
		              	  class="card-link"
		              	  >Klik Disini</a
		              	>
            		</div>
          		</div>
        	</div>
      	</div>
    </div>

    <script type="text/javascript" src="../src/js/bootstrap.bundle.js"></script>
  </body>
</html>