 <?php
/*
Template Name: Project Listing

*/
get_header(); ?>
<div class="secondary-menu">
<?php
if (is_user_logged_in()) {
print(' <div class="secondary-menu-logo">
    <ul>
    <li><a href="');echo home_url(); print('/?page_id=35"><img src="');echo home_url(); print('/wp-content/uploads/2016/04/downbtn.png"></a></li>
    <li><a href="');echo home_url(); print('/?page_id=286"><img src="');echo home_url(); print('/wp-content/uploads/2016/04/downbtn.png"></a></li>
    <li><a href="');echo home_url(); print('/?page_id=24"><img src="');echo home_url(); print('/wp-content/uploads/2016/04/downbtn.png"></a></li>
    <li><a href="');echo home_url(); print('/?page_id=104"><img src="');echo home_url(); print('/wp-content/uploads/2016/04/downbtn.png"></a></li>
	</ul>
	</div>'); }
?>
</div>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php 
			$form_id = 5;
			$entries = GFAPI::get_entries( $form_id );
				foreach ($entries as $entry) {
					$user_id = get_current_user_id();
					$id = $entry[created_by];
					$user_info = get_userdata($id);
					if ($user_id == $id) {
						$project = " ";
						$project .= "<div class='header_image'> <img src=" .$entry[23]. "> </div>";
						$project .= "<p>". $entry[1] .  "</p>";
						$project .= "<p>Role Title: ". $entry[2] .  "</p>";
						$project .= "<p>Vacancies: ". $entry[8] .  "</p>";
						$project .= "<p>Posted By: " . $user_info->user_login . " Location: " . $entry[3] . "</p>";
						$project .= "<p>Start Date: " . $entry[6] . " Ends On: " . $entry[7] . "</p>";
						$project .= "<p>". $entry[4] .  "</p>";
						$project .= "<img src=" .$entry[15]. ">";
						$project .= "<img src=" .$entry[19]. ">";
						$project .= "<img src=" .$entry[20]. ">";
						$project .= "<img src=" .$entry[21]. ">";
						$project .= "<div class='toggle-container'>";
						$project .= "<p><h3>Project Description</h3>". $entry[10] .  "</p>";
						$project .= "<p><h3>Role Description</h3>". $entry[11] .  "</p>";
						$facility_exists = 0;
						$facility = '';
						foreach ($entry as $k => $val) {
							if (strpos($k, '9.') !== FALSE && $val != '') {
							  $facility_exists = 1;
							  $facility .= "<li>" . $val . "</li>";
						    }
						}
						if ($facility_exists) {
							$project .= "<p><h3>Facilities:</h3>";
							$project .= "<ul>" . $facility . "</ul></p>";
						}
						$project .= "<p><h3>Contact Details</h3>". $entry[12] .  "</p>";
						$project .= "<p>" .$entry[13]. " " .$entry[14]. "</p>";
						$project .= "</div>";
						$project .= "<a class='moreshow'><span>Know More</span></a>";
						//echo $project;
						echo $project;
					}else{
						echo "";
					}	
				}
			?>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->
<?php get_footer(); ?>