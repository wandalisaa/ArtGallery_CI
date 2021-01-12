<?php

class M_item extends CI_Model{

	// =============================================== SELECT =======================================================

	// CREATE VIEW gerakan_seni AS SELECT COUNT(c.id_art) as total,a.tahun_awal ,a.nama_jenis ,a.id_jenis, c.gambar
	//  FROM m_jenis as a INNER JOIN tr_artikel as b ON a.id_jenis = b.id_jenis INNER JOIN tr_art as c ON c.id_artikel=b.id_artikel
	//   GROUP BY a.id_jenis

	// VIEW untuk menampilkan thumbnail dari gerakan seni berupa total karya seni terkait ,
	//  tahun awal , nama nya , dan salah satu gambar dari karya seni yang terkait dengan gerakan seni tersebut 
	public function get_list_jenis() {
		return $this->db->query("SELECT * FROM gerakan_seni ORDER BY id_jenis DESC LIMIT 7 ")->result();
	}
	public function get_list_abjad() {
		return $this->db->query("SELECT * FROM gerakan_seni ORDER BY nama_jenis ASC ")->result();
	}
	public function get_list_waktu() {
		return $this->db->query("SELECT * FROM gerakan_seni ORDER BY tahun_awal ASC ")->result();
	}
	public function get_all_jenis() {
		return $this->db->query("SELECT * FROM gerakan_seni ORDER BY id_jenis DESC")->result();
	}

