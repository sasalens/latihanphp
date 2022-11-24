<form action="http://localhost/belajarphp/looping.php" method="GET">
  <label>Masukkan angka : </label>
  <input type="text" name="nilai" placeholder="ketik angka"><br><br>
  <input type="submit" value="Kirim">
</form>


<?php

$input = $_GET['nilai'];

echo "input = $input<br/>";

for ($i = 1; $i <= $input; $i++) { 
    for ($j = 1; $j <= $i; $j++) { 
        echo "$i "; 
    }
    echo "<br/>"; 
}

?>