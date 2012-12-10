<?php

	if(isset($_POST['name'])) {
	    
        $id = $_POST['id'];
        $url = $_POST['url'];
        $user = $_POST['user'];

        // $_FILES['whatever'];

        $mongo = new Mongo();
        $db = $mongo->InstaSlam;

        $thing = array();
        $thing['id'] = $id;
        $thing['url'] = $url;
        $thing['user'] = $user;
        $thing['wins'] = 0;
        $thing['losses'] = 0;


        $db->things->insert($thing);

        echo "<h1>Success!</h1>";

	}

?>
<form action="index.php" method="post">
	<p>ID: <input type="text" name="id" /></p>
	<p>URL: <input type="text" name="url" /></p>
	<p>User: <input type="text" name="user" /></p>	
	<p><input type="submit" /></p>
</form>