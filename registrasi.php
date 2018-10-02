<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>
<form action="prosesregis.php" method="post" enctype="multipart/form-data">
	<h2>Silahkan Registrasi</h2>
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="number" minlength="10" maxlength="10" name="nim"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" maxlength="25" name="nama"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="email" name="email" placeholder="example@gmail.com"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki
				<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</td>
		</tr>
		<tr>
			<td>Program Studi</td>
			<td>:</td>
			<td><select name="prodi">
				<option value="MI">MI</option>
				<option value="MP">MP</option>
				<option value="SM">SM</option>
				<option value="TK">TK</option>
				<option value="KA">KA</option>
				<option value="IF">IF</option>
				<option value="PH">PH</option>
				<option value="TT">TT</option>
			</select><br></td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="fakultas">
				<option value="FIT">FIT</option>
				<option value="FIF">FIF</option>
				<option value="FRI">FRI</option>
				<option value="FTE">FTE</option>
				<option value="FEB">FEB</option>
				<option value="FKB">FKB</option>
				<option value="FIK">FIK</option>
			</select><br></td>
		</tr>
		<tr>
			<td>Hobi</td>
			<td>:</td>
			<td><input type="checkbox" name="hobi[]" value="Membaca">Membaca<br>
			<input type="checkbox" name="hobi[]" value="Menulis">Menulis<br>
			<input type="checkbox" name="hobi[]" value="Menonton">Menonton<br>
			<input type="checkbox" name="hobi[]" value="Tidu">Tidur<br></td>
		</tr>
		<tr>
			<td>Komentar</td>
			<td>:</td>
			<td><textarea name="komentar" rows="5" cols="40"></textarea></td>
		</tr>
		<tr>
			<td>Upload Foto</td>
			<td>:</td>
			<td><input type="file" name="dokumen" value="dokumen"></td>
		</tr>
		<tr>
			<td colspan="3"><input type="submit" name="submit" value="Kirim"></td>
		</tr>
	</table>
</form>
</body>
</html>
