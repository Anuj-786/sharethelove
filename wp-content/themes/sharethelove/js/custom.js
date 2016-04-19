jQuery(document).ready(function(){
// Login button toggle
jQuery( ".login-trigger" ).click(function() {
  jQuery(this).next().slideToggle()
});
jQuery(document).mouseup(function(){
      jQuery('.login-content').slideUp();  
});
jQuery('.login-content').mouseup(function(){
      return false; 
});
jQuery('.login-trigger').mouseup(function(){
      return false; 
});
if(jQuery('.errors').text()){
    jQuery(".login-trigger").next().slideToggle()
}

// Menu toggle for logged in users
jQuery('.box-shadow-menu').click(function(){
   		jQuery('.login-menu').toggle();

});
jQuery('body').click(function(e) {
   if (!jQuery(e.target).is('.box-shadow-menu')) {
      jQuery('.login-menu').fadeOut(200);
   }
});

// Activity Project page expand and collapse 
/*jQuery('.toggle-container').insertAfter('.moreshow');*/

jQuery('.moreshow').click(function(){
jQuery(this).prev('.toggle-container').slideToggle('slow', function(){});
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

// Add Project page thumbnail display
  /*jQuery('#gform_7 .ginput_container_fileupload').on('click', function (e) {
  	var fileFieldId = jQuery(this).find('input:first-child').next().attr('id'); 
      var id = jQuery(this).find('input:first-child').next().attr('id');
  	 jQuery('#' + id ).on('change', function () {
  	var fileFieldId = jQuery(this).attr('id');
  	var image_holder = jQuery("#result");
  	var reader = new FileReader();
          reader.onloadend = function (e) {
              jQuery("<img />", {
                  "src": e.target.result,
                  "class": "thumb-image"
              }).appendTo(image_holder);

          }
          image_holder.show();
          reader.readAsDataURL(jQuery('#'+fileFieldId).prop("files")[0]);
   });
  }); */
  // Add project first image
  jQuery('#input_7_15').on('change', function () {
    var fileFieldId = jQuery(this).attr('id');
    var image_holder = jQuery("#result");
    var reader = new FileReader();
          reader.onloadend = function (e) {
              jQuery("<img />", {
                  "src": e.target.result,
                  "class": "thumb-image"
              }).appendTo(image_holder);

          }
          image_holder.show();
          reader.readAsDataURL(jQuery('#'+fileFieldId).prop("files")[0]);
   });
  // Add project second image
  jQuery('#input_7_16').on('change', function () {
    var fileFieldId = jQuery(this).attr('id');
    var image_holder = jQuery("#result");
    var reader = new FileReader();
          reader.onloadend = function (e) {
              jQuery("<img />", {
                  "src": e.target.result,
                  "class": "thumb-image"
              }).appendTo(image_holder);

          }
          image_holder.show();
          reader.readAsDataURL(jQuery('#'+fileFieldId).prop("files")[0]);
   });
  // Add project third image
  jQuery('#input_7_17').on('change', function () {
    var fileFieldId = jQuery(this).attr('id');
    var image_holder = jQuery("#result");
    var reader = new FileReader();
          reader.onloadend = function (e) {
              jQuery("<img />", {
                  "src": e.target.result,
                  "class": "thumb-image"
              }).appendTo(image_holder);

          }
          image_holder.show();
          reader.readAsDataURL(jQuery('#'+fileFieldId).prop("files")[0]);
   });
  // Add project fourth image
  jQuery('#input_7_18').on('change', function () {
    var fileFieldId = jQuery(this).attr('id');
    var image_holder = jQuery("#result");
    var reader = new FileReader();
          reader.onloadend = function (e) {
              jQuery("<img />", {
                  "src": e.target.result,
                  "class": "thumb-image"
              }).appendTo(image_holder);

          }
          image_holder.show();
          reader.readAsDataURL(jQuery('#'+fileFieldId).prop("files")[0]);
   });
  jQuery('#input_7_1').on('change', function () {
    var fileFieldId = jQuery(this).attr('id');
    var image_holder = jQuery("#project_image");
    var reader = new FileReader();
          reader.onloadend = function (e) {
              jQuery("<img />", {
                  "src": e.target.result,
                  "class": "thumb-image"
              }).appendTo(image_holder);

          }
          image_holder.show();
          reader.readAsDataURL(jQuery('#'+fileFieldId).prop("files")[0]);
   });

// Search page for logged out users
  jQuery( ".know-more" ).on('click',function() {
    alert( "Please login or sign up to see full details" );
  });

//User Profile Page Edit toggle
jQuery('.profile-edit').click(function(){
   jQuery('.profile-form').toggle();
});

// js for add project images 
jQuery("#result").appendTo("#gform_fields_7");

});


