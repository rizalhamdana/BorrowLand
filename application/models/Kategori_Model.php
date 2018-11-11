<?php 
	/**
	* 
	*/
	class Kategori_Model extends CI_Model
	{	
		function __construct()
		{
			parent::__construct();
		}

		function getAllKategori(){
			$hasil=$this->db->get('kategori');
			if($hasil->num_rows()>0){
				return $hasil->result();	
			}else{
				return array();
			}
		}

		function find($id){
			$hasil=$this->db->where('id_kategori',$id)
							->limit(1)
							->get('kategori');
			if($hasil->num_rows()>0){
				return $hasil->result();	
			}else{
				return array();
			}
		}
	}


 ?>