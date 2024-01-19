<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "admin") {
			redirect(base_url("login"));
		}
	}

    public function index()
	{
		$this->load->model('M_Admin');
		$data['admin']= $this->M_Admin->get_all_admin();

		$this->load->view('Admin/templates/index');
        $this->load->view('Admin/templates/navbar');
        $this->load->view('Admin/templates/sidebar', $data);
        $this->load->view('Admin/index');
        $this->load->view('Admin/templates/footer');
        $this->load->view('Admin/templates/js');
	}


    //START FUNCTION DAFTAR PASIEN 
    public function pasien()
    {
        $this->load->model('M_Admin');
        $data['pasien'] = $this->M_Admin->allPasien();

        $this->load->view('Admin/pasien/templates/index');
        $this->load->view('Admin/templates/navbar');
        $this->load->view('Admin/templates/sidebar');
        $this->load->view('Admin/pasien/index', $data);
        $this->load->view('Admin/templates/footer');
        $this->load->view('Admin/pasien/templates/js');
    }
    public function tambahPasien()
    {
        $this->load->view('Admin/pasien/tambah/templates/index');
        $this->load->view('Admin/templates/navbar');
        $this->load->view('Admin/templates/sidebar');
        $this->load->view('Admin/pasien/tambah/tambah');
        $this->load->view('Admin/templates/footer');
		$this->load->view('Admin/pasien/tambah/templates/js');
    }

    public function doTambahPasien()
    {
        $no_rm	= $this->input->post('no_rm');
        $no_registrasi	= $this->input->post('no_registrasi');
        $no_epid	= $this->input->post('no_epid');
        $nik_pasien	= $this->input->post('nik_pasien');
        $nama	= $this->input->post('nama');
        $tempat_lahir	= $this->input->post('tempat_lahir');
		$tanggal_lahir	= $this->input->post('tanggal_lahir');
		$usia_awal	= $this->input->post('usia_awal');
		$jenis_kelamin	= $this->input->post('jk');
		$agama	= $this->input->post('agama');
		$nikah	= $this->input->post('nikah');
		$suku	= $this->input->post('suku');
		$pekerjaan	= $this->input->post('pekerjaan');
		$keterangan	= $this->input->post('keterangan');
		$alamat	= $this->input->post('alamat');
		$no_telp	= $this->input->post('no_telp');

		$data	= array(
			'no_rm'	=> $no_rm,
			'no_registrasi'	=> $no_registrasi,
			'no_epid'	=> $no_epid,
			'nik_pasien'	=> $nik_pasien,
			'nama'	=> $nama,
			'tempat_lahir'	=> $tempat_lahir,
			'tanggal_lahir'	=> $tanggal_lahir,
			'usia_awal'	=> $usia_awal,
			'jk'	=> $jenis_kelamin,
			'agama'	=> $agama,
			'nikah'	=> $nikah,
			'suku'	=> $suku,
			'pekerjaan'	=> $pekerjaan,
			'keterangan'	=> $keterangan,
			'alamat'	=> $alamat,
            'no_telp'     => $no_telp
		);

        $this->load->model('M_Admin');
		$this->M_Admin->addPasien($data);
		$this->session->set_flashdata('tambah_data', 'Data Berhasil di tambah!');
		redirect('Admin/pasien');
	}

    public function updatePasien($id_pasien)
	{
		$dimana				= array('id_pasien' => $id_pasien);

        $this->load->model('M_Admin');
		$data['pasien'] 	= $this->M_Admin->getPasein($dimana);

		$this->load->view('Admin/pasien/templates/index');
        $this->load->view('Admin/templates/navbar');
        $this->load->view('Admin/templates/sidebar');
        $this->load->view('Admin/pasien/edit/edit', $data);
        $this->load->view('Admin/templates/footer');
        $this->load->view('Admin/pasien/templates/js');
	}

	public function doUpdatePasien()
{
        $id_pasien        = $this->input->post('id_pasien');
        $no_rm	= $this->input->post('no_rm');
        $no_registrasi	= $this->input->post('no_registrasi');
        $no_epid	= $this->input->post('no_epid');
        $nik_pasien	= $this->input->post('nik_pasien');
        $nama	= $this->input->post('nama');
        $tempat_lahir	= $this->input->post('tempat_lahir');
		$tanggal_lahir	= $this->input->post('tanggal_lahir');
		$usia_awal	= $this->input->post('usia_awal');
		$jenis_kelamin	= $this->input->post('jk');
		$agama	= $this->input->post('agama');
		$nikah	= $this->input->post('nikah');
		$suku	= $this->input->post('suku');
		$pekerjaan	= $this->input->post('pekerjaan');
		$keterangan	= $this->input->post('keterangan');
		$alamat	= $this->input->post('alamat');
		$no_telp	= $this->input->post('no_telp');
// 

        $dimana = array('id_pasien' => $id_pasien);
        $data	= array(
			'no_rm'	=> $no_rm,
			'no_registrasi'	=> $no_registrasi,
			'no_epid'	=> $no_epid,
			'nik_pasien'	=> $nik_pasien,
			'nama'	=> $nama,
			'tempat_lahir'	=> $tempat_lahir,
			'tanggal_lahir'	=> $tanggal_lahir,
			'usia_awal'	=> $usia_awal,
			'jk'	=> $jenis_kelamin,
			'agama'	=> $agama,
			'nikah'	=> $nikah,
			'suku'	=> $suku,
			'pekerjaan'	=> $pekerjaan,
			'keterangan'	=> $keterangan,
			'alamat'	=> $alamat,
            'no_telp'     => $no_telp
		);

    $this->load->model('M_Admin');
    // Memanggil updateUser() dengan dua argumen: $dimana dan $data
    $this->M_Admin->updatePasien($dimana, $data);
    $this->session->set_flashdata('tambah_data', 'Data Berhasil di tambah!');
    redirect('Admin/pasien');
}


	public function deletePasien($id)
	{
		$dimana = array('id_pasien' => $id);
		$this->db->delete('tb_pasien', $dimana);
		$this->session->set_flashdata('delete_termin', 'Data telah terhapus!');
		redirect('Admin/pasien');
	}


    //START FUNCTION DAFTAR PASIEN 
    public function kanker()
    {
        $this->load->model('M_Admin');
        $data['kanker'] = $this->M_Admin->allKanker();

        $this->load->view('Admin/kanker/templates/index');
        $this->load->view('Admin/templates/navbar');
        $this->load->view('Admin/templates/sidebar');
        $this->load->view('Admin/kanker/index', $data);
        $this->load->view('Admin/templates/footer');
        $this->load->view('Admin/kanker/templates/js');
    }

	
    public function tambahKanker()
    {
        $this->load->view('Admin/kanker/tambah/templates/index');
        $this->load->view('Admin/templates/navbar');
        $this->load->view('Admin/templates/sidebar');
        $this->load->view('Admin/kanker/tambah/tambah');
        $this->load->view('Admin/templates/footer');
		$this->load->view('Admin/kanker/tambah/templates/js');
    }
	public function getDataForNoRM() 
	{
		$this->load->model('M_Admin');
		$no_rm = $this->input->post('no_rm'); // Correct variable name
		$data['result'] = $this->M_Admin->getDataforNoRM($no_rm);
		echo json_encode($data);
	}
	public function getDataByPasienID($id_pasien) 
	 {
		$id_pasien = $this->uri->segment(3); // Mendapatkan id_pendaftaran dari URL
		$this->load->model('M_Admin'); // Ganti 'Nama_Model' dengan nama model Anda
		$data['result'] = $this->M_Admin->getDataByPasienID($id_pasien);
		echo json_encode($data);
    }

    public function doTambahKanker()
    {
		//DATA PASIEN
        $no_rm	= $this->input->post('no_rm');
        $no_registrasi	= $this->input->post('no_registrasi');
        $no_epid	= $this->input->post('no_epid');
        $nik_pasien	= $this->input->post('nik_pasien');
        $nama	= $this->input->post('nama');
        $tempat_lahir	= $this->input->post('tempat_lahir');
		$tanggal_lahir	= $this->input->post('tanggal_lahir');
		$usia_awal	= $this->input->post('usia_awal');
		$jenis_kelamin	= $this->input->post('jk');
		$agama	= $this->input->post('agama');
		$nikah	= $this->input->post('nikah');
		$suku	= $this->input->post('suku');
		$pekerjaan	= $this->input->post('pekerjaan');
		$keterangan	= $this->input->post('keterangan');
		$alamat	= $this->input->post('alamat');
		$no_telp	= $this->input->post('no_telp');
		
		//DATA JENIS TUMOR / KANKER
		$tanggal_diagnosa	= $this->input->post('tanggal_diagnosa');
		$diagnosa	= $this->input->post('diagnosa');
		$topografi	= $this->input->post('topografi');
		$morfologi	= $this->input->post('morfologi');
		$behaviour	= $this->input->post('behaviour');
		$grade	= $this->input->post('grade');
		$cancer	= $this->input->post('cancer');
		$treatment	= $this->input->post('treatment');
		$report	= $this->input->post('report');
		$metastase	= $this->input->post('metastase');
		
		//FORM FOLLOW-UP
		$tanggal_periksa	= $this->input->post('tanggal_periksa');
		$kode_rs	= $this->input->post('kode_rs');
		$nama_rs	= $this->input->post('nama_rs');
		$id_unit	= $this->input->post('id_unit');
		$nama_unit	= $this->input->post('nama_unit');
		$lab	= $this->input->post('lab');
		$tanggal_terakhir	= $this->input->post('tanggal_terakhir');
		$status_terakhir	= $this->input->post('status_terakhir');
		$kesimpulan	= $this->input->post('kesimpulan');
		$tanggal_registar	= $this->input->post('tanggal_registar');
		$registar	= $this->input->post('registar');
		$tanggal_verifikasi	= $this->input->post('tanggal_verifikasi');
		$verifikator	= $this->input->post('verifikator');


		$data	= array(
			//Data Pasien
			'no_rm'	=> $no_rm,
			'no_registrasi'	=> $no_registrasi,
			'no_epid'	=> $no_epid,
			'nik_pasien'	=> $nik_pasien,
			'nama'	=> $nama,
			'tempat_lahir'	=> $tempat_lahir,
			'tanggal_lahir'	=> $tanggal_lahir,
			'usia_awal'	=> $usia_awal,
			'jk'	=> $jenis_kelamin,
			'agama'	=> $agama,
			'nikah'	=> $nikah,
			'suku'	=> $suku,
			'pekerjaan'	=> $pekerjaan,
			'keterangan'	=> $keterangan,
			'alamat'	=> $alamat,
            'no_telp'     => $no_telp,
			
			//Data Jenis Kanker
            'tanggal_diagnosa'     => $tanggal_diagnosa,
            'diagnosa'     => $diagnosa,
            'topografi'     => $topografi,
            'morfologi'     => $morfologi,
            'behaviour'     => $behaviour,
            'grade'     => $grade,
            'cancer'     => $cancer,
            'treatment'     => $treatment,
            'report'     => $report,
            'metastase'     => $metastase,
			
			//Data Follow-Up
            'tanggal_periksa'     => $tanggal_periksa,
            'kode_rs'     => $kode_rs,
            'nama_rs'     => $nama_rs,
            'id_unit'     => $id_unit,
            'nama_unit'     => $nama_unit,
            'lab'     => $lab,
            'tanggal_terakhir'     => $tanggal_terakhir,
            'status_terakhir'     => $status_terakhir,
            'kesimpulan'     => $kesimpulan,
            'tanggal_registar'     => $tanggal_registar,
            'registar'     => $registar,
            'tanggal_verifikasi'     => $tanggal_verifikasi,
            'verifikator'     => $verifikator,
		);

        $this->load->model('M_Admin');
		$this->M_Admin->addKanker($data);
		$this->session->set_flashdata('tambah_data', 'Data Berhasil di tambah!');
		redirect('Admin/kanker');
	}

    public function updateKanker($id_kanker)
	{
		$dimana				= array('id_kanker' => $id_kanker);

        $this->load->model('M_Admin');
		$data['kanker'] = $this->M_Admin->getKanker($dimana);

		$this->load->view('Admin/kanker/templates/index');
        $this->load->view('Admin/templates/navbar');
        $this->load->view('Admin/templates/sidebar');
        $this->load->view('Admin/kanker/edit/edit', $data);
        $this->load->view('Admin/templates/footer');
        $this->load->view('Admin/kanker/templates/js');
	}

	public function doUpdateKanker()
{
        $id_kanker        = $this->input->post('id_kanker');
        $no_rm	= $this->input->post('no_rm');
        $no_registrasi	= $this->input->post('no_registrasi');
        $no_epid	= $this->input->post('no_epid');
        $nik_pasien	= $this->input->post('nik_pasien');
        $nama	= $this->input->post('nama');
        $tempat_lahir	= $this->input->post('tempat_lahir');
		$tanggal_lahir	= $this->input->post('tanggal_lahir');
		$usia_awal	= $this->input->post('usia_awal');
		$jenis_kelamin	= $this->input->post('jk');
		$agama	= $this->input->post('agama');
		$nikah	= $this->input->post('nikah');
		$suku	= $this->input->post('suku');
		$pekerjaan	= $this->input->post('pekerjaan');
		$keterangan	= $this->input->post('keterangan');
		$alamat	= $this->input->post('alamat');
		$no_telp	= $this->input->post('no_telp');

		//DATA JENIS TUMOR / KANKER
		$tanggal_diagnosa	= $this->input->post('tanggal_diagnosa');
		$diagnosa	= $this->input->post('diagnosa');
		$topografi	= $this->input->post('topografi');
		$morfologi	= $this->input->post('morfologi');
		$behaviour	= $this->input->post('behaviour');
		$grade	= $this->input->post('grade');
		$cancer	= $this->input->post('cancer');
		$treatment	= $this->input->post('treatment');
		$report	= $this->input->post('report');
		$metastase	= $this->input->post('metastase');
		
		//FORM FOLLOW-UP
		$tanggal_periksa	= $this->input->post('tanggal_periksa');
		$kode_rs	= $this->input->post('kode_rs');
		$nama_rs	= $this->input->post('nama_rs');
		$id_unit	= $this->input->post('id_unit');
		$nama_unit	= $this->input->post('nama_unit');
		$lab	= $this->input->post('lab');
		$tanggal_terakhir	= $this->input->post('tanggal_terakhir');
		$status_terakhir	= $this->input->post('status_terakhir');
		$kesimpulan	= $this->input->post('kesimpulan');
		$tanggal_registar	= $this->input->post('tanggal_registar');
		$registar	= $this->input->post('registar');
		$tanggal_verifikasi	= $this->input->post('tanggal_verifikasi');
		$verifikator	= $this->input->post('verifikator');
		
// 

        $dimana = array('id_kanker' => $id_kanker);
        $data	= array(
			'no_rm'	=> $no_rm,
			'no_registrasi'	=> $no_registrasi,
			'no_epid'	=> $no_epid,
			'nik_pasien'	=> $nik_pasien,
			'nama'	=> $nama,
			'tempat_lahir'	=> $tempat_lahir,
			'tanggal_lahir'	=> $tanggal_lahir,
			'usia_awal'	=> $usia_awal,
			'jk'	=> $jenis_kelamin,
			'agama'	=> $agama,
			'nikah'	=> $nikah,
			'suku'	=> $suku,
			'pekerjaan'	=> $pekerjaan,
			'keterangan'	=> $keterangan,
			'alamat'	=> $alamat,
            'no_telp'     => $no_telp,

			//Data Jenis Kanker
            'tanggal_diagnosa'     => $tanggal_diagnosa,
            'diagnosa'     => $diagnosa,
            'topografi'     => $topografi,
            'morfologi'     => $morfologi,
            'behaviour'     => $behaviour,
            'grade'     => $grade,
            'cancer'     => $cancer,
            'treatment'     => $treatment,
            'report'     => $report,
            'metastase'     => $metastase,
			
			//Data Follow-Up
            'tanggal_periksa'     => $tanggal_periksa,
            'kode_rs'     => $kode_rs,
            'nama_rs'     => $nama_rs,
            'id_unit'     => $id_unit,
            'nama_unit'     => $nama_unit,
            'lab'     => $lab,
            'tanggal_terakhir'     => $tanggal_terakhir,
            'status_terakhir'     => $status_terakhir,
            'kesimpulan'     => $kesimpulan,
            'tanggal_registar'     => $tanggal_registar,
            'registar'     => $registar,
            'tanggal_verifikasi'     => $tanggal_verifikasi,
            'verifikator'     => $verifikator,
		);

    $this->load->model('M_Admin');
    // Memanggil updateUser() dengan dua argumen: $dimana dan $data
    $this->M_Admin->updateKanker($dimana, $data);
    $this->session->set_flashdata('tambah_data', 'Data Berhasil di tambah!');
    redirect('Admin/kanker');
}


	public function deleteKanker($id)
	{
		$dimana = array('id_kanker' => $id);
		$this->db->delete('tb_kanker', $dimana);
		$this->session->set_flashdata('delete_termin', 'Data telah terhapus!');
		redirect('Admin/kanker');
	}

