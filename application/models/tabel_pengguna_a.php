<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tabel_pengguna_a extends CI_model {

        public function gettabel_pengguna(){
            $query = $this->db->get("profil_pengguna");
            if($query->num_rows() > 0){
                return $query->result();
            }else{
                return false;
            }

		}
		public function submit(){
			$field = array(
			'Nama'=>$this->input->post('txt_nama'),
			'Kelas'=>$this->input->post('txt_kelas'),
			'Angkatan'=>$this->input->post('txt_angkatan'),
			'Username'=>$this->input->post('txt_username'),
			'Password'=>$this->input->post('txt_password')
			);
			$this->db->insert('profil_pengguna', $field);
			if($this->db->affected_rows() > 0){
				return true;
			}else{
				return false;
			}
		} 
}
