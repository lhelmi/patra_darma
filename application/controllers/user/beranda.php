<?php


class Beranda extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates_user/header');
        $this->load->view('templates_user/topbar');
        $this->load->view('user/beranda');
        $this->load->view('templates_user/footer');
    }
}
