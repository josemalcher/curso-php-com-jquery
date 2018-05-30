<?php
defined('BASEPATH') or exit('No direct script access allowed');

class loginController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->logout(); // limpar dados de sessão
    }

    public function index()
    {


        $dadosHeader['titulo_login'] = 'Entrar no Sistema';

        $this->load->view('layout/headerViews', $dadosHeader);
        $this->load->view('login/loginViews');
        $this->load->view('layout/footerViews');
        $this->output->enable_profiler(true); //  <<<<<------  DEBUG  ****----
    }


    public function login()
    {
        $email = filter_var($this->input->post('email'), FILTER_VALIDATE_EMAIL);
        $senha = filter_var($this->input->post('senha'), FILTER_SANITIZE_STRING);
        $tipo = $this->input->post('tipo');
        $error = '';
        if ($email) {
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        } else {
            $error = "E-Mail inválido";
            echo 'email';
        }
        if (empty($error)) {
            switch ($tipo) {
                case 'aluno':
                    $this->load->model('alunoModel');
                    $logado = $this->alunoModel->loginAluno($email, $senha);
                    if ($logado) {
                        $dadosSessao['tipo'] = 'aluno';
                        $dadosSessao['id'] = $logado[0]->id;
                        $dadosSessao['nome'] = $logado[0]->aluno_nome;
                        $dadosSessao['email'] = $logado[0]->aluno_email;
                        $this->session->set_userdata($dadosSessao);
                        echo 'alunoController/index';
                        //redirect(base_url('alunoController/index'));
                    } else {
                        return false;
                    }

                    break;
                case 'professor':
                    $this->load->model('professorModel');
                    $logado = $this->professorModel->loginProfessor($email, $senha);
                    if ($logado) {
                        $dadosSessao['tipo'] = 'professor';
                        $dadosSessao['id'] = $logado[0]->id;
                        $dadosSessao['nome'] = $logado[0]->professor_nome;
                        $dadosSessao['email'] = $logado[0]->professor_email;
                        $this->session->set_userdata($dadosSessao);
                        echo 'professorController/index';
                        //redirect(base_url('alunoController/index'));
                    } else {
                        return false;
                    }
                    break;
                default:
                    return false;
                    break;
            }
        }


    }/* fim Login */



    public function logout()
    {
        //destroi os dados da sessão
        $this->session->unset_userdata('tipo');
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('nome');
        $this->session->unset_userdata('email');

        //set_msg('<p>VOCE SAIU DO SISTEMA</p>');
        //redirect('setup/login','refresh');
    }

}