<?php

    class Conexao{

        private $host = "localhost";
        private $usuario = "root";
        private $senha = "";
        private $banco = "PRotina";

        public $conexao;

        public function conectar(){
            $this->conexao = new mysqli($this->host,$this->usuario,$this->senha, $this->banco);
            if($this->conexao->connect_error){
                die("erro ao conectar".$this->conexao->connect_error);
            }
        }

    }



?>