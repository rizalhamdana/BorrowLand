<?php 
/**
* 
*/
class Home extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Barang_Model','barang');
	}

	public function index(){
		$barang=$this->barang->getBarangAll();
		$this->load->view('index',compact('barang'));
	}	
	
}

 ?>