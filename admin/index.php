<?php

	if(isset($_POST['name'])) {
	    
        $name = $_POST['name'];
        $url = $_POST['url'];
        $image = $_POST['image'];

        $_FILES['whatever'];

        $mongo = new Mongo();
        $db = $mongo->awesomest;


        $thing = array();
        $thing['name'] = $name;
        $thing['url'] = $url;
        $thing['image'] = $image;
        $thing['wins'] = 0;
        $thing['losses'] = 0;


        $db->things->insert($thing);

        echo "<h1>Success!</h1>";

	}

?>
<form action="index.php" method="post">
	<p>Name: <input type="text" name="name" /></p>
	<p>URL: <input type="text" name="url" /></p>
	<p>Image: <input type="text" name="image" /></p>	
	<p><input type="submit" /></p>
</form>