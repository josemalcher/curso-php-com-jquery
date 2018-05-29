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

    public function loginProfessor($email, $senha){
        $this->db->select('*');
        $this->db->where('professor_email', $email);
        $this->db->where('professor_senha', $senha);
        $this->db->from('tb_professor');
        return $this->db->get()->result();
    }


}