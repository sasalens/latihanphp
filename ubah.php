<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ubah Data Mahasantri</title>
	<style>
        h1 {
			font-family: sans-serif;
			margin-left: 40px;
		}
    </style>
</head>
<body>

	<h1>Tambah Data Mahasantri</h1>

<?php 
include "koneksi.php";

$id = $_GET['id'];

$sql = "SELECT * FROM datasantri WHERE id = '$id'";
$result = $kon->query($sql);

if ($result->num_rows > 0) {

?>

	<form action="" method="POST">

	<?php  
		$data = $result->fetch_assoc();
	?>
		<ul>
            <li>
				<label for="id">Id :</label><br>
				<input type="text" name="id" id="id" value="<?= $data['id']; ?>"><br><br>
			</li>    
			<li>
				<label for="nama">Nama :</label><br>
				<input type="text" name="nama" id="nama" value="<?= $data['nama']; ?>"><br><br>
			</li>
			<li>
				<label for="alamat">Alamat :</label><br>
				<input type="text" name="alamat" id="alamat" value="<?= $data['alamat']; ?>"><br><br>
			</li>
			<li>
				<label for="ttl">TTL :</label><br>
				<input type="text" name="ttl" id="ttl" value="<?= $data['ttl']; ?>"><br><br>
			</li>
			<li>
				<label for="nohp">No. Hp :</label><br>
				<input type="text" name="nohp" id="nohp" value="<?= $data['nohp']; ?>"><br><br>
			</li>
			<li>
				<button type="submit" name="submit">Simpan</button>
			</li>
		</ul>
	</form>
	<?php 
	} 
	else	{
		echo "$result";
	}
	$kon->close();
	?>

	<?php 	
	include "koneksi.php";

	if(isset($_POST['submit'])){
		mysqli_query($kon,"UPDATE datasantri SET
		nama ='$_POST[nama]',
		alamat ='$_POST[alamat]',
		ttl ='$_POST[ttl]',
		nohp ='$_POST[nohp]'
	WHERE   id ='$_GET[id]'");
	
		echo "
		<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php';
			</script>
		";
	} 
	?>
	
</body>
</html>