<?php
require __DIR__ . '/vendor/autoload.php';

use App\Session\Login;

//OBRIGA O USUÁRIO A ESTAR LOGADO
Login::requireLogout();



include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/formulario_login.php';
include __DIR__ . '/includes/footer.php';


?>