<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// GERAKAN SENI
class Jenis extends CI_Controller {

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
		$title= array(
			"title" => "Gerakan Seni"
		  );

		$data['jenis'] = $this->m_item->get_jenis($id);
		$data['artikel'] = $this->m_item->get_artikel_terkait('m_jenis','id_jenis',$id);
		$data['art'] = $this->m_item->get_art_terkait('m_jenis','id_jenis',$id);
		$data['other'] = $this->m_item->get_other('m_jenis','id_jenis',$id);
		$this->load->view('header', $title);
		$this->load->view('jenis',$data);
		$this->load->view('footer');
	}
}
