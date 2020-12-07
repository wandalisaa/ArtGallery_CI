<?php

class M_user extends CI_Model{

	public function check_user($username, $pwd){
		$query = $this->db->query("SELECT * from m_user WHERE username = '$username' AND password = '$pwd'");
		if ($query->num_rows() > 0){
		  return true;
		} else {
		  return false;
		}
	   }
	   public function get_user() {
		 return $this->db->query("SELECT * from m_user")->result();
	   }
	 
	   public function get_user_spec($username) {
		 return $this->db->query("SELECT * from m_user where username = '$username'")->result();
	   }
	 
	   public function create($table,$data) {
		 return $this->db->insert($table,$data);
	   }

		public function update($id,$data) {
			$this->db->where('id_user',$id);
			return $this->db->update('m_user',$data);
		}
		


}
?>
