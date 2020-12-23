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
		
		if($this->session->userdata('username') == TRUE ){
			$id_user = $this->session->userdata('id_user');
			$data['like'] = $this->m_item->check_like($id,$id_user);
		}else{
			$data['like'] = $this->m_item->check_like($id,'0');
		}
		$title = array(
			"title" => "Karya Seni"
		  );
		$data['art'] = $this->m_item->get_art($id);
		$data['other'] = $this->m_item->get_list_art($id);

		$this->load->view('header', $title);
		$this->load->view('art',$data);
		$this->load->view('footer');
	}
	public function koleksi_artikel($id)
	{
		$title = array(
			"title" => "Koleksi Karya Seni"
		  );
		$data['artikel'] = $this->m_item->get_detail_artikel($id);
		$data['art'] = $this->m_item->get_all_art($id);
		$this->load->view('header', $title);
		$this->load->view('list-art',$data);
		$this->load->view('footer');
	}
	public function insert_art($id){
		$nama = $this->input->post('judulKarya');
		$deskripsi = $this->input->post('deskKarya');
		$tahun = $this->input->post('tahunDibuat');
		$lokasi = $this->input->post('lokasiKarya');
		$dimensi = $this->input->post('dimensiKarya');

		$data = array(
			"id_artikel" => $id,
			"judul_art" => $nama,
			"desk_art" => $deskripsi,
			"tahun_dibuat" => $tahun,
			"tempat_dibuat" => $lokasi,
			"dimensi" => $dimensi
		);

		$config['upload_path']          = 'images/';
		$config['allowed_types']        = 'jpg|jpeg|gif|png';
		$config['file_name']						= $nama;

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('gambar'))
		{

		}
		else {
		$data += array(
			'gambar' => $config['upload_path'].$this->upload->data('file_name'),
		);
		}
		
			$this->m_item->input_data('tr_art',$data);
			redirect('art/koleksi_artikel/'.$id);
		
	}
	public function update_art($id){

		$data['art'] = $this->m_item->get_detail('tr_art','id_art',$id);
		$title = array(
			"title" => "art"
		  );
		$this->load->view('header', $title);
		$this->load->view('form-art',$data);
		$this->load->view('footer');
	}

	public function do_update($id){
		$id_artikel = $this->input->post('id_artikel');
		$nama = $this->input->post('judulKarya');
		$deskripsi = $this->input->post('deskKarya');
		$tahun = $this->input->post('tahunDibuat');
		$lokasi = $this->input->post('lokasiKarya');
		$dimensi = $this->input->post('dimensiKarya');

		$data = array(
			"id_artikel" => $id_artikel,
			"judul_art" => $nama,
			"desk_art" => $deskripsi,
			"tahun_dibuat" => $tahun,
			"tempat_dibuat" => $lokasi,
			"dimensi" => $dimensi
		);

		$config['upload_path']          = 'images/';
		$config['allowed_types']        = 'jpg|jpeg|gif|png';
		$config['file_name']						= $nama;

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('gambar'))
		{

		}
		else {
		$data += array(
			'gambar' => $config['upload_path'].$this->upload->data('file_name'),
		);
		}
		
		$this->m_item->update_data('tr_art','id_art',$id,$data);
		redirect('art/koleksi_artikel/'.$id_artikel);
		
	}
	public function delete_art($id){

		$title = array(
			"title" => "Daftar art"
		  );
		$this->m_item->delete_data('tr_art','id_art',$id);
		redirect('admin/list_artikel/');
	}
	// like
	public function like($id){
		$id_user = $this->session->userdata('id_user');

		$data = array(
			"id_user" => $id_user,
			"id_art" => $id
		);
		
		$this->m_item->input_favorit($data);
		redirect('art/index/'.$id);
	}
	// unlike
	public function unlike($id){
		$id_user = $this->session->userdata('id_user');

		$data = array(
			"id_user" => $id_user,
			"id_art" => $id
		);
		
		$this->m_item->delete_favorit($id,$id_user);
		redirect('art/index/'.$id);
	}
	
}
