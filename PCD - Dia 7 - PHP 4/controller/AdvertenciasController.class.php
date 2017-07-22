<?php

    include '../database/Connection.class.php';

    class AdvertenciasController {

        private $conn = null;

        public function __construct(){
            $this->conn = Connection::getInstance();
            
        }

        public function getAdvertenciasDB(){
            $advs = [];
            $query = "SELECT * FROM advertencias;";
            $sql = $this->conn->query($query);
            while( $row = $sql->fetch(PDO::FETCH_ASSOC)){
                array_push($advs, $row);
            }

            return advs;
        }


    }

?>