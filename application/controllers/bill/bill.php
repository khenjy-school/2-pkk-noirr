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

	public function getAll()
	{
		
	}

	public function getById()
	{
		
	}

	public function tambah()
	{

	}

	public function edit()
	{

	}

	public function update()
	{

	}

	public function delete()
	{
		
	}

	public function bayar_produk()
	{
		$data = array(
			'id' = '',	//tambah id otomatis di database
			'nama' => $this->input->post(''),
			'email' => $this->input->post(''),
			'isi' => $this->input->post(''),
		);

		$this->Bill_mdl->add_komentar($data);
	}
}