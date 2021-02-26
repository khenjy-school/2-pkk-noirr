<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Merch_mdl extends CI_Model
	{
		//Berfungsi untuk menghitung jumlah merch
		public function jmlh_editor($value='')	//untuk menghitung jumlah editor di halaman admin
		{
			$this->db->count('id_editor', $data)
		}

		//Berfungsi untuk menambah produk merch melalui form pada halaman admin bagian merch
		public function admin_tambah()
		{

		}

		//Berfungsi untuk mengedit merch melalui form pada halaman admin bagian merch
		public function edit_merch()
		{

		}

		//Berfungsi untuk mengupdate setelah proses edit melalui form pada halaman admin bagian merch selesai
		public function update_merch()
		{

		}

		//Berfungsi untuk menghapus merch melalui halaman admin bagian merch
		public function delete_merch()
		{

		}
	}
?>