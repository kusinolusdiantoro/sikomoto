<?php

class M_User extends CI_Model
{

	//START FUNCTION DAFTAR ISTILAH
	public function allTermin()
		{
			return $this->db->get('tb_termin')->result();
		}

	public function addTermin($data)
		{
			$this->db->insert('tb_termin', $data);
		}

	public function getTermin($dimana)
		{
			return $this->db->get_where('tb_termin', $dimana)->result();
		}

	
	public function updateTermin($dimana, $data)
		{
			$this->db->where($dimana);
			$this->db->update('tb_termin', $data);
		}

	//START FUNCTION SOAL
	public function allSoal()
		{
			return $this->db->get('tb_soal')->result();
		}

	public function addSoal($data)
		{
			$this->db->insert('tb_soal', $data);
		}

	public function getSoal($dimana)
		{
			return $this->db->get_where('tb_soal', $dimana)->result();
		}

	
	public function updateSoal($dimana, $data)
		{
			$this->db->where($dimana);
			$this->db->update('tb_soal', $data);
		}

		//START FUNCTION SOAL
	public function allMateri()
		{
			return $this->db->get('tb_materi')->result();
		}

	public function addMateri($data)
		{
			$this->db->insert('tb_materi', $data);
		}

	public function getMateri($dimana)
		{
			return $this->db->get_where('tb_materi', $dimana)->result();
		}

	
	public function updateMateri($dimana, $data)
		{
			$this->db->where($dimana);
			$this->db->update('tb_materi', $data);
		}


}