// 	//START FUNCTION TERMIN
//     public function user()
//     {
//         $this->load->model('M_Admin');
//         $data['user'] = $this->M_Admin->allUser();

//         $this->load->view('Admin/user/templates/index');
//         $this->load->view('Admin/templates/navbar');
//         $this->load->view('Admin/templates/sidebar');
//         $this->load->view('Admin/user/index', $data);
//         $this->load->view('Admin/templates/footer');
//         $this->load->view('Admin/user/templates/js');
//     }

// 	public function tambahUser()
//     {
//         $this->load->view('Admin/user/tambah/templates/index');
//         $this->load->view('Admin/templates/navbar');
//         $this->load->view('Admin/templates/sidebar');
//         $this->load->view('Admin/user/tambah/tambah');
//         $this->load->view('Admin/templates/footer');
// 		$this->load->view('Admin/user/tambah/templates/js');
//     }

//     public function doTambahUser()
//     {
//         $nama	= $this->input->post('nama');
// 		$tanggal_lahir	= $this->input->post('tanggal_lahir');
// 		$username	= $this->input->post('username');
// 		$password	= $this->input->post('password');
//         $level      = 'user';

// 		$data	= array(
// 			'nama'	=> $nama,
// 			'tanggal_lahir'	=> $tanggal_lahir,
// 			'username'	=> $username,
// 			'password'	=> $password,
//             'level'     => $level
// 		);

