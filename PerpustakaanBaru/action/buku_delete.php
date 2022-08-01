<?php
    include "../koneksi.php";
    extract($_GET);

    $perintah = mysqli_query($db, "delete from tbbuku where noBuku='$id'");
    if($perintah){
        echo "Data Berhasil Di Hapus!";
    }else{
        echo "Data Gagal Di Hapus!";
    }
?>

<br>
<a href="../pages/buku_tampil.php">Kembali</a>