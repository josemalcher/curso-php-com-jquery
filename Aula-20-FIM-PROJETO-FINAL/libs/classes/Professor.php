<?php
/**
 * Created by PhpStorm.
 * User: josemalcher
 * Date: 23/05/2018
 * Time: 23:43
 */

class libs_classes_Professor extends models_Professor
{
    public function logar($email, $senha)
    {
        return parent::find('all', array('conditions' => array('professor_email = ? AND professor_senha = ?', $email, $senha)));

    }
}