<?php $this->load->view('templates/header')?>
<?php if ($this->session->userdata('gender')=="Perempuan"){  ?>
<body>
    <div class="container" style="margin-top:130px;">
         <?php $this->load->view('templates/sidenavbar')?>
        <!-- ini side bar -->
        <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/header.css">
        <div class="sidenav">
            <div class="profile">
                <img src="<?= base_url('assets/intersection1.png')?>" style="width:100px;" alt="">
                <p><?= $this->session->userdata('nama')?></p>
            </div>
            <a href="<?= base_url('index.php/Dashboard')?>">
                <img src="<?= base_url('assets/home.png')?>" style="width:20px;margin-right:10px;margin-left:-25px" alt="">
                Beranda
            </a>
            <a class="linkside nav-link" style="color:#6E87FD"  href="<?= base_url('index.php/mulaiPraktikum')?>">
                <img src="<?= base_url('assets/edit (1).png')?>" style="width:20px;margin-right:10px;margin-left:-25px" alt="">
                Mulai Praktikum
            </a>
            <a href="#uploadJawaban" data-toggle="collapse">
                <img src="<?= base_url('assets/file.png')?>" style="width:20px;margin-right:10px;margin-left:-25px" alt="">    
                Upload Jawaban
            </a>
            <div id="uploadJawaban" class="collapse">
                <a href="<?= base_url('index.php/formUpload')?>" style="margin-left:30px">Form Upload Jawaban</a>
                <a href="<?= base_url('index.php/hasilUpload')?>" style="margin-left:30px">Hasil Upload Jawaban</a>
            </div>
            <a href="<?= base_url('index.php/nilai')?>">
                <img src="<?= base_url('assets/bar-chart.png')?>" style="width:20px;margin-right:10px;margin-left:-25px" alt="">
                Nilai
            </a>
            <a href="<?= base_url('index.php/data')?>">
                <img src="<?= base_url('assets/list.png')?>" style="width:20px;margin-right:10px;margin-left:-25px" alt="">
                Data IFLAB
            </a>
        </div>
        <!-- end sidebar -->

        <!-- main -->
        <div class="main">
            <!-- ini alert -->
            <div class="d-flex" style="width:1010px; height:130px; margin-left:180px; margin-top:-45px">
                <div class="">
                    <img src="<?= base_url('assets/women.png')?>" style="width:110px;">
                </div>
                <div class="alert alert-light" role="alert" style="width:300px; height:50px; margin: 10px;margin-top:30px;border-radius:15px">
                    Selamat mengerjakan praktikum~
                </div>
            </div>
            <!-- end alert -->
            
            <!-- ini konten MULAI -->
            <div class="container konten">
                <div class="" style="background-color: white; margin-top:0px; margin-left:190px; width:900px; height:430px; border-radius:10px">
                    <h6>Mulai Praktikum</h6>
                    <form>
                        <div class="form-group row" style="margin-left:5px">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Praktikum</label>
                            <select class="form-control col-sm-4" style="left:14px">
                                <option>Jaringan Komputer</option>
                            </select>
                        </div>
                        <div class="form-group row" style="margin-left:5px">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Kelas</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="IF-41-10" readonly>
                            </div>
                        </div>
                        <div class="form-group row" style="margin-left:5px">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Jadwal Praktikum</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="Jumat, 2 November 2019" readonly>
                            </div>
                        </div>
                        <div class="form-group row" style="margin-left:5px">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Asprak</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="Rafif Dalimunthe" readonly>
                            </div>
                        </div>
                        <div class="form-group row" style="margin-left:5px">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Authentifikasi</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="masukkan kode authentifikasi..">
                            </div>
                        </div>
                        <div class="form-group row" style="margin-left:5px">
                            <label for="inputPassword3" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-4">
                                <a href="<?= base_url('index.php/soalJurnal')?>">
                                    <button type="button" class="btn" style="width:150px;background-color: #2E5F78;color:white"> Mulai Praktikum</button>
                                </a>
                               
                            </div>
                        </div>
                    </form>
                    <!-- end form -->
                </div>
            </div>
            <!-- end konten -->
        </div>
        <!-- end main -->
    </div>
    <!-- end container utama -->
</body>
<?php}else{?>
    <body>
    <div class="container" style="margin-top:130px;">
         <?php $this->load->view('templates/sidenavbar')?>
        <!-- ini side bar -->
        <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/header.css">
        <div class="sidenav">
            <div class="profile">
                <img src="<?= base_url('assets/intersection1.png')?>" style="width:100px;" alt="">
                <p><?= $this->session->userdata('nama')?></p>
            </div>
            <a href="<?= base_url('index.php/Dashboard')?>">
                <img src="<?= base_url('assets/home.png')?>" style="width:20px;margin-right:10px;margin-left:-25px" alt="">
                Beranda
            </a>
            <a class="linkside nav-link" style="color:#6E87FD"  href="<?= base_url('index.php/mulaiPraktikum')?>">
                <img src="<?= base_url('assets/edit (1).png')?>" style="width:20px;margin-right:10px;margin-left:-25px" alt="">
                Mulai Praktikum
            </a>
            <a href="#uploadJawaban" data-toggle="collapse">
                <img src="<?= base_url('assets/file.png')?>" style="width:20px;margin-right:10px;margin-left:-25px" alt="">    
                Upload Jawaban
            </a>
            <div id="uploadJawaban" class="collapse">
                <a href="<?= base_url('index.php/formUpload')?>" style="margin-left:30px">Form Upload Jawaban</a>
                <a href="<?= base_url('index.php/hasilUpload')?>" style="margin-left:30px">Hasil Upload Jawaban</a>
            </div>
            <a href="<?= base_url('index.php/nilai')?>">
                <img src="<?= base_url('assets/bar-chart.png')?>" style="width:20px;margin-right:10px;margin-left:-25px" alt="">
                Nilai
            </a>
            <a href="<?= base_url('index.php/data')?>">
                <img src="<?= base_url('assets/list.png')?>" style="width:20px;margin-right:10px;margin-left:-25px" alt="">
                Data IFLAB
            </a>
        </div>
        <!-- end sidebar -->

        <!-- main -->
        <div class="main">
            <!-- ini alert -->
            <div class="d-flex" style="width:1010px; height:130px; margin-left:180px; margin-top:-45px">
                <div class="">
                    <img src="<?= base_url('assets/women.png')?>" style="width:110px;">
                </div>
                <div class="alert alert-light" role="alert" style="width:300px; height:50px; margin: 10px;margin-top:30px;border-radius:15px">
                    Selamat mengerjakan praktikum~
                </div>
            </div>
            <!-- end alert -->
            
            <!-- ini konten MULAI -->
            <div class="container konten">
                <div class="" style="background-color: white; margin-top:0px; margin-left:190px; width:900px; height:430px; border-radius:10px">
                    <h6>Mulai Praktikum</h6>
                    <form>
                        <div class="form-group row" style="margin-left:5px">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Praktikum</label>
                            <select class="form-control col-sm-4" style="left:14px">
                                <option>Jaringan Komputer</option>
                            </select>
                        </div>
                        <div class="form-group row" style="margin-left:5px">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Kelas</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="IF-41-10" readonly>
                            </div>
                        </div>
                        <div class="form-group row" style="margin-left:5px">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Jadwal Praktikum</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="Jumat, 2 November 2019" readonly>
                            </div>
                        </div>
                        <div class="form-group row" style="margin-left:5px">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Asprak</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="Rafif Dalimunthe" readonly>
                            </div>
                        </div>
                        <div class="form-group row" style="margin-left:5px">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Authentifikasi</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="masukkan kode authentifikasi..">
                            </div>
                        </div>
                        <div class="form-group row" style="margin-left:5px">
                            <label for="inputPassword3" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-4">
                                <a href="<?= base_url('index.php/soalJurnal')?>">
                                    <button type="button" class="btn" style="width:150px;background-color: #2E5F78;color:white"> Mulai Praktikum</button>
                                </a>
                               
                            </div>
                        </div>
                    </form>
                    <!-- end form -->
                </div>
            </div>
            <!-- end konten -->
        </div>
        <!-- end main -->
    </div>
    <!-- end container utama -->
</body>
<?php };?>