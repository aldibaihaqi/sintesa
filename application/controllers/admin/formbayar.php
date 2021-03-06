<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class formbayar extends CI_Controller {

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
	}

	public function index()
	{
        if($this->session->userdata('akses'))
        {
            $this->load->view('admin/navbar/navbar');
            $this->load->view('admin/content/formbayar');
            $this->load->view('admin/footer/footer');
        }else
        {
            
            $this->load->view('admin/login');
        }
	}
}
