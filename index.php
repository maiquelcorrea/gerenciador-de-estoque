<?php 
/* carrega o arquivo onde esta a classe */
require_once './core/Router.php';

/* criando um objeto da classe */
$router = new Router;

/* chamando o metodo da classe */
$router->run();

?>