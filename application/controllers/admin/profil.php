<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

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
		$this->load->model("model_profil");
	}

	public function index()
	{
        if($this->session->userdata('akses'))
        {
            $this->load->view('admin/navbar/navbar');
            $this->form_validation->set_rules('isi', 'ISI', 'required');
            if($this->form_validation->run() === FALSE)
			{
	            $data['data'] = $this->model_profil->get_data();
	            $this->load->view('admin/content/profil', $data);  
	        }else
	        {
	        	$this->model_profil->edit_data();
				redirect('admin/profil');
	        }
	        $this->load->view('admin/footer/footer');
        }else
        {
            $this->load->view('admin/login');
        }
	}
}
