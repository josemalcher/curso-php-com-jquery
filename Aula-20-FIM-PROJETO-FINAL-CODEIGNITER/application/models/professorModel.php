<?php
defined('BASEPATH') or exit('No direct script access allowed');

class professorModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function salvar(){
        echo "Executando do MODEL - salvar";
    }


}