<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Auth extends CI_Model {

    public function cekAdmin($table, $dimana){
        return $this->db->get_where('tb_admin', $dimana);
    }
    public function cekUser($table, $dimana){
        return $this->db->get_where('tb_user', $dimana);
    }

    public function addUser($data)
		{
			$this->db->insert('tb_user', $data);
		}
    public function get_admin_data($username) 
    {
    $this->db->where('username', $username);
    return $this->db->get('tb_admin')->row();
    }
}
?>


