<?php

class libs_classes_Professor extends models_Professor
{
    public function logar($email, $senha)
    {
        $dados_professor =  parent::find('all', array('conditions' => array('professor_email = ? AND professor_senha = ?', $email, $senha)));
        if(count($dados_professor) == 1){
            $_SESSION['professor_logado'] = true;
            $_SESSION['professor_nome'] = $dados_professor[0]->professor_nome;
            $this->redirecionar();
            return true;
        }

    }
    private function redirecionar()
    {
        if(isset($_SESSION['professor_logado'])):
            header('Location: painel/professor/');
        endif;
    }
}