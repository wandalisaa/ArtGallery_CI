<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// GERAKAN SENI
class Seniman extends CI_Controller {

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
			"title" => "Seniman"
		  );
		  $data['seniman'] = $this->m_item->get_seniman($id);
		  $data['artikel'] = $this->m_item->get_artikel_terkait('m_seniman','id_seniman',$id);
		  $data['art'] = $this->m_item->get_art_terkait('m_seniman','id_seniman',$id);
		  $data['other'] = $this->m_item->get_other('m_seniman','id_seniman',$id);
		$this->load->view('header', $title);
		$this->load->view('Seniman',$data);
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

		$this->m_item->input_data('m_seniman',$data);
		redirect('Home/index');
	}
	public function list_seniman()
	{
		$data = array(
			"title" => "List Seniman"
		  );
		$data['seniman'] = $this->m_item->get_list('m_seniman');
		$this->load->view('header', $data);
		$this->load->view('list-seniman',$data);
		$this->load->view('footer');
	}
}
