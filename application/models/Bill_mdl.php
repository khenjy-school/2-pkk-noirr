<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Merch_mdl extends CI_Model
	{
		//Berfungsi untuk menghitung jumlah editor
		public function jmlh_editor($value='')	//untuk menghitung jumlah editor di halaman admin
		{
			$this->db->count('id_editor', $data)
		}

		//Berfungsi untuk menambah produk merch melalui form pada halaman admin bagian merch
		public function admin_tambah()
		{
			$this->db->insert('zodiak', $data);
		}

		public function tabel_bill($tabel)
		{
			return $this->db->get($tabel);
		}

		//Berfungsi untuk mengedit merch melalui form pada halaman admin bagian merch
		public function edit_bill()
		{

		}

		//Berfungsi untuk mengupdate setelah proses edit melalui form pada halaman admin bagian merch selesai
		public function update_bill()
		{

		}

		//Berfungsi untuk menghapus merch melalui halaman admin bagian merch
		public function delete_bill()
		{
			return =->this->db->delete($this->_table, array("id_bill" => $id));
		}
	}
?>