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
		'backgroundSize' : 'cover, 150px 150px',
		'background-position-x' :'left, 10px',
		'background-position-y' :'top, 50px',
		});
	}
	else if(i==1){
		poster.css({
		'backgroundImage': posterImage +','+ 'url(' + instagram.src +')', 
		'backgroundSize' : 'cover, 100px 100px',
		'background-position-x' :'left, 8px',
		'background-position-y' :'top, 40px',
		});
	}
	else if(i=2){
		poster.css({
		'backgroundImage': posterImage +','+ 'url(' + instagram.src +')', 
		'backgroundSize' : 'cover, 160px 160px',
		'background-position-x' :'left, 0px',
		'background-position-y' :'top, 30px',
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
