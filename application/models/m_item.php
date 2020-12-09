<?php

class M_item extends CI_Model{

	// =============================================== SELECT =======================================================
	//mengambil nama-nama gerakan jenis dan jumlah karya seni terkait
	public function get_list_jenis() {
		return $this->db->query("SELECT COUNT(c.id_art) as total ,a.nama_jenis ,a.id_jenis, c.gambar FROM m_jenis as a INNER JOIN tr_artikel as b ON a.id_jenis = b.id_jenis INNER JOIN tr_art as c ON c.id_artikel=b.id_artikel GROUP BY a.id_jenis LIMIT 7")->result();
	}
	public function get_all_jenis() {
		return $this->db->query("SELECT COUNT(c.id_art) as total ,a.nama_jenis ,a.id_jenis, c.gambar FROM m_jenis as a INNER JOIN tr_artikel as b ON a.id_jenis = b.id_jenis INNER JOIN tr_art as c ON c.id_artikel=b.id_artikel GROUP BY a.id_jenis")->result();
	}
	// GERAKAN SENI
	//  detail jenis
	public function get_jenis($id) {
		return $this->db->query("SELECT * FROM m_jenis WHERE id_jenis = $id")->result();
	}
	// artikel gerakan seni
	public function get_artikel_jenis($id) {
		return $this->db->query("SELECT a.id_artikel,a.judul,b.id_galeri,b.nama_galeri,c.gambar FROM tr_artikel AS a LEFT JOIN m_jenis AS t ON a.id_jenis = t.id_jenis JOIN m_galeri AS b ON a.id_galeri=b.id_galeri JOIN tr_art AS c ON a.id_artikel=c.id_artikel WHERE a.id_jenis = $id GROUP BY a.id_artikel")->result();
	}
	// karya seni gerakan seni
	public function get_art_jenis($id) {
		return $this->db->query("SELECT c.id_art,c.judul_art,c.gambar FROM m_jenis AS a INNER JOIN tr_artikel AS b ON a.id_jenis=b.id_jenis RIGHT JOIN tr_art AS c ON b.id_artikel=c.id_artikel WHERE a.id_jenis = $id")->result();
	}
	
	// SENIMAN
	// detail seniman
	public function get_seniman($id) {
		return $this->db->query("SELECT * FROM m_seniman WHERE id_seniman = $id")->result();
	}
	// artikel seniman
	public function get_artikel_seniman($id) {
		return $this->db->query("SELECT a.id_artikel,a.judul,b.id_galeri,b.nama_galeri,c.gambar FROM tr_artikel AS a LEFT JOIN m_seniman AS t ON a.id_seniman = t.id_seniman JOIN m_galeri AS b ON a.id_galeri=b.id_galeri JOIN tr_art AS c ON a.id_artikel=c.id_artikel WHERE a.id_seniman = $id GROUP BY a.id_artikel")->result();
	}
	// karya seni seniman
	public function get_art_seniman($id) {
		return $this->db->query("SELECT c.id_art,c.judul_art,c.gambar FROM m_seniman AS a INNER JOIN tr_artikel AS b ON a.id_seniman=b.id_seniman RIGHT JOIN tr_art AS c ON b.id_artikel=c.id_artikel WHERE a.id_seniman = $id")->result();
	}

	// MEDIA
	// detail media
	public function get_media($id) {
		return $this->db->query("SELECT * FROM m_media WHERE id_media = $id")->result();
	}
	// artikel media
	public function get_artikel_media($id) {
		return $this->db->query("SELECT a.id_artikel,a.judul,b.id_galeri,b.nama_galeri,c.gambar FROM tr_artikel AS a LEFT JOIN m_media AS t ON a.id_media = t.id_media JOIN m_galeri AS b ON a.id_galeri=b.id_galeri JOIN tr_art AS c ON a.id_artikel=c.id_artikel WHERE a.id_media = $id GROUP BY a.id_artikel")->result();
	}
	// karya seni media
	public function get_art_media($id) {
		return $this->db->query("SELECT c.id_art,c.judul_art,c.gambar FROM m_media AS a INNER JOIN tr_artikel AS b ON a.id_media=b.id_media RIGHT JOIN tr_art AS c ON b.id_artikel=c.id_artikel WHERE a.id_media = $id")->result();
	}

	// GALERI
	// detail galeri
	public function get_galeri($id) {
		return $this->db->query("SELECT * FROM m_galeri WHERE id_galeri = $id")->result();
	}
	// artikel galeri
	public function get_artikel_galeri($id) {
		return $this->db->query("SELECT a.id_artikel,a.judul,b.id_galeri,b.nama_galeri,c.gambar FROM tr_artikel AS a LEFT JOIN m_galeri AS t ON a.id_galeri = t.id_galeri JOIN m_galeri AS b ON a.id_galeri=b.id_galeri JOIN tr_art AS c ON a.id_artikel=c.id_artikel WHERE a.id_galeri = $id GROUP BY a.id_artikel")->result();
	}
	// karya seni galeri
	public function get_art_galeri($id) {
		return $this->db->query("SELECT c.id_art,c.judul_art,c.gambar FROM m_galeri AS a INNER JOIN tr_artikel AS b ON a.id_galeri=b.id_galeri RIGHT JOIN tr_art AS c ON b.id_artikel=c.id_artikel WHERE a.id_galeri = $id")->result();
	}

