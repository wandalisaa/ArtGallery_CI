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
		  $title = array(
			"title" => "Pencarian '".$keyword."'"
		  );
		  $data['media']=$this->m_item->get_search('m_media','id_media',$keyword,'nama_media');
		  $data['seniman']=$this->m_item->get_search('m_seniman','id_seniman',$keyword,'nama_seniman');
		  $data['galeri']=$this->m_item->get_search('m_galeri','id_galeri',$keyword,'nama_galeri');
		  $data['jenis']=$this->m_item->get_search('m_jenis','id_jenis',$keyword,'nama_jenis');
		  $data['art']=$this->m_item->get_search_art($keyword);
		  $data['artikel']=$this->m_item->get_search_artikel($keyword);

		$this->load->view('header', $title);
		$this->load->view('search',$data);
		$this->load->view('footer');
	}
}
