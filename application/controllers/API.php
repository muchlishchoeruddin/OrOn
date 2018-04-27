<?php 

/**
* 
*/
class API extends CI_Controller
{
	
	public function index()
	{
		# code...
	}

	public function users()
	{
		$id = $this->input->post('id'); 

		$data = $this->db->get_where('user', ['nis' => $id])->row();

		echo json_encode($data);
		// echo "hai";

	}
	public function delete()
	{
		$nis=$this->input->post('id');		
		$this->db->where('nis',$nis);
		$delete = $this->db->delete('user');
	}
}

 ?>