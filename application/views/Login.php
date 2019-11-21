<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url("assets/css/style.css") ?>">
    <title>Login IMPULSE</title>
</head>
<body>
    <div class="container">
        <div class="background">
            <img src=<?= base_url("assets/OfficeIllustrations1.png") ?>>
        </div>
        <div class="login bg-white mx-auto shadow-sm" style="width:45%; padding: 35px;border-radius:15px;border-color:#azure;border-width:0.5px">
            <div class="logo-login">
                <img src=<?= base_url("assets/image1.jpg") ?> alt="" style="width:70px; height:50.44px; margin-left:25%;">
                <h4>Halaman <br>login</br></h4>
            </div>
            <div class="text-center">
                <?php echo $this->session->flashdata('message'); ?>
                <form method="post"action='<?= base_url('praktikan/login') ?>' >
                    <div class="form-group">
                        <input type="text" class="form-control col-12 mx-auto" id="exampleFormControlInput1" name="nim" placeholder="NIM",value="<?= set_value('nim') ?>">
                        <?=form_error('nim','<small class="text-danger">','</small>');?>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control col-12 mx-auto" id="exampleFormControlInput1" name="password" placeholder="Password">
                        <?=form_error('password','<small class="text-danger">','</small>');?>
                    </div>
                    <div class="form-check text-left">
                        <a href="" class="float-left">Lupa kata sandi ?</a>
                    </div>
                        <button type="submit" class="btn btn-dark float-right" style="margin-top: 0px; width:100px;">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>