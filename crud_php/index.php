<?php
require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Vaga;

//BUSCA
$busca = filter_input(INPUT_GET,'busca', FILTER_SANITIZE_STRING);

//CONDICOES SQL
$condicoes = [
    strlen($busca) ? 'titulo LIKE "%'.$busca.'%"' : null
];

//titulo LIKE "" AND ativo = "S" AND id = '' 

//CLÁUSULA WHERE
$where = implode(' AND ',$condicoes); 
echo $where;
exit;

$vagas = Vaga::getVagas();

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/listagem.php';
include __DIR__ . '/includes/footer.php';

?>
