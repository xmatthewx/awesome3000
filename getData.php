<<<<<<< HEAD
<!--Work In Progress ANTHONY-->
<!--GET DATA OUT FROM DB-->


=======
>>>>>>> f4072caea0be5e4dbf3b456e856c019308e9df4c
<?php
/*
    this appears to be a duplicate of getAPI.php
*/
	$mongo = new Mongo();
	$db = $mongo->InstaSlamDB;
	$things = $db->things->find();

	$response = array();

	if($things) {
		$response['status'] = 'okay';
		$response['things'] = array();

		foreach($things as $thing) {
			array_push($response['things'],$thing);
		}
	}
	else {
		$response['status'] = 'catatstrophic fuck up';
		$response['message'] = 'Sorry! Check back later!';
	}

	echo json_encode($response);


?>