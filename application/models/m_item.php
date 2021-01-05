<?php

class M_item extends CI_Model{

	// =============================================== SELECT =======================================================
	//mengambil nama-nama gerakan jenis dan jumlah karya seni terkait
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

	// ARTIKEL
	public function get_artikel($id) {
		return $this->db->query("SELECT * FROM artikel WHERE id_artikel = $id")->result();
	}
	// karya seni dalam arikel
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

// ===================================== artikel terkait =====================================
public function get_artikel_terkait($table,$kolom,$id) {
	return $this->db->query("SELECT a.id_artikel,a.judul,b.id_galeri,b.nama_galeri,c.gambar FROM tr_artikel AS a JOIN $table AS t ON a.$kolom = t.$kolom RIGHT JOIN m_galeri AS b ON a.id_galeri=b.id_galeri RIGHT JOIN tr_art AS c ON a.id_artikel=c.id_artikel WHERE a.$kolom = $id GROUP BY a.id_artikel")->result();
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

	public function delete_data($table,$kolom,$id) {
		$this->db->where($kolom,$id);
		return $this->db->delete($table);
	}

	// ================================ FAV ===============================
	public function input_favorit($data) {
		return $this->db->insert('tr_fav',$data);
	}
	public function delete_favorit($id,$id_user) {
		$this->db->where('id_art',$id);
		$this->db->where('id_user',$id_user);
		return $this->db->delete('tr_fav');
	}
	public function favorit($id_user){
		return $this->db->query("SELECT b.judul_art,b.id_art,b.gambar FROM `tr_fav` AS a JOIN tr_art as b ON a.id_art = b.id_art WHERE a.id_user = $id_user ORDER BY a.id_fav DESC")->result();
	}
	// ============================== Search ==========================
	public function get_search($table,$kolom_id,$keyword,$kolom) {
	return $this->db->query("SELECT * FROM $table AS a LEFT JOIN tr_artikel AS b ON a.$kolom_id = b.$kolom_id RIGHT JOIN tr_art AS c ON b.id_artikel = c.id_artikel WHERE a.$kolom LIKE '%$keyword%' GROUP BY a.$kolom_id ORDER BY a.$kolom_id DESC ")->result();
	}
	public function get_search_art($table,$kolom_id,$keyword,$kolom) {
		return $this->db->query("SELECT * FROM $table AS a WHERE a.$kolom LIKE '%$keyword%' GROUP BY a.$kolom_id ORDER BY a.$kolom_id DESC ")->result();
	}
	public function get_search_artikel($table,$kolom_id,$keyword,$kolom) {
		return $this->db->query("SELECT * FROM tr_art AS a LEFT JOIN tr_artikel AS b ON a.$kolom_id = b.$kolom_id  WHERE b.$kolom LIKE '%$keyword%' GROUP BY b.$kolom_id ORDER BY b.$kolom_id DESC ")->result();
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
		return $this->db->query("SELECT * FROM artikel ")->result();
	}

	public function get_all_art($id) {
		return $this->db->query("SELECT * FROM art WHERE id_artikel = $id")->result();
	}
	// like
	public function check_like($id_art,$id_user){
		return $this->db->query("SELECT EXISTS(SELECT * from tr_fav WHERE id_user = $id_user AND id_art = $id_art) as a")->result();
	}
	// fetch

}
?>
