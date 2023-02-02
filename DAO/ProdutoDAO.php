<?php

require_once "Model/Produto.php";

class ProdutoDAO implements ProdDAO{
    private $pdo;

    public function __construct(PDO $driver){
        $this->pdo = $driver;
    }

    public function add(Produto $m){
        $sql = $this->pdo->prepare("INSERT INTO produtos(produto_descricao,produto_preco,produto_categoria_id) VALUE (:descricao,:preco,:categoria)");
        $sql->bindValue(":descricao", $m->getDescricao());
        $sql->bindValue(":preco", $m->getPreco());
        $sql->bindValue(":categoria", $m->getIdCategoria());
        $sql->execute();

        $m->setId($this->pdo->lastInsertId());
        return $m;

    }
    public function listar(){

    }
    public function encontrarId($ide){

    }
    public function update(Produto $m){

    }
    public function deletar($ide){

    }

}

?>