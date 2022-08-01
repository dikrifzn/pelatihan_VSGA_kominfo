<style>
    .container{
        height: 100vh;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
</style>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.js"></script>
<div class="container">
<?php
    include "../koneksi.php";
    extract($_POST);

    $perintah = mysqli_query($db, "update tbbuah set namaPerusahaan='$namaPerusahaan', alamat='$alamat', buah='$buah', email='$email' where nomerHp='$nomerHp'");

    if($perintah){
        echo "Data Berhasil Di Ubah!";
    }else{
        echo "Data Gagal Di Ubah!";
    }
?>
<br>
<br>
<a href="../pages/client.php"><button class="btn btn-primary">Kembali</button></a>
</div>