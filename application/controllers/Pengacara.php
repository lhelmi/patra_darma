<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengacara extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Pengacara_model');
	}

	public function index()
	{
		$data['title'] = 'Pengacara';
		$data['Pengacara'] = $this->Pengacara_model->get_all();
		
		$this->load->view('Templates/head', $data);
		$this->load->view('Templates/topbar', $data);
		$this->load->view('Templates/sidebar', $data);
		$this->load->view('BeckEnd/Pengacara/index', $data);
		$this->load->view('Templates/footer', $data);
		$this->load->view('BeckEnd/Pengacara/delete', $data);
	}

	public function add()
	{
		$data['title'] = 'Tambah Data Pengacara';
		
		$this->_rules();

		if ($this->form_validation->run() == false) {
			$this->load->view('Templates/head', $data);
			$this->load->view('Templates/topbar', $data);
			$this->load->view('Templates/sidebar', $data);
			$this->load->view('BeckEnd/Pengacara/add', $data);
			$this->load->view('Templates/footer', $data);
		}else{
			$upload_image = $_FILES['Foto']['name'];
			if ($upload_image) {
				$config['upload_path'] = './assets/BackEnd/img/profile/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']     = '2048';

				$this->load->library('upload', $config);
				if ($this->upload->do_upload('Foto')) {
					$new_image = $this->upload->data('file_name');
					$datainsert['Foto'] = $new_image;
				}else{
					echo $this->upload->display_errors();
				}
			}

			$datainsert['NamaPengacara'] = $this->input->post('NamaPengacara',TRUE);
			$datainsert['Jk'] = $this->input->post('Jk',TRUE);
			$datainsert['Email'] = $this->input->post('Email',TRUE);
			$datainsert['NoHp'] = $this->input->post('NoHp',TRUE);
			$datainsert['keterangan'] = $this->input->post('keterangan',TRUE);
			$datainsert['pendidikan'] = $this->input->post('pendidikan',TRUE);
			$datainsert['pengalaman'] = $this->input->post('pengalaman',TRUE);

			$this->Pengacara_model->insert($datainsert);
			$this->session->set_flashdata('message', 'Berhasil ditambah!');
			redirect('Pengacara');
		}
	}

	public function edit($id)
	{
		$data['title'] = 'Ubah Data Pengacara';
		$data['pengacara'] = $this->Pengacara_model->get_by_id($id);
		if ($data['pengacara']) {
			$this->_rules();
			if ($this->form_validation->run() == false) {
				$this->load->view('Templates/head', $data);
				$this->load->view('Templates/topbar', $data);
				$this->load->view('Templates/sidebar', $data);
				$this->load->view('BeckEnd/Pengacara/edit', $data);
				$this->load->view('Templates/footer', $data);
			}else{
				$upload_image = $_FILES['Foto']['name'];
				if ($upload_image) {
					$config['upload_path'] = './assets/BackEnd/img/profile/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size']     = '2048';

					$this->load->library('upload', $config);
					if ($this->upload->do_upload('Foto')) {
						$old_image = $data['pengacara']['Foto'];
						if ($old_image != 'default.jpg') {
						$hapus = 'assets/BackEnd/img/profile/'. $old_image;
						$unlink = unlink(FCPATH .  'assets/BackEnd/img/profile/'. $old_image);
						if ($hapus == $unlink) {
							unlink(FCPATH .  'assets/BackEnd/img/profile/'. $old_image);
						}
					}
					$new_image = $this->upload->data('file_name');
					$datainsert['Foto'] = $new_image;

					}else{
						echo $this->upload->display_errors();
					}
				}

				$datainsert['NamaPengacara'] = $this->input->post('NamaPengacara',TRUE);
				$datainsert['Jk'] = $this->input->post('Jk',TRUE);
				$datainsert['Email'] = $this->input->post('Email',TRUE);
				$datainsert['NoHp'] = $this->input->post('NoHp',TRUE);
				$datainsert['keterangan'] = $this->input->post('keterangan',TRUE);
				$datainsert['pendidikan'] = $this->input->post('pendidikan',TRUE);
				$datainsert['pengalaman'] = $this->input->post('pengalaman',TRUE);

				$this->Pengacara_model->update($this->input->post('IdPengacara',TRUE) ,$datainsert);
				$this->session->set_flashdata('message', 'Berhasil diubah!');
				redirect('Pengacara');
			}	
		}else{
			$this->session->set_flashdata('message', 'Data Tidak Ada');
			redirect('Pengacara');
		}
		
	}

	public function delete()
	{
		$data['id'] = $_POST['id'];
		$data['redirect'] = 'Pengacara';
		$this->Pengacara_model->delete($_POST['id']);
		$this->session->set_flashdata('message', 'Data Berhasil Dihapus');
		echo json_encode($data);
	}

	public function _rules() 
    {
    	$this->form_validation->set_rules('NamaPengacara', 'NamaPengacara', 'trim|required', ['required' => '*Field Tidak Boleh Kosong'] );

    	$this->form_validation->set_rules('Jk', 'Jk', 'trim|required', ['required' => '*Field Tidak Boleh Kosong'] );
    	
    	$this->form_validation->set_rules('Email', 'Email', 'trim|required', ['required' => '*Field Tidak Boleh Kosong'] );
    	
    	$this->form_validation->set_rules('NoHp', 'NoHp', 'trim|required', ['required' => '*Field Tidak Boleh Kosong'] );
    	
    	$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required', ['required' => '*Field Tidak Boleh Kosong'] );
    	
    	$this->form_validation->set_rules('pendidikan', 'pendidikan', 'trim|required', ['required' => '*Field Tidak Boleh Kosong'] );
    	
    	$this->form_validation->set_rules('pengalaman', 'pengalaman', 'trim|required', ['required' => '*Field Tidak Boleh Kosong'] );
    }
}
