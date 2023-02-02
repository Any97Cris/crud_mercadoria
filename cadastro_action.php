<?php

require_once "database.php";
require_once "DAO/ProdutoDAO.php";

$Produto = new ProdutoDAO($pdo);

$descricao = filter_input(INPUT_POST, 'descricao');
$preco = filter_input(INPUT_POST, 'preco');
$categoria = filter_input(INPUT_POST, 'opcao');


if($descricao && $preco){
    $novaProduto = new Produto();
    $novaProduto->setDescricao($descricao);
    $novaProduto->setPreco($preco);
    $novaProduto->setIdCategoria($categoria);
    
    $Produto->add($novaProduto);
    switch($categoria){
        case 1:
            $sql = $pdo->prepare("INSERT INTO Produto.categorias(id_categorias,descricao) VALUES (default,'livro')");
            $sql->execute();
            break;
        case 2:
            $sql = $pdo->prepare("INSERT INTO Produto.categorias(id_categorias,descricao) VALUES (default,'cd')");
            $sql->execute();
            break;
        case 3:
            $sql = $pdo->prepare("INSERT INTO Produto.categorias(id_categorias,descricao) VALUES (default,'dvd')");
            $sql->execute();
            break;
        case 4:
            $sql = $pdo->prepare("INSERT INTO Produto.categorias(id_categorias,descricao) VALUES (default,'revista')");
            $sql->execute();
            break;
         default:
            header("Location: cadastrar.php");
            exit;
    }    

    header("Location: index.php");
}else{
    header("Location: cadastrar.php");
    exit;
}



?>