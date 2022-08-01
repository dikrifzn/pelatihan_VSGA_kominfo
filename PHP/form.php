<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Membuat Form</title>
</head>

    <?php 
    echo $_post["nama"];
    ?>

<body>
    <form method="post" action="">
        <div>
            <label for="noReg">Nomor Registrasi : </label>
            <input type="number" name="noReg" id="noReg">
        </div>
        <div>
            <label for="nama">Nama Lengkap : </label>
            <input type="text" name="nama" id="nama">
        </div>
        <div>
            <label for="tglLahir">Tanggal Lahir : </label>
            <input type="date" name="tglLahir" id="tglLahir">
        </div>
        <div>
            <label for="jenisKelamin">Jenis Kelamin : </label>
            <input type="radio" name="jenisKelamin" id="jenisKelamin" value="lakiLaki">Laki-Laki
            <input type="radio" name="jenisKelamin" id="jenisKelamin" value="perempuan">Perempuan
        </div>
        <div>
            <label for="website">Website : </label>
            <input type="url" name="url" id="url">
        </div>
        <div>
            <label for="email">Email : </label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="hobi">Hobi : </label>
            <input type="checkbox" name="hobi" id="hobi" value="Bernyanyi">Bernyanyi
            <input type="checkbox" name="hobi" id="hobi" value="BermainBola">Bermain Bola
            <input type="checkbox" name="hobi" id="hobi" value="Ngoding">Ngoding
        </div>
        <div>
            <label for="alamat">Alamat : </label>
            <textarea name="alamat" id="alamat" cols="25" rows="5"></textarea>
        </div>
        <div>
            <label for="noTelp" name="noTelp">Telphone : </label>
            <input type="tel" name="noTelp" id="noTelp">
        </div>
        <div>
            <label for="kompetensi">kompetensi : </label>
            <select name="kompetensi" id="kompetensi">
                <option value="JWD">Junior Web Developer</option>
                <option value="JMP">Junior Mobile Developer</option>
                <option value="JNA">Junior Network Administrator</option>
            </select>
        </div>
        <div>
            <button type="submit" name="kirim" value="kirim">kirim</button>
            <button type="reset" name="batal" value="batal">Batal</button>
        </div>
    </form>
</body>
</html>