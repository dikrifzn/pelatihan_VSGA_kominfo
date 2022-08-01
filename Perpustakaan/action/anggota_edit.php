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
        $perintah = mysqli_query($db, "select * from tbAnggota where idAnggota ='$id'");

        $row = mysqli_fetch_array($perintah);
        ?>
<body>
    <div class="container">
    <h1>Edit Data Anggota</h1>
        <form method="post" action="anggota_update.php">
            <!-- Input ID Anggota -->
            <div class="input-group mb-3">
                <span class="input-group-text">ID Anggota</span>
                <input type="text" name="idAnggota" value="<?php echo $row['idAnggota']?>" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="2022xxxx" readonly>
              </div>
            <!-- Input Nama -->
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nama</span>
                <input type="text" name="nama" value="<?php echo $row['nama']?>" class="form-control" placeholder="Nama Lengkap" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <!-- Input Alamat -->
            <div class="input-group">
                <span class="input-group-text">Alamat</span>
                <textarea name="alamat" value="" class="form-control" aria-label="With textarea"><?php echo $row['alamat'];?></textarea>
            </div>
              <!-- Input Jenis Kelamin -->
              <?php
              if($row['jenisKelamin']=='L'){
                echo "
                    <div class='jkInput'>
                        <div class='input-group'>
                            <div id='alamat' class='input-group-text'>
                            <input class='form-check-input mt-0' type='radio' value='L' name='jenisKelamin' aria-label='Radio button for following text input' name='jenisKelamin' checked>Laki-Laki
                            </div>
                        </div>
                        <div class='input-group'>
                            <div id='alamat' class='input-group-text'>
                            <input class='form-check-input mt-0' type='radio' value='P' aria-label='Radio button for following text input' name='jenisKelamin'>Perempuan
                            </div>
                        </div>
                    </div>
                    ";
            }else{
                echo "
                    <div class='jkInput'>
                        <div class='input-group'>
                            <div id='alamat' class='input-group-text'>
                            <input class='form-check-input mt-0' type='radio' value='L' name='jenisKelamin' aria-label='Radio button for following text input' name='jenisKelamin'>Laki-Laki
                            </div>
                        </div>
                        <div class='input-group'>
                            <div id='alamat' class='input-group-text'>
                            <input class='form-check-input mt-0' type='radio' value='P' aria-label='Radio button for following text input' name='jenisKelamin' checked>Perempuan
                            </div>
                        </div>
                    </div>
                    ";
            }
        ?>
            <!-- Input Status -->
            <?php
                if($row['status'=="Meminjam"]){
                    echo "
                        <div class='form-floating'>
                            <select name='status' class='form-select' id='floatingSelect' aria-label='Floating label select example'>
                                <option value='Tidak Meminjam'>Tidak Meminjam</option>
                                <option selected value='Meminjam' checked>Meminjam</option>
                            </select>
                            <label for='floatingSelect'>Status</label>
                        </div>
                    ";
                }else{
                    echo "
                        <div class='form-floating'>
                            <select name='status' class='form-select' id='floatingSelect' aria-label='Floating label select example'>
                                <option selected value='Tidak Meminjam'>Tidak Meminjam</option>
                                <option value='Meminjam'>Meminjam</option>
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