	// ARTIKEL
	public function get_artikel($id) {
		return $this->db->query("SELECT a.judul,a.deskripsi,b.id_seniman,b.nama_seniman,c.id_galeri,c.nama_galeri FROM tr_artikel as a LEFT JOIN m_seniman AS b ON a.id_seniman=b.id_seniman JOIN m_galeri AS c ON a.id_galeri=c.id_galeri WHERE id_artikel = $id")->result();
	}
	// karya seni dalam arikel
	public function get_art_artikel($id) {
		return $this->db->query("SELECT b.id_art,b.judul_art,b.gambar FROM tr_artikel AS a RIGHT JOIN tr_art AS b ON a.id_artikel=b.id_artikel WHERE a.id_artikel = $id")->result();
	}

	// KARYA SENI
	public function get_art($id) {
		return $this->db->query("SELECT a.id_seniman,a.nama_seniman,c.id_galeri,c.nama_galeri,c.kota,c.negara,c.foto,d.id_jenis,d.nama_jenis,e.id_media,e.nama_media,f.* FROM m_seniman AS a INNER JOIN tr_artikel AS b ON b.id_seniman=a.id_seniman INNER JOIN m_galeri AS c ON b.id_galeri=c.id_galeri INNER JOIN m_jenis AS d ON d.id_jenis=b.id_jenis INNER JOIN m_media AS e ON e.id_media=b.id_media RIGHT JOIN tr_art AS f ON f.id_artikel=b.id_artikel WHERE f.id_art=$id")->result();
	}
	// karya seni lainnya
	public function get_list_art($id) {
		return $this->db->query("SELECT b.id_art,b.judul_art,b.gambar FROM tr_artikel AS a RIGHT JOIN tr_art AS b ON a.id_artikel=b.id_artikel WHERE b.id_art != $id ORDER BY b.id_art DESC LIMIT 5")->result();
	}
// ===================================== artikel terkait =====================================
public function get_artikel_terkait($table,$kolom,$id) {
	return $this->db->query("SELECT a.id_artikel,a.judul,b.id_galeri,b.nama_galeri,c.gambar FROM tr_artikel AS a LEFT JOIN $table AS t ON a.$kolom = t.$kolom JOIN m_galeri AS b ON a.id_galeri=b.id_galeri JOIN tr_art AS c ON a.id_artikel=c.id_artikel WHERE a.$kolom = $id GROUP BY a.id_artikel")->result();
}
// ===================================== karya seni terkait =====================================
public function get_art_terkait($table,$kolom,$id) {
	return $this->db->query("SELECT c.id_art,c.judul_art,c.gambar FROM $table AS a INNER JOIN tr_artikel AS b ON a.$kolom=b.$kolom RIGHT JOIN tr_art AS c ON b.id_artikel=c.id_artikel WHERE a.$kolom = $id")->result();
}
// =================================== get other ========================================
public function get_other($table,$kolom,$id) {
	return $this->db->query("SELECT * FROM $table AS a LEFT JOIN tr_artikel AS b ON a.$kolom = b.$kolom RIGHT JOIN tr_art AS c ON b.id_artikel = c.id_artikel WHERE a.$kolom !=  $id GROUP BY a.$kolom ORDER BY a.$kolom DESC LIMIT 4 ")->result();
}

	// ================================================ INSERT ===================================================

	public function input_data($table,$data) {
		return $this->db->insert($table,$data);
	}

	// ============================================== Update =============================================================


	public function update_data($table,$kolom,$id,$data) {
		$this->db->where($kolom,$id);
		return $this->db->update($table,$data);
	}
	// ================================================== DELETE ============================================

	public function delete_data($table,$id,$kolom) {
		$this->db->where($kolom,$id);
		return $this->db->delete($table);
	}

	// ================================ FAV ===============================
	public function input_favorit($data) {
		return $this->db->insert('fav',$data);
	}
	public function delete_favorit($id) {
		$this->db->where('id_fav',$id);
		return $this->db->delete('fav');
	}
	// ============================== Search ==========================
	public function get_keyword($table,$keyword,$kolom){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->like($kolom,$keyword);

		return $this->db->get()->result_array();
	}
	// =============================== List ===========================
	public function get_list($table){
		return $this->db->query("SELECT * from $table")->result();
	}
	// detail
	public function get_detail($table,$kolom,$id){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($kolom,$id);

		return $this->db->get()->result_array();
	}
	public function get_all_artikel() {
		return $this->db->query("SELECT a.id_artikel,a.judul,a.deskripsi,b.nama_seniman,c.nama_galeri,d.nama_media,e.nama_jenis FROM tr_artikel as a LEFT JOIN m_seniman AS b ON a.id_seniman=b.id_seniman JOIN m_galeri AS c ON a.id_galeri=c.id_galeri JOIN m_media AS d ON a.id_media=d.id_media JOIN m_jenis AS e ON a.id_jenis=e.id_jenis ")->result();
	}
	public function get_all_art() {
		return $this->db->query("SELECT * FROM tr_artikel AS a RIGHT JOIN tr_art AS b ON a.id_artikel=b.id_artikel")->result();
	}
}
?>
