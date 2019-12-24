<?php
	class Post{
		//DB stuff
		private $conn;
		//private $table='dbo.member';
		private $table1='dbo.manager';
		
		//Post Properties
		public $Name;
		public $address;
		public $email;
		public $password;
		public $phone;
		
		//Constructor with DB
		public function __construct($db){
			$this->conn = $db;
		}
		
		/*//Get Posts
		public function read(){
			//create query
			$query = 'SELECT * FROM ' . $this->table . ' ';
			
			//Prepare Statement
			$stmt = $this->conn->prepare($query);
		
			//execute query
			$stmt->execute();
		
			return $stmt;
		}*/
		
		
		//Get password Post
		public function read_password(){
			//create query
			$query = 'SELECT COUNT(*) 
					FROM ' . $this->table1 . ' 
					WHERE Name=:Name 
					AND password=:password';
			
			//Prepare Statement
			$stmt = $this->conn->prepare($query);
			
			//Clean data
			$this->Name = htmlspecialchars(strip_tags($this->Name));
			$this->password = htmlspecialchars(strip_tags($this->password));
			
			//Bind ID
			$stmt->bindParam(':Name', $this->Name);
			$stmt->bindParam(':password', $this->password);
		
			//execute query
			if($stmt->execute()){
				return $stmt;
			}else{
				//print error if something goes wrong
				printf("Error: %s.\n", $stmt->error);
			
				return false;
			}
		}
		
		/*//Create Post
		public function create(){
			$query='INSERT INTO ' . $this->table . '
				(Name, address, email, password, phone) VALUES (:Name,:address,:email,:password,:phone)';
			
			//prepare statement
			$stmt = $this->conn->prepare($query);
			
			//Clean data
			$this->Name = htmlspecialchars(strip_tags($this->Name));
			$this->address = htmlspecialchars(strip_tags($this->address));
			$this->email = htmlspecialchars(strip_tags($this->email));
			$this->password = htmlspecialchars(strip_tags($this->password));
			$this->phone = htmlspecialchars(strip_tags($this->phone));
			
			//Bind data
			$stmt->bindParam(':Name', $this->Name);
			$stmt->bindParam(':address', $this->address);
			$stmt->bindParam(':email', $this->email);
			$stmt->bindParam(':password', $this->password);
			$stmt->bindParam(':phone', $this->phone);
			
			//Execute qurey
			if($stmt->execute()){
				return true;
			}else{
				//print error if something goes wrong
				printf("Error: %s.\n", $stmt->error);
			
				return false;
			}
			
		}
		
		//Update Post
		public function update(){
			$query='UPDATE ' . $this->table . '
				SET address=:address, 
					email=:email, 
					password=:password, 
					phone=:phone
				WHERE Name=:Name';
			
			//prepare statement
			$stmt = $this->conn->prepare($query);
			
			//Clean data
			$this->Name = htmlspecialchars(strip_tags($this->Name));
			$this->address = htmlspecialchars(strip_tags($this->address));
			$this->email = htmlspecialchars(strip_tags($this->email));
			$this->password = htmlspecialchars(strip_tags($this->password));
			$this->phone = htmlspecialchars(strip_tags($this->phone));
			
			//Bind data
			$stmt->bindParam(':Name', $this->Name);
			$stmt->bindParam(':address', $this->address);
			$stmt->bindParam(':email', $this->email);
			$stmt->bindParam(':password', $this->password);
			$stmt->bindParam(':phone', $this->phone);
			
			//Execute qurey
			if($stmt->execute()){
				return true;
			}else{
				//print error if something goes wrong
				printf("Error: %s.\n", $stmt->error);
			
				return false;
			}
			
		}
		
		//Delete Post
		public function delete(){
			//Create query
			$query = 'DELETE FROM ' . $this->table . ' WHERE Name = :Name';
			
			//prepare statement
			$stmt = $this->conn->prepare($query);
			
			//Clean data
			$this->Name = htmlspecialchars(strip_tags($this->Name));
			
			//Bind data
			$stmt->bindParam(':Name', $this->Name);
			
			//Execute qurey
			if($stmt->execute()){
				return true;
			}else{
				//print error if something goes wrong
				printf("Error: %s.\n", $stmt->error);
			
				return false;
			}
		}*/
		
	}