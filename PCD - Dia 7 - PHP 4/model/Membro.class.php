<?php

include '../model/Advertencia.class.php';
include '../database/Connection.class.php';

class Membro {
    
    private $id = null;
    private $nome = null;    
    private $login = null;
    private $senha = null;
    private $foto = null;
    private $cargo = null;
    private $privilegio = null;
    private $historico = null;

    function __construct($id, $nome, $login, $senha, $cargo, $privilegio, $historico) {
        $this->id = $id;
        $this->nome = $nome;
        $this->login = $login;
        $this->senha = $senha;
        $this->cargo = $cargo;
        $this->privilegio = $privilegio;
        $this->historico = $historico;

    }

    function getId() {
        return $this->id;
    }

    function setId ($id) {
        $this->id = $id;

    }

    function getNome() {
        return $this->nome;
    }

    function setNome ($nome) {

    }

    function getLogin() {
        return $this->login;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function getSenha() {
        return $this->senha;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function getFoto() {
        return $this->foto;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function getCargo() {
        return $this->cargo;
    }

    function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    function getPrivilegio() {
        return $this->privilegio;
    }

    function setPrivilegio($privilegio) {
        $this->privilegio = $privilegio;
    }

    function getHistorico() {
        return $this->historico;
    }

    function setHistorico($historico) {
        $this->historico = $historico;
    }



    function auth() {
        /*
        $this->login = "user1";
        $this->senha = "123456";
        if($this->login == $login && $this->senha == $senha){
            return true;
        } else
            return false;
            */

        $conn = Connection::getInstance();
        $query = "SELECT * FROM usuarios WHERE login = \"$this->login\" AND senha = \"$this->senha\"";
        $sql = $conn->query($query);
        $row = $sql->fetch(PDO::FETCH_ASSOC);
        return $row;

    }
}

?>