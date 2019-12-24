<?php
	//Headers
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');
	
	include_once '../../config/Database.php';
	include_once '../../model/user.php';
	
	//Instantiate DB & connection
	$database = new Database();
	$db =$database->connect();
	
	//Instantiate post object
	$post = new Post($db);
	//post query
	$result = $post->read();
	//$num = $result->fetchColumn();

	//Check if any posts
	//Post array
	$posts_arr = array();
	$posts_arr['data']=array();
		
	while($row=$result->fetch(PDO::FETCH_ASSOC)){
		extract($row);
			
		$post_item = array(
			'Name'=>$Name,
			'address'=>$address,
			'email'=>$email,
			'password'=>$password,
			'phone'=>$phone
		);
			
	//push to "data"
	array_push($posts_arr['data'], $post_item);
	}
	//turn to Json $ output
	echo json_encode($posts_arr);		
	