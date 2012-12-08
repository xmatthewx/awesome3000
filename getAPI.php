<?php
/* 
    Get two random images from Mongo DB 
    this file should probably be moved to /API or /PHP
*/

    // this redundant DB stuff could be moved to config.php and included here
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