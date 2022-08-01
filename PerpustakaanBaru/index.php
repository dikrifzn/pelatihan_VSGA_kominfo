<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="script.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</head>
<body>
    <div class="container">
        <div class="loginBox">
            <form action="">
                <!-- Input Username -->
                <div class="form-floating mb-3 mt-3">
                    <input id="username" type="text" class="form-control" id="floatingInput" placeholder="Username">
                    <label for="floatingInput">username</label>
                  </div>
                  <!-- Input Pasword -->
                  <div class="form-floating mb-3">
                    <input id="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                  </div>
                  <!-- Button -->
                  <button type="button" class="btn btn-primary mb-3" onclick="masuk()">Login</button>
                  
                  <p>*username = jwd <br> *password = 1234</p>
            </form>
        </div>
    </div>
</body>
</html>