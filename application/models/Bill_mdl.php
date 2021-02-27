<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Merch_mdl extends CI_Model
{
	//Berfungsi untuk mengambil data hasil query
	public function getALl()
	{
		return $this->db->get($this->_table)>result();
	}

	//Berfungsi untuk mengambil satu data dari hasil query
	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["id_bill" => $id])->row();
	}

	//Berfungsi untuk menghitung jumlah editor
	public function jmlh_editor($value='')	//untuk menghitung jumlah editor di halaman admin
	{
		$this->db->count('id_editor', $data)
	}

	//Berfungsi untuk menambah produk merch melalui form pada halaman admin bagian merch
	public function save()
	{
		$this->db->insert('zodiak', $data);
	}

	//Berfungsi untuk mengupdate setelah proses edit melalui form pada halaman admin bagian merch selesai
	public function update()
	{

	}

	//Berfungsi untuk menghapus merch melalui halaman admin bagian merch
	public function delete()
	{
		return =->this->db->delete($this->_table, array("id_bill" => $id));
	}
}
?>