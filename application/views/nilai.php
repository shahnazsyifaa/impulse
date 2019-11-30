<?php $this->load->view('templates/header')?>
<style>
.table{
    width:820px;
    margin-top:10px;
    margin-left: 40px;
    margin-right: -90px;
    border-radius: 10px;
    overflow: hidden;
}
/* table {
    width:820px;
    margin-top:0px;
    margin-left: 40px;
    margin-right: -90px;
    border-collapse: collapse;
    border-radius: 1em;
    overflow: hidden;
} */

th, td {
    
  padding: 1em;
  border-bottom: 2px solid black; 
}
th{
    color: white;
    background:#51819A;
}
td{
    background: #ffffff;
}

.css-mine {
  margin-top: 2em;
  clear: both;
}

.my-custom-scrollbar {
    position: relative;
    height: 250px;
    overflow: auto;
}

.table-wrapper-scroll-y {
display: block;
}
</style>
<body>
    <div class="container" style="margin-top:130px;">
        <!-- <?php $this->load->view('templates/sidenavbar')?> -->
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
                <a href="<?= base_url('mulaiPraktikum')?>">
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
                <?php if ($this->session->userdata('gender') == "Perempuan") {?>
                    <img src="<?= base_url('assets/women.png')?>" style="width:110px;">
                <?php }else{ ?>
                    <img src="<?= base_url('assets/cowo.png')?>" style="width:140px;">
                <?php }?>
                </div>
                <div class="alert alert-light" role="alert" style="width:490px; height:50px; margin: 10px;margin-top:30px;border-radius:15px">
                    Semoga nilaimu tidak mengkhinati hasil kerja kerasmuya~
                </div>
            </div>
            <!-- end alert -->

            <!-- konten NILAI -->
            <div class="container konten">
                <div class="" style="background-color: white; margin-top:0px; margin-left:190px; width:900px; height:490px; border-radius:10px">
                    <h6>Nilai</h6>
                </div>
                <div style="position: absolute; margin-left:250px;margin-top:60px;width: 800px;height: 800px">
                    <canvas id="speedChart"></canvas>
                </div>
            </div>
            <!-- end konten -->
            <div class="" style="background-color: white; margin-top:20px; margin-left:205px; margin-bottom: 50px;width:900px; height:590px; border-radius:10px">
                <h6>asisten</h6>
                <!-- Header Table fixed -->
                <table class="table-bordered table" width="90%">
                    <thead>
                        <tr>
                        <th class="th">No
                        </th>
                        <th class="th">Asisten Praktikum
                        </th>
                        <th class="th">Mata Praktikum
                        </th>
                        <th class="th">Modul
                        </th>
                        <th class="th">Tes Awal
                        </th>
                        <th class="th">Tes Jurnal
                        </th>
                        <th class="th">Tes Akhir
                        </th>
                        </tr>
                    </thead>    
                </table>
                   
                <div class="table-wrapper-scroll-y my-custom-scrollbar">
                <table  id="dtVerticalScrollExample" class="table-bordered table" cellspacing="0" width="90%">
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Yazid</td>
                            <td>JRK</td>
                            <td>Mod 1</td>
                            <td>10</td>
                            <td>60</td>
                            <td>25</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Yazid</td>
                            <td>JRK</td>
                            <td>Mod 2</td>
                            <td>10</td>
                            <td>57</td>
                            <td>10</td>
                        </tr>
                        
                        <tr>
                            <td>3</td>
                            <td>Rafif</td>
                            <td>JRK</td>
                            <td>Mod 3</td>
                            <td>10</td>
                            <td>60</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Rafif</td>
                            <td>JRK</td>
                            <td>Mod 4</td>
                            <td>10</td>
                            <td>50</td>
                            <td>24</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Yazid</td>
                            <td>JRK</td>
                            <td>Mod 5</td>
                            <td>10</td>
                            <td>60</td>
                            <td>29</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Enrico</td>
                            <td>JRK</td>
                            <td>Mod 6</td>
                            <td>10</td>
                            <td>60</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Kinkin</td>
                            <td>JRK</td>
                            <td>Mod 7</td>
                            <td>10</td>
                            <td>52</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Yazid</td>
                            <td>jrk</td>
                            <td>Mod 8</td>
                            <td>10</td>
                            <td>60</td>
                            <td>22</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
        <!-- end main -->
    </div>
    <!-- end container -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script type="text/javascript">
        var speedCanvas = document.getElementById("speedChart");

        Chart.defaults.global.defaultFontFamily = "Lato";
        Chart.defaults.global.defaultFontSize = 18;

        var speedData = {
        labels: ["modul1", "modul2", "modul3", "modul4", "modul5", "modul6", "modul7", "modul8"],
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
            boxWidth: 80,
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