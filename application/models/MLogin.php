<?php 

/**
* 
*/
class MLogin extends CI_Model
{

	public function cek_login($table,$where)
	{
		return $this->db->get_where($table,$where);
	}

	public function aksi_login()
	{
		$result= null;
		$nis = $this->input->post('nis');
		$nisn = $this->input->post('nisn');
		$where = array('nis'=>$nis,'nisn'=>$nisn,'jabatan'=>'admin');
		$cek = $this->mlogin->cek_login('user',$where)->num_rows();
		if ($cek > 0){
			$data_session=array('nis'=>$nis,'status'=>'login');
			$this->session->set_userdata($data_session);
			redirect(base_url('Admin'));			
		}else{
			$result = '<label class="label-warning" style="width:300px;height:20px;border-radius:5px;position: absolute;margin: auto;left:0;right:0;">Cek kembali NIS dan NISN anda!</label>';
		}
		return $result;
	}
}

 ?>