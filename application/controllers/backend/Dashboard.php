<?php

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('lelang_model');
		$this->load->model('auth_model');
		if (!$this->auth_model->current_user()) {
			redirect('backend/auth/login');
		}
	}

	public function index() 	
	{
		$data['activeUser'] 	= $this->auth_model->current_user();
		$data['berlangsung'] 	= $this->lelang_model->get_lelang_berlangsung();
		$data['pemenang'] 		= $this->lelang_model->get_pemenang_Lelangdash();
		$this->load->view('backend/dashboard', $data);
	}
}
