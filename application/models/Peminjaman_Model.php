<?php 
/**
* 
*/
class Peminjaman_Model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function create($input){
		$this->db->insert('transaksi',$input);
		return $this->db->insert_id();
	}

	public function getPeminjaman(){
		$hasil=$this->db->where('status_peminjaman','1')
						->where('id_peminjam',$this->session->userdata('id'))
						->join('barang','barang.id_barang=transaksi.id_barang')
						->join('user','user.id_user=barang.id_user')
				 		->get('transaksi');

		if($hasil->num_rows()>0){
			return $hasil->result();
		}else{
			return array();
		}
	}
	public function updatePeminjaman($id,$input){
		$this->db->where('id_transaksi',$id)
				->update('transaksi',$input);
	}

	public function getSejarahPeminjaman(){
		$hasil=$this->db->where('id_peminjam',$this->session->userdata('id'))
						->join('barang','barang.id_barang=transaksi.id_barang')
						->join('user','user.id_user=barang.id_user')
				 		->get('transaksi');

		if($hasil->num_rows()>0){
			return $hasil->result();
		}else{
			return array();
		}
	}
}

 ?>