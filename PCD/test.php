<?php 

require_once("Model/Connection.class.php");

$login = "user";
$senha = "123456";

$conn = Connection::getInstance();
$query = "SELECT * FROM usuarios WHERE login =  \"$login\" AND senha = \"$senha\"";
$sql = $conn->query($query);
$row = $sql->fetch(PDO::FETCH_ASSOC);
if($row){
	print_r($row);
}

?>