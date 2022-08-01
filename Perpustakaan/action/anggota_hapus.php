<?php
    include "../koneksi.php";
    extract($_GET);

    $perintah = mysqli_query($db, "delete from tbAnggota where idAnggota='$id'");
    if($perintah){
        echo "Data Berhasil Di Hapus!";
    }else{
        echo "Data Gagal Di Hapus!";
    }
?>

<br>
<a href="../pages/anggota_tampil.php">Kembali</a>