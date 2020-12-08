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
		$title = array(
			"title" => "Artikel"
		  );
		$this->load->view('header', $title);
		$this->load->view('form-artikel');
		$this->load->view('footer');
	}
	public function art()
	{
		$title = array(
			"title" => "Karya Seni"
		  );
		$this->load->view('header', $title);
		$this->load->view('form-art');
		$this->load->view('footer');
	}
	public function galeri()
	{
		$title = array(
			"title" => "Galeri"
		  );
		$this->load->view('header', $title);
		$this->load->view('form-galleri');
		$this->load->view('footer');
	}
	public function media()
	{
		$title = array(
			"title" => "Media"
		  );
		$this->load->view('header', $title);
		$this->load->view('form-media');
		$this->load->view('footer');
	}
	public function seniman()
	{
		$title = array(
			"title" => "Seniman"
		  );
		$this->load->view('header', $title);
		$this->load->view('form-seniman');
		$this->load->view('footer');
	}
	public function jenis()
	{
		$title = array(
			"title" => "Gerakan Seni"
		  );
		$this->load->view('header', $title);
		$this->load->view('form-jenis');
		$this->load->view('footer');
	}


	public function list_artikel()
	{
		$title = array(
			"title" => "Daftar Artikel"
		  );
		 
		$this->load->view('header', $title);
		$this->load->view('list-artikel');
		$this->load->view('footer');
	}
	public function list_art()
	{
		$title = array(
			"title" => "Daftar Karya Seni"
		  );
		$this->load->view('header', $title);
		$this->load->view('list-art');
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

	
}
