<!DOCTYPE html>
<html>
<head>
	<title>Form 1</title>
</head>
<body>
	<form method="" action="form1.html">
		<h3>Formulir Pendaftaran Kursus</h3>
		<table>
			<tr>
				<td class="table-left"><label>Nama</label></td>
				<td><label>:</label></td>
				<td class="table-right"><input type="text" name="nama" class="form-control"></td>
			</tr>
			<tr>
				<td class="table-left"><label>Jenis Kelamin</label></td>
				<td><label>:</label></td>
				<td class="table-right">
					<input type="radio" name="radio-button" class="" id="jenis-kelamin">
					<label>Laki-laki</label>
					<input type="radio" name="radio-button" class="" id="jenis-kelamin">
					<label>Perempuan</label>
				</td>
			</tr>
			<tr>
				<td class="table-left"><label>Alamat</label></td>
				<td><label>:</label></td>
				<td class="table-right"><textarea id="alamat" name="alamat" class="form-control" cols="30" rows="1"></textarea></td>
			</tr>
			<tr>
				<td class="table-left"><label>Provinsi</label></td>
				<td><label>:</label></td>
				<td class="table-right">
					<select name="provinsi" class="form-control" id="provinsi">
						<option value="1">Pilih...</option>
						<option value="2">Jawa Barat</option>
						<option value="3">Jawa Timur</option>
						<option value="4">Jawa Tengah</option>
						<option value="5">DKI Jakarta</option>
					</select>
				</td>
			</tr>
			<tr>
				<td class="table-left"><label>Pilih Kursus	</label></td>
				<td><label>:</label></td>
				<td class="table-right">
					<input type="checkbox" name="pilih-kursus" class="">
					<label>Bahasa Inggris</label><br>
					<input type="checkbox" name="pilih-kursus" class="">
					<label>Pemrograman</label>
				</td>
			</tr>
		</table>
		<button type="button" class="btn">Submit</button>
		<button type="button" class="btn">Reset!</button>
	</form>
</body>
</html>