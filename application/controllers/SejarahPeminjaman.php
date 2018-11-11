<?php 

/**
* 
*/
class SejarahPeminjaman extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Peminjaman_Model','peminjaman');
		$this->load->library('session');
	}

	public function index(){
		$peminjaman= (object) $this->peminjaman->getSejarahPeminjaman();
		$this->load->view('dashboard_user/sejarah_peminjaman',compact('peminjaman'));
	}
}

 ?>