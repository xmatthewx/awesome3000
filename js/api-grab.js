/*
    get new images from instagram
    trigger php to add them to mongo db
    this should probably be moved to /js 
*/

var currenttag=["hipster","wtf","lol"];


	for (i = 0; i < currenttag.length; i++){
			
			
			var url="https://api.instagram.com/v1/tags/"+ currenttag[i] +"/media/recent?count=4&access_token=10239.2fa8a45.08f28ab239bf42a29a70321b2bad4ef0&callback=?";
			grabInsta();
			
			}


function grabInsta(){

	$.getJSON( url, function(insta){

	console.log(insta);

	
	$.each(insta.data, function(key,item){
			// $.each(item, function(subKey, subitem){
			// var value = (typeof subitem =='string')? subitem : subitem.length;

			time = item.created_time;
			url = item.images.standard_resolution.url;

			$('body').append('<div><img src="'+ url +'" /></div>');

			});
	});

};