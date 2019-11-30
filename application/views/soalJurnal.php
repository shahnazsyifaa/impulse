<?php $this->load->view('templates/header')?>

<body>
    <div class="container" style="margin-top:130px;">
        <?php $this->load->view('templates/sidenavbar')?>
        <div class="main">
            <!-- ini alert -->
            <div class="d-flex" style="width:1010px; height:130px; margin-left:180px; margin-top:-45px">
                <div class="">
                <?php if ($this->session->userdata('gender') == "Perempuan") {?>
                    <img src="<?= base_url('assets/women.png')?>" style="width:110px;">
                <?php }else{ ?>
                    <img src="<?= base_url('assets/cowo.png')?>" style="width:140px;">
                <?php }?>
                </div>
                <div class="alert alert-light" role="alert" style="width:300px; height:50px; margin: 10px;margin-top:30px;border-radius:15px">
                   Selamat mengerjakan jurnal
                </div>
            </div>
            <!-- end alert -->

            <!-- ini konten -->
            <div class="container konten">
                <div class="txt" style="background-color: white; margin-top:0px; margin-left:190px; width:900px; height:210px; border-radius:10px">
                    <h6>Soal Jurnal</h6>
                    <p style=15px;margin-left:20px>Silahkan download terlebih dahulu soal jurnal di bawah ini! Kerjakan soal dengan sebaik-baiknya yaa</p>
                    <!-- button modah -->
                    <button type="button" class="btn" data-toggle="modal" data-target="#modalJurnalHabis" style="width:150px;background-color: #2E5F78;color:white;margin-left:350px;margin-top:25px;border-radius:10px;"><b>Download Soal</b></button>
                    <!-- Isi modal-->
                    <div class="modal fade" id="modalJurnalHabis" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- <h6 style="text-align:center">Waktu pengerjaan soal jurnal 5 menit lagi</h6> -->
                                    <h6 style="text-align:center">Waktu pengerjaan soal jurnal telah habis, silahkan segera upload jawabanmu</h6>
                                </div>
                                <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #2E5F78;color:white">Oke</button> -->
                                    <a href="<?= base_url('index.php/formUpload')?>">
                                        <button type="button" class="btn btn-secondary" style="background-color: #2E5F78;color:white">Upload Jawaban</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal -->
                </div>
            </div>
            <!-- end konten -->
        </div>
        <!-- end main -->
    </div>
    <!-- end container -->
</body>