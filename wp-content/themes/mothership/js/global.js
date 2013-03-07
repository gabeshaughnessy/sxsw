/* Global Javascripts */

/* ------ DOCUMENT READY -------- */
jQuery(document).ready(function($){
jQuery('.poster').each(function(i){//get the posters styled out
var poster = jQuery(this);
var instagram = poster.find('img');
instagram.src = instagram.attr('src');
var posterImage = poster.css('backgroundImage');
	if(i==0){
		poster.css({
		'backgroundImage': posterImage +','+ 'url(' + instagram.src +')', 
		'backgroundSize' : 'cover, 300px 300px',
		'background-position-x' :'left, 20px',
		'background-position-y' :'top, 100px',
		});
	}
	else if(i==1){
		poster.css({
		'backgroundImage': posterImage +','+ 'url(' + instagram.src +')', 
		'backgroundSize' : 'cover, 250px 250px',
		'background-position-x' :'left, 20px',
		'background-position-y' :'top, 100px',
		});
	}
	else if(i=2){
		poster.css({
		'backgroundImage': posterImage +','+ 'url(' + instagram.src +')', 
		'backgroundSize' : 'cover, 320px 320px',
		'background-position-x' :'left, 0px',
		'background-position-y' :'top, 60px',
		});
	}
	instagram.hide();
	i++
});//end poster loop

/* Deactivate Tweet Links */
jQuery('.tb_tweetlist a').click(function(e){
e.preventDefault();
});
					}); //end document ready

/* --------- WINDOW LOAD --------- */
jQuery(window).load(function(){
//jQuery('.poster').draggable();
}); //end window load
