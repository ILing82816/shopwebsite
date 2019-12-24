<?php
	class Database{
		//DB Params
		private $server = 'DESKTOP-V2SDC4F\SQLEXPRESS';
		private $dbname = 'shopweb';
		private $username = 'sa';
		private $password = '82816';
		private $conn;

		//DB Connect
		public function connect(){
			$this->conn = null;
			
			try{
				$this->conn = new PDO('sqlsrv:server=' . $this->server . ';Database=' . $this->dbname, $this->username, $this->password);
				//$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}catch(PDOException $e){
				echo 'Connection Error: '. $e->getMessage();
			}
			
			return $this->conn;
		}
	}