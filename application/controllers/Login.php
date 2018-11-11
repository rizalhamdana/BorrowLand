<?php 
/**
* 
*/
if(!defined('BASEPATH')) exit('no direct script access allowed');
class Login extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Login_Model','login');
		$this->load->helper('url');
		$this->load->library('session');
	}

	

	public function index(){
		if($this->session->has_userdata('username')){
			redirect('Home');
		}
		if(!$_POST){
			$this->load->view('login_view');		
		}else{
			$input= (object) $this->input->post();
			if($this->login->cek($input)){
				echo 'berhasil';
				$user_aktif=$this->session->userdata('username');
				redirect('Home',compact('user_aktif'));
			}else{

				redirect('Login');
			}
		}

	}
	public function logout(){
		$this->login->logout();
		redirect('Home');
	}
}

?>