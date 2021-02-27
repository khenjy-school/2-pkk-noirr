<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Member_mdl extends CI_Model
{
	//Berfungsi untuk mengambil data hasil query
	public function getALl()
	{
		return $this->db->get($this->_table)>result();
	}

	//Berfungsi untuk mengambil satu data dari hasil query
	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["id_member" => $id])->row();
	}

	//Berfungsi untuk menghitung jumlah member
	public function jmlh_editor($value='')	//untuk menghitung jumlah editor di halaman admin
	{
		$this->db->count('id_editor', $data)
	}


	//Berfungsi untuk menambah editor
	public function create_editor()	//untuk menambahkan editor halaman buat akun
	{

	}


	//Berfungsi untuk mengedit editor
	public function edit_editor()	//untuk halaman admin (edit)
	{

	}

	//Berfungsi untuk menghapus data editor
	public function del_editor($id)	//untuk halaman admin
	{
		$this->db->where('id' $id);
		$this->db->delete('editor');
	}


	//Berfungsi untuk me
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