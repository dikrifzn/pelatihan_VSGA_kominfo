<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="../js/bootstrap.bundle.js"></script>

</head>
    <?php
        include "../koneksi.php";

        $perintah = mysqli_query($db, "select * from tbbuku"); //Perintah select untuk menampilkan data
    ?>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="anggota_tampil.php">Data Anggota</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="buku_tampil.php">Data Buku</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Buku
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Fantasi</a></li>
                  <li><a class="dropdown-item" href="#">Petualangan</a></li>
                  <li><a class="dropdown-item" href="#">Romantis</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <!-- Akhir Navigasi -->

      <a href="buku_input.php"><button id="btn_tambah" type="button" class="btn btn-secondary plus float-right">Tambah</button></a>
      <table method="post" class="table table-striped">
        <thead>
            <th cope="col">No Buku</th>
            <th scope="col">Judul</th>
            <th scope="col">Sinopsis</th>
            <th scope="col">Status Buku</th>
            <th scope="col">Edit</th>
            <th scope="col">Hapus</th>
        </thead>
        
        <tbody>
            <?php 
            while($row = mysqli_fetch_array($perintah)){
                echo "<tr>
                        <td>$row[noBuku]</td>
                        <td>$row[judulBuku]</td>
                        <td>$row[sinopsis]</td>
                        <td>$row[statusBuku]</td>
                        <td>
                            <a href='../action/buku_edit.php?id=$row[noBuku]'<button type='button' id='btn_edit' class='btn btn-primary'>Edit</button>
                        </td>
                        <td>
                        <a href='../action/buku_delete.php?id=$row[noBuku]'<button type='button' id='btn_edit' class='btn btn-danger'>Hapus</button>
                        </td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>