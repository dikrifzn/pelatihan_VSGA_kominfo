<?php
    include "../koneksi.php";

    extract($_POST);
    $perintah = mysqli_query($db,"insert into tbanggota values('$idAnggota','$nama','$alamat','$jenisKelamin','$status')");
    if($perintah){
        echo "Data Anggota Berhasil Di Simpan";
    }else{
        echo "Data Anggota Gagal Di Simpan";
    }
?>

<br>
<a href="../pages/anggota_tampil.php">Kembali</a>