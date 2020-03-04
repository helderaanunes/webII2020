<?php
class Usuario {
    private $id=0;
    private $nome;
    private $email;
    private $tipo;
    private $senha;
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getSenha() {
        return $this->senha;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }


}
