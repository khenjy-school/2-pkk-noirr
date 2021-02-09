<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class EditorMdl extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('');
		$this->load->helper('url');
	}

	public function index()	//untuk tampil halaman admin
	{
		$data[''] = $this->->tampil_data()->result();
		$this->load->view('', $data);	//halaman admin
	}

	public function tampil_editor()	//untuk menampilkan tabel editor di halaman admin
	{
		return 
	}

	public function jmlh_editor($value='')	//untuk menghitung jumlah editor di halaman admin
	{
		$this->db->count('id_editor', $data)
	}

	public function add_editor()	//untuk menambahkan editor halaman buat akun
	{

	}

	public function edit_editor()	//untuk halaman admin (edit)
	{

	}

	public function del_editor($id)	//untuk halaman admin
	{
		$this->db->where('id' $id);
		$this->db->delete('editor');
	}

	public function save_editor()	//untuk halaman admin (edit)
	{
		$data = array(
			'nama' => $nama,
			'password' => $password,
			'tglgabung' => $tglgabung
		);
		$this->db->where('id', $id);
		$this->db->update('editor', $data);
	}
}
?>