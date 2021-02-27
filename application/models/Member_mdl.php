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
		return $this->db->get($this->table)>result();
	}

	//Berfungsi untuk mengambil satu data dari hasil query
	public function getById($id)
	{
		return $this->db->get_where($this->table, ["id_mb" => $id])->row();
	}

	//Berfungsi untuk menghitung jumlah member
	public function jmlh_member($value='')
	{
		$this->db->count('id_mb', $data)
	}

	//Berfungsi untuk melakukan konfirmasi data
	public function login()
	{

	}

	//Berfungsi untuk menambah member
	public function save()
	{
		return $this->db->insert('member', $data);
	}

	//Berfungsi untuk mengedit member
	public function update()
	{

	}

	//Berfungsi untuk menghapus data member
	public function delete($id)
	{
		$this->db->where('id_mb' $id);
		$this->db->delete('member');
	}
}
?>