<!--Work In Progress ANTHONY-->
<!--GET DATA OUT FROM DB-->


<?php
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