<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('M_Auth'); // Pastikan model 'M_Auth' sudah ada
    }

    public function index()
	{
        $this->load->view('login');
	}

	// Controller Aksi Login
	public function CekLogin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $dimana = array(
            'username' => $username,
            'password' => $password, // Menambahkan kondisi untuk password
        );

        // $cekSiswa = $this->M_Auth->cekSiswa('tb_siswa', $dimana)->num_rows();
        $cekAdmin = $this->M_Auth->cekAdmin('tb_admin', $dimana)->num_rows();
        // $cekUser = $this->M_Auth->cekUser('tb_user', $dimana)->num_rows();
//         var_dump($cekUser);
// die(); // or exit();

       if ($cekAdmin > 0) {
            $admin_data = $this->M_Auth->get_admin_data($username); // Assuming there's a function to fetch admin data

            if ($admin_data) {
                $data_session = array(
                    'id_admin' => $admin_data->id_admin,
                    'nama' => $admin_data->nm_admin,
                    'status' => 'admin',
                );

                $this->session->set_userdata($data_session);
                $this->session->set_flashdata('Login_Admin', 'Anda berhasil login sebagai admin!');
                redirect('Admin');
            }
        

        // } elseif ($cekUser > 0) {
        //     $data_session = array(
        //         'nama' => $username,
        //         'status' => 'user',
        //     );

        //     $this->session->set_userdata($data_session);
        //     $this->session->set_flashdata('login', 'Anda berhasil login sebagai Kader');
        //     redirect('User');
        }else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> username dan password tidak terdaftar  </div>');
            redirect('Auth');
        }
    }


    //REGIS
     public function regis()
	{
        $this->load->view('registrasi');
	}

    public function doTambahAkun()
    {
        $nama	= $this->input->post('nama');
		$tanggal_lahir	= $this->input->post('tanggal_lahir');
		$username	= $this->input->post('username');
		$password	= $this->input->post('password');
        $level      = 'user';

		$data	= array(
			'nama'	=> $nama,
			'tanggal_lahir'	=> $tanggal_lahir,
			'username'	=> $username,
			'password'	=> $password,
            'level'     => $level
		);

        $this->load->model('M_Auth');
		$this->M_Auth->addUser($data);
		$this->session->set_flashdata('tambah_data', 'Data Berhasil di tambah!');
		redirect('Auth');
	}
    
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Auth');
	}
}
