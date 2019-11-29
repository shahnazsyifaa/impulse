 <!-- ini side bar -->
 <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/header.css">
        <div class="sidenav">
                <div class="profile">
                <?php if ($this->session->userdata('gender') == "Perempuan") {?>
                    <img src="<?= base_url('assets/intersection1.png')?>" style="width:100px;" alt="">
                <?php }else{ ?>
                    <img src="<?= base_url('assets/men.jpg')?>" style="width:100px;" alt="">
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
                <a href="<?= base_url('index.php/data')?>">
                    <img src="<?= base_url('assets/list.png')?>" style="width:20px;margin-right:10px;margin-left:-25px" alt="">
                    Data IFLAB
                </a>
        </div>
        <!-- end sidebar -->
