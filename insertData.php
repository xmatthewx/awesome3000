<!--Work In Progress ANTHONY-->
<!--INSERT DATA INTO DB-->
<!--This is where i need json from instagram api js-->

<?php

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


