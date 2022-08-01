<?php
// 
// Koneksi
    $server = "localhost";
    $username = "root";
    $password = "";
    $nama_database = "dbpus";

    $db = mysqli_connect($server, $username, $password, $nama_database);

    if(!$db){
        die ("Anda Gagal terhubung!". mysqli_connect_error());
    }
?>

<?php
// Membuat File
    include "koneksi.php";
    extract($_POST);

    $perintah = mysqli_query("insert into tbAnggota values('$sahuj', '$ssda',)");
    
    if($perintah){
        echo "Anda Berhasil Menyimpan";
    }else{
        echo " anda Gagal menyimpan";
    }
?>
<?php
    //Menampilkan 
    include "koneksi.php";

    $perintah = mysqli_query($db, "select * from tbanggota");

    while($row = mysqli_fetch_array($perintah)){
        echo "$row[noBuku]";
        // href='../action/buku_delete.php?id=$row[noBuku]
    }
?>
<?php
    // Update
    include "koneksi.php";
    extract($_POST);

    $perintah = mysqli_query($db, "update tbbuku set judul='$judulbaru', sinopsis='$sinopsisbaru' where nobuku='$nobuku");
?>
<?php
    //Delete
    include "koneksi.php";

    $perintah = mysqli_query($db, "delete from tbbuah where nomerHp=$$id")
?>