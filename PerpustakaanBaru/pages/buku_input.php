<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
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
<body>
    <a href="buku_tampil.php">Kembali</a>
    <h1>Tambah Data Anggota</h1>
    <div class="container">
        <form method="post" action="../action/buku_create.php">
            <!-- Input No Buku -->
            <div class="input-group mb-3">
                <span class="input-group-text">No Buku</span>
                <input type="number" name="noBuku" value="" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="003xxxx">
              </div>
            <!-- Input Judul Buku -->
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Judul</span>
                <input type="text" name="judulBuku" value="" class="form-control" placeholder="exmpl Si Kancil" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <!-- Input Sinopsis -->
            <div class="input-group mb-3">
                <span class="input-group-text">Sinopsis</span>
                <textarea name="sinopsis" value="" class="form-control" aria-label="With textarea"></textarea>
            </div>

            <!-- Input Status Buku -->
            <div class="form-floating">
                <select name="statusBuku" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    <option selected value="Tidak Meminjam">Tidak Di Pinjam</option>
                    <option value="Meminjam">Di Pinjam</option>
                </select>
                <label for="floatingSelect">Status</label>
            </div>
            <!-- Button -->
            <div class="input-group mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>