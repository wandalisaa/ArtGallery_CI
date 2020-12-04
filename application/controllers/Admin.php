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
		$data = array(
			"title" => "Admin"
		  );
		$this->load->view('header', $data);
		$this->load->view('admin');
		$this->load->view('footer');
	}
	public function artikel()
	{
		$data = array(
			"title" => "Artikel"
		  );
		$this->load->view('header', $data);
		$this->load->view('form-artikel');
		$this->load->view('footer');
	}
	public function art()
	{
		$data = array(
			"title" => "Karya Seni"
		  );
		$this->load->view('header', $data);
		$this->load->view('form-art');
		$this->load->view('footer');
	}
	public function galeri()
	{
		$data = array(
			"title" => "Galeri"
		  );
		$this->load->view('header', $data);
		$this->load->view('form-galleri');
		$this->load->view('footer');
	}
	public function media()
	{
		$data = array(
			"title" => "Media"
		  );
		$this->load->view('header', $data);
		$this->load->view('form-media');
		$this->load->view('footer');
	}
	public function seniman()
	{
		$data = array(
			"title" => "Seniman"
		  );
		$this->load->view('header', $data);
		$this->load->view('form-seniman');
		$this->load->view('footer');
	}
	public function jenis()
	{
		$data = array(
			"title" => "Gerakan Seni"
		  );
		$this->load->view('header', $data);
		$this->load->view('form-jenis');
		$this->load->view('footer');
	}
	public function input_seniman()
	{
		$nama = $this->input->post('namaSeniman');
		$deskripsi = $this->input->post('deskSeniman');
		$tanggal_lahir = $this->input->post('tglSeniman');

		$data = array(
			"nama_seniman" => $nama,
			"desk_seniman" => $deskripsi,
			"tanggal_lahir" => $tanggal_lahir
		);

		$this->m_item->input_seniman($data);
		redirect('Home/index');
		// wkwkwwkwk
	}
}
