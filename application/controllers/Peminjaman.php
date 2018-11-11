<?php 
	/**
	* 
	*/
	class Peminjaman extends CI_Controller
	{
		
		function __construct(){
			parent::__construct();
			$this->load->library('session');
			$this->load->helper('url');
			$this->load->model('Barang_Model','barang');
			$this->load->model('Peminjaman_Model','pinjamModel');
		}

		public function index(){
			$peminjaman=$this->pinjamModel->getPeminjaman();

			$this->load->view('dashboard_user/cart', compact('peminjaman'));
		}
		
		public function pinjam(){
			if($this->session->has_userdata('username')){
				$id=$this->input->get('id_barang');
				$barang=$this->barang->find($id);
				$input=[
					'id_barang'=>$barang->id_barang,
					'id_peminjam'=>$this->session->userdata('id'),
					'status_peminjaman'=>'1'//1 tandanya adalah sedang dalam proses 
				];
				//echo "Masukkan cart".$id;
				//echo var_dump($barang);
				$this->pinjamModel->create($input);
				$ubahStatusBarang=[
					'status'=>'2'
				];
				$this->barang->update($id,$ubahStatusBarang);
				redirect('Home');

			}else{
				$data = "Anda belum Login";
				redirect('Login', compact('data'));
			}
		}
		public function batalPinjam($id_peminjaman){
			$id=$this->input->get('id_barang');
			$ubahStatusBarang=[
				'status'=>'1'
			];
			$ubahStatusPeminjaman=[
				'status_peminjaman'=>'4'
			];
			$this->pinjamModel->updatePeminjaman($id_peminjaman,$ubahStatusPeminjaman);
			$this->barang->update($id,$ubahStatusBarang);
			redirect('Peminjaman');
		}
		
	}
 ?>