<?php

class Info_hukum extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates_user/header');
        $this->load->view('templates_user/topbar');
        $this->load->view('user/info_hukum');
        $this->load->view('templates_user/footer');
    }
}
