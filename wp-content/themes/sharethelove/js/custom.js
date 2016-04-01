jQuery(document).ready(function(){

jQuery( ".login-trigger" ).click(function() {
  jQuery(this).next().slideToggle()
});

jQuery('.box-shadow-menu').click(function(){
   		jQuery('.login-menu').toggle();

});
jQuery('.moreshow').click(function(){
jQuery(this).prev('.toggle-container').slideToggle();
jQuery(this).toggleClass('active');

if (jQuery(this).hasClass('active')){
jQuery(this).find('span').html('Know&nbsp;Less');
}else{
jQuery(this).find('span').html('Know&nbsp;More');
}
});
});