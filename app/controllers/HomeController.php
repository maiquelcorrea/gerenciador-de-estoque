<?php 
/* chama a classe Controller */
require './core/Controller.php';

class HomeController extends Controller {
    public function index () {
        /* carrega a pagina home */
        require './app/views/home.php';
    }
}
?>