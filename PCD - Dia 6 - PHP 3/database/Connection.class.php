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
				self::$instance = new PDO("mysql:host=$host;dbname=$dbname", "root", "120792");
				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			return self::$instance;
		}
	}

?>