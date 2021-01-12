<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
			"page" => "Home",
			"title" => "Gerakan Seni",
			"active" => "none"
		  );
		
		
		$data['jenis'] = $this->m_item->get_list_jenis();
		$data['semuajenis'] = $this->m_item->get_all_jenis();
		
		$this->load->view('header', $title);
		$this->load->view('index', $data);
		$this->load->view('footer');
	}
	public function seniman()
	{
		$title = array(
			"page" => "Home",
			"title" => "Seniman",
			"active" => "none"
		  );
		
		$data['semua'] = $this->m_item->get_all('m_seniman','id_seniman','nama_seniman');
		
		$this->load->view('header', $title);
		$this->load->view('list', $data);
		$this->load->view('footer');
	}
	public function media()
	{
		$title = array(
			"page" => "Home",
			"title" => "media",
			"active" => "none"
		  );
		
		$data['semua'] = $this->m_item->get_all('m_media','id_media','nama_media');
		
		$this->load->view('header', $title);
		$this->load->view('list', $data);
		$this->load->view('footer');
	}
	public function galeri()
	{
		$title = array(
			"page" => "Home",
			"title" => "galeri",
			"active" => "none"
		  );
		
		$data['semua'] = $this->m_item->get_all('m_galeri','id_galeri','nama_galeri');
		
		$this->load->view('header', $title);
		$this->load->view('list', $data);
		$this->load->view('footer');
	}
	public function abjad()
	{
		$title = array(
			"page" => "Home",
			"title" => "Gerakan Seni",
			"active" => "abjad"
		  );
		
		
		$data['jenis'] = $this->m_item->get_list_jenis();
		$data['semuajenis'] = $this->m_item->get_list_abjad();
		
		$this->load->view('header', $title);
		$this->load->view('index', $data, '#result');
		$this->load->view('footer');
	}
	public function waktu()
	{
		$title = array(
			"page" => "Home",
			"title" => "Gerakan Seni",
			"active" => "waktu"
		  );
		
		
		$data['jenis'] = $this->m_item->get_list_waktu();
		$data['semuajenis'] = $this->m_item->get_list_waktu();
		
		$this->load->view('header', $title);
		$this->load->view('index', $data);
		$this->load->view('footer');
	}
}
