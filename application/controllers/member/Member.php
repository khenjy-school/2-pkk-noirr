<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *  
 */
class Main extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MemberMdl');
		$this->load->helper('url');
	}

	//Berfungsi untuk menambah member melalui form pada halaman signup
	public function signup()
	{
		//tampung data di array
		$data = array(
			'id_mb' => '';	//tambah id otomatis di database
			'name_mb' => $this->input->post(''),
			'email' => $this->input->post(''),
			'password' => $this->input->post(''),
			'telp' => $this->input->post('')
		);

		$this->MemberMdl->add_member($data);
		$this->MemberMdl->jmlh_member($data);
	}


	//Berfungsi untuk login
	public function login()
	{
		//tampung data di array
		$data = array(
			'id_mb' = '',	//tambah id otomatis di database
			'email' => $this->input->post(''),
			'password' => $this->input->post('')
		);

		$this->MemberMdl->cek_member($data);
	}

	public function getAll()
	{

	}

	public function getById()
	{
		
	}

	public function tambah_member()
	{
		//tampung data di array
		$data = array(
			'id_mb' => '';	//tambah id otomatis di database
			'name_mb' => $this->input->post(''),
			'email' => $this->input->post(''),
			'password' => $this->input->post(''),
			'telp' => $this->input->post('')
		);

		$this->MemberMdl->add_member($data);
		$this->MemberMdl->jmlh_member($data);
	}

	public function update_member()
	{
		$data = array(

		);

		$this->EditorMdl->jmlh_viewer($data);
	}

	public function hapus_member($id_member)	//menghapus member
	{
		$where = array('id_member' => $id_member);
		$this->MemberMdl->hapus_member($where, 'member');
		redirect('main/index');
	}
}