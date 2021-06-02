<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *  
 */
class Bill extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Bill_mdl');
		$this->load->helper('url');
	}

	//Berfungsi untuk menambahkan ke data salary
	public function buy()
	{
		
	}

	//Berfungsi untuk membatalkan dari data salary
	public function cancel()
	{
		redirect('main/tampil', 'refresh');
	}

	//Berfungsi untuk mengedit data bill
	public function back()
	{
		redirect('main/tampil_member');
	}

	public function home()
	{
		redirect('main/tampil_member');
	}
}