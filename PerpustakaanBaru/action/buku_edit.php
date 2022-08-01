<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Anggota</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../js/bootstrap.bundle.js">
    <style>
        *{
            /* border: 1px solid black; */
            box-sizing: border-box;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .container{
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        form{
            width: 420px;
            height: auto;
            background-color: rgb(123, 169, 255);
            padding: 20px;
            border-radius: 15px;
        }
        #alamat{
            margin: 15px;
            padding: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .jkInput{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .jkInput div{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        button{
            margin-top: 20px;
            width: 100%;
        }
    </style>
</head>
    <?php 
        include "../koneksi.php";
        extract($_GET);
        $perintah = mysqli_query($db, "select * from tbbuku where noBuku ='$id'");

        $row = mysqli_fetch_array($perintah);
        ?>
<body>
    <div class="container">
    <h1>Edit Data Anggota</h1>
        <form method="post" action="buku_update.php">
            <!-- Input No Buku -->
            <div class="input-group mb-3">
                <span class="input-group-text">No Buku</span>
                <input type="number" name="noBuku" value="<?php echo $row['noBuku']?>" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="2022xxxx" readonly>
              </div>
            <!-- Input Judul Buku -->
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Judul Buku</span>
                <input type="text" name="judulBuku" value="<?php echo $row['judulBuku']?>" class="form-control" placeholder="exmpl Si Kancil" aria-label="Judul Buku" aria-describedby="basic-addon1">
            </div>
            <!-- Input sinopsis -->
            <div class="input-group mb-3">
                <span class="input-group-text">sinopsis</span>
                <textarea name="sinopsis" value="" class="form-control" aria-label="With textarea"><?php echo $row['sinopsis'];?></textarea>
            </div>
            <!-- Input Status Buku -->
            <?php
                if($row['status'=="Tidak Di Pinjam"]){
                    echo "
                        <div class='form-floating'>
                            <select name='statusBuku' class='form-select' id='floatingSelect' aria-label='Floating label select example'>
                                <option value='Tidak Di Pinjam'>Tidak Di Meminjam</option selected>
                                <option value='Di Pinjam'>Di Pinjam</option>
                            </select>
                            <label for='floatingSelect'>Status</label>
                        </div>
                    ";
                }else{
                    echo "
                        <div class='form-floating'>
                        <select name='statusBuku' class='form-select' id='floatingSelect' aria-label='Floating label select example'>
                            <option value='Tidak Di Pinjam'>Tidak Di Meminjam</option>
                            <option value='Di Pinjam' selected>Di Pinjam</option>
                        </select>
                        <label for='floatingSelect'>Status</label>
                        </div>
                    ";
                }
            ?>
            <!-- Button -->
            <div class="input-group mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>