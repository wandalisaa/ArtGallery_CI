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
		  $data['media'] = $this->m_item->get_detail('m_media','id_media',$id);
		  $data['artikel'] = $this->m_item->get_artikel_terkait('m_media','id_media',$id);
		  $data['art'] = $this->m_item->get_art_terkait('m_media','id_media',$id);
		  $data['other'] = $this->m_item->get_other('m_media','id_media',$id);
		$this->load->view('header', $title);
		$this->load->view('media',$data);
		$this->load->view('footer');
	}
	// ==================== CRUD ======================
	public function insert_media(){
		$nama = $this->input->post('namaMedia');
		$deskripsi = $this->input->post('deskMedia');

		$data = array(
			"nama_media" => $nama,
			"desk_media" => $deskripsi
		);

		
			$this->m_item->input_data('m_media',$data);
			redirect('admin/list_media/');
		
	}
	public function update_media($id){

		$data['media'] = $this->m_item->get_detail('m_media','id_media',$id);
		$title = array(
			"title" => "media"
		  );
		$this->load->view('header', $title);
		$this->load->view('form-media',$data);
		$this->load->view('footer');
	}

	public function do_update($id){
		
		$nama = $this->input->post('namaMedia');
		$deskripsi = $this->input->post('deskMedia');

		$data = array(
			"nama_media" => $nama,
			"desk_media" => $deskripsi
		);
		
		$this->m_item->update_data('m_media','id_media',$id,$data);
		redirect('admin/list_media/');
		
	}
	public function delete_media($id){

		$title = array(
			"title" => "Daftar media"
		  );
		$this->m_item->delete_data('m_media','id_media',$id);
		redirect('admin/list_media/');
	}
}
