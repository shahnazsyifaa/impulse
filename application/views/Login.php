<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Login IMPULSE</title>
</head>
<body>
    <div class="container">
        <div class="background">
            <img src="assets/OfficeIllustrations1.png">
        </div>
        <div class="login bg-white mx-auto shadow-sm" style="width:45%; padding: 35px;border-radius:15px;border-color:#azure;border-width:0.5px">
            <div class="logo-login">
                <img src="assets/image1.jpg" alt="" style="width:70px; height:50.44px; margin-left:25%;">
                <h4>Halaman <br>login</br></h4>
            </div>
            <div class="text-center">
                <form method="post">
                    <div class="form-group">
                        <input type="text" class="form-control col-12 mx-auto" id="exampleFormControlInput1" name="username" placeholder="NIM">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control col-12 mx-auto" id="exampleFormControlInput1" name="password" placeholder="Password">
                    </div>
                    <div class="form-check text-left">
                        <a href="" class="float-left">Lupa kata sandi ?</a>
                    </div>
                    <a href="<?= base_url('index.php/Dashboard')?>">
                        <button type="button" class="btn btn-dark float-right" style="margin-top: 0px; width:100px;">Login</button>
                    </a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>