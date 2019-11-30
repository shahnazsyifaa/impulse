<?php $this->load->view('templates/header')?>
<?php if (($this->session->userdata('tempatLahir')) == null && ($this->session->userdata('tanggalLahir'))== null && ($this->session->userdata('gender'))== null &&($this->session->userdata('agama'))== null &&($this->session->userdata('alamat'))== null &&($this->session->userdata('kontak'))== null &&($this->session->userdata('pertanyaanKeamanan'))== null && ($this->session->userdata('jawabanKeamanan')) == null){ ?>
<body>
    <div class="container" style="margin-top:130px;">
        <?php $this->load->view('templates/sidenavbar')?>
        <div class="d-flex">
        <!-- ini konten -->
        <div class="container konten" style="padding:5px">
                <div class="txt" style="background-color: white;margin-left:170px; width:250px; height:310px; border-radius:10px;padding-top:20px">
                    <div class="profile">
                    <?php if ($this->session->userdata('gender') == "Perempuan") {?>
                        <img src="<?= base_url('assets/cewe2.png')?>" style="width:100px;" alt="">
                    <?php }else{ ?>
                        <img src="<?= base_url('assets/cowo3.png')?>" style="width:100px;" alt="">
                    <?php }?>
                        <p><?= $this->session->userdata('nama')?></p>
                    </div>
                </div>
        </div>

        <div class="container konten">
                <div class="txt" style="background-color: white;width:667px; height:710px; border-radius:10px; margin-bottom:30px">
                    <h6>Edit Profile</h6>
                    <?php echo $this->session->flashdata('message'); ?>
                    <form method="post" action="<?= base_url('praktikan/doEditProfil') ?>">
                        <div class="form-group row"  style="margin-left:5px">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Tempat Tanggal Lahir</label>
                                <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="tempat.." name="tempatLahir" value="<?= $this->session->userdata('tanggalLahir') ?>">
                                <?=form_error('tempatLahir','<small class="text-danger">','</small>');?>
                                </div>
                                <div class="col-sm-4">
                                <input type="date" class="form-control"  name="date" value="<?= set_value('date') ?>">
                                <?=form_error('date','<small class="text-danger">','</small>');?>
                            </div>
                        </div>
                        <div class="form-group row" style="margin-left:5px">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <select class="form-control col-sm-7" style="left:14px" name= "gender" value="<?= set_value('gender') ?>">
                                <option>Perempuan</option>
                                <option>Laki-laki</option>
                            </select>
                            <?=form_error('gender','<small class="text-danger">','</small>');?>
                        </div>
                        <div class="form-group row" style="margin-left:5px">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Agama</label>
                            <select class="form-control col-sm-7" style="left:14px" name="agama" value="<?= set_value('agama') ?>">
                                <option>Islam</option>
                                <option>Khatolik</option>
                                <option>Budha</option>
                                <option>Kristen Protestan</option>
                                <option>Hindu</option>
                                <option>Konghucu</option>
                            </select>
                            <?=form_error('agama','<small class="text-danger">','</small>');?>
                        </div>
                        <div class="form-group row " style="margin-left:5px">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-7">
                                <textarea class="form-control col-sm-12" id="exampleFormControlTextarea1" rows="3" name="alamat"><?= set_value('alamat') ?></textarea>
                                <?=form_error('alamat','<small class="text-danger">','</small>');?>
                            </div>
                        </div>
                        <div class="form-group row " style="margin-left:5px">
                            <label class="col-sm-3 col-form-label">Kontak</label>
                            <div class="input-group col-sm-7">
                                <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="idLine" name="kontak" value="<?= set_value('kontak') ?>">
                                <?=form_error('kontak','<small class="text-danger">','</small>');?>
                            </div>
                        </div>
                        <div class="form-group row" style="margin-left:5px">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Pertanyaan Keamanan</label>
                            <select class="form-control col-sm-7" style="left:14px" name="pertanyaanKeamanan" value="<?= set_value('pertanyaanKeamanan') ?>">
                                <option>Siapa kamu?</option>
                                <option>Siapa aku?</option>
                                <option>Ada dimana aku?</option>
                            </select>
                            <?=form_error('pertanyaanKeamanan','<small class="text-danger">','</small>');?>
                        </div>
                        <div class="form-group row" style="margin-left:5px">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Jawaban Pertanyaan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="Jawaban Pertanyaan keamanan.." name ="jawabanKeamanan" value="<?= set_value('jawabanKeamanan') ?>">
                                <?=form_error('jawabanKeamanan','<small class="text-danger">','</small>');?>
                            </div>
                        </div>
                        <div class="form-group row" style="margin-left:5px">
                            <label for="inputPassword3" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-4">
                                <button type="submit" class="btn" style="width:150px;background-color: #2E5F78;color:white">Simpan Perubahan</button>
                               
                            </div>
                        </div>
                    </form>
                    <!-- end form -->
                </div>
            </div>
            <!-- end konten -->
        </div>
        <!-- end d-flex -->
    </div>
    <!-- end container utama -->
</body>
<?php }else{?>
    <body>
    <div class="container" style="margin-top:130px;">
        <?php $this->load->view('templates/sidenavbar')?>
        <div class="d-flex">
        <!-- ini konten -->
        <div class="container konten" style="padding:5px">
                <div class="txt" style="background-color: white;margin-left:170px; width:250px; height:310px; border-radius:10px;padding-top:20px">
                    <div class="profile">
                    <?php if ($this->session->userdata('gender') == "Perempuan") {?>
                        <img src="<?= base_url('assets/cewe2.png')?>" style="width:100px;" alt="">
                    <?php }else{ ?>
                        <img src="<?= base_url('assets/cowo3.png')?>" style="width:100px;" alt="">
                    <?php }?>
                        <p><?= $this->session->userdata('nama')?></p>
                    </div>
                </div>
        </div>
        <div class="container konten">
                <div class="txt" style="background-color: white;width:667px; height:710px; border-radius:10px; margin-bottom:30px">
                    <h6>Edit Profile</h6>
                    <?php echo $this->session->flashdata('message'); ?>
                    <form method="post" action="<?= base_url('praktikan/doEditProfil') ?>">
                        <div class="form-group row"  style="margin-left:5px">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Tempat Tanggal Lahir</label>
                                <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="tempat.." name="tempatLahir" value="<?= $this->session->userdata('tempatLahir') ?>">
                                <?=form_error('tempatLahir','<small class="text-danger">','</small>');?>
                                </div>
                                <div class="col-sm-4">
                                <input type="date" class="form-control"  name="date" value="<?= $this->session->userdata('tanggalLahir') ?>">
                                <?=form_error('date','<small class="text-danger">','</small>');?>
                            </div>
                        </div>
                        <div class="form-group row" style="margin-left:5px">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <select class="form-control col-sm-7" style="left:14px" name= "gender" value="<?= $this->session->userdata('gender') ?>">
                                <option selected> <?= $this->session->userdata('gender') ?> </option>
                                <option>Perempuan</option>
                                <option>Laki-laki</option>
                            </select>
                            <?=form_error('gender','<small class="text-danger">','</small>');?>
                        </div>
                        <div class="form-group row" style="margin-left:5px">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Agama</label>
                            <select class="form-control col-sm-7" style="left:14px" name="agama" selected value="<?= $this->session->userdata('agama') ?>">
                                <option selected> <?= $this->session->userdata('agama') ?></option>
                                <option>Islam</option>
                                <option>Khatolik</option>
                                <option>Budha</option>
                                <option>Kristen Protestan</option>
                                <option>Hindu</option>
                                <option>Konghucu</option>
                            </select>
                            <?=form_error('agama','<small class="text-danger">','</small>');?>
                        </div>
                        <div class="form-group row " style="margin-left:5px">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-7">
                                <textarea class="form-control col-sm-12" id="exampleFormControlTextarea1" rows="3" name="alamat"><?= $this->session->userdata('alamat') ?></textarea>
                                <?=form_error('alamat','<small class="text-danger">','</small>');?>
                            </div>
                        </div>
                        <div class="form-group row " style="margin-left:5px">
                            <label class="col-sm-3 col-form-label">Kontak</label>
                            <div class="input-group col-sm-7">
                                <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="idLine" name="kontak" value="<?= $this->session->userdata('kontak') ?>">
                                <?=form_error('kontak','<small class="text-danger">','</small>');?>
                            </div>
                        </div>
                        <div class="form-group row" style="margin-left:5px">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Pertanyaan Keamanan</label>
                            <select class="form-control col-sm-7" style="left:14px" name="pertanyaanKeamanan" value="<?= $this->session->userdata('pertanyaanKeamanan') ?>">
                                <option>Siapa kamu?</option>
                                <option>Siapa aku?</option>
                                <option>Ada dimana aku?</option>
                            </select>
                            <?=form_error('pertanyaanKeamanan','<small class="text-danger">','</small>');?>
                        </div>
                        <div class="form-group row" style="margin-left:5px">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Jawaban Pertanyaan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="Jawaban Pertanyaan keamanan.." name ="jawabanKeamanan" value="<?= $this->session->userdata('jawabanKeamanan') ?>">
                                <?=form_error('jawabanKeamanan','<small class="text-danger">','</small>');?>
                            </div>
                        </div>
                        <div class="form-group row" style="margin-left:5px">
                            <label for="inputPassword3" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-4">
                                <button type="submit" class="btn" style="width:150px;background-color: #2E5F78;color:white">Simpan Perubahan</button>
                               
                            </div>
                        </div>
                    </form>
                    <!-- end form -->
                </div>
            </div>
            <!-- end konten -->
        </div>
        <!-- end d-flex -->
    </div>
    <!-- end container utama -->
</body>

<?php }?>