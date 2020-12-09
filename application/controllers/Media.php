<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// GERAKAN SENI
class Media extends CI_Controller {

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
	public function index($id)
	{
		$title = array(
			"title" => "Media"
		  );
		  $data['media'] = $this->m_item->get_media($id);
		  $data['artikel'] = $this->m_item->get_artikel_terkait('m_media','id_media',$id);
		  $data['art'] = $this->m_item->get_art_terkait('m_media','id_media',$id);
		  $data['other'] = $this->m_item->get_other('m_media','id_media',$id);
		$this->load->view('header', $title);
		$this->load->view('media',$data);
		$this->load->view('footer');
	}
}
