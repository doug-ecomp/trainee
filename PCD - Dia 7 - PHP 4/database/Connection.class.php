<?php
		
	class Connection {

		private static $instance;
		private $host = "localhost";
		private $dbname = "pcd_db";

		private $usernameDb = "root";
		private $passwd = "120792";


		private function __construct(){ // tem que ser privado porque singleton so tem uma instancia e é auto-criada

		}

		public static function getInstance(){
			if(!isset(self::$instance)){
				try{
					self::$instance = new PDO("mysql:host=localhost;dbname=pcd_db", "root", "120792", array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8"));
				} catch (PDOException $e){
					var_dump($e);
				}
			}
			return self::$instance;
		}
	}

?>