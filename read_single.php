<?php
	//Headers
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');
	header('Access-Control-Allow-Methods: POST');
	header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');
	
	include_once 'Database.php';
	include_once 'Post.php';
	
	//Instantiate DB & connection
	$database = new Database();
	$db =$database->connect();
	
	//Instantiate post object
	$post = new Post($db);
	
	//Get Name
	$data = json_decode(file_get_contents("php://input"));

	$post->Name = $data->Name;
	
	//Get post
	//$post->read_single();
	$result = $post->read_single();
	
	/*if($post->read_single()){
		echo json_encode(
			array('message'=>'Post Created')
		);
	}else{
		echo json_encode(
			array('message'=>'Post Not Created')
		);
	}*/
	//Create array
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
	
	