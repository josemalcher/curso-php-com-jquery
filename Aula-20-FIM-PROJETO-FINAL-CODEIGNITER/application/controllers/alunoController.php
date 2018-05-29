<?php
defined('BASEPATH') or exit('No direct script access allowed');

class alunoController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $dadosHeader['titulo_login'] = 'PAGINA DO ALUNO';

        $this->load->view('layout/headerViews', $dadosHeader);
        $this->load->view('login/loginViews');
        $this->load->view('layout/footerViews');
    }
}