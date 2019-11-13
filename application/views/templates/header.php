<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/button-file.js"></script>
    <!-- MY CSS -->

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/header.css">

    <title>IMPULSE</title>
</head>

<body>

    <!-- modal ubah password-->
    <div class="modal fade" id="ubahPass" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle" style="margin-left:5px">Ubah Password</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <form style="padding:5px;">
                                    <div class="row" style="margin-top:10px">
                                        <div class="col-sm-12">
                                        <input type="text" class="form-control" placeholder="Password Lama">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:10px">
                                        <div class="col-sm-12">
                                        <input type="text" class="form-control" placeholder="Password Baru">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:10px">
                                        <div class="col-sm-12">
                                        <input type="text" class="form-control" placeholder="Konfirmasi Password">
                                        </div>
                                    </div>
                                </form>
                                </div>
                                <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #2E5F78;color:white">Ubah</button>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
    <!-- end modal ubah password-->

    <!-- Modal log out-->
    <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle" style="text-align:left;margin-left:0px">Konfirmasi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <h6>Apakah anda yakin akan menutup halaman praktikum?</h6>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
            <a href="<?= base_url('login')?>">
                <button type="button" class="btn btn-primary" style="background-color: #2E5F78;color:white">Keluar</button>
            </a>
        </div>
        </div>
    </div>
    </div>
    <!-- end modal log out -->

    <nav class="navbar navbar-expand-sm shadow-sm p-3 mb-5 bg-white rounded fixed-top">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="#">
            <img src="<?= base_url('assets/image1.jpg')?>" alt="logo" style="width:50px;">
        </a>
    
        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="#">IMPULSE</a>
            </li>
        </ul>

        <!-- timer -->
        <div class="d-flex" style="background-color: #CED7FE; width:300px; height:30px; margin-left:380px; border-radius:5px;">
            <h5>00:00:00</h5>
        </div>

        <!-- profile -->
        <div class="">
            <a class="dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown">
                <img class="logo-profile" src="<?= base_url('assets/intersection1.png')?>" style="width:30px;" alt="">
            </a>
            <div class="dropdown-menu" style="left:1100px">
                <a class="dropdown-item" href="<?= base_url('index.php/editProfile')?>">Edit Profile</a>
                <a class="dropdown-item" href="#ubahPass" data-toggle="modal">Ubah Password</a>
            </div>
        </div>
        <!-- end profile -->

        <!-- log out -->
        <a href="#logout" data-toggle="modal">
            <img class="logout" src="<?= base_url('assets/logout.png')?>" style="width:29px;" alt="">
        </a>
    </nav>