<?php 
	/**
	* 
	*/
	class Permintaan extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Barang_Model','barang');
			$this->load->model('Peminjaman_Model','peminjaman');
			$this->load->library('session');
			$this->load->helper('url');
		}

		public function index(){
			$data=(object) $this->barang->getBarangPinjam();
			$this->load->view('dashboard_user/request' ,compact('data'));
		}

		public function tolakPermintaan($id_peminjaman){
			$id=$this->input->get('id_barang');
			$ubahStatusBarang=[
				'status'=>'1'
			];
			$ubahStatusPeminjaman=[
				'status_peminjaman'=>'3'
			];
			$this->peminjaman->updatePeminjaman($id_peminjaman,$ubahStatusPeminjaman);
			$this->barang->update($id,$ubahStatusBarang);
			redirect('Permintaan');
		}
	}
 ?>