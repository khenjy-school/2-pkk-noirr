<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *  
 */
class Main extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function tampil_admin_merch()
	{
		$this->load->view('template/headeradm');
		$this->load->view('admin/admin');
		$this->load->view('table/tablemerch', $data)
		$this->load->view('template/footeradm');
	}

	public function tampil_admin_member()
	{
		$this->load->view('template/headeradm');
		$this->load->view('admin/admin');
		$this->load->view('table/tablemember', $data)
		$this->load->view('template/footeradm');
	}

	public function tampil_admin_bill()
	{
		$this->load->view('template/headeradm');
		$this->load->view('admin/admin');
		$this->load->view('table/tablebill', $data)
		$this->load->view('template/footeradm');
	}

	public function tampil_index()
	{
		$this->load->view('template/header');
		$this->load->view('public/index');
		$this->load->view('template/footer');
	}


	public function tampil_about()
	{
		$this->load->view('template/header');
		$this->load->view('public/about');
		$this->load->view('template/footer');
	}

	public function tampil_error()
	{
		$this->load->view('template/header');
		$this->load->view('public/error');
		$this->load->view('template/footer');
	}

	public function tampil_signup()
	{
		$this->load->view('template/header');
		$this->load->view('public/signup');
		$this->load->view('template/footer');
	}

	public function tampil_login()
	{
		$this->load->view('template/header');
		$this->load->view('public/login');
		$this->load->view('template/footer');
	}
	
	public function tampil_member()
	{
		$this->load->view('template/header');
		$this->load->view('public/member');
		$this->load->view('template/footer');
	}

	public function tampil_merch()
	{
		$this->load->view('template/header');
		$this->load->view('public/merch');
		$this->load->view('template/footer');
	}

	public function tampil_checkout()
	{
		$this->load->view('template/header');
		$this->load->view('member/checkout');
		$this->load->view('template/footer');
	}

	public function tampil_payoutput()
	{
		$this->load->view('template/header');
		$this->load->view('member/payoutput');
		$this->load->view('template/footer');
	}
}