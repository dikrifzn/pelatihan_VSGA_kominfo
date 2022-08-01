<?php
    include "../koneksi.php";

    extract($_POST);
    $perintah = mysqli_query($db,"insert into tbbuku values('$noBuku','$judulBuku','$sinopsis','$statusBuku')");
    if($perintah){
        echo "Data Buku Berhasil Di Simpan";
    }else{
        echo "Data buku Gagal Di Simpan";
    }
?>

<br>
<a href="../pages/anggota_tampil.php">Kembali</a>