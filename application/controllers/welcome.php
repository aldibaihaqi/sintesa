<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
		parent::__construct();
		$this->load->model('model_admin');
	}

	public function index()
	{
		$this->session->sess_destroy();
        $this->load->view('frontend/header/navbar');
		$this->load->view('frontend/content/header');
        $this->load->view('frontend/content/profil');
		$this->load->view('frontend/content/artikel');
		$this->load->view('frontend/content/belibuku');
		$this->load->view('frontend/content/kontak');
		$this->load->view('frontend/footer/footer');
	}
}
