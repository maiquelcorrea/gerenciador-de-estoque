<?php
/* carrega a classe controller */
require './core/Controller.php';
/* carrega a classe produto */
require './app/models/Produto.php';

class ProdutosController extends Controller
{
    public function index(){
        /* estancia a classe Produto */
        $produtoModel = new Produto;
        /* armazena a funcao listar */
        $produtos = $produtoModel->listar();
        /* carrega a aba produtos */
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $nome = $_POST['nome'];
            $categoria = $_POST['categoria'];
            $preco = $_POST['preco'];
            $estoque = $_POST['estoque'];
            $descricao = $_POST['descricao'];

            echo $nome;
        }
        require './app/views/produtos.php';
    }
}
