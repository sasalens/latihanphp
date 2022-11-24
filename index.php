<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasantri</title>
    <style>
        body {
            font-family: sans-serif;
        }
        table tr td {
            border: 1px solid black;
            padding: 5px;
        }
        thead {
            background-color: #cccddd;
        }
        button {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h2>Menampilkan Data Dari Database PHP</h2>
    <a href="tambah.php"><button>Tambah Data</button></a>
    <table>
        <thead>
            <tr>
                <td>Menu</td>
                <td>Id</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>TTL</td>  
                <td>No. Hp</td>              
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $query = mysqli_query($kon, 'SELECT * FROM `datasantri` ORDER BY `id` ASC');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td>
                    <a href="hapus.php?id=<?= $data['id']; ?>">hapus</a>
                    <a href="ubah.php?id=<?= $data['id']; ?>">ubah</a>
                </td>
                <td><?= $data['id'] ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['alamat'] ?></td>
                <td><?= $data['ttl'] ?></td>
                <td><?= $data['nohp'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>