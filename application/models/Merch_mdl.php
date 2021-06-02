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
		return $this->db->get($this->table)>result();
	}

	//Berfungsi untuk mengambil satu data dari hasil query
	public function getById($id)
	{
		return $this->db->get_where($this->table, ["id_pd" => $id])->row();
	}

	//Berfungsi untuk menghitung jumlah merch
	public function jmlh_merch($value='')
	{
		$this->db->count('id_pd', $data);
	}

	//Berfungsi untuk menambah produk merch melalui form pada halaman admin bagian merch
	public function save()
	{
		return $this->insert('merch', $data);
	}

	//Berfungsi untuk mengupdate setelah proses edit melalui form pada halaman admin bagian merch selesai
	public function update()
	{

	}

	//Berfungsi untuk menghapus merch melalui halaman admin bagian merch
	public function delete()
	{
		$this->db->where('id_pd', $id);
		$this->db->delete('merch');
	}
}
?>