<?php
	//Headers
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');
	header('Access-Control-Allow-Methods: PUT');
	header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');
	
	include_once '../../config/Database.php';
	include_once '../../model/user.php';
	
	//Instantiate DB & connection
	$database = new Database();
	$db =$database->connect();
	
	//Instantiate post object
	$post = new Post($db);
	
	//Get raw posted database
	$data = json_decode(file_get_contents("php://input"));
	
	//Set Name to update
	$post->Name = $data->Name;
	$post->address = $data->address;
	$post->email = $data->email;
	$post->password = $data->password;
	$post->phone = $data->phone;
	
	//Create post
	if($post->update()){
		echo json_encode(
			array('message'=>'Post Updated')
		);
	}else{
		echo json_encode(
			array('message'=>'Post Not Updated')
		);
	}