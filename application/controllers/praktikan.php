<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class praktikan extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('praktikanModel');
	}
    public function index()
	{
		$this->load->view('Login');
    }
    public function login(){
        $this->form_validation->set_rules('nim','nim','required|trim');
        $this->form_validation->set_rules('password','Password','required|trim');
        if($this->form_validation->run()== false){
            $this->session->set_flashdata('message','<div class ="alert alert-danger role = alert">NIM atau Password Kosong</div>');
            $this->load->view('Login');
        }
        else{
            $query = $this->praktikanModel->getMahasiswaById($this->input->post('nim'));
            if(($query)&&(password_verify($this->input->post('password'), $query["password" ]))){

                $this->session->set_userdata($query);
                //var_dump($this->session->userdata('tanggalLahir'));
                $this->load->view('Dashboard');
            }else{
              $this->session->set_flashdata('message','<div class ="alert alert-danger role = alert">NIM atau Password Salah</div>');
              $this->load->view('login');
            };
        }
    }
    public function editProfile(){
        $this->load->view('editProfile');
    }
    public function doEditProfil(){
        $this->form_validation->set_rules('tempatLahir','tempatLahir','required|trim');
        $this->form_validation->set_rules('date','date','required|trim');
        $this->form_validation->set_rules('gender','gender','required|trim');
        $this->form_validation->set_rules('agama','agama','required|trim');
        $this->form_validation->set_rules('alamat','alamat','required|trim');
        $this->form_validation->set_rules('kontak','kontak','required|trim');
        $this->form_validation->set_rules('pertanyaanKeamanan','pertanyaanKeamanan','required|trim');
        $this->form_validation->set_rules('jawabanKeamanan','jawabanKeamanan','required|trim');
        if($this->form_validation->run()== false){
            $this->session->set_flashdata('message','<div class ="alert alert-danger role = alert">Gagal Melakukan Edit Profil</div>');
            $this->load->view('editProfile');
        }else{
            $data = [
                'nim'=> $this->session->userdata('nim'),
                'tempatLahir' =>$this->input->post('tempatLahir'),
                'tanggalLahir'=>$this->input->post('date'),
                'gender'=>$this->input->post('gender'),
                'agama'=>$this->input->post('agama'),
                'alamat'=>$this->input->post('alamat'),
                'kontak'=>$this->input->post('kontak'),
                'pertanyaanKeamanan'=>$this->input->post('pertanyaanKeamanan'),
                'jawabanKeamanan'=>$this->input->post('jawabanKeamanan')
            ];
            $this->praktikanModel->editProfil($data);
            $query = $this->praktikanModel->getMahasiswaById($this->session->userdata('nim'));
            $this->session->set_userdata($query);
            $this->session->set_flashdata('message','<div class ="alert alert-success role = alert">Berhasil Melakukan Edit Profil</div>');
            $this->load->view('editProfile');
        };
        
    }
    public function ubahPassword(){
        $this->form_validaation->set_rules('passLama','passLama','required|trim');
        $this->form_validaation->set_rules('passBaru','passBaru','required|trim');
        $this->form_validaation->set_rules('rePass','rePass','required|trimmatches[passBaru]');
        if($this->form_validation->run()== false){
            redirect();
        }
        else{
           if(password_verify($this->input->post('password'),$this->session->userdata(["password"]))){
               //$this->praktikanModel->ubahPass(password_hash($this->post->('passBaru'),PASSWORD_DEFAULT));
             } 
        }

    }

    public function logout(){
        $this->session->unset_userdata('nim');
        redirect(base_url());
    }
}