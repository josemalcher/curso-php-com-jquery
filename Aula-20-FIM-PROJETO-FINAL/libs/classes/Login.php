<?php

class libs_classes_Login{
    public function logar($email, $senha,$tipo)
    {
        switch ($tipo) {
            case 'professor':
                $logar = new libs_classes_Professor;
                break;
            case 'aluno':
                $logar = new libs_classes_Aluno;
                break;
        }
        return $logar->logar($email, $senha);
    }
}