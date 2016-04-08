jQuery(document).ready(function(){
// Login button toggle
jQuery( ".login-trigger" ).click(function() {
  jQuery(this).next().slideToggle()
});

jQuery('.box-shadow-menu').click(function(){
   		jQuery('.login-menu').toggle();

});
if (jQuery('.errors').text())
     {
         jQuery(".login-trigger").next().slideToggle()
     }
// Activity Project page expand and collapse 
jQuery('.moreshow').click(function(){
jQuery(this).prev('.toggle-container').slideToggle();
jQuery(this).toggleClass('active');
if (jQuery(this).hasClass('active')){
	jQuery(this).find('span').html('Know&nbsp;Less');
	}else{
	jQuery(this).find('span').html('Know&nbsp;More');
	}	
});

// Login page placeholder
jQuery('#user_login').attr( 'placeholder', ' Email Id' );
jQuery('#user_pass').attr( 'placeholder', ' Password' );


});
