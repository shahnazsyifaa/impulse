<?php $this->load->view('templates/header')?>
<style>
</style>
<body>
    <div class="container" style="margin-top:130px;">
        <!-- ini side bar -->
        <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/header.css">
        <div class="sidenav">
                <div class="profile">
                    <?php if ($this->session->userdata('gender') == "Perempuan") {?>
                        <img src="<?= base_url('assets/cewe2.png')?>" style="width:100px;border-radius:50%" alt="">
                    <?php }else{ ?>
                        <img class="rounded profile" src="<?= base_url('assets/cowo3.png')?>" style="width:100px" alt="">
                    <?php }?>
                    <p><?= $this->session->userdata('nama')?></p>
                </div>
                <a class="linkside nav-link" style="color:#6E87FD" href="<?= base_url('index.php/Dashboard')?>">
                    <img src="<?= base_url('assets/home (1).png')?>" style="width:20px;margin-right:10px;margin-left:-25px" alt="">
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

        <!-- main -->
        <div class="main">
            <!-- alert -->
            <div class="d-flex" style="background-color: #CED7FE; width:710px; height:120px; margin-left:290px; border-radius:10px;">
               <h4>Selamat datang kembali, <?= $this->session->userdata('nama')?>!</h4>
               <?php if ($this->session->userdata('gender') == "Perempuan") {?>
                    <img src="<?= base_url('assets/women.png')?>" style="width:130px; margin-left:150px;">
                <?php }else{ ?>
                    <img src="<?= base_url('assets/cowo.png')?>" style="width:170px; margin-left:150px;">
                <?php }?>
            </div>
            <!-- end alert -->

            <!-- konten BERANDA -->
            <div class="container konten">
                <!-- grafik -->
                <div class="d-flex" style="background-color: white; margin-top:30px; margin-left:190px; width:600px; height:330px; border-radius:10px">
                    <h6>Grafik nilai</h6>
                        <div class="dropdown">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                [JRK] Jaringan Komputer
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#" style="font-size:14px">[JRK] Jaringan Komputer</a>
                            </div>
                        </div>
                </div>
                <div style="position: absolute; margin-left:230px;margin-top:90px;width: 500px;height: 500px">
                    <canvas id="speedChart"></canvas>
                </div>

                <!-- kalender -->
                <div class="d-flex bg-light" style="margin-top:30px; width:300px; height:330px; border-radius:10px">
                    <!-- NANTI INI ISINYA KALENDER -->
                </div>
                
            </div>
            <!-- end konten -->

        </div>
        <!-- end main -->
    </div>
    <!-- end container -->

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script type="text/javascript">
        var speedCanvas = document.getElementById("speedChart");

        Chart.defaults.global.defaultFontFamily = "Lato";
        Chart.defaults.global.defaultFontSize = 14;

        var speedData = {
        labels: ["mod1", "mod2", "mod3", "mod4", "mod5", "mod6", "mod7", "mod8"],
        datasets: [{
            label: "nilai",
            data: [95, 77, 90, 84, 99, 90, 82, 92],
            backgroundColor:[
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 3
        }]
        }; 

        var chartOptions = {
        legend: {
            display: true,
            position: 'top',
            labels: {
            fontColor: 'black'
            }
        }
        };

        var lineChart = new Chart(speedCanvas, {
        type: 'line',
        data: speedData,
        options: chartOptions
        });
    </script>
    
</body>