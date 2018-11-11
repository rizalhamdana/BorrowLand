<?php 
/**
* 
*/
class Products extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Barang_Model','barang');
		$this->load->model('Kategori_Model','kategori');
		$this->load->helper('url');
		
	}
	public function index(){
		$barang=$this->barang->getBarangUser();	
		$heading='Inventory anda';	
		$this->load->view('dashboard_user/inventory',compact('heading','barang'));
	}
	
	public function create(){
		if(!$_POST){
			$kategori=$this->kategori->getAllKategori();
			
			$this->load->view('dashboard_user/upload', compact('kategori'));
		}else{
			$config['upload_path']='./assets/upload_image/';
			$config['allowed_types'] = 'jpg|jpeg|png';
        	$config['max_size'] = '1024*800';
        	$this->load->library('upload',$config);
			if(!$this->upload->do_upload('userfile')){
				echo "gagal";
			 	$error = array('error' => $this->upload->display_errors()); var_dump($error);	
			}else{
				$upload_data=$this->upload->data();
				$input=array(
					'nama_barang'=>$this->input->post('nama_barang'),
					'deskripsi_barang'=>$this->input->post('deskripsi_barang'),
					'harga_sewa_barang'=>$this->input->post('harga_sewa_barang'),
					'id_user'=>$this->input->post('id_user'),
					'status'=>'1',
					'id_kategori'=>$this->input->post('kategori_barang'),
					'gambar_barang'=>$upload_data['file_name']
				);
				$this->barang->insertData($input);
				redirect('Products');
			}
		}	

	}
	public function update($edit){
		if(!$_POST){
			$data=$this->barang->find($edit);
			$kategori_barang=$this->kategori->getAllKategori();
			$this->load->view('dashboard_user/form_edit',compact('kategori_barang','data'));
		}else{
			$config['upload_path']='./assets/upload_image/';
			$config['allowed_types'] = 'jpg|jpeg|png';
        	$config['max_size'] = '1024*800';
        	$this->load->library('upload',$config);
			if(!$this->upload->do_upload('userfile')){
				$input=array(
					'nama_barang'=>$this->input->post('nama_barang'),
					'deskripsi_barang'=>$this->input->post('deskripsi_barang'),
					'harga_sewa_barang'=>$this->input->post('harga_sewa_barang'),
					'id_kategori'=>$this->input->post('kategori_barang'),
					'id_user'=>$this->input->post('id_user')					
				);	
				$this->barang->update($edit,$input);
				redirect('Products');
			}else{
				$upload_data=$this->upload->data();
				$input=array(
					'nama_barang'=>$this->input->post('nama_barang'),
					'deskripsi_barang'=>$this->input->post('deskripsi_barang'),
					'harga_sewa_barang'=>$this->input->post('harga_sewa_barang'),
					'id_user'=>$this->input->post('id_user'),
					'id_kategori'=>$this->input->post('kategori_barang'),
					'gambar_barang'=>$upload_data['file_name']
				);
				$this->barang->update($edit,$input);
				redirect('Products');
			}
			
		}

	}
	public function delete($id){
		//$id=$this->input->post('id_produk');
		//hapus sebuah barang;
		$this->barang->delete($id);
		redirect('Products');
	}

}

 ?>