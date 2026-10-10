<?php 
/* configura os requisitos do banco */
$host = 'localhost';
$user = 'root';
$password = '';
$dataBase = 'stockmanager';

try{
    /* tenta entrar no banco */
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dataBase;charset=utf8",
        $user,
        $password
    );
    /* configura o PDO para lancar um erro sempre que ocorrer um problema em uma operaçao ou comando do sql */
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    /* printa a mensagem de erro */
    die("Erro na conexão: " . $e->getMessage());
}

?>