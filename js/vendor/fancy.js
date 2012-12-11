/*************************
 * instaslams custom js
 *
 * includes front-end functionality
 *
 */
  
$(document).ready(function() {
 	 
 	 $('#disclaimer h5').click(function () {
 		$('#disclaimer-blurb').toggle();
 	 });
 	
 	 $('#disclaimer img').html('<img src="../images/disclaimer_triangle_open.png" />');

 });
