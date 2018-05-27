<?php
defined('BASEPATH') or exit('No direct script access allowed');

class loginController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $dadosHeader['titulo_site'] = 'Login de Usuário';

        $this->load->view('layout/headerViews',$dadosHeader);
        $this->load->view('login/loginViews');
        $this->load->view('layout/footerViews');
    }
}