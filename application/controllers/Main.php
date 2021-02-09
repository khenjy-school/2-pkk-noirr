<?php tes

/**
 *  
 */
class Main extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MemberMdl');
		$this->load->helper('url');
	}

	public function tambah_member()
	{
		//tampung data di array
		$data = array(
			'id_mb' => '';	//tambah id otomatis di database
			'name_mb' => $this->input->post(''),
			'email' => $this->input->post(''),
			'password' => $this->input->post(''),
			'telp' => $this->input->post('')
		);

		$this->MemberMdl->add_member($data);
		$this->MemberMdl->jmlh_member($data);
	}

	public function tampil_member()
	{

	}

	public function masuk_member()
	{
		//tampung data di array
		$data = array(
			'id_mb' = '',	//tambah id otomatis di database
			'email' => $this->input->post(''),
			'password' => $this->input->post('')
		);

		$this->MemberMdl->cek_member($data);
	}

	public function update_member()
	{
		$data = array(

		);

		$this->EditorMdl->jmlh_viewer($data);
	}

	public function hapus_member($id_member)	//menghapus member
	{
		$where = array('id_member' => $id_member);
		$this->MemberMdl->hapus_member($where, 'member');
		redirect('main/index');
	}



	public function tambah_produk()
	{
		//tampung data di array
		$data = array(
			'id_blog' = '',	//tambah id otomatis di database
			'judul' => $this->input->post(''),
			'nama' => $this->input->post('')
		);

		$this->BlogMdl->add_blog($data);
		$this->EditorMdl->jmlh_blog($data);
	}

	public function tampil_produk()
	{
		
	}

	public function bayar_produk()
	{
		$data = array(
			'id_komentar' = '',	//tambah id otomatis di database
			'nama' => $this->input->post(''),
			'email' => $this->input->post(''),
			'isi' => $this->input->post(''),
		);

		$this->KomentarMdl->add_komentar($data);
		$this->EditorMdl->jmlh_komentar($data);
	}

	public function update_produk()
	{

	}

	public function hapus_produk()
	{

	}

}