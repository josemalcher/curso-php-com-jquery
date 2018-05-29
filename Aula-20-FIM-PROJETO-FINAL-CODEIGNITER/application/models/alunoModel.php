<?php
defined('BASEPATH') or exit('No direct script access allowed');

class alunoModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function salvar(){
        echo "Executando do MODEL - salvar";
    }

    public function loginAluno($email, $senha){
        sleep(2);
        $this->db->select('*');
        $this->db->where('aluno_email', $email);
        $this->db->where('aluno_senha', $senha);
        $this->db->from('tb_aluno');
        return $this->db->get()->result();
    }


}