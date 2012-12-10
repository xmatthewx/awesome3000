<?php       

// this could be moved to a common config.php file included here
$mongo = new Mongo();
$db = $mongo->InstaSlam;
$thing = array();


    // Get class for Instagram
    // More examples here: https://github.com/cosenary/Instagram-PHP-API
    require_once 'instagram.class.php';

    // Initialize class with client_id
    // Register at http://instagram.com/developer/ and replace client_id with your own
    $instagram = new Instagram('5713260f4a2b4ef3bc0b2447043e02a1');

    // Set keyword for #hashtag
    if ( $_POST ) {
        $tag = $_POST['tag'];
    } else { $tag = 'wtf'; }

    // Get latest photos according to #hashtag keyword
    $media = $instagram->getTagMedia($tag);

    // Set number of photos to show
    $limit = 3;

    // Set height and width for photos
    $size = '612';

    // Show results
    // Using for loop will cause error if there are less photos than the limit
    foreach(array_slice($media->data, 0, $limit) as $data)
    {
        $id = $data->id;
        $url = $data->images->standard_resolution->url;
        $user = $data->user->username;
                
        // write to DB here
        $thing['id'] = $id;
        $thing['url'] = $url;
        $thing['user'] = $user;
        $thing['tag'] = $tag;
        $thing['wins'] = 0;
        $thing['losses'] = 0;

        $db->things->insert($thing);

        // Show photo for debugging
        /*
            echo '<p><img src="'.$data->images->standard_resolution->url.'" height="'.$size.'" width="'.$size.'" alt="SOME TEXT HERE"></p>';
            echo '<p>'.$data->id.'</p>';
            echo '<p>'.$data->user->username.'</p>';
            echo '<p>'.$data->images->standard_resolution->url.'</p>';
        */

        
    }
    echo $tag.' pics from instagram added to db';
        
?>