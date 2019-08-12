<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriMasalah extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('KategoriMasalah_model');
	}


	public function index()
	{
		$data['title'] = 'Kategori Masalah';
		$data['KategoriMasalah'] = $this->KategoriMasalah_model->get_all();
		

		$this->load->view('Templates/head', $data);
		$this->load->view('Templates/topbar', $data);
		$this->load->view('Templates/sidebar', $data);
		$this->load->view('BeckEnd/KategoriMasalah/index', $data);
		$this->load->view('Templates/footer', $data);
		$this->load->view('BeckEnd/KategoriMasalah/modal', $data);

	}

	public function add()
	{
		$this->_rules();
		if ($this->form_validation->run() == false) {
			$data['success'] = false;
			foreach ($_POST as $key => $value) {
				$data['messages'][$key]= form_error($key);
			}
			echo json_encode($data);
		}else{
			$data['success'] = true;
	    	
	    	$datainsert['NamaKategori'] = $this->input->post('NamaKategori',TRUE);
	    	$datainsert['JenisPerkara'] = $this->input->post('JenisPerkara',TRUE);
	    	
			$result = $this->KategoriMasalah_model->insert($datainsert);
			$this->session->set_flashdata('message', 'Berhasil ditambah!');
        	echo json_encode($data);
		}
	}

	public function getubah()
	{
		echo json_encode($this->KategoriMasalah_model->get_by_id($_POST['id']));
	}

	public function edit()
	{
		$this->_rules();
		if ($this->form_validation->run() == false) {
			$data['success'] = false;
			foreach ($_POST as $key => $value) {
				$data['messages'][$key]= form_error($key);
			}
			echo json_encode($data);
		}else{
			$data['success'] = true;
	    	
	    	$datainsert['NamaKategori'] = $this->input->post('NamaKategori',TRUE);
	    	$datainsert['JenisPerkara'] = $this->input->post('JenisPerkara',TRUE);
	    	
			$result = $this->KategoriMasalah_model->update($this->input->post('IdKategori'), $datainsert);
			$this->session->set_flashdata('message', 'Berhasil diubah');
        	echo json_encode($data);
		}
	}

	public function delete()
	{
		$data['id'] = $_POST['id'];
		$this->KategoriMasalah_model->delete($_POST['id']);
		$this->session->set_flashdata('message', 'Berhasil dihapus');
		echo json_encode($data);
	}

	public function _rules() 
    {
		$this->form_validation->set_rules('NamaKategori', 'NamaKategori', 'trim|required', ['required' => '*Field Tidak Boleh Kosong'] );
		$this->form_validation->set_rules('JenisPerkara', 'JenisPerkara', 'trim|required', ['required' => '*Field Tidak Boleh Kosong'] );
    	
    	$this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');
    }
}

