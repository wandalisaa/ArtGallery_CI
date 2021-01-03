<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {

        parent::__construct();
		
		if(!$this->session->userdata('level','1')){
			$this->session->set_flashdata('danger', 'Anda Tidak memiliki akses ke halaman tersebut');
			redirect('home/index/');
		}
    }
	public function index()
	{
		$title = array(
			"title" => "Admin"
		  );
		$data['user'] = $this->m_user->get_user();
		$this->load->view('header', $title);
		$this->load->view('admin',$data);
		$this->load->view('footer');
	}

	public function artikel()
	{
		$data['media'] = $this->m_item->get_list('m_media');
		$data['seniman'] = $this->m_item->get_list('m_seniman');
		$data['jenis'] = $this->m_item->get_list('m_jenis');
		$data['galeri'] = $this->m_item->get_list('m_galeri');
		$title = array(
			"title" => "Artikel"
		  );
		$this->load->view('header', $title);
		$this->load->view('input-artikel',$data);
		$this->load->view('footer');
	}
	public function art($id)
	{
		$title = array(
			"title" => "Tambah Koleksi"
		  );
		  $data['artikel'] = $this->m_item->get_detail_artikel($id);
		$this->load->view('header', $title);
		$this->load->view('input-art',$data);
		$this->load->view('footer');
	}
	public function galeri()
	{
		$title = array(
			"title" => "Galeri"
		  );
		$this->load->view('header', $title);
		$this->load->view('input-galeri');
		$this->load->view('footer');
	}
	public function media()
	{
		$title = array(
			"title" => "Media"
		  );
		$this->load->view('header', $title);
		$this->load->view('input-media');
		$this->load->view('footer');
	}
	public function seniman()
	{
		$title = array(
			"title" => "Seniman"
		  );
		$this->load->view('header', $title);
		$this->load->view('input-seniman');
		$this->load->view('footer');
	}
	public function jenis()
	{
		$title = array(
			"title" => "Gerakan Seni"
		  );
		$this->load->view('header', $title);
		$this->load->view('input-jenis');
		$this->load->view('footer');
	}


	public function list_artikel()
	{
		$title = array(
			"title" => "Daftar Artikel"
		  );
		  
		$data['artikel'] = $this->m_item->get_all_artikel();
		$this->load->view('header', $title);
		$this->load->view('list-artikel',$data);
		$this->load->view('footer');
	}

	public function list_galeri()
	{
		$title = array(
			"title" => "Daftar Galeri"
		  );

		$data['galeri'] = $this->m_item->get_list('m_galeri');

		$this->load->view('header', $title);
		$this->load->view('list-galeri',$data);
		$this->load->view('footer');
	}
	public function list_media()
	{
		$title = array(
			"title" => "Daftar Media"
		  );
		  $data['media'] = $this->m_item->get_list('m_media');
		$this->load->view('header', $title);
		$this->load->view('list-media',$data);
		$this->load->view('footer');
	}
	public function list_seniman()
	{
		$title = array(
			"title" => "Daftar Seniman"
		  );
		  $data['seniman'] = $this->m_item->get_list('m_seniman');
		$this->load->view('header', $title);
		$this->load->view('list-seniman',$data);
		$this->load->view('footer');
	}
	public function list_jenis()
	{
		$title = array(
			"title" => "Daftar Gerakan Seni"
		  );
		  $data['jenis'] = $this->m_item->get_list('m_jenis');
		$this->load->view('header', $title);
		$this->load->view('list-jenis',$data);
		$this->load->view('footer');
	}

	// UPLOAD GAMBAR
	public function do_upload()
	{
		$url = "../images";
		$image=basename($_FILES['logoGaleri']['name']);
		$image=str_replace(' ','|',$image);
		$type = explode(".",$image);
		$type = $type[count($type)-1];
		if (in_array($type,array('jpg','jpeg','png','gif')))
		{
			$tmppath="images/".uniqid(rand()).".".$type;
			if(is_uploaded_file($_FILES["logoGaleri"]["tmp_name"]))
			{
				move_uploaded_file($_FILES['logoGaleri']['tmp_name'],$tmppath);
				return $tmppath;
			}
		}
	}
	

	
}
