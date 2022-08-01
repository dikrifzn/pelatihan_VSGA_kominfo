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
            width: 500px;
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
        a{
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>Daftar Sebagai Client Kami</h1>
        <form method="post" action="../action/buah_create.php">
            <!-- Input Nomor Hp -->
            <div class="input-group mb-3">
                <span class="input-group-text">Nomer Hp</span>
                <input type="number" name="nomerHp" value="" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="08xxxx">
              </div>
            <!-- Input Nama Perusahaan -->
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nama Perusahaan</span>
                <input type="text" name="namaPerusahaan" value="" class="form-control" placeholder="Nama Perusahaan" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <!-- Input Alamat -->
            <div class="input-group mb-3">
                <span class="input-group-text">Alamat</span>
                <textarea name="alamat" value="" class="form-control" aria-label="With textarea"></textarea>
            </div>
            <!-- Input kebutuhan -->
            <div class="form-floating mb-3">
                <select name="buah" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    <option selected value="Mangga">Mangga</option>
                    <option value="Stroberry">Stroberry</option>
                    <option value="Apel">Apel</option>
                </select>
                <label for="floatingSelect">Kebutuhan</label>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Email</span>
                <input type="text" name="email" value="" class="form-control" placeholder="email Perusahaan" aria-label="Email" aria-describedby="basic-addon1">
            </div>
            <!-- Button -->
            <div class="input-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="input-group mb-3">
                <a href="client.php"><button id="cancel" type="button" class="btn btn-danger">Cancel</button></a>
            </div>
        </form>
    </div>
</body>
</html>