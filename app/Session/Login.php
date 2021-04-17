<?php

namespace App\Session;

class Login 
{
    /**
     * Método responsável por verificar se usuário está logado
     * @return boolean
     */
    public static function isLogged()
    {
        return false;
    }

    /**
     * Método responsável por obrigar o usuário a estar logado para acessar
     */
    public static function requireLogin()
    {
        if(!self::isLogged())
        {
            header('location:login.php');
            exit;
        }

    }
    
    /**
     * Método responsável por obrigar o usuário a estar logado para acessar
     */
    public static function requireLogout()
    {
        if(self::isLogged())
        {
            header('location:index.php');
            exit;
        }    
    }
}



?>