db.InstaSlam.insert([{instaSlamId:'id', instaSlamUsername:'username', instaSlamProfilePicture:'profile_picture', instaSlamBio:'bio', instaSlamWebsite:'website',
instaSlamCaption:'caption', instaSlamStandardResolution:''}])

<?php
	$mongo = new Mongo();
	$db = $mongo->InstaSlam;
	$db->things->insert(array("thing"=>$_GET['whatIsGreat'])); // db.things.insert({thing:"horses"});

	$response = array();
	$response['status'] = 'okay';

	echo json_encode($response);
?>