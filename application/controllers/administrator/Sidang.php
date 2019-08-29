<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sidang extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Sidang_model');
		is_logged_in();
	}

	public function index()
	{
		$data['title'] = 'Sidang';
		$data['Sidang'] = $this->Sidang_model->get_all();
		
		$this->load->view('Templates/head', $data);
		$this->load->view('Templates/topbar', $data);
		$this->load->view('Templates/sidebar', $data);
		$this->load->view('BeckEnd/Sidang/index', $data);
		$this->load->view('Templates/footer', $data);
		$this->load->view('BeckEnd/Sidang/delete', $data);
	}

	public function detail($id)
	{
		$data['title'] = 'Detail Sidang';
		$data['row'] = $this->Sidang_model->get_all_detail_row($id);
		$data['Sidang'] = $this->Sidang_model->get_all_detail($id);
		$data['Pengacara'] = $this->Sidang_model->get_pengacara();
		$data['IdSidang'] = $id;
		
		$this->load->view('Templates/head', $data);
		$this->load->view('Templates/topbar', $data);
		$this->load->view('Templates/sidebar', $data);
		$this->load->view('BeckEnd/Sidang/detail', $data);
		$this->load->view('Templates/footer', $data);
		$this->load->view('BeckEnd/Sidang/modal', $data);
		
	}

	public function add_detail()
	{
		$this->_detail_rules();
		if ($this->form_validation->run() == false) {
			$data['success'] = false;
			foreach ($_POST as $key => $value) {
				$data['messages'][$key]= form_error($key);
			}
			echo json_encode($data);
		}else{
			$data['success'] = true;
	    	
	    	$datainsert['tanggal'] = $this->input->post('tanggal',TRUE);
	    	$datainsert['IdPengacara'] = $this->input->post('IdPengacara',TRUE);
	    	$datainsert['tempat'] = $this->input->post('tempat',TRUE);
	    	$datainsert['keterangan'] = $this->input->post('keterangan',TRUE);
	    	$datainsert['IdSidang'] = $this->input->post('IdSidang',TRUE);
	    	
			$result = $this->Sidang_model->insert_detailsidang($datainsert);
			$this->session->set_flashdata('message', 'Berhasil ditambah!');
        	echo json_encode($data);
		}
	}

	public function getubah()
	{
		echo json_encode($this->Sidang_model->get_detail_by_id($_POST['id']));
	}

	public function edit_detail()
	{
		$this->_detail_rules();
		if ($this->form_validation->run() == false) {
			$data['success'] = false;
			foreach ($_POST as $key => $value) {
				$data['messages'][$key]= form_error($key);
			}
			echo json_encode($data);
		}else{
			$data['success'] = true;
	    	
	    	$datainsert['tanggal'] = $this->input->post('tanggal',TRUE);
	    	$datainsert['IdPengacara'] = $this->input->post('IdPengacara',TRUE);
	    	$datainsert['tempat'] = $this->input->post('tempat',TRUE);
	    	$datainsert['keterangan'] = $this->input->post('keterangan',TRUE);
	    	$datainsert['IdSidang'] = $this->input->post('IdSidang',TRUE);
	    	
			$result = $this->Sidang_model->update_detail_sidang($this->input->post('idDSidang',TRUE), $datainsert);
			$this->session->set_flashdata('message', 'Berhasil ditambah!');
        	echo json_encode($data);
		}
	}

	public function deletedetail()
	{
		$data['id'] = $_POST['id'];
		$this->Sidang_model->delete_detailsidang($_POST['id']);
		$this->session->set_flashdata('message', 'Berhasil dihapus');
		echo json_encode($data);
	}

	public function add()
	{
		$data['title'] = 'Tambah Sidang';
		
		$this->_rules();
		$this->form_validation->set_rules('EmailKlien', 'EmailKlien', 'trim|required|valid_email|is_unique[klien.EmailKlien]|min_length[12]|max_length[30]',
    		[
	    		'required' => '*Field Tidak Boleh Kosong',
	    		'is_unique' => 'Email Sudah digunakan',
	    		'valid_email' => 'Alamat Email Tidak Valid',
	    		'min_length' => 'Maaf, nama pengguna Anda harus antara 12 dan 30 karakter panjangnya',
	    		'max_length' => 'Maaf, nama pengguna Anda harus antara 12 dan 30 karakter panjangnya'
    		]
    	);
		if ($this->form_validation->run() == false) {
			$this->load->view('Templates/head', $data);
			$this->load->view('Templates/topbar', $data);
			$this->load->view('Templates/sidebar', $data);
			$this->load->view('BeckEnd/Sidang/add', $data);
			$this->load->view('Templates/footer', $data);
		}else{
			$IdK = $this->Sidang_model->get_kode();

			$dklien['IdKlien'] = $IdK;
			$dklien['NamaKlien'] = $this->input->post('NamaKlien',TRUE);
			$dklien['JkKlien'] = $this->input->post('JkKlien',TRUE);
			$dklien['EmailKlien'] = $this->input->post('EmailKlien',TRUE);
			$dklien['NoTelpKlien'] = $this->input->post('NoTelpKlien',TRUE);
			$dklien['AlamatKlien'] = $this->input->post('AlamatKlien',TRUE);

			$dsidang['IdKlien'] = $IdK;
			$dsidang['JenisPerkara'] = $this->input->post('JenisPerkara',TRUE);
			$dsidang['Lawan'] = $this->input->post('Lawan',TRUE);

			$this->Sidang_model->insert_klien($dklien);
			$this->Sidang_model->insert_sidang($dsidang);
			$this->session->set_flashdata('message', 'Berhasil ditambah!');
			redirect('administrator/Sidang');
			
		}	
	}

	public function edit($id)
	{
		$data['title'] = 'Ubah Sidang';
		$data['klient'] = $this->Sidang_model->get_klient_by_id($id);
		$data['sidang'] = $this->Sidang_model->get_sidang_by_id($id);
		$data['idx'] = $id;
		$row = $this->Sidang_model->get_by_idnonarray($id);

		$this->_rules();
		if ($this->input->post('EmailKlien',TRUE) <> $row->EmailKlien) {
				$this->form_validation->set_rules('EmailKlien', 'EmailKlien', 'trim|required|valid_email|is_unique[klien.EmailKlien]|min_length[12]|max_length[30]',
		    		[
			    		'required' => '*Field Tidak Boleh Kosong',
			    		'is_unique' => 'Email Sudah digunakan',
			    		'valid_email' => 'Alamat Email Tidak Valid',
			    		'min_length' => 'Maaf, nama pengguna Anda harus antara 12 dan 30 karakter panjangnya',
			    		'max_length' => 'Maaf, nama pengguna Anda harus antara 12 dan 30 karakter panjangnya'
		    		]
		    	);
			}
		if ($this->form_validation->run() == false) {
			$this->load->view('Templates/head', $data);
			$this->load->view('Templates/topbar', $data);
			$this->load->view('Templates/sidebar', $data);
			$this->load->view('BeckEnd/Sidang/Edit', $data);
			$this->load->view('Templates/footer', $data);
		}else{
			
			$dklien['NamaKlien'] = $this->input->post('NamaKlien',TRUE);
			$dklien['JkKlien'] = $this->input->post('JkKlien',TRUE);
			$dklien['EmailKlien'] = $this->input->post('EmailKlien',TRUE);
			$dklien['NoTelpKlien'] = $this->input->post('NoTelpKlien',TRUE);
			$dklien['AlamatKlien'] = $this->input->post('AlamatKlien',TRUE);

			$dsidang['JenisPerkara'] = $this->input->post('JenisPerkara',TRUE);
			$dsidang['Lawan'] = $this->input->post('Lawan',TRUE);

			$this->Sidang_model->update_klien($this->input->post('IdKlien',TRUE),  $dklien);
			$this->Sidang_model->update_sidang($this->input->post('IdSidang',TRUE), $dsidang);
			$this->session->set_flashdata('message', 'Berhasil ditambah!');
			redirect('administrator/Sidang');
			
		}
		
	}

	public function delete()
	{
		$data['id'] = $_POST['id'];
		$row = $this->Sidang_model->get_by_idkliennonarray($_POST['id']);
		$IddeleteKlien = $row->IdKlien;
		$data['xx'] = $IddeleteKlien;
		$data['redirect'] = 'Sidang';
		$this->Sidang_model->delete_klien($IddeleteKlien);
		$this->Sidang_model->delete_sidang($_POST['id']);
		$this->session->set_flashdata('message', 'Data Berhasil Dihapus');
		echo json_encode($data);
	}

	public function _detail_rules() 
    {
    	$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required', ['required' => '*Field Tidak Boleh Kosong'] );
		
		$this->form_validation->set_rules('IdPengacara', 'IdPengacara', 'trim|required', ['required' => '*Field Tidak Boleh Kosong'] );
    	
    	$this->form_validation->set_rules('tempat', 'tempat', 'trim|required', ['required' => '*Field Tidak Boleh Kosong'] );
    	
    	$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required', ['required' => '*Field Tidak Boleh Kosong'] );
    	$this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');
    }

	public function _rules() 
    {
    	$this->form_validation->set_rules('NamaKlien', 'NamaKlien', 'trim|required', ['required' => '*Field Tidak Boleh Kosong'] );
		
		$this->form_validation->set_rules('JkKlien', 'JkKlien', 'trim|required', ['required' => '*Field Tidak Boleh Kosong'] );
    	
    	$this->form_validation->set_rules('NoTelpKlien', 'NoTelpKlien', 'trim|required', ['required' => '*Field Tidak Boleh Kosong'] );
    	
    	$this->form_validation->set_rules('AlamatKlien', 'AlamatKlien', 'trim|required', ['required' => '*Field Tidak Boleh Kosong'] );


    	$this->form_validation->set_rules('JenisPerkara', 'JenisPerkara', 'trim|required', ['required' => '*Field Tidak Boleh Kosong'] );
    	
    	$this->form_validation->set_rules('Lawan', 'Lawan', 'trim|required', ['required' => '*Field Tidak Boleh Kosong'] );
    	$this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');
    }
}