<?php $this->load->view('templates/header')?>
<style>
/* .table{
    width:820px;
    margin-top:10px;
    margin-left: 40px;
    margin-right: -90px;
    border-radius: 10px;
} */
table {
    width:820px;
    margin-top:10px;
    margin-left: 40px;
    margin-right: -90px;
  border-collapse: collapse;
  border-radius: 1em;
  overflow: hidden;
}

th, td {
  padding: 1em;
  border-bottom: 2px solid white; 
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
</style>
<body>
    <div class="container" style="margin-top:130px;">
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
            <a class="linkside nav-link" style="color:#6E87FD"  href="#uploadJawaban" data-toggle="collapse">
                <img src="<?= base_url('assets/file (1).png')?>" style="width:20px;margin-right:10px;margin-left:-25px" alt="">    
                Upload Jawaban
            </a>
            <div id="uploadJawaban" class="collapse">
                <a href="<?= base_url('index.php/formUpload')?>" style="margin-left:30px">
                     Form Upload Jawaban
                </a>
                <a class="linkside nav-link" style="color:#6E87FD;margin-left:30px" href="<?= base_url('index.php/hasilUpload')?>">
                    Hasil Upload Jawaban
                </a>
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

        <!-- ini main konten -->
        <div class="main">
            <!-- alert -->
            <div class="d-flex" style="width:1010px; height:130px; margin-left:192px; margin-top:-45px">
                <div class="">
                <?php if ($this->session->userdata('gender') == "Perempuan") {?>
                    <img src="<?= base_url('assets/women.png')?>" style="width:110px;">
                <?php }else{ ?>
                    <img src="<?= base_url('assets/cowo.png')?>" style="width:140px;">
                <?php }?>
                </div>
                <div class="alert alert-light" role="alert" style="width:350px; height:50px; margin: 10px;margin-top:30px;border-radius:15px;background-color:#C3DF99;opacity:72%;color:black">
                   Jawabanmu sudah berhasil diupload~
                </div>
            </div>
            <!-- end alert -->

            <!-- ini konten HASIL -->
            <div class="container konten">
                <div class="" style="background-color: white; margin-top:0px;margin-bottom:30px; margin-left:190px; width:900px; height:595px; border-radius:10px">
                    <h6>Hasil Upload Jawaban</h6>
                    <!-- <table class="table">
                        <thead class="thead" style="background-color:#51819A">
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">MATA PRAKTIKUM</th>
                            <th scope="col">MODUL</th>
                            <th scope="col">TES AWAL</th>
                            <th scope="col">TES JURNAL</th>
                            <th scope="col">TES AKHIR</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table> -->
                    <table class="table-bordered data">
                        <tr>
                        <th scope="col">No</th>
                            <th scope="col">MATA PRAKTIKUM</th>
                            <th scope="col">MODUL</th>
                            <th scope="col">TES AWAL</th>
                            <th scope="col">TES JURNAL</th>
                            <th scope="col">TES AKHIR</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Jaringan Komputer</td>
                            <td>Modul 1</td>
                            <td>10</td>
                            <td>60</td>
                            <td>25</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jaringan Komputer</td>
                            <td>Modul 2</td>
                            <td>10</td>
                            <td>57</td>
                            <td>10</td>
                        </tr>
                        
                        <tr>
                            <td>3</td>
                            <td>Jaringan Komputer</td>
                            <td>Modul 3</td>
                            <td>10</td>
                            <td>60</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Jaringan Komputer</td>
                            <td>Modul 4</td>
                            <td>10</td>
                            <td>50</td>
                            <td>24</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Jaringan Komputer</td>
                            <td>Modul 5</td>
                            <td>10</td>
                            <td>60</td>
                            <td>29</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Jaringan Komputer</td>
                            <td>Modul 6</td>
                            <td>10</td>
                            <td>60</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Jaringan Komputer</td>
                            <td>Modul 7</td>
                            <td>10</td>
                            <td>52</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Jaringan Komputer</td>
                            <td>Modul 8</td>
                            <td>10</td>
                            <td>60</td>
                            <td>22</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- end konten -->
            
        </div>
        <!-- end main konten -->
    </div>
    <!-- end container -->
</body>