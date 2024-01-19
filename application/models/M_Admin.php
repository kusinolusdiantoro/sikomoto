<?php

class M_Admin extends CI_Model
{

	public function get_all_admin()
	{
		return $this->db->get('tb_admin')->result();
	}
	//START FUNCTION DAFTAR ISTILAH
	public function allPasien()
		{
			return $this->db->get('tb_pasien')->result();
		}

	public function addPasien($data)
		{
			$this->db->insert('tb_pasien', $data);
		}

	public function getPasein($dimana)
		{
			return $this->db->get_where('tb_pasien', $dimana)->result();
		}

	
	public function UpdatePasien($dimana, $data)
		{
			$this->db->where($dimana);
			$this->db->update('tb_pasien', $data);
		}


		//START FUNCTION KANKER
		public function allKanker()
		{
			return $this->db->get('tb_kanker')->result();
		}

		public function getDataforNoRM($no_rm) {
        $this->db->where('no_rm', $no_rm);
        $query = $this->db->get('tb_pasien'); // Ganti 'tb_identitas' dengan nama tabel Anda

        if ($query->num_rows() > 0) {
            return $query->row_array(); // Mengembalikan data dalam bentuk array
        } else {
            return array(); // Mengembalikan array kosong jika data tidak ditemukan
        }
    }

	 public function getDataByPasienID($id_pasien) 
	{
		$this->db->where('id_pasien', $id_pasien);
		$query = $this->db->get('tb_pasien');

		if ($query->num_rows() > 0) {
			return $query->row_array(); // Mengembalikan data berdasarkan id_pendaftaran dalam bentuk array
		} else {
			return array(); // Mengembalikan array kosong jika data tidak ditemukan
		}
	}


	public function addKanker($data)
		{
			$this->db->insert('tb_kanker', $data);
		}

	public function getkanker($dimana)
		{
			return $this->db->get_where('tb_kanker', $dimana)->result();
		}

	
	public function UpdateKanker($dimana, $data)
		{
			$this->db->where($dimana);
			$this->db->update('tb_kanker', $data);
		}

}