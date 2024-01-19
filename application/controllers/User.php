<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "user") {
			redirect(base_url("login"));
		}
	}

    public function index()
	{
		$this->load->view('User/templates/index');
        $this->load->view('User/templates/navbar');
        $this->load->view('User/templates/sidebar');
        $this->load->view('User/index');
        $this->load->view('User/templates/footer');
        $this->load->view('User/templates/js');
	}

	//START FUNCTION TERMIN
    public function termin()
    {
        $this->load->model('M_User');
        $data['termin'] = $this->M_User->allTermin();

        $this->load->view('User/termin/templates/index');
        $this->load->view('User/templates/navbar');
        $this->load->view('User/templates/sidebar');
        $this->load->view('User/termin/index', $data);
        $this->load->view('User/templates/footer');
        $this->load->view('User/termin/templates/js');
    }


	//START FUNCTION SOAL
    public function soal()
    {
        $this->load->model('M_User');
        $data['soal'] = $this->M_User->allSoal();

        $this->load->view('User/soal/templates/index');
        $this->load->view('User/templates/navbar');
        $this->load->view('User/templates/sidebar');
        $this->load->view('User/soal/index', $data);
        $this->load->view('User/templates/footer');
        $this->load->view('User/soal/templates/js');
    }


	//START FUNCTION MATERI
    public function materi()
    {
        $this->load->model('M_User');
        $data['materi'] = $this->M_User->allMateri();

        $this->load->view('User/materi/templates/index');
        $this->load->view('User/templates/navbar');
        $this->load->view('User/templates/sidebar');
        $this->load->view('User/materi/index', $data);
        $this->load->view('User/templates/footer');
        $this->load->view('User/materi/templates/js');
    }

public function viewMateri($file_name) {
    $file_path = FCPATH . 'assets/uploads/materi/' . $file_name;

    if (file_exists($file_path)) {
        $data['file_content'] = file_get_contents($file_path);
        $data['file_name'] = $file_name; // Mengirimkan $file_name ke view


        $this->load->view('User/materi/view', $data);
    } else {
        show_404();
    }
}

}

