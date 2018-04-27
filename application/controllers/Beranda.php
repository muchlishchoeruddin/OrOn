<?php 

/**
* 
*/
class Beranda extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("User_model");
	}

	public function index()
	{
		$data['data']=array();
		$data['content'] = "beranda";
		$this->load->view("dashboard2",$data);
	}
	public function errorlogin()
	{
		$this->load->view('403_login');
	}
	public function error404()
	{
		$this->load->view('404_error');
	}
}

 ?>