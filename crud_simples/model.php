<?php
    class User{
        private $nome = null;
        private $email = null;
        private $telefone = null;
        private $objetivo = null;
        private $descricao = null;
        
        public function __get($attr)
        {
            return $this->$attr;
        }
        public function __set($attr, $value)
        {
            $this -> $attr = $value ;
            return $this;
        }

    }