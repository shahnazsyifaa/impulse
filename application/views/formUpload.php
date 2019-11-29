<?php $this->load->view('templates/header')?>

<body>
    <div class="container" style="margin-top:130px;">
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
            <a class="linkside nav-link" style="color:#6E87FD"  href="#uploadJawaban" data-toggle="collapse">
                <img src="<?= base_url('assets/file (1).png')?>" style="width:20px;margin-right:10px;margin-left:-25px" alt="">    
                Upload Jawaban
            </a>
            <div id="uploadJawaban" class="collapse">
                <a class="linkside nav-link" style="color:#6E87FD;margin-left:30px" href="<?= base_url('index.php/formUpload')?>">
                     Form Upload Jawaban
                </a>
                <a href="<?= base_url('index.php/hasilUpload')?>" style="margin-left:30px">
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

        <!-- main -->
        <div class="main">
            <!-- alert -->
            <div class="d-flex" style="width:1010px; height:130px; margin-left:192px; margin-top:-45px">
                <div class="">
                <?php if ($this->session->userdata('gender') == "Perempuan") {?>
                    <img src="<?= base_url('assets/women.png')?>" style="width:110px;">
                <?php }else{ ?>
                    <img src="<?= base_url('assets/menLogin.png')?>" style="width:110px;">
                <?php }?>
                </div>
                <div class="alert alert-light" role="alert" style="width:450px; height:50px; margin: 10px;margin-top:30px;border-radius:15px">
                    Pastikan untuk upload jawabanmu dengan benarya!
                </div>
            </div>
            <!-- end alert -->

            <!-- ini konten FORM -->
             <div class="container konten">
                <div class="" style="background-color: white; margin-bottom:50px;margin-top:0px; margin-left:190px; width:900px; height:690px; border-radius:10px">
                    <h6>Form Upload Jawaban</h6>
                    <form>
                        <div class="form-group row" style="margin-left:5px">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Praktikum</label>
                            <select class="form-control col-sm-4" style="left:14px">
                                <option>Jaringan Komputer</option>
                            </select>
                        </div>
                        <div class="form-group row" style="margin-left:5px">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Modul</label>
                            <select class="form-control col-sm-4" style="left:14px">
                                <option>Modul 1</option>
                                <option>Modul 2</option>
                                <option>Modul 3</option>
                                <option>Modul 4</option>
                                <option>Modul 5</option>
                                <option>Modul 6</option>
                                <option>Modul 7</option>
                                <option>Modul 8</option>
                                <option>Modul 9</option>
                                <option>Modul 10</option>
                            </select>
                        </div>
                        <div class="form-group row" style="margin-left:5px">
                            <label class="col-sm-3 col-form-label">Kelas</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="IF-41-10" readonly>
                            </div>
                        </div>
                        <div class="form-group row" style="margin-left:5px">
                            <label class="col-sm-3 col-form-label">Jadwal Praktikum</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="Jumat, 2 November 2019" readonly>
                            </div>
                        </div>
                        <div class="form-group row" style="margin-left:5px">
                            <label class="col-sm-3 col-form-label">Asprak</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="Rafif Dalimunthe" readonly>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <br>
                        <div class="form-group row" style="margin-left:5px">
                            <label class="col-sm-3 col-form-label">NIM</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="1301174402" readonly>
                            </div>
                        </div>
                        <div class="form-group row" style="margin-left:5px">
                            <label class="col-sm-3 col-form-label">Authentifikasi</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="masukkan kode authentifikasi..">
                            </div>
                        </div>
                        <div class="form-group row" style="margin-left:5px">
                            <label class="col-sm-3 col-form-label">Upload File Jawaban</label>
                            <div class="col-sm-4">
                                <input type="file" class="files" id="imgInp"  name="myFiles"/>
                                <small id="passwordHelpInline" class="text" style="color:red;">
                                    *file zip/rar
                                </small>
                                
                            </div>
                        </div>
                        <div class="form-group row" style="margin-left:5px">
                            <label  class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-4">
                                <a href="<?= base_url('index.php/hasilUpload')?>">
                                    <button type="button" class="btn shadow" style="width:150px;background-color: #2E5F78;color:white;opacity:69%;border-radius:7px"> Upload Jawaban</button>
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
    <!-- end container -->
    
</body>