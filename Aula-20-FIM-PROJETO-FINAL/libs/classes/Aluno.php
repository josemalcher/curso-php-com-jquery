<?php

class libs_classes_Aluno extends models_Aluno
{
    public function listarAlunos()
    {
        return parent::find('all');
    }

    public function logar($email, $senha)
    {
        //return parent::find('all', array('conditions' => array('aluno_email = ? AND aluno_senha = ?', $email, $senha)));
        $dados_aluno = parent::find('all', array('conditions' => array('aluno_email = ? AND aluno_senha = ?', $email, $senha)));
        //return count($dados_aluno);
        if (count($dados_aluno) == '1') {
            $_SESSION['aluno_logado'] = true;
            $_SESSION['aluno_nome'] = $dados_aluno[0]->aluno_nome;
            $this->redirecionar();
            return true;
        }
    }

    private function redirecionar()
    {
        if (isset($_SESSION['aluno_logado'])):
            header('Location: painel/aluno/');
            return true;
        endif;
    }


}