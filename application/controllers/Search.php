<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// GERAKAN SENI
class Search extends CI_Controller {

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
			"title" => "Pencarian"
		  );

		  $keyword = $this->input->post('keyword');
		  $data['media']=$this->m_obat->get_keyword('m_media',$keyword,'nama_media');
		  $data['seniman']=$this->m_obat->get_keyword('m_seniman',$keyword,'nama_seniman');
		  $data['galeri']=$this->m_obat->get_keyword('m_galeri',$keyword,'nama_galeri');
		  $data['jenis']=$this->m_obat->get_keyword('m_jenis',$keyword,'nama_jenis');
		  $data['art']=$this->m_obat->get_keyword('tr_art',$keyword,'judul_art');
		  $data['artikel']=$this->m_obat->get_keyword('tr_artikel',$keyword,'judul');

		$this->load->view('header', $data);
		$this->load->view('search',$data);
		$this->load->view('footer');
	}
}
