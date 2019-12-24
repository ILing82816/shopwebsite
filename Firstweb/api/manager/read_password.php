<?php
	//Headers
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');
	header('Access-Control-Allow-Methods: POST');
	header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');
	
	include_once '../../config/Database.php';
	include_once '../../model/manager.php';
	
	//Instantiate DB & connection
	$database = new Database();
	$db =$database->connect();
	
	//Instantiate post object
	$post = new Post($db);
	
	//Get Name
	$data = json_decode(file_get_contents("php://input"));

	$post->Name = $data->Name;
	$post->password = $data->password;
	
	//Get post
	//$post->read_single();
	$result = $post->read_password();
	
	if($result->fetchColumn()>0){
		echo json_encode(
			array('message'=>'Post Created')
		);
	}else{
		echo json_encode(
			array('message'=>'Post Not Created')
		);
	}