<?php 
class Router 
{
    public function run(){
        /* pega o valor enviado pela url e armazena na variavel $url e usa uma proteçao para caso o valor nao existi */
        $url = $_GET['url'] ?? null;

        switch ($url) {
            /* se a $urk for home. entra na aba home */
            case 'home':
                require './app/controllers/HomeController.php';
                $homeController = new HomeController;
                $homeController->index();
                break;
            /* se a $url for produtos. entra na aba produtos */
            case 'produtos':
                require './app/controllers/ProdutosController.php';
                $produtosController = new ProdutosController;
                $produtosController->index();
                break;
            case 'cadastrar-produto':
                /* se a $url for produtos. entra na aba cadastrarproduto */
                require './app/controllers/CadastrarProdutoController.php';
                $cadastrarProdutoController = new CadastratProdutoController;
                $cadastrarProdutoController->index();
                break;
            /* se a url estiver vazia. entra na aba home */    
            case '':
                require './app/controllers/HomeController.php';
                $homeController = new HomeController;
                $homeController->index();
                break;
        }
    }
}

?>