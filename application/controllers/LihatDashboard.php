<?php 
/**
* 
*/
class LihatDashboard extends CI_Controller
{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Barang_Model','barang');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index(){
		
	
		

	}
}


 ?>