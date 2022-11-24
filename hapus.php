<?php 
include "koneksi.php";

if(isset($_GET['id'])){
    mysqli_query($kon,"DELETE FROM datasantri WHERE id='$_GET[id]'");
    
    echo "
        <script>
			alert('data berhasil dihapus!');
			document.location.href = 'index.php';
		</script>
    ";

    }
?>