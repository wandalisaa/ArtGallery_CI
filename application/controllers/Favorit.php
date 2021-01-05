<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Favorit extends CI_Controller {

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
		
		// if(!$this->session->userdata('level','0') || !$this->session->userdata('level','1')){
		// 	$this->session->set_flashdata('danger', 'Anda Tidak memiliki akses ke halaman tersebut');
		// 	redirect('home/index/');
		// }
    }
	public function index()
	{
		$id_user = $this->session->userdata('id_user');
		$title = array(
			"title" => "Favorit"
		  );
		$data['art'] = $this->m_item->favorit($id_user);
		
		$this->load->view('header', $title);
		$this->load->view('favorit',$data);
		$this->load->view('footer');
	}
}
