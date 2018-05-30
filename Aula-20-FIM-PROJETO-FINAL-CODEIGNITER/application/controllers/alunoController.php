<?php
defined('BASEPATH') or exit('No direct script access allowed');

class alunoController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('tipo') == 'aluno') {
            redirect(base_url('loginController/index'));
        }

    }

    public function index()
    {
        if (!$this->session->userdata('tipo') == 'aluno') {
            redirect(base_url('loginController/index'));
        }

        $dadosHeader['titulo_login'] = 'Painel do Aluno';
        $dadosHeader['logo_escola'] = 'LOGO ESCOLA';
        $dadosHeader['nome_aluno'] = "Aluno: " . $this->getPrimeiroNome($this->session->userdata('nome'));

        $this->load->view('aluno/layout/headerViews', $dadosHeader);
        $this->load->view('aluno/index');
        $this->load->view('aluno/layout/footerViews');
        $this->output->enable_profiler(true); //  <<<<<------  DEBUG  ****----
    }


    /* ========= Funções ========= */
    public function getPrimeiroNome($nomeCompleto)
    {
        $primeiroNome = explode(" ", $nomeCompleto);
        return $primeiroNome[0];
    }
}