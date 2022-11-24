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

	<form action="" method="POST">
		<ul>
            <li>
				<label for="id">Id :</label><br>
				<input type="text" name="id" placeholder="di isi otomatis"><br><br>
			</li>    
			<li>
				<label for="nama">Nama :</label><br>
				<input type="text" name="nama"><br><br>
			</li>
			<li>
				<label for="alamat">Alamat :</label><br>
				<input type="text" name="alamat"><br><br>
			</li>
			<li>
				<label for="ttl">TTL :</label><br>
				<input type="text" name="ttl"><br><br>
			</li>
			<li>
				<label for="nohp">No. Hp :</label><br>
				<input type="text" name="nohp"><br><br>
			</li>
			<li>
				<button type="submit" name="submit">Simpan</button>
			</li>
		</ul>
	</form>

    <?php 
    include "koneksi.php";

    if(isset($_POST['submit'])){
        mysqli_query($kon,"INSERT INTO datasantri SET 
        nama ='$_POST[nama]',
		alamat ='$_POST[alamat]',
		ttl ='$_POST[ttl]',
		nohp ='$_POST[nohp]'
        ");
        
        echo "
            <script>
				alert('data berhasil ditambah!');
				document.location.href = 'index.php';
			</script>
        ";

        }
    ?>
	
</body>
</html>