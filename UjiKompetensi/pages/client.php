<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perusahaan </title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.js"></script>
</head>
    <?php
            include "../koneksi.php";

            $perintah = mysqli_query($db, "select * from tbbuah"); //Perintah select untuk menampilkan data
    ?>
<body>
    <nav>
        <div class="logo"><a href="../index.php"></a></div>
        <div><a href="../index.php">Home</a></div>
        <div><a href="../index.php#profile">Profile</a></div>
        <div><a href="../index.php#visimisi">Visi dan Misi</a></div>
        <div><a href="../index.php#produk">Produk Kami</a></div>
        <div><a href="../index.php#kontak">Kontak</a></div>
        <div>
            <li id="dropdownToogle" class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  About
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../pages/galeri_foto.php">Galeri Foto</a></li>
                  <li><a class="dropdown-item" href="#">Client Kami</a></li>
                  <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
              </li>
        </div>
    </nav>
    <br>
    <a href="buah_input.php"><button id="btn_tambah" type="button" class="btn btn-secondary mb-3">Daftar Sebagai Client</button></a>
      <table method="post" class="table table-striped">
        <thead>
            <th scope="col">Nomor Hp</th>
            <th scope="col">Nama Perusahaan</th>
            <th scope="col">Alamat</th>
            <th scope="col">Kebutuhan</th>
            <th scope="col">email</th>
        </thead>
        
        <tbody>
            <?php 
            while($row = mysqli_fetch_array($perintah)){
                echo "<tr>
                        <td>$row[nomerHp]</td>
                        <td>$row[namaPerusahaan]</td>
                        <td>$row[alamat]</td>
                        <td>$row[buah]</td>
                        <td>$row[email]</td>
                        <td>
                            <a href='buah_edit.php?id=$row[nomerHp]'<button type='button' id='btn_edit' class='btn btn-primary'> EDIT </button>
                        </td>
                        <td>
                        <a href='../action/buah_delete.php?id=$row[nomerHp]'<button type='button' id='btn_edit' class='btn btn-danger'>HAPUS</button>
                        </td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>