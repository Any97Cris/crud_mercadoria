<?php
    class Categoria {
        private $id;
        private $decricao;

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }

        public function getDescricao(){
            return $this->descricao;
        }
        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }
    }

    interface CateDAO{
        public function findAll();
    }

?>