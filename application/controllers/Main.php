<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *	Controller main adalah controller yang bertugas untuk mengatur perpindahan antar halaman web.
 *	Gunakan fungsi redirect pada controller
 */
class Main extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Staff_mdl');
		$this->load->model('Main_mdl');
		$this->load->model('Blog_mdl');
		$this->load->model('Editor_mdl');
		$this->load->model('Komentar_mdl');
		$this->load->helper('url');
	}

	public function login()
    {
        if(isset($_POST['btnlogin'])) {
			$kondisi = array(
				'email' => $this->input->post('txtemail'),
				'password' => $this->input->post('txtpassword')
			);
            $cek_user = $this->Staff_mdl->cek_data('staff', $kondisi);

            if($cek_user->num_rows() > 0){
                $data = $cek_user->result();
				$login = array(
					'email' => $email,
					'status' => 'active'
				);

				$this->session->set_userdata('staff', $login);

				redirect('main/tampil_staff');
            }
            else{
                echo "<scipt>alert('email tidak ditemukan')</script>";
                $this->load->view('staff/login.php');
				$this->load->view('staff/_partials/footer.php');
            }
		}
		else{
			$this->load->view('staff/login.php');
			$this->load->view('staff/_partials/footer.php');
		}
    }

	//Berfungsi untuk menampilkan halaman utama staff (dashboard)
	public function tampil_staff()
	{
		$data['title'] = 'staff';
		$data['header1'] = 'Dashboard';
		$this->load->view('staff/_partials/head.php', $data);
		$this->load->view('staff/_partials/navbar.php', $data);
		$this->load->view('staff/index.php');
	}

	public function tampil_staff_settings()
	{
		$data['title'] = "Staff";
		$data['header1'] = 'Settings';
		$this->load->view('staff/_partials/head.php', $data);
		$this->load->view('staff/_partials/navbar.php', $data);
		$this->load->view('staff/staff_settings.php', $data);
	}

	//Berfungsi untuk menampilkan halaman staff bagian blog (sementara sebelum dipindahkan ke controller masing-masing)
	public function tampil_staff_blog()
	{
		$data = array(
			'blog' => $this->Blog_mdl->getAll('blog')->result()
		);
		$data['title'] = "Staff - Blog";
		$data['header1'] = 'List Blog';
		$this->load->view('staff/_partials/head.php', $data);
		$this->load->view('staff/_partials/navbar.php', $data);
		$this->load->view('staff/staff_blog.php', $data);
	}

	//Berfungsi untuk menampilkan halaman staff bagian editor (sementara sebelum dipindahkan ke controller masing-masing)
	public function tampil_staff_editor()
	{
		$data = array(
			'editor' => $this->Editor_mdl->getAll('editor')->result()
		);
		$data['title'] = "Staff - Editor";
		$data['header1'] = 'List Editor';
		$this->load->view('staff/_partials/head.php', $data);
		$this->load->view('staff/_partials/navbar.php', $data);
		$this->load->view('staff/staff_editor.php', $data);
	}

	//Berfungsi untuk menampilkan halaman staff bagian komentar (sementara sebelum dipindahkan ke controller masing-masing)
	public function tampil_staff_komentar()
	{
		$data = array(
			'komentar' => $this->Komentar_mdl->getAll('komentar')->result()
		);
		$data['title'] = "Staff - Komentar";
		$data['header1'] = 'List Komentar';
		$this->load->view('staff/_partials/head.php', $data);
		$this->load->view('staff/_partials/navbar.php', $data);
		$this->load->view('staff/staff_komentar.php', $data);
	}

	//Berfungsi untuk menampilkan halaman staff bagian komentar (sementara sebelum dipindahkan ke controller masing-masing)
	public function tampil_staff_data()
	{
		$data = array(
			'staff' => $this->Staff_mdl->getAll('komentar')->result()
		);
		$data['title'] = "Staff - Data";
		$data['header1'] = 'List Staff';
		$this->load->view('staff/_partials/head.php', $data);
		$this->load->view('staff/_partials/navbar.php', $data);
		$this->load->view('staff/staff_komentar.php', $data);
	}

	//Berfungsi untuk menampilkan halaman index
	public function tampil_home()
	{
		$data['title'] = "Selamat Datang di 4s5s";
		$data['header1'] = 'Selamat Datang di 4 Sehat 5 Sempurna';
		$this->load->view('public/_partials/head.php', $data);
		$this->load->view('public/_partials/navbar.php', $data);
		$this->load->view('public/index.php', $data);
	}

	//Berfungsi untuk menampilkan halaman about
	public function tampil_about()
	{
		$data['title'] = "About Us";
		$data['header1'] = 'About Us';
		$this->load->view('public/_partials/head.php', $data);
		$this->load->view('public/_partials/navbar.php', $data);
		$this->load->view('public/about.php', $data);
	}

	//Berfungsi untuk menampilkan halaman error
	public function tampil_error()
	{
		$data['title'] = "Error 404";
		$data['header1'] = 'Error 404';
		$this->load->view('public/_partials/head.php', $data);
		$this->load->view('public/_partials/navbar.php', $data);
		$this->load->view('public/error.php', $data);
	}

	//Berfungsi untuk menampilkan halaman kontak
	public function tampil_kontak()
	{
		$data['title'] = "Kontak Kami";
		$data['header1'] = 'Kontak';
		$this->load->view('public/_partials/head.php', $data);
		$this->load->view('public/_partials/navbar.php', $data);
		$this->load->view('public/kontak.php', $data);
	}

	//Berfungsi untuk menampilkan halaman signup
	public function tampil_signup()
	{
		$data['title'] = "Sign Up";
		$data['header1'] = 'Sign Up';
		$this->load->view('public/_partials/head.php', $data);
		$this->load->view('public/_partials/navbar.php', $data);
		$this->load->view('public/signup.php', $data);
	}

	//Berfungsi untuk menampilkan halaman login
	public function tampil_login()
	{
		$data['title'] = "Login";
		$data['header1'] = 'Login';
		$this->load->view('public/_partials/head.php', $data);
		$this->load->view('public/_partials/navbar.php', $data);
		$this->load->view('public/login.php', $data);
	}

	//Berfungsi untuk menampilkan halaman penghung
	public function tampil_penghubung()
	{
		$data['title'] = "Penghung";
		$data['header1'] = 'Penghubung';
		$this->load->view('public/_partials/head.php', $data);
		$this->load->view('public/_partials/navbar.php', $data);
		$this->load->view('public/penghubung.php', $data);
	}

	//Berfungsi untuk menampilkan halaman utama editor
	public function tampil_editor()
	{
		$data['title'] = "Editor";
		$data['header1'] = 'Editor';
		$this->load->view('editor/_partials/head.php', $data);
		$this->load->view('editor/_partials/navbar.php', $data);
		$this->load->view('editor/editor.php', $data);
	}

	//Berfungsi untuk menampilkan halaman buat blog
	public function tampil_buatblog()
	{
		$data['title'] = "Buat Blog";
		$data['header1'] = 'Buat Blog';
		$this->load->view('editor/_partials/head.php', $data);
		$this->load->view('editor/_partials/navbar.php', $data);
		$this->load->view('editor/buatblog.php', $data);
	}

	//Berfungsi untuk menampilkan halaman utama makanan pokok
	public function tampil_makananpokok()
	{
		$data['title'] = "Makanan Pokok";
		$data['header1'] = 'Makanan Pokok';
		$this->load->view('public/_partials/head.php', $data);
		$this->load->view('public/_partials/navbar.php', $data);
		$this->load->view('public/makananpokok.php', $data);
	}

	//Berfungsi untuk menampilkan halaman utama lauk pauk
	public function tampil_laukpauk()
	{
		$data['title'] = "Lauk Pauk";
		$data['header1'] = 'Lauk Pauk';
		$this->load->view('public/_partials/head.php', $data);
		$this->load->view('public/_partials/navbar.php', $data);
		$this->load->view('public/laukpauk.php', $data);
	}

	//Berfungsi untuk menampilkan halaman utama sayur
	public function tampil_sayur()
	{
		$data['title'] = "Sayur";
		$data['header1'] = 'Sayur';
		$this->load->view('public/_partials/head.php', $data);
		$this->load->view('public/_partials/navbar.php', $data);
		$this->load->view('public/sayur.php', $data);
	}

	//Berfungsi untuk menampilkan halaman utama buah
	public function tampil_buah()
	{
		$data['title'] = "Buah";
		$data['header1'] = 'Buah';
		$this->load->view('public/_partials/head.php', $data);
		$this->load->view('public/_partials/navbar.php', $data);
		$this->load->view('public/buahbuahan.php', $data);
	}

	//Berfungsi untuk menampilkan halaman utama susu
	public function tampil_susu()
	{
		$data['title'] = "Susu";
		$data['header1'] = 'Susu';
		$this->load->view('public/_partials/head.php', $data);
		$this->load->view('public/_partials/navbar.php', $data);
		$this->load->view('public/susu.php', $data);
	}

	//Berfungsi sebagai contoh
	public function tampil_namahalaman()
	{
		$data['title'] = "Halaman";
		$data['header1'] = 'Ini adalah Header';
		$this->load->view('public/_partials/head.php', $data);
		$this->load->view('public/_partials/navbar.php', $data);
		$this->load->view('namahalaman.php', $data);
	}
}