//         $this->load->model('M_Admin');
// 		$this->M_Admin->addUser($data);
// 		$this->session->set_flashdata('tambah_data', 'Data Berhasil di tambah!');
// 		redirect('Admin/user');
// 	}

//     public function updateUser($id_user)
// 	{
// 		$dimana				= array('id_user' => $id_user);

//         $this->load->model('M_Admin');
// 		$data['user'] 	= $this->M_Admin->getuser($dimana);

// 		$this->load->view('Admin/user/templates/index');
//         $this->load->view('Admin/templates/navbar');
//         $this->load->view('Admin/templates/sidebar');
//         $this->load->view('Admin/user/edit/edit', $data);
//         $this->load->view('Admin/templates/footer');
//         $this->load->view('Admin/user/templates/js');
// 	}

// 	public function doUpdateUser()
// {
//     $id_user        = $this->input->post('id_user');
//     $nama           = $this->input->post('nama');
//     $tanggal_lahir  = $this->input->post('tanggal_lahir');
//     $username       = $this->input->post('username');
//     $password       = $this->input->post('password');
//     $level          = 'user';

//     $dimana = array('id_user' => $id_user);
//     $data   = array(
//         'nama'          => $nama,
//         'tanggal_lahir' => $tanggal_lahir,
//         'username'      => $username,
//         'password'      => $password,
//         'level'         => $level
//     );

//     $this->load->model('M_Admin');
//     // Memanggil updateUser() dengan dua argumen: $dimana dan $data
//     $this->M_Admin->updateUser($dimana, $data);
//     $this->session->set_flashdata('tambah_data', 'Data Berhasil di tambah!');
//     redirect('Admin/user');
// }


// 	public function deleteUser($id)
// 	{
// 		$dimana = array('id_user' => $id);
// 		$this->db->delete('tb_user', $dimana);
// 		$this->session->set_flashdata('delete_termin', 'Data telah terhapus!');
// 		redirect('Admin/user');
// 	}


}

