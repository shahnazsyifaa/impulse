<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url("assets/css/style.css") ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/button-file.js"></script>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <!-- MY CSS -->
    <title>Login IMPULSE</title>
</head>
<body>
    <!-- modal ubah password-->
    <div class="modal fade" id="lupaPass" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle" style="margin-left:5px">Lupa Password</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" >
                                <form style="padding:5px;" method="post" action="<?= base_url('praktikan/ubahPassword') ?>">
                                    <div class="row" style="margin-top:10px">
                                        <div class="col-sm-12">
                                        <input type="text" class="form-control" placeholder="Email" name="email" style="margin-left:30px;border-radius:10px; width:400px">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:10px">
                                        <div class="col-sm-12">
                                        <input type="text" class="form-control" placeholder="Siapa teman masa kecil kamu?" name="passBaru" style="margin-left:30px;border-radius:10px; width:400px">
                                        </div>
                                    </div>
                                   
                                </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <a href="#pass1" data-toggle="modal" class="float-left">
                                            <button type="submit" class="btn btn-secondary" data-dismiss="modal" style="background-color: #2E5F78;color:white">Kirim</button>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
    </div>
    <!-- end modal ubah password-->

    <!-- modal 2-->
    <div class="modal fade" id="pass1" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle" style="margin-left:5px">Lupa Password</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" >
                                <form style="padding:5px;" method="post" action="<?= base_url('praktikan/ubahPassword') ?>">
                                    <div class="row" style="margin-top:10px">
                                        <div class="col-sm-12">
                                        <h5 class="modal-title" id="exampleModalLongTitle" style="margin-left:140px">Password Baru Kamu</h5>
                                        <br>
                                        <input type="text" class="form-control" placeholder="1301174402" name="email" style="margin-left:30px;border-radius:10px; width:400px" readonly>
                                        </div>
                                    </div>
                                   
                                </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-secondary" data-dismiss="modal" style="background-color: #2E5F78;color:white">Oke</button>
                                       
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
    </div>
    <!-- end modal2-->

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
                    <div href="#logout" data-toggle="modal" class="form-check text-left">
                        <a href="#lupaPass" data-toggle="modal" class="float-left">Lupa kata sandi ?</a>
                    </div>
                        <button type="submit" class="btn btn-dark float-right" style="margin-top: 0px; width:100px;">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>