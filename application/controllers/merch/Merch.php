<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Merch extends CI_Controller
{
	
	function __construct(argument)
	{
		parent::__construct();
		$this->load->model('Merch_mdl');
		$this->load->helper('url');
	}

	//Berfungsi untuk menambah produk
	public function tambah_produk()
	{
		//tampung data di array
		$data = array(
			'id_blog' = '',	//tambah id otomatis di database
			'judul' => $this->input->post(''),
			'nama' => $this->input->post('')
		);
		$this->Merch_mdl->tambah_merch($data);
		redirect('main/tampil_admin_merch', $data)
	}

	//Berfungsi untuk mengedit merch melalui
	public function edit()
	{

	}

	//Berfungsi untuk mengupdate merch melalui 
	public function update()
	{

	}


	//Berfungsi untuk menghapus merch melalui
	public function delete()
	{

	}
}


?>