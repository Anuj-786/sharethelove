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
jQuery(".header_img .medium").after(' <img src="http:dev-sharethelove.gailabs.com/wp-content/themes/sharethelove/images/header_image.png" id="header_image" style="cursor: pointer;" /> ');
jQuery(".image1 .medium").after(' <img src="http:dev-sharethelove.gailabs.com/wp-content/themes/sharethelove/images/add-image.png" id="image_one" style="cursor: pointer; height: 105px; width: 95px;" /> ');
jQuery(".image2 .medium").after(' <img src="http:dev-sharethelove.gailabs.com/wp-content/themes/sharethelove/images/add-image.png" id="image_two" style="cursor: pointer; height: 105px; width: 95px;" /> ');
jQuery(".image3 .medium").after(' <img src="http:dev-sharethelove.gailabs.com/wp-content/themes/sharethelove/images/add-image.png" id="image_three" style="cursor: pointer; height: 105px; width: 95px;" /> ');
jQuery(".image4 .medium").after(' <img src="http:dev-sharethelove.gailabs.com/wp-content/themes/sharethelove/images/add-image.png" id="image_four" style="cursor: pointer; height: 105px; width: 95px;" /> ');
function readURL5(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            jQuery('#header_image').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
function readURL1(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            jQuery('#image_one').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

function readURL2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            jQuery('#image_two').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
function readURL3(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            jQuery('#image_three').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

function readURL4(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            jQuery('#image_four').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
jQuery('#header_image').click(function(){
  jQuery('.header_img .medium').trigger('click');
});
jQuery('#image_one').click(function(){
  jQuery('.image1 .medium').trigger('click');
});
jQuery('#image_two').click(function(){
  jQuery('.image2 .medium').trigger('click');
});
jQuery('#image_three').click(function(){
  jQuery('.image3 .medium').trigger('click');
});
jQuery('#image_four').click(function(){
  jQuery('.image4 .medium').trigger('click');
});
jQuery(".header_img .medium").change(function(){
    readURL5(this);
});
jQuery(".image1 .medium").change(function(){
    readURL1(this);
});

jQuery(".image2 .medium").change(function(){
    readURL2(this);
});
jQuery(".image3 .medium").change(function(){
    readURL3(this);
});

jQuery(".image4 .medium").change(function(){
    readURL4(this);
});

// Search page for logged out users
  jQuery( ".know-more" ).on('click',function() {
    alert( "Please login or sign up to see full details" );
  });

});


