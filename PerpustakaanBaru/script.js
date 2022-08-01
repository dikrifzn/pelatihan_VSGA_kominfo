function masuk(){
    username = document.getElementById("username").value;
    password = document.getElementById("password").value;

    if(username == "jwd" && password == 1234){
        alert("Anda Berhasil Login!")
        window.location.replace("pages/beranda.php");
    } else{
        alert("Anda Gagal Login!");
    }
}

