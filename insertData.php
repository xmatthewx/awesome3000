<?php
/*
    this file inserts data in mongo db
    should probably be tweaked to handle either 
        new imgs from instagram
        or new wins from user clicks
*/

	$mongo = new Mongo();
	$db = $mongo->InstaSlam;
	$db->things->insert(array("id"=>$_GET['item.id'], 
							  //"url"=>$_GET['item.images.standard_resolution.url'],
							  // "comments"=>$_GET['item.comments.text'], )); 
							  // "commentsCount"=>$_GET['item.comments.count'], )); 
							  // "caption"=>$_GET['item.caption.text'], )); 
							  // "likes"=>$_GET['item.likes.count'], )); 
							  // "filter"=>$_GET['item.filter'], )); 
							  // "tags"=>$_GET['item.tags'], )); 
							  // "time"=>$_GET['item.created_time']

							   )); 


	// db.things.insert({thing:"horses"});

	$response = array();
	$response['status'] = 'okay';

	echo json_encode($response);


?>


