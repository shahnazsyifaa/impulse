<?php $this->load->view('templates/header')?>

<body>
    <div class="container" style="margin-top:130px;">
         <?php $this->load->view('templates/sidenavbar')?> 
        <!-- ini side bar -->
        <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/header.css">
        <div class="sidenav">
                <div class="profile">
                <?php if ($this->session->userdata('gender') == "Perempuan") {?>
                    <img src="<?= base_url('assets/cewe2.png')?>" style="width:100px;" alt="">
                <?php }else{ ?>
                    <img src="<?= base_url('assets/cowo3.png')?>" style="width:100px;" alt="">
                <?php }?>
                    <p><?= $this->session->userdata('nama')?></p>
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
                <a href="<?= base_url('index.php/nilai')?>">
                    <img src="<?= base_url('assets/bar-chart.png')?>" style="width:20px;margin-right:10px;margin-left:-25px" alt="">
                    Nilai
                </a>
                <a class="linkside nav-link" style="color:#6E87FD"  href="<?= base_url('index.php/data')?>">
                    <img src="<?= base_url('assets/list (1).png')?>" style="width:20px;margin-right:10px;margin-left:-25px" alt="">
                    Data IFLAB
                </a>
        </div>
        <!-- end sidebar -->

        <!-- main -->
        <div class="main">
            <!-- alert -->
            <div class="d-flex" style="width:1010px; height:130px; margin-left:180px; margin-top:-45px">
                <div class="">
                <?php if ($this->session->userdata('gender') == "Perempuan") {?>
                    <img src="<?= base_url('assets/women.png')?>" style="width:110px;">
                <?php }else{ ?>
                    <img src="<?= base_url('assets/cowo.png')?>" style="width:140px;">
                <?php }?>
                </div>
                <div class="alert alert-light" role="alert" style="width:300px; height:50px; margin: 10px;margin-top:30px;border-radius:15px">
                    Mata praktikum di Lab Informatika
                </div>
            </div>
            <!-- end alert -->

            <!-- konten DATA iflab -->
            <div class="container konten">
                <div class="" style="margin-bottom: 30px; background-color: white; margin-left:190px; width:900px; height:430px; border-radius:10px">
                    <h6>Data IFLAB</h6>
                    <img src="<?= base_url('assets/data.png')?>" alt="">
                </div>
            </div>
            <!-- end konten -->

        </div>
        <!-- end main -->
    </div>
    <!-- end container -->
</body>