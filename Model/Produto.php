<?php

class Produto{
    private $id;
    private $descricao;
    //private $categoria;
    private $preco;
    private $id_categoria;

    public function getId(){
        return $this->id;
    } 
    public function setId($ide){
        $this->id = $ide;
    }    
     
    public function getDescricao(){
        return $this->descricao;
    } 
    public function setDescricao($descrption){
        $this->descricao = $descrption;
    }

    // public function getCategoria(){
    //     return $this->categoria;
    // } 
    // public function setCategoria($catego){
    //     $this->categoria = $catego;
    // }

    public function getPreco(){
        return $this->preco;
    } 
    public function setPreco($price){
        $this->preco = $price;
    }

    public function getIdCategoria(){
        return $this->id_categoria;
    } 
    public function setIdCategoria($idCat){
        $this->id_categoria = $idCat;
    }

}

interface ProdDAO{
    public function add(Produto $m);
    public function listar();
    public function encontrarId($ide);
    public function update(Produto $m);
    public function deletar($ide);
}

?>