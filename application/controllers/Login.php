<?php 
	/**
	 * e
	 */
	class Login extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();

		}

		function index(){

			$this->load->view('login/login');
		}

		function act_login(){


			$username = $this->input->post('username');
			$pass = $this->input->post('pass');

			$this->db->where('username', $username);
			$cek = $this->db->get('tbl_user')->row_array();
			if ($cek == true) { 
				if (password_verify($pass, $cek['pass'])) {

					$data = [
						'id_user' => $cek['id'], 
						'username' => $cek['username'],
						'role' => $cek['role'],
					];

					$this->session->set_userdata($data);
					redirect('utama/');
				}else{

					$this->session->set_flashdata('message', 'swal("Opps!", "password anda salah", "warning" );');
					redirect('login/');
				}

			}else{

				$this->session->set_flashdata('message', 'swal("Opps!", "Akun anda tidak terdaftar,cek verifikasi akun anda", "error" );');
				redirect('login/');
			}	

		}

		

		

		function logout(){

			$this->session->unset_userdata('id_user');
			$this->session->unset_userdata('username');
			$this->session->unset_userdata('role');
			redirect('login/');
		}
	}

?>