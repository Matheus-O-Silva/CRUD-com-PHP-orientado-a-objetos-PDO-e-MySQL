<?php

namespace App\Session;

class Login 
{

    public static function getUsuarioLogado()
    {
       //INICIA A SESSÃO
       self::init();
       
       return self::isLogged() ? $_SESSION['usuario'] : null;
    }

    /**
     * Método responsável por iniciar a sessão
     */
    private static function init()
    {
        if (session_status() !== PHP_SESSION_ACTIVE)
        {
            //INICIA A SESSÃO
            session_start();
        }
    }

    /**
     * Método responsável por logar o usuário
     * @param Usuario $obUsuario
     * @return
     */
    public static function Login($obUsuario)
    {
        //INICIA A SESSÃO
        self::init();

        $_SESSION['usuario'] = [
            'id' => $obUsuario->id,
            'nome' => $obUsuario->nome,
            'email' => $obUsuario->email,
        ];

        //REDIRECIONA USUARIO PARA INDEX
        header('location: index.php');
        exit;
    }

    /**
     * Método responsável por deslogar a sessão do usuário
     */
    public static function logout()
    {
        //INICIA A SESSÃO
        self::init();

        //REMOVE USUARIO PARA LOGIN
        unset($_SESSION['usuario']);

        //REDIRECIONA USUÁRIO PARA LOGIN
        header('location:login.php');
        exit;
    }
     
    /**
     * Método responsável por verificar se usuário está logado
     * @return boolean
     */
    public static function isLogged()
    {
        //INICIA A SESSÃO
        self::init();

        return isset($_SESSION['usuario']['id']);
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