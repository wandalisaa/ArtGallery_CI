<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// GERAKAN SENI
class Artikel extends CI_Controller {

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
			"title" => "Artikel"
		  );
		$data['artikel'] = $this->m_item->get_detail_artikel($id);
		$data['art'] = $this->m_item->get_art_artikel($id);

		$this->load->view('header', $title);
		$this->load->view('artikel',$data);
		$this->load->view('footer');
	}
		// ==================== CRUD ======================
		public function insert_artikel(){
			$nama = $this->input->post('judul');
			$deskripsi = $this->input->post('deskripsi');
	
			$media = $this->input->post('media');
			if ($media == 0 ) {
				$media = NULL;
			}
			$seniman = $this->input->post('seniman');
			if ($seniman == 0 ) {
				$seniman = NULL;
			}
			$galeri = $this->input->post('galeri');
			$jenis = $this->input->post('jenis');
	
			$data = array(
				"judul" => $nama,
				"deskripsi" => $deskripsi,
				"id_media" => $media,
				"id_seniman" => $seniman,
				"id_jenis" => $jenis,
				"id_galeri" => $galeri
			);
	
			
				$this->m_item->input_data('tr_artikel',$data);
				redirect('admin/list_artikel/');
			
		}
		public function update_artikel($id){
	
			$data['artikel'] = $this->m_item->get_detail_artikel($id);
			$data['media'] = $this->m_item->get_list('m_media');
			$data['seniman'] = $this->m_item->get_list('m_seniman');
			$data['jenis'] = $this->m_item->get_list('m_jenis');
			$data['galeri'] = $this->m_item->get_list('m_galeri');

			$title = array(
				"title" => "artikel"
			  );
			$this->load->view('header', $title);
			$this->load->view('form-artikel',$data);
			$this->load->view('footer');
		}
	
		public function do_update($id){
			
			$nama = $this->input->post('judul');
			$deskripsi = $this->input->post('deskripsi');
			$media = $this->input->post('media');
			$seniman = $this->input->post('seniman');
			$galeri = $this->input->post('galeri');
			$jenis = $this->input->post('jenis');
	
			$data = array(
				"judul" => $nama,
				"deskripsi" => $deskripsi,
				"id_media" => $media,
				"id_seniman" => $seniman,
				"id_jenis" => $jenis,
				"id_galeri" => $galeri
			);
	
			
			$this->m_item->update_data('tr_artikel','id_artikel',$id,$data);
			redirect('admin/list_artikel/');
			
		}
		public function delete_artikel($id){
	
			$title = array(
				"title" => "Daftar artikel"
			  );
			$this->m_item->delete_data('tr_artikel','id_artikel',$id);
			redirect('admin/list_artikel/');
		}
}
