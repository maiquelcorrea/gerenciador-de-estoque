<?php 
require './core/Model.php';

class Produto extends Model{
    public function listar(){
        /* carrega o banco */
        require_once './config/DataBase.php';
        /* seleciona todos os items da tabela produtos */
        $sql = $pdo->prepare("
            SELECT * FROM produtos
        ");
        /* executa a tabela produtos */
        $sql->execute();
        /* retorna todos os resuldados da tabela em um array */
        return $sql->fetchAll();
    }

    public function cadastrar($nome, $categoria, $preco, $estoque, $descricao){
         /* carrega o banco */
        require_once './config/DataBase.php';
        
        /* prepara as informaçoes da tabela */
        $sql = $pdo->prepare("
            INSERT INTO produtos (nome, categoria, preco, estoque, descricao)
            VALUES (':nome', ':categoria', ':preco', ':estoque',':descricao')
        ");

        /* executa passando as infos pro array */
        $sql->execute([
            ':nome' => $nome,
            ':categoria' => $categoria,
            ':preco' => $preco,
            ':estoque' => $estoque,
            ':descricao' => $descricao
        ]);
    }
}
?>