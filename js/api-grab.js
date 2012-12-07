
// array = new array instaArray[wtf, lol, hipster, ghetto, fail]; 
// for (i = 0; i < $instagram.length; i++) { }

var currenttag=["hipster", "wtf", "lol"];


//,"wtf","lol","fail"];

	for (i = 0; i < currenttag.length; i++){
			
			console.log(currenttag[i]);
			var url="https://api.instagram.com/v1/tags/"+ currenttag[i] +"/media/recent?count=4&access_token=10239.2fa8a45.08f28ab239bf42a29a70321b2bad4ef0&callback=?";
			grabInsta();
			
			}


function grabInstam(){

$.getJSON( url, function(insta){

	console.log(insta);

	
	$.each(insta.data, function(key,item){
			// $.each(item, function(subKey, subitem){
			// var value = (typeof subitem =='string')? subitem : subitem.length;

			time = item.created_time;
			url = item.images.standard_resolution.url;

			$('body').append('<div><img src="'+ url +'" /></div>');

				// })
			});
	});

};
	

  "id", 
        "username", 
        "full_name",
        "profile_picture", 
        "bio",
        "website",
        "counts": {"media", "follows", "followed_by" }
	"location": {"latitude", "longitude", "name" (Example: "Civic Center BART"), }
        "comments": {"count", "data": [ ... ]}
        "caption"
        "likes": {"count"}   
        "standard_resolution": {"url", "width", "height"}
        "type" (EXAMPLE, "image")
        "filter",
        "tags",


  db.InstaSlam.insert([{instaSlamId:'id', instaSlamUsername:'username', instaSlamProfilePicture:'profile_picture', instaSlamBio:'bio', instaSlamWebsite:'website',
instaSlamCaption:'caption', instaSlamStandardResolution:''}])





