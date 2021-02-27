<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Bill_mdl extends CI_Model
{
	//Berfungsi untuk mengambil data hasil query
	public function getALl()
	{
		return $this->db->get($this->table)>result();
	}

	//Berfungsi untuk mengambil satu data dari hasil query
	public function getById($id)
	{
		return $this->db->get_where($this->table, ["id_bill" => $id])->row();
	}

	//Berfungsi untuk menambah bill melalui form pada halaman admin bagian bill
	public function save()
	{
		return $this->db->insert('bill', $data);
	}

	//Berfungsi untuk mengupdate bill setelah proses edit melalui form pada halaman admin bagian bill selesai
	public function update()
	{

	}

	//Berfungsi untuk menghapus bill melalui halaman admin bagian bill
	public function delete()
	{
		$this->db->where('id_bill' $id);
		$this->db->delete('bill');
	}
}
?>