	// memdapatkan semua data
	public function get_all($table,$kolom,$nama) {
		return $this->db->query("SELECT COUNT(c.id_art) as total,a.$nama as nama, a.$kolom as id , c.gambar FROM $table AS a
		 INNER JOIN tr_artikel AS b ON a.$kolom = b.$kolom 
		 INNER JOIN tr_art AS c ON b.id_artikel = c.id_artikel 
		  GROUP BY a.$kolom ORDER BY a.$kolom DESC ")->result();
	}

		// ================================ FAV ===============================
			// like
	public function check_like($id_art,$id_user){
		return $this->db->query("SELECT EXISTS(SELECT * from tr_fav 
		WHERE id_user = $id_user AND id_art = $id_art) as a")->result();
	}
		public function input_favorit($data) {
			return $this->db->insert('tr_fav',$data);
		}
		public function delete_favorit($id,$id_user) {
			$this->db->where('id_art',$id);
			$this->db->where('id_user',$id_user);
			return $this->db->delete('tr_fav');
		}
		public function favorit($id_user){
			return $this->db->query("SELECT b.judul_art,b.id_art,b.gambar 
			FROM `tr_fav` AS a JOIN tr_art as b ON a.id_art = b.id_art 
			WHERE a.id_user = $id_user ORDER BY a.id_fav DESC")->result();
		}

		// =============================== List ===========================
		public function get_list($table){
			return $this->db->query("SELECT * from $table")->result();
		}
		// detail
		public function get_detail($table,$kolom,$id){
			return $this->db->query("SELECT * FROM $table WHERE $kolom = $id")->result();
		}
		public function get_detail_artikel($id) {
			return $this->db->query("SELECT * FROM `artikel` WHERE id_artikel = $id ")->result();
		}
		public function get_all_artikel() {
			return $this->db->query("SELECT * FROM artikel ORDER BY id_artikel DESC")->result();
		}
	
		public function get_all_art($id) {
			return $this->db->query("SELECT * FROM art WHERE id_artikel = $id")->result();
		}

	// CREATE VIEW art AS SELECT a.id_artikel,a.judul,b.id_art,b.judul_art,b.desk_art,b.tahun_dibuat,b.dimensi,b.gambar,b.tempat_dibuat,c.nama_seniman,c.id_seniman,
	// d.id_media,d.nama_media,e.id_galeri,e.nama_galeri,e.kota,e.negara,f.id_jenis,f.nama_jenis FROM tr_artikel as a INNER JOIN tr_art as b ON a.id_artikel=b.id_artikel 
	// LEFT JOIN m_seniman as c ON a.id_seniman=c.id_seniman LEFT JOIN m_media as d ON a.id_media = d.id_media INNER JOIN m_galeri as e ON a.id_galeri=e.id_galeri 
	// INNER JOIN m_jenis as f ON a.id_jenis=f.id_jenis

	// VIEW untuk menampilkan data semua data terkait suatu karya seni ,
	//  dimana terdapat fungsi Left join yang akan menampilkan semua data dari table 
	//  kiri meskipun tidak ada data yang terkait di table kanan , dan table kanan akan berisikan null
	public function get_art_artikel($id) {
		return $this->db->query("SELECT * FROM art WHERE id_artikel = $id")->result();
	}

	// KARYA SENI
	public function get_art($id) {
		return $this->db->query("SELECT * FROM art WHERE id_art=$id")->result();
	}
	// karya seni lainnya
	public function get_list_art($id) {
		return $this->db->query("SELECT * FROM art WHERE id_art != $id ORDER BY id_art DESC LIMIT 5")->result();
	}

	// ARTIKEL

	// CREATE VIEW artikel AS SELECT a.id_artikel,a.judul,a.deskripsi,b.id_galeri,b.nama_galeri,b.kota,b.negara,c.id_jenis,c.nama_jenis,d.id_seniman,d.nama_seniman,e.id_media,e.nama_media
	//  FROM tr_artikel AS a INNER JOIN m_galeri AS b ON a.id_galeri = b.id_galeri INNER JOIN m_jenis AS c ON a.id_jenis = c.id_jenis LEFT JOIN m_seniman AS d ON a.id_seniman=d.id_seniman 
	//  LEFT JOIN m_media AS e ON a.id_media = e.id_media

	// VIEW untuk menampilkan data semua data terkait suatu artikel , dimana terdapat fungsi
	//  Left join yang akan menampilkan semua data dari table kiri meskipun tidak ada data yang 
	//  terkait di table kanan , dan table kanan akan berisikan null
	public function get_artikel($id) {
		return $this->db->query("SELECT * FROM artikel WHERE id_artikel = $id")->result();
	}


// ===================================== artikel terkait =====================================
public function get_artikel_terkait($table,$kolom,$id) {
	return $this->db->query("SELECT a.id_artikel,a.judul,b.id_galeri,b.nama_galeri,c.gambar
	 FROM tr_artikel AS a INNER JOIN $table AS t ON a.$kolom = t.$kolom INNER JOIN m_galeri AS b
	 ON a.id_galeri=b.id_galeri INNER JOIN tr_art AS c ON a.id_artikel=c.id_artikel
	 WHERE a.$kolom = $id GROUP BY a.id_artikel")->result();
}
// ===================================== karya seni terkait =====================================
public function get_art_terkait($table,$kolom,$id) {
	return $this->db->query("SELECT c.id_art,c.judul_art,c.gambar
	FROM $table AS a INNER JOIN tr_artikel AS b ON a.$kolom=b.$kolom 
	INNER JOIN tr_art AS c ON b.id_artikel=c.id_artikel
	WHERE a.$kolom = $id")->result();
}
// =================================== get other ========================================
public function get_other($table,$kolom,$id) {
	return $this->db->query("SELECT * FROM $table AS a
	 INNER JOIN tr_artikel AS b ON a.$kolom = b.$kolom 
	 INNER JOIN tr_art AS c ON b.id_artikel = c.id_artikel 
	 WHERE a.$kolom !=  $id GROUP BY a.$kolom 
	 ORDER BY a.$kolom DESC LIMIT 4 ")->result();
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

	public function delete_data($table,$kolom,$id) {
		$this->db->where($kolom,$id);
		return $this->db->delete($table);
	}

	// ============================== Search ==========================
	public function get_search($table,$kolom_id,$keyword,$kolom) {
	return $this->db->query("SELECT * FROM $table AS a INNER JOIN
	 tr_artikel AS b ON a.$kolom_id = b.$kolom_id INNER JOIN 
	 tr_art AS c ON b.id_artikel = c.id_artikel WHERE a.$kolom 
	 LIKE '%$keyword%' GROUP BY a.$kolom_id ORDER BY a.$kolom_id DESC ")->result();
	}
	public function get_search_art($keyword){
		return $this->db->query("SELECT * FROM tr_art AS a WHERE a.id_art
		LIKE '%$keyword%' GROUP BY a.id_art ORDER BY a.id_art DESC ")->result();
	}
	public function get_search_artikel($keyword) {
		return $this->db->query("SELECT * FROM tr_art AS a INNER JOIN
		 tr_artikel AS b ON a.id_artikel = b.id_artikel  WHERE b.judul 
		 LIKE '%$keyword%' GROUP BY b.id_artikel ORDER BY b.id_artikel DESC ")->result();
	}

	// fetch

}
?>
