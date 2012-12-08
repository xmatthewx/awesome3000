   var currenttag=["hipster","wtf","lol"];

	for (i = 0; i < currenttag.length; i++){
		
	// SOMEHOW, THIS SECTION WORKS WITH JUST THE GRABINSTA FUNCTION BEING CALLED AND NO REFERENCE TO THE API ACCESS TOKEN. I DONT GET IT
	
				var url="https://api.instagram.com/v1/tags/"+ currenttag[i] +"/media/recent?count=4&access_token=10239.2fa8a45.08f28ab239bf42a29a70321b2bad4ef0&callback=?";
				// var username="https://api.instagram.com/v1/media/"+ currenttag[i] +"/recent?count=4access_token=10239.2fa8a45.08f28ab239bf42a29a70321b2bad4ef0&callback=?";		
				// 				var id="https://api.instagram.com/v1/users/"+ currenttag[i] +"/recent?count=4&access_token=10239.2fa8a45.08f28ab239bf42a29a70321b2bad4ef0&callback=?";
				// 				var tags="https://api.instagram.com/v1/tags/"+ currenttag[i] +"/recent?count=4&access_token=10239.2fa8a45.08f28ab239bf42a29a70321b2bad4ef0&callback=?";
				// 				var caption="https://api.instagram.com/v1/media/"+ currenttag[i] +"/comments?access_token=10239.2fa8a45.08f28ab239bf42a29a70321b2bad4ef0&callback=?";
				// 				var filter="https://api.instagram.com/v1/media/"+ currenttag[i] +"/comments?access_token=10239.2fa8a45.08f28ab239bf42a29a70321b2bad4ef0&callback=?";
				// 				var likes="https://api.instagram.com/v1/media/"+ currenttag[i] +"/comments?access_token=10239.2fa8a45.08f28ab239bf42a29a70321b2bad4ef0&callback=?";
				// 				var commentsCount="https://api.instagram.com/v1/media/"+ currenttag[i] +"/comments?access_token=10239.2fa8a45.08f28ab239bf42a29a70321b2bad4ef0&callback=?";
				// 	
				// 		
		
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
			username = item.user.username;
			id = item.id;
			tags = item.tags;
			commentsCount = item.comments.count;
			caption = item.caption.text;
			likes = item.likes.count;
			filter = item.filter;



			$('body').append('<div><img src="'+ url +'" /></div>');
			$('body').append('<div><p>username:"'+ username +'" </p></div>');
			$('body').append('<div><p>id:"'+ id +'" </p></div>');
			$('body').append('<div><p>tags:"'+ tags +'" </p></div>');
			$('body').append('<div><p>caption:"'+ caption +'" </p></div>');	
			$('body').append('<div><p>filter:"'+ filter +'" </p></div>');
							
			$('body').append('<div><p>commentsCount:"'+ commentsCount +'" </p></div>');
			$('body').append('<div><p>likes:"'+ likes +'" </p></div>');
			$('body').append('<div><p>time:"'+ time +'" </p></div>');

	
			});
	});

};