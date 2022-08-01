<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Client</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../js/bootstrap.bundle.js">
    <style>
        *{
            /* border: 1px solid black; */
            box-sizing: border-box;
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
        $perintah = mysqli_query($db, "select * from tbbuah where nomerHp ='$id'");

        $row = mysqli_fetch_array($perintah);
        ?>
<body>
    <div class="container">
    <h1>Edit Data Client</h1>
        <form method="post" action="../action/buah_update.php">
            <!-- Input No Buku -->
            <div class="input-group mb-3">
                <span class="input-group-text">Nomor Hp</span>
                <input type="number" name="nomerHp" value="<?php echo $row['nomerHp']?>" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="2022xxxx" readonly>
              </div>
            <!-- Input Judul Buku -->
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nama Perusahaan</span>
                <input type="text" name="namaPerusahaan" value="<?php echo $row['namaPerusahaan']?>" class="form-control" placeholder="exmpl Si Kancil" aria-label="Judul Buku" aria-describedby="basic-addon1">
            </div>
            <!-- Input sinopsis -->
            <div class="input-group mb-3">
                <span class="input-group-text">alamat</span>
                <textarea name="alamat" value="" class="form-control" aria-label="With textarea"><?php echo $row['alamat'];?></textarea>
            </div>
            <!-- Input Status Buku -->
            <?php
                if($row['kebutuhan'=="mangga"]){
                    echo "
                    <div class='form-floating mb-3'>
                    <select name='buah' class='form-select' id='floatingSelect' aria-label='Floating label select example'>
                        <option selected value='Mangga'>Mangga</option>
                        <option value='Stroberry'>Stroberry</option>
                        <option value='Apel'>Apel</option>
                    </select>
                    <label for='floatingSelect'>Kebutuhan</label>
                </div>
                    ";
                }else if($row['kebutuhan'=="Stroberry"]){
                    echo "
                    <div class='form-floating mb-3'>
                    <select name='buah' class='form-select' id='floatingSelect' aria-label='Floating label select example'>
                        <option value='Mangga'>Mangga</option>
                        <option value='Stroberry'>Stroberry</option selected>
                        <option value='Apel'>Apel</option>
                    </select>
                    <label for='floatingSelect'>Kebutuhan</label>
                </div>
                    ";
                }else{
                    echo "
                    <div class='form-floating mb-3'>
                    <select name='buah' class='form-select' id='floatingSelect' aria-label='Floating label select example'>
                        <option value='Mangga'>Mangga</option>
                        <option value='Stroberry'>Stroberry</option>
                        <option value='Apel'>Apel</option selected>
                    </select>
                    <label for='floatingSelect'>Kebutuhan</label>
                    </div>
                    ";
                }
            
            ?>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Email</span>
                <input type="email" name="email" value="<?php echo $row['email']?>" class="form-control" placeholder="Email" aria-label="Judul Buku" aria-describedby="basic-addon1">
            </div>
            <!-- Button -->
            <div class="input-group mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>