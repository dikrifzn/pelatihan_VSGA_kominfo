<?php
    include "../koneksi.php";
    extract($_POST);

    $perintah = mysqli_query($db, "update tbAnggota set nama='$nama', alamat='$alamat', jenisKelamin='$jenisKelamin', status='$status' where idAnggota='$idAnggota'");

    if($perintah){
        echo "Data Anggota Berhasil Di Update!";
    }else{
        echo "Data Anggota Gagal Di Update!";
    }
?>

<br>
<a href="../pages/anggota_tampil.php">Kembali</a>