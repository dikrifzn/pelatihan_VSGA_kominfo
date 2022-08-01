<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
    <?php
        include "../koneksi.php";

        $perintah = mysqli_query($db, "select * from tbAnggota"); //Perintah select untuk menampilkan data
    ?>
<body>
    <a href="anggota_input.php">Tambah Data</a>
    <br><br>
    <h1>Data Anggota</h1>

    <table method="post" class="table table-striped">
        <thead>
            <th cope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Alamat</th>
            <th scope="col">Status</th>
            <th scope="col">Edit</th>
            <th scope="col">Hapus</th>
        </thead>
        
        <tbody>
            <?php 
            while($row = mysqli_fetch_array($perintah)){
                echo "<tr>
                        <td>$row[idAnggota]</td>
                        <td>$row[nama]</td>
                        <td>$row[alamat]</td>
                        <td>$row[jenisKelamin]</td>
                        <td>$row[status]</td>
                        <td><a href='../action/anggota_edit.php?id=$row[idAnggota]'>EDIT</a></td>
                        <td><a href='../action/anggota_hapus.php?id=$row[idAnggota]'>HAPUS</a></td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>