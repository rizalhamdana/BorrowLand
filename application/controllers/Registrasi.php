<?php 
/**
* 
*/
class Registrasi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Login_Model','user');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index(){
		if(!$this->session->has_userdata('id','username','login')){
			$this->load->view('sign_up');
		}
		
	}
	public function daftar(){
		if(!$_POST){
			$this->load->view('sign_up');
		}else{
			$input=(object) $this->input->post();
			$this->user->insertDataUser($input);
			$input1=[
				'nama_peminjam'=>$this->input->post('nama_lengkap'),
				'username_peminjam'=>$this->input->post('username'),
				'alamat_peminjam'=>$this->input->post('alamat_user'),
				'email_peminjam'=>$this->input->post('email_user')
			];
			$this->user->insertDataPeminjam($input1);
			redirect('Login');
		}
	}
}

 ?>