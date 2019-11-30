<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class asprak extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('asprakModel');
	}
    public function registPraktikan(){
        $data = [
            'nim' =>"1301174401",
            'nama' =>"Yazid Rahman",
            'password'=> password_hash("1234",PASSWORD_DEFAULT),
            'kelas'=>"IF41-10"
        ];
        $this->asprakModel->addPraktikan($data);
    }


}