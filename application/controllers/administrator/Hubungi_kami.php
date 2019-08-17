<?php

class Hubungi_kami extends CI_Controller
{
    public function index()
    {
        $data['hubungi'] = $this->hubungi_model->tampil_data('hubungi')->result();

        $this->load->view('Templates/head');
        $this->load->view('Templates/topbar');
        $this->load->view('Templates/sidebar');
        $this->load->view('BeckEnd/Pesan/hubungi', $data);
        $this->load->view('Templates/footer');
    }

    public function kirim_email($id)
    {
        $where = array('id_hubungi' => $id);

        $data['hubungi'] = $this->hubungi_model->kirim_data($where, 'hubungi')->result();

        $this->load->view('Templates/head');
        $this->load->view('Templates/topbar');
        $this->load->view('Templates/sidebar');
        $this->load->view('BeckEnd/Pesan/form_kirim_email', $data);
        $this->load->view('Templates/footer');
    }

    public function kirim_email_aksi()
    {

        $to_email = $this->input->post('email');
        $subject = $this->input->post('subject');
        $message = $this->input->post('pesan');

        $config = [
            'mailtype' => 'html',
            'charset' => 'utf8',
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'alirafmc@gmail.com',
            'smtp_pass' => 'akunpalsu11',
            'smtp_port' => 465,
            'crlf' => "\r\n",
            'newline' => "\r\n"
        ];

        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->from("alirafmc@gmail.com", 'noobmaster');

        $this->email->to($to_email);

        $this->email->subject($subject);

        $this->email->message($message);

        if ($this->email->send()) {

            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Pesan Terkirim!
          </div>');
            redirect('administrator/hubungi_kami');
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }
}
