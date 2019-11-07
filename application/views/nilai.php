<?php $this->load->view('templates/header')?>

<body>
    <div class="container" style="margin-top:130px;">
        <!-- <?php $this->load->view('templates/sidenavbar')?> -->
        <!-- ini side bar -->
        <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/header.css">
        <div class="sidenav">
                <div class="profile">
                    <img src="<?= base_url('assets/intersection1.png')?>" style="width:100px;" alt="">
                    <p>Shahnaz Nur Asyifa</p>
                </div>
                <a href="<?= base_url('index.php/Dashboard')?>">
                    <img src="<?= base_url('assets/home.png')?>" style="width:20px;margin-right:10px;margin-left:-25px" alt="">
                    Beranda
                </a>
                <a href="<?= base_url('index.php/mulaiPraktikum')?>">
                    <img src="<?= base_url('assets/edit.png')?>" style="width:20px;margin-right:10px;margin-left:-25px" alt="">
                    Mulai Praktikum
                </a>
                <a href="#uploadJawaban" data-toggle="collapse">
                    <img src="<?= base_url('assets/file.png')?>" style="width:20px;margin-right:10px;margin-left:-25px" alt="">    
                    Upload Jawaban
                </a>
                <div id="uploadJawaban" class="collapse">
                    <a href="<?= base_url('index.php/formUpload')?>" style="margin-left:30px">Form Upload Jawaban</a>
                    <a href="<?= base_url('index.php/hasilUpload')?>" style="margin-left:30px">Hasil Upload Jawaban </a>
                </div>
                <a class="linkside nav-link" style="color:#6E87FD" href="<?= base_url('index.php/nilai')?>">
                    <img src="<?= base_url('assets/bar-chart-blue.png')?>" style="width:20px;margin-right:10px;margin-left:-25px" alt="">
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
            <!-- alert -->
            <div class="d-flex" style="width:1010px; height:130px; margin-left:180px; margin-top:-45px">
                <div class="">
                    <img src="<?= base_url('assets/women.png')?>" style="width:110px;">
                </div>
                <div class="alert alert-light" role="alert" style="width:490px; height:50px; margin: 10px;margin-top:30px;border-radius:15px">
                    Semoga nilaimu tidak mengkhinati hasil kerja kerasmuya~
                </div>
            </div>
            <!-- end alert -->

            <!-- konten NILAI -->
            <div class="container konten">
                <div class="" style="background-color: white; margin-top:0px; margin-left:190px; width:900px; height:430px; border-radius:10px">
                    <h6>Nilai</h6>
                </div>
            </div>
            <!-- end konten -->

        </div>
        <!-- end main -->
    </div>
    <!-- end container -->
</body>