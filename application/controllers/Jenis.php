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
		$data = array(
			"title" => "Gerakan Seni"
		  );

		$data['jenis'] = $this->m_item->get_jenis($id);

		$this->load->view('header', $data);
		$this->load->view('jenis');
		$this->load->view('footer');
	}
}
