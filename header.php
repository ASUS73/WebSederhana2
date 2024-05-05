<!--NAVBAR -->
<nav class="navbar navbar-expand-lg bg-light text-light">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold fs-4 link" href="index.php"><b>MyWeb</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-dark" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tugas
          </a>
          <ul class="dropdown-menu bg-body-secondary">
            <li><a class="dropdown-item" href="formPage/index.php">Form</a></li>
            <li><a class="dropdown-item" href="cssPage/index.php">CSS</a></li>
            <li><a class="dropdown-item" href="htmlPage/index.php">HTML</a></li>
            <li><a class="dropdown-item" href="phpPage/index.php">PHP</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a href="" class="nav-link dropdown-toggle text-dark" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profil
          </a>
          <ul class="dropdown-menu bg-body-secondary">
            <?php
                $i = 1;

                if ($result) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    $nama = $row["nama"];
                    $nim = $row["nim"];
                    $kelas = $row["kelas"];
                    $angkatan = $row["angkatan"];

                    echo "
                      <li><a class='dropdown-item' href='mhsPage/index.php?id=".$nim."'>Mhs".$i++."</a></li>
                    ";
                  }
                }
            ?>
          </ul>
        </li>
        <a class="nav-link text-dark" aria-current="page" href="aboutPage/index.php">About</a>
      </ul>
    </div>
  </div>
</nav>
<!-- NAVBAR SELESAI-->