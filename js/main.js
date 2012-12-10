/*************************
 * instaslams custom js
 *
 * includes api calls, db queries, and ui functions
 *
 */


 var instragram_key = "&access_token=10239.2fa8a45.08f28ab239bf42a29a70321b2bad4ef0";
 var getcount = "?count=3";
 var callback = "&callback=?";
 var instagram_url;
 var current_tag;

 var site_url = 'http://localhost/amazon/instaslam/'; // change to your localhost or live site url



/*************
* tags menu
*
*/

// call all the functions on tag menu selection
$('nav a').click( function(){
    current_tag = $(this).attr('id');
    console.log(current_tag +' clicked');
    updatetag(current_tag);
    // queryDB(tag);
    queryInsta(current_tag);
})


// swaps tag name in several places
function updatetag(tag){
    $('span.tag').html('#'+tag);  
    $('nav a').removeClass('active');
    $('nav a#' +tag).addClass('active');  
}


/*************
* display images
*
*/

function displayImage(img1,img2) {
    
    console.log('display image');
    // console.log(img1);
    // console.log(img2);

	$('#thing1').attr('title','img by: ' + img1.user.username);
	$('#thing1 img').attr('src',img1.images.standard_resolution.url);
	$('#thing1').data( 'slam', { pid: img1.user.id, user: img1.user.username, tag: current_tag } );
    
	$('#thing2').attr('title','img by: ' + img2.user.username);
	$('#thing2 img').attr('src',img2.images.standard_resolution.url);
	$('#thing2').data( 'slam', { pid: img2.user.id, user: img2.user.username, tag: current_tag } );
   	
}



/*************
* user choice
*
*/

$('#choice a').click( function(){
    
    id = $(this).attr('id');
    var pid = $('#' + id).data("slam").pid;
    var user = $('#' + id).data("slam").user;
    var tag = $('#' + id).data("slam").tag;
    alert(user + '\'s pic is the most #' +tag+ '!\n\nhi jenn, give me html with some good ids or classes and i will replace this.');
    
    queryInsta(current_tag);
    addnewtoDB(current_tag);
    
})




/*************
* instagram api
*
*/

// using this until we can grab from mongo DB
function queryInsta(tag) {
    instagram_url="https://api.instagram.com/v1/tags/"+ tag +"/media/recent" + getcount + instragram_key + callback;
	grabInsta();
}


function grabInsta(){
    var insta;
    console.log('get instagram json: ');

	$.getJSON( instagram_url, function(insta){
    	// console.log(insta);
    	displayImage(insta.data[0],insta.data[1]);
    }); // END getJSON
    
};


/*************
* mongo API
*
*/

// trigger php to grab new images from instagram
function addnewtoDB(addtag){
    
    console.log('addnewtoDB: ' + addtag);
    $.post( site_url + '/api/instagram_api.php',{ tag: addtag }, function(data) {
        console.log(data);
    });
    
}; 


/*************
* testing
*
*/

// use this if you want to look thru a bunch of tags for testing
var alltags=["hipster","wtf","lol"];
// testloop();
function testloop(){
    for (i = 0; i < alltags.length; i++){
    
        tag = alltags[i];
        console.log('get: ' + tag);
        queryInsta(tag);

    }
}


/*************
* load first images
*
*/

console.log('everything loaded. grab first images.');
current_tag = 'hipster';
updatetag('hipster');
queryInsta('hipster');

