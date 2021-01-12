<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// GERAKAN SENI
class Galeri extends CI_Controller {

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
			"title" => "Galeri"
		  );

		$data['galeri'] = $this->m_item->get_detail('m_galeri','id_galeri',$id);
		$data['artikel'] = $this->m_item->get_artikel_terkait('m_galeri','id_galeri',$id);
		$data['art'] = $this->m_item->get_art_terkait('m_galeri','id_galeri',$id);
		$data['other'] = $this->m_item->get_other('m_galeri','id_galeri',$id);
		$this->load->view('header', $title);
		$this->load->view('Galeri',$data);
		$this->load->view('footer');
	}
	// ================================ GALERI =====================================
	public function do_upload()
	{
		$url = "../images";
		$image=basename($_FILES['logoGaleri']['name']);
		$image=str_replace(' ','|',$image);
		$type = explode(".",$image);
		$type = $type[count($type)-1];
		if (in_array($type,array('jpg','jpeg','png','gif')))
		{
			$tmppath="images/".uniqid(rand()).".".$type;
			if(is_uploaded_file($_FILES["logoGaleri"]["tmp_name"]))
			{
				move_uploaded_file($_FILES['logoGaleri']['tmp_name'],$tmppath);
				return $tmppath;
			}
		}
	}
	public function insert_galeri(){
		$nama = $this->input->post('namaGaleri');
		$deskripsi = $this->input->post('deskGaleri');
		$kota = $this->input->post('kota');
		$negara = $this->input->post('negara');

		// $foto = $this->do_upload();

		// 	$data = array(
		// 		"nama_galeri" => $nama,
		// 		"desk_galeri" => $deskripsi,
		// 		"kota" => $kota,
		// 		"negara" => $negara,
		// 		"foto" => $foto
		// 	);
		$data = array(
			"nama_galeri" => $nama,
			"desk_galeri" => $deskripsi,
			"kota" => $kota,
			"negara" => $negara
		);

		$config['upload_path']          = 'images/';
		$config['allowed_types']        = 'jpg|jpeg|gif|png';
		$config['file_name']						= $nama;

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('logoGaleri'))
		{

		}
		else {
		$data += array(
			'foto' => $config['upload_path'].$this->upload->data('file_name'),
		);
		}
		
			$this->m_item->input_data('m_galeri',$data);
			redirect('admin/list_galeri/');
		
	}
	public function update_galeri($id){

		$data['galeri'] = $this->m_item->get_detail('m_galeri','id_galeri',$id);
		$title = array(
			"title" => "Galeri"
		  );
		$this->load->view('header', $title);
		$this->load->view('form-galleri',$data);
		$this->load->view('footer');
	}

	public function do_update($id){
		
		$nama = $this->input->post('namaGaleri');
		$deskripsi = $this->input->post('deskGaleri');
		$kota = $this->input->post('kota');
		$negara = $this->input->post('negara');

		// $foto =  $this->do_upload();

		// $data = array(
		// 	"nama_galeri" => $nama,
		// 	"desk_galeri" => $deskripsi,
		// 	"kota" => $kota,
		// 	"negara" => $negara,
		// );

		// if (empty($foto)) {
		// 	# code...
		// } else {
		// 	$data += array(
		// 		"foto" => $foto
		// 	);
		// }
		$data = array(
			"nama_galeri" => $nama,
			"desk_galeri" => $deskripsi,
			"kota" => $kota,
			"negara" => $negara
		);

		$config['upload_path']          = 'images/';
		$config['allowed_types']        = 'jpg|jpeg|gif|png';
		$config['file_name']						= $nama;

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('logoGaleri'))
		{

		}
		else {
		$data += array(
			'foto' => $config['upload_path'].$this->upload->data('file_name'),
		);
		}
		
		$this->m_item->update_data('m_galeri','id_galeri',$id,$data);
		redirect('admin/list_galeri/');
		
	}
	public function delete_galeri($id){

		$title = array(
			"title" => "Daftar Galeri"
		  );
		$this->m_item->delete_data('m_galeri','id_galeri',$id);
		redirect('admin/list_galeri/');
	}
	
}
