<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *  
 */
class Member extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Member_mdl');
		$this->load->helper('url');
	}

	//Berfungsi untuk menambah member melalui form pada halaman signup
	public function signup()
	{
		$data = array(
			'id_mb' => '',
			'name_mb' => $this->input->post(''),
			'email' => $this->input->post(''),
			'password' => $this->input->post(''),
			'telp' => $this->input->post('')
		);

		$this->Member_mdl->save($data);
		$this->Member_mdl->jmlh_member($data);
	}


	//Berfungsi untuk login
	public function login()
	{
		$data = array(
			'id_mb' => '',
			'email' => $this->input->post(''),
			'password' => $this->input->post('')
		);

		$this->Member_mdl->cek_member($data);
	}

	//Berfungsi untuk menambah member baru ke tabel  member
	public function tambah()
	{
		$data = array(
			'id_mb' => '',
			'name_mb' => $this->input->post(''),
			'email' => $this->input->post(''),
			'password' => $this->input->post(''),
			'telp' => $this->input->post('')
		);

		$this->MemberMdl->add_member($data);
		$this->MemberMdl->jmlh_member($data);
	}

	//Berfungsi untuk melakukan update data tabel member melalui form pada halaman admin maupun form pada pengaturan akun di halaman utama member 
	public function update_member()
	{
		
	}

	//Berfungsi untuk menghapus member
	public function hapus_member($id_member)
	{
		$where = array('id_member' => $id_member);
		$this->MemberMdl->hapus_member($where, 'member');
		redirect('main/index');
	}
}