<?php 

	/**
	 * 
	 */
	class Utama extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function index(){

			$this->load->view('template/header');
			$this->load->view('utama/index');
			$this->load->view('template/footer');
		}

		function pesan(){

			$data['jam'] = $this->db->get('tbl_jam')->result_array();
			$data['bad'] = $this->db->get('tbl_bad')->result_array();
			
			$this->load->view('template/header');
			$this->load->view('utama/pesan', $data);
			$this->load->view('template/footer');
		}

		function add_jam(){

			$data = [
				'jam' => $this->input->post('jam'),
			];

			$this->db->insert('tbl_jam', $data);
			$this->session->set_flashdata('message', 'swal("Yess", "Data jam berhasil di tambah", "success" );');
			redirect('utama/jam');
		}

		function hapus_jam(){

			$id = $this->input->get('id');
			$this->db->where('id', $id);
			$this->db->delete('tbl_jam');
			$this->session->set_flashdata('message', 'swal("Yess", "Data jam berhasil di hapus", "success" );');
			redirect('utama/jam');
		}

		function jam(){
			$data['jam'] = $this->db->get('tbl_jam')->result_array();
			$this->load->view('template/header');
			$this->load->view('utama/jam', $data);
			$this->load->view('template/footer');
		}

		function bad(){
			$data['bad'] = $this->db->get('tbl_bad')->result_array();
			$this->load->view('template/header');
			$this->load->view('utama/bad', $data);
			$this->load->view('template/footer');
		}

		function add_bad(){

			$data = [
				'bad' => $this->input->post('bad'),
			];

			$this->db->insert('tbl_bad', $data);
			$this->session->set_flashdata('message', 'swal("Yess", "Data Bad berhasil di tambah", "success" );');
			redirect('utama/bad');
		}

		function hapus_bad(){

			$id = $this->input->get('id');
			$this->db->where('id', $id);
			$this->db->delete('tbl_bad');
			$this->session->set_flashdata('message', 'swal("Yess", "Data bad berhasil di hapus", "success" );');
			redirect('utama/bad');
		}

		function tambah_pesan(){

			$data['jam'] = $this->db->get('tbl_jam')->result_array();
			$data['bad'] = $this->db->get('tbl_bad')->result_array();
			$data['terapis'] = $this->db->get('tbl_terapis')->result_array();
			$data['outlet'] = $this->db->get('tbl_outlet')->result_array();

			$this->load->view('template/header');
			$this->load->view('utama/tambah_pesan', $data);
			$this->load->view('template/footer');
		}

		function tambah_pesan_customer(){

			$time = $this->input->post('time');
			$date = $this->input->post('date');
			$bad = $this->input->post('bad');

			$this->db->where('date', $date);
			$this->db->where('time', $time);
			$this->db->where('bad', $bad);
			$cek = $this->db->get('tbl_pesan_customer')->row_array();
			if ($cek == true) {
				
				$this->session->set_flashdata('message', 'swal("Opss", "Data sudah tersedia", "warning" );');
				redirect('utama/tambah_pesan');
			}else{
				

				$data = [
					'customer' => $this->input->post('customer'),
					'nohp' => $this->input->post('nohp'),
					'bad' => $this->input->post('bad'),
					'time' => $this->input->post('time'),
					'terapis_pilihan' => $this->input->post('trapis'),
					'status' => $this->input->post('status'),
					'outlet' => $this->input->post('outlet'),
					'date' => $this->input->post('date'),
					'desc' => $this->input->post('desc'),
				];


				$this->db->insert('tbl_pesan_customer', $data);
				$this->session->set_flashdata('message', 'swal("Yess", "Data bad berhasil di tambah", "success" );');
				redirect('utama/pesan');
			}

		}

		function outlet(){

			$data['outlet'] = $this->db->get('tbl_outlet')->result_array();
			$this->load->view('template/header');
			$this->load->view('utama/outlet', $data);
			$this->load->view('template/footer');

		}

		function add_outlet(){
			$data = [
				'outlet' => $this->input->post('outlet'),
			];

			$this->db->insert('tbl_outlet', $data);
			$this->session->set_flashdata('message', 'swal("Yess", "Data outlet berhasil di tambah", "success" );');
			redirect('utama/outlet');

		}

		function hapus_outlet(){

			$id = $this->input->get('id');
			$this->db->where('id', $id);
			$this->db->delete('tbl_outlet');
			$this->session->set_flashdata('message', 'swal("Yess", "Data outlet berhasil di hapus", "success" );');
			redirect('utama/outlet');
		}

		function terapis(){

			$data['terapis'] = $this->db->get('tbl_terapis')->result_array();
			$this->load->view('template/header');
			$this->load->view('utama/terapis', $data);
			$this->load->view('template/footer');

		}

		function add_terapis(){
			$data = [
				'kode_terapis'=> 'terapis-'. rand(0,10000),
				'terapis' => $this->input->post('terapis'),
			];

			$this->db->insert('tbl_terapis', $data);
			$this->session->set_flashdata('message', 'swal("Yess", "Data terapis berhasil di tambah", "success" );');
			redirect('utama/terapis');

		}

		function hapus_terapis(){

			$id = $this->input->get('id');
			$this->db->where('id', $id);
			$this->db->delete('tbl_terapis');
			$this->session->set_flashdata('message', 'swal("Yess", "Data terapis berhasil di hapus", "success" );');
			redirect('utama/terapis');
		}

		function cek_bo(){
			$date =  $this->input->get('date');
			$time =  $this->input->get('time');
			$bad =  $this->input->get('bad');

			$this->db->where('date', $date);
			$this->db->where('time', $time);
			$this->db->where('bad', $bad);
			$cek = $this->db->get('tbl_pesan_customer')->row_array();
			if ($cek == true) {

				echo "gagal";
			}else{
				echo "benar";
			}
		}
	}

?>