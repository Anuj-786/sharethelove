jQuery(document).ready(function(){

jQuery( ".login-trigger" ).click(function() {
  jQuery(this).next().slideToggle()
});

jQuery('.box-shadow-menu').click(function(){
   		jQuery('.login-menu').toggle();

});


});