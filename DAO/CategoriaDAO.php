<?php

require_once "Model/Categoria.php";

class CategoriaDAO implements CateDAO{
     private $pdo;

    public function __construct(PDO $driver){
        $this->pdo = $driver;
    }

    public function findAll(){
        
        $array = [];

       $sql = $this->pdo->query("SELECT * FROM categorias");
        if ($sql->rowCount() > 0) {
            $data = $sql->fetchAll();

            foreach ($data as $item) {
                $c = new Categoria();
                $c->setId($item['categoria_id']);
                $c->setDescricao($item['categoria_descricao']);

                $array[] = $c;
            }
        }
        return $array;
    }
}

?>