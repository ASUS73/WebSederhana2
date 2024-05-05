<?php
	include "../database/db.php";

	if(isset($_GET["id"])) {
		$id = $_GET["id"];
	}

	$sql = "SELECT * FROM user";
	$result = mysqli_query($connect, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap demo</title>
    <link rel="stylesheet" href="../src/style.css">
    <link rel="stylesheet" type="text/css" href="../src/css/bootstrap.min.css">
</head>
<body>
    <!-- NAVBAR -->
    <?php include "../homePage.php"; ?>
    <!-- NAVBAR SELESAI -->

    <div class="container mt-4">
    	<div class="card">
    		<div class="card-body">
    			<div class="border-bottom d-flex justify-content-center">
    				<span style="font-size: 20px; text-shadow: 1px 1px 2px;">Halo Namaku</span>
    			</div>
    			<table>
	    			<?php
	                	// ini_set("display_errors", "Off");
	                	
	                	if (isset($sql) && $nim = $id) {
	                		$sql = "SELECT * FROM user WHERE nim = $id";
	                		$result = mysqli_query($connect, $sql);

	                		if ($result) {
	                			while ($row = mysqli_fetch_assoc($result)) {
	                				$nama = $row["nama"];
				    				$nim = $row["nim"];
				    				$kelas = $row["kelas"];
				    				$angkatan = $row["angkatan"];

				    				echo "
				    					<tr>
					                		<td><p class='card-text'>Nama</p></td>
					                		<td><p class='card-text' style='padding-left:10px; padding-right:10px;'>:</p></td>
					                		<td>".$nama."</td>
					                	</tr>
					                	<tr>
					                		<td><p class='card-text'>NIM</p></td>
					                		<td><p class='card-text' style='padding-left:10px; padding-right:10px;'>:</p></td>
					                		<td>".$nim."</td>
					                	</tr>
					                	<tr>
					                		<td><p class='card-text'>Kelas</p></td>
					                		<td><p class='card-text' style='padding-left:10px; padding-right:10px;'>:</p></td>
					                		<td>".$kelas."</td>
					                	</tr>
					                	<tr>
					                		<td><p class='card-text'>Angkatan</p></td>
					                		<td><p class='card-text' style='padding-left:10px; padding-right:10px;'>:</p></td>
					                		<td>".$angkatan."</td>
					                	</tr>
				    				";
				    			}
				    		}
				    	}
					?>
				</table>
    		</div>
    	</div>
    </div>

    <script type="text/javascript" src="../src/js/bootstrap.bundle.js"></script>
 </body>
</html>