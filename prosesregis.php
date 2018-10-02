<?php
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$prodi = $_POST['prodi'];
$fakultas = $_POST['fakultas'];
$hobi = $_POST['hobi'];
$hobi = array($_POST['hobi']);
foreach ($_POST['hobi'] as $nilai) {
}
$komentar = $_POST['komentar'];
$jumlah = count(explode(" ", $komentar));
if ($jumlah < 5) {
	echo "<br>Komentar anda masih kurang";
}

echo "<h2>Data Anda</h2>";
echo "NIM : ".$nim;
echo "<br>";
echo "Nama : ".$nama;
echo "<br>";
echo "Email : ".$_POST['email'];
echo "<br>";
echo "Jenis Kelamin :".$jenis_kelamin;
echo "<br>";
echo "Program Studi :".$prodi;
echo "<br>";
echo "Fakultas :".$fakultas;
echo "<br>";
echo "Hobi :".$nilai;
echo "<br>";
echo "Komentar :".$komentar;
echo "<br>";
echo "Jumlah :".$jumlah;
echo "<br>";

$foto = $_FILES['dokumen']['name'];
move_uploaded_file($_FILES['dokumen']['tmp_name'], "upload/".$_FILES['dokumen']['name']);
	echo "Foto anda :";
	echo "<br>";
	echo "<img src = 'upload/$foto'>";
?>
