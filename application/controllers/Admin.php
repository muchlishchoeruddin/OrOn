<?php 

/**
* 
*/
class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('tgl_indo');
		if ($this->session->userdata('status')!='login'){
			redirect('404_login');
		}
		$this->load->model('MAdmin');
	}
	public function index()
	{
		$nis=$this->session->userdata('nis');
		$data['data']=array('row'=>$this->db->get_where('user',['nis'=>$nis]));
		$data['content'] = "admin";
		$this->load->view("dashboard",$data);
	}
	public function tambah()
	{
		$or = $this->input->post("or");
		$nis = $this->input->post("nis");
		$nisn = $this->input->post("nisn");
		$nama_depan = $this->input->post("nama_depan");
		$nama_belakang = $this->input->post("nama_belakang");
		$tmp_lahir = $this->input->post("tmp_lahir");
		$tgl_lahir = $this->input->post("tgl_lahir");
		$gender = $this->input->post("gender");
		$agama = $this->input->post("agama");
		$kelas = $this->input->post("kls");
		$alamat = $this->input->post("alamat");
		$amo = $this->input->post("amo");
		$prinsip = $this->input->post("prinsip");
		$data=array(
			"nis"=>$nis,
			"nisn"=>$nisn,
			"or_id"=>$or,
			"nama_depan"=>$nama_depan,
			"nama_belakang"=>$nama_belakang,
			"kelas"=>$kelas,
			"tmp_lahir"=>$tmp_lahir,
			"tgl_lahir"=>$tgl_lahir,
			"jk"=>$gender,
			"agama"=>$agama,
			"alamat"=>$alamat,
			"alasan_masuk_or"=>$amo,
			"prinsip"=>$prinsip,
			"jabatan"=>null
			);
		$insert=$this->db->insert('user',$data);
		if ($insert) {
			echo "<script>alert('data berhasil disimpan');
			window.location='".base_url('Admin')."';</script>";
		}else{
			echo "<script>alert('data gagal disimpan');
			window.location='".base_url('Siswa/tambah')."';</script>";
		}
	}
	public function edit()
	{
		$or = $this->input->post("or");
		$nis = $this->input->post("nis");
		$nisn = $this->input->post("nisn");
		$nama_depan = $this->input->post("nama_depan");
		$nama_belakang = $this->input->post("nama_belakang");
		$tmp_lahir = $this->input->post("tmp_lahir");
		$tgl_lahir = $this->input->post("tgl_lahir");
		$gender = $this->input->post("gender");
		$agama = $this->input->post("agama");
		$kelas = $this->input->post("kls");
		$alamat = $this->input->post("alamat");
		$amo = $this->input->post("amo");
		$prinsip = $this->input->post("prinsip");
		$data=array(
			"nis"=>$nis,
			"nisn"=>$nisn,
			"or_id"=>$or,
			"nama_depan"=>$nama_depan,
			"nama_belakang"=>$nama_belakang,
			"kelas"=>$kelas,
			"tmp_lahir"=>$tmp_lahir,
			"tgl_lahir"=>$tgl_lahir,
			"jk"=>$gender,
			"agama"=>$agama,
			"alamat"=>$alamat,
			"alasan_masuk_or"=>$amo,
			"prinsip"=>$prinsip,
			"jabatan"=>null
			);
		$this->db->where('nis',$nis);
		$insert=$this->db->update('user',$data);
		if ($insert) {
			echo "<script>alert('data berhasil diubah');
			window.location='".base_url('Admin')."';</script>";
		}else{
			echo "<script>alert('data gagal diubah');
			window.location='".base_url('Siswa/tambah')."';</script>";
		}
	}
}
?>