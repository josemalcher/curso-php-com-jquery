<?php
defined('BASEPATH') or exit('No direct script access allowed');

class professorController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('professor')) {
            redirect(base_url('loginController/index'));
        }
    }

    public function index()
    {
        if (!$this->session->userdata('professor')) {
            redirect(base_url('loginController/index'));
        }

        $dadosHeader['titulo_login'] = 'Painel do Professor';

        $this->load->view('professor/layout/headerViews', $dadosHeader);
        $this->load->view('professor/index');
        $this->load->view('professor/layout/footerViews');
    }
}