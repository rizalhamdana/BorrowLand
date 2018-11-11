<?php 
	class Login_Model extends CI_Model
	{


		public function cek($input){

			$table='user';
			$hasil=$this->db->where('username',$input->username)
							->where('password',$input->password)
							->limit(1)
							->get('user')
							->row();
							
			if(count($hasil)){
					$data=[	'login'=>true, 'id'=>$hasil->id_user,'username'=>$hasil->username,'nama_peminjam'=>$hasil->nama_lengkap,'email'=>$hasil->email_user];
					$this->session->set_userdata($data);				
				return true;
			}else{
				return false;
			}
		}
		public function insertDataUser($input){
			$this->db->insert('user',$input);
			return $this->db->insert_id();
		}
		public function logout(){
			$data=['username'=>null, 'id'=>null, 'login'=>null];
			$this->session->unset_userdata($data);
			$this->session->sess_destroy();
		}
		public function insertDataPeminjam($input){
			$this->db->insert('peminjam',$input);
			return $this->db->insert_id();
		}
	}
 ?>