<?php $this->load->view('templates/header')?>

<body>
    <div class="container" style="margin-top:130px;">
        <?php $this->load->view('templates/sidenavbar')?>
        <div class="d-flex">
        <!-- ini konten -->
        <div class="container konten" style="padding:5px">
                <div class="txt" style="background-color: white;margin-left:170px; width:250px; height:310px; border-radius:10px;padding-top:20px">
                    <div class="profile">
                        <img src="<?= base_url('assets/intersection1.png')?>" style="width:100px;" alt="">
                        <p>Shahnaz Nur Asyifa</p>
                    </div>
                </div>
        </div>
        <div class="container konten">
                <div class="txt" style="background-color: white;width:667px; height:710px; border-radius:10px; margin-bottom:30px">
                    <h6>Edit Profile</h6>
                    <form>
                        <div class="form-group row"  style="margin-left:5px">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Tempat Tanggal Lahir</label>
                                <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="tempat..">
                                </div>
                                <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="03/04/00">
                            </div>
                        </div>
                        <div class="form-group row" style="margin-left:5px">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <select class="form-control col-sm-7" style="left:14px">
                                <option>Perempuan</option>
                                <option>Laki-laki</option>
                            </select>
                        </div>
                        <div class="form-group row" style="margin-left:5px">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Agama</label>
                            <select class="form-control col-sm-7" style="left:14px">
                                <option>Islam</option>
                                <option>Khatolik</option>
                                <option>Budha</option>
                            </select>
                        </div>
                        <div class="form-group row " style="margin-left:5px">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-7">
                                <textarea class="form-control col-sm-12" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group row " style="margin-left:5px">
                            <label class="col-sm-3 col-form-label">Kontak</label>
                            <div class="input-group col-sm-7">
                                <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="idLine">
                            </div>
                        </div>
                        <div class="form-group row" style="margin-left:5px">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Pertanyaan Keamanan</label>
                            <select class="form-control col-sm-7" style="left:14px">
                                <option>Siapa kamu?</option>
                                <option>Siapa aku?</option>
                                <option>Ada dimana aku?</option>
                            </select>
                        </div>
                        <div class="form-group row" style="margin-left:5px">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Jawaban Pertanyaan</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="Jawaban Pertanyaan keamanan..">
                            </div>
                        </div>
                        <div class="form-group row" style="margin-left:5px">
                            <label for="inputPassword3" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-4">
                                <a href="<?= base_url('index.php/editProfile')?>">
                                    <button type="button" class="btn" style="width:150px;background-color: #2E5F78;color:white">Simpan Perubahan</button>
                                </a>
                               
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