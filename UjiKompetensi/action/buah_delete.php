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
    extract($_GET);

    $perintah = mysqli_query($db, "delete from tbbuah where nomerHp='$id'");
    if($perintah){
        echo "Data Berhasil Di Hapus!";
    }else{
        echo "Data Gagal Di Hapus!";
    }
?>
<br>
<br>
<a href="../pages/client.php"><button class="btn btn-primary">Kembali</button></a>
</div>