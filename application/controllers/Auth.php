<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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
	public function index()
	{
		$data = array(
			"title" => "Login / Register"
		  );
		$this->load->view('header', $data);
		$this->load->view('login');
		$this->load->view('footer');
	}
	
	public function do_login() {
		$username = $this->input->post('username');
		$pwd = $this->input->post('password');
	
		$check = $this->m_user->check_user($username, $pwd);
		if($check == true) {
				$data['user'] = $this->m_user->get_user();
				$login = $this->m_user->get_user_spec($username);
				if($login){
				foreach ($login as $key) {
					$dataUser = array(
						'id' => $key->id,
						'username' => $key->username,
						'email' => $key->email,
						'password' => $key->password,
						'level' => $key->level
					);
				}
			}
			$this->session->set_userdata($dataUser);
			$this->session->set_flashdata('success', 'Anda Berhasil Login ...');
		  	redirect(base_url());
		} else {
			$this->session->set_flashdata('danger', 'Anda gagal Login ...');
			redirect(base_url());
		}
	  }
	
		public function do_register() {
			$username = $this->input->post("username");
			$data = array(
		  'username' => $username,
		  'email' => $this->input->post('email'),
		  'password' => $this->input->post('password'),
		  'level' => 0 ,
		);
		
		$this->m_user->create('m_user',$data);
		$this->session->set_flashdata('success', 'Anda Berhasil Register ,Silahkan login ...');
		  redirect(base_url());
		}
	
		public function logout() {
			$this->session->sess_destroy();
			$this->session->set_flashdata('logout', 'logged_out');
			redirect(base_url(),'refresh');
		}
}
