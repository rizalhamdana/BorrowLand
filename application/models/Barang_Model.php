<?php 
/**
* 
*/
class Barang_Model extends CI_Model
{
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}
	public function getBarangUser(){
		$id_ini= $this->session->userdata('id');
		$hasil=$this->db->where('id_user',$id_ini)
						->join('kategori','kategori.id_kategori=barang.id_kategori')
						->get('barang');
		if($hasil->num_rows()>0){
			return $hasil->result();	
		}else{
			return array();
		}				
					
	}
	public function insertData($input){
		$this->db->insert('barang',$input);
		return $this->db->insert_id();
	}
	public function getBarangAll(){
		$hasil=$this->db->where('status',1)
						->get('barang');

		if($hasil->num_rows()>0){
			return $hasil->result();	
		}else{
			return array();
		}	
	}

	public function find($id){
		$data= $this->db->where('id_barang',$id)
						->limit(1)
						->get('barang');

		if($data->num_rows()>0){
			return $data->row();
		}else{
			return array();
		}
	}
	public function delete($id){
		$this->db->where ('id_barang',$id)->delete('barang');
	}

	public function update($id,$data_products){
		$this->db->where('id_barang',$id)
				->update('barang',$data_products);
	}

	public function getBarangPinjam(){
		$hasil=$this->db->where('barang.id_user',$this->session->userdata('id'))
						->where('status','2')
						->join('transaksi','transaksi.id_barang=barang.id_barang')
						->join('user','user.id_user=transaksi.id_peminjam')
						->where('transaksi.status_peminjaman','1')
						->get('barang');

		if($hasil->num_rows()>0){
			return $hasil->result();
		}else{
			return array();
		}
	}
}

 ?>