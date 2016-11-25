<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		if($this->session->userdata('akses'))
        {
            $this->load->view('admin/navbar/navbar');
            $this->load->view('admin/content/dashboard');
            $this->load->view('admin/footer/footer');
        }else
        {
            
            $this->load->view('admin/login');
        }
	}
    
    public function login()
    {
        if(isset($_POST['submit']))
        {
            $username   =   $this->input->post('username');
            $password   =   $this->input->post('password');
            $hasil      =   $this->model_admin->login($username,$password);
            if($hasil==TRUE)
            {
                $this->session->set_userdata('akses',TRUE);
                redirect ('admin/dashboard');
            }
        }
    }
    
    public function logout()
    {
            $this->session->sess_destroy();
            redirect('welcome');
    }
}
