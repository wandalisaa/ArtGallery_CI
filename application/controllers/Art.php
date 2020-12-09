<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Art extends CI_Controller {

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
			"title" => "Karya Seni"
		  );
		$data['art'] = $this->m_item->get_art($id);
		$data['other'] = $this->m_item->get_list_art($id);

		$this->load->view('header', $title);
		$this->load->view('art',$data);
		$this->load->view('footer');
	}
}
