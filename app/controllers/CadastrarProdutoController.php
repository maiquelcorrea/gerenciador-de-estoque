<?php 
require './core/Controller.php';

class CadastratProdutoController extends Controller{
    public function index () {
        /* carrega a pagina home */
        require './app/views/cadastrar-produto.php';
    }
}
?>