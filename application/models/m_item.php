<?php

class M_item extends CI_Model{

	// =============================================== SELECT =======================================================
	//mengambil nama-nama gerakan jenis dan jumlah karya seni terkait
	public function get_list_jenis() {
		return $this->db->query("SELECT COUNT(c.id_art) as total ,a.nama_jenis ,a.id_jenis, c.gambar FROM m_jenis as a INNER JOIN tr_artikel as b ON a.id_jenis = b.id_jenis INNER JOIN tr_art as c ON c.id_artikel=b.id_artikel GROUP BY a.id_jenis LIMIT 7")->result();
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
		return $this->db->query("SELECT b.id_art,b.judul_art,b.gambar FROM tr_artikel AS a RIGHT JOIN tr_art AS b ON a.id_artikel=b.id_artikel WHERE b.id_art != $id")->result();
	}


	// ================================================ INSERT ===================================================
	// Gerakan Seni
	public function input_jenis($data) {
		return $this->db->query("INSERT INTO `m_jenis`( `nama_jenis`, `desk_jenis`, `tahun_awal`) VALUES ([value-2],[value-3],[value-4])");
	}
	// Media
	public function input_media($data) {
		return $this->db->insert('m_media',$data);
	}
	//Galeri
	public function input_galeri($data) {
		return $this->db->insert('m_galeri',$data);
	}
	// Seniman
	public function input_seniman($data) {
		return $this->db->insert('m_seniman',$data);
	}
	// Karya seni
	public function input_art($data) {
		return $this->db->insert('tr_art',$data);
	}
	// Artikel
	public function input_artikel($data) {
		return $this->db->insert('tr_artikel',$data);
	}

	// ============================================== Update =============================================================
	// Gerakan Seni
	public function update_jenis($id,$data) {
		return $this->db->query("UPDATE `m_jenis` SET $data WHERE id_jenis = $id");
	}
	// Media
	public function update_media($id,$data) {
		$this->db->where('id_media',$id);
		return $this->db->update('m_media',$data);
	}
	//Galeri
	public function update_galeri($id,$data) {
		$this->db->where('id_galeri',$id);
		return $this->db->update('m_galeri',$data);
	}
	// Seniman
	public function update_seniman($id,$data) {
		 $this->db->where('id_seniman',$id);
		return $this->db->update('m_seniman',$data);
	}
	// Karya seni
	public function update_art($id,$data) {
		$this->db->where('id_art',$id);
		return $this->db->update('tr_art',$data);
	}
	// Artikel
	public function update_artikel($id,$data) {
		$this->db->where('id_artikel',$id);
		return $this->db->update('tr_artikel',$data);
	}
	// ================================================== DELETE ============================================

	  // Gerakan Seni
	public function delete_jenis($id) {
		return $this->db->query("DELETE FROM `m_jenis` WHERE id_jenis = $id");
	}
	// Media
	public function delete_media($id) {
		$this->db->where('id_media',$id);
		return $this->db->delete('m_media');
	}
	//Galeri
	public function delete_galeri($id) {
		$this->db->where('id_galeri',$id);
		return $this->db->delete('m_galeri');
	}
	// Seniman
	public function delete_seniman($id) {
		 $this->db->where('id_seniman',$id);
		return $this->db->delete('m_seniman');
	}
	// Karya seni
	public function delete_art($id) {
		$this->db->where('id_art',$id);
		return $this->db->delete('tr_art');
	}
	// Artikel
	public function delete_artikel($id) {
		$this->db->where('id_artikel',$id);
		return $this->db->delete('tr_artikel');
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

}
?>
