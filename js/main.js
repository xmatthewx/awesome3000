/*
    instaslams custom js
*/

/*************
* tags
*
*/

$('nav a').click( function(){

    tag = $(this).attr('id');
    console.log(tag +' clicked');

    updatetag(tag);
})


function updatetag(tag){
    
    $('em.tag').html('#'+tag);
    
}