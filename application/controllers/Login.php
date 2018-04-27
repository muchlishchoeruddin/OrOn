<?php 

/**
* 
*/
class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('mlogin');
	}
	public function index()
	{
		if ($this->session->userdata('status')=='login'){
			redirect('Admin');
		}
		$hasil = null;
		$data['data']=array();
		if ($this->input->post('submit')){
			$hasil = $this->mlogin->aksi_login();
		}
		$data['result'] = $hasil;
		$data['content'] = "login";
		$this->load->view("dashboard",$data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('Beranda'));
	}
}

 ?>