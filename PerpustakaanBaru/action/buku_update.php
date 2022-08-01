<?php
    include "../koneksi.php";
    extract($_POST);

    $perintah = mysqli_query($db, "update tbbuku set judulBuku='$judulBuku', sinopsis='$sinopsis',  statusBuku='$statusBuku' where noBuku='$noBuku'");

    if($perintah){
        echo "Data Anggota Berhasil Di Update!";
    }else{
        echo "Data Anggota Gagal Di Update!";
    }
?>

<br>
<a href="../pages/buku_tampil.php">Kembali</a>