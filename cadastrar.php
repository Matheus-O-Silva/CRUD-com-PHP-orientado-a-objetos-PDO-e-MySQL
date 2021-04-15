<?php
require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Cadastrar Vaga');

use \App\Entity\Vaga;
$obVaga = new Vaga;

//Configura horário de Brasília como horário padrão
date_default_timezone_set('America/Sao_Paulo');

//VALIDAÇÃO DO POST
if(isset($_POST['titulo'], $_POST['descricao'], $_POST['ativo'])){
    
    $obVaga->titulo = $_POST['titulo'];
    $obVaga->descricao = $_POST['descricao'];
    $obVaga->ativo = $_POST['ativo'];
    $obVaga->cadastrar();

    header('location:index.php?status=sucess');
    exit;
   // echo "<pre>"; print_r($obVaga); echo "</pre>"; exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/formulario.php';
include __DIR__ . '/includes/footer.php';






?>