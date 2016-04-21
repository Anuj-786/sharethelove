 <?php
/*
Template Name: Profile Template

*/
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="secondary-menu">
			<?php
			if (is_user_logged_in()) {
				print(' <div class="secondary-menu-logo">
					<ul>
					<li><a href="');echo home_url(); print('/activity/"><img src="');echo home_url(); print('/wp-content/uploads/2016/04/1-e1459847100362.png" title="Activity"></a></li>
					<li><a href="');echo home_url(); print('/search/"><img src="');echo home_url(); print('/wp-content/uploads/2016/04/2-e1459847082992.png" title="search"></a></li>
					<li><a href="');echo home_url(); print('/profile-page/"><img src="');echo home_url(); print('/wp-content/uploads/2016/04/3-e1459847059371.png" title="User Profile"></a></li>
					<li><a href="');echo home_url(); print('/add-projects/"><img src="');echo home_url(); print('/wp-content/uploads/2016/04/4-e1459846938556.png" title="Add Project"></a></li>
					</ul>
					</div>'); 
					?>
				</div>
				<?php  
				$home_url = home_url(); 
				$user_id = $_GET['id'];
				$image = get_user_meta($user_id ,"profile_image", true);
				$name = get_user_meta($user_id ,"first_name", true);
				$state = get_user_meta($user_id ,"State", true); 
				$city = get_user_meta($user_id ,"user-city", true);
				$website = get_user_meta($user_id ,"website", true); 
				$bio = get_user_meta($user_id ,"description", true); 

				$user_profile = " ";
				$user_profile .= "<div class='user-prof-img'><div class='usr-img'><img src=".$Image."></div><div class='user-prof-img-txt'>Image</div></div>";
				$user_profile .= "<div class='user-prof-main'>";
				$user_profile .= "<div class='user-prof-name'><div class='user-prof-name-txt'>Name:"." ".$name."</div></div>";
				$user_profile .= "<div class='user-prof-state'><div class='user-prof-state-txt'>Location:"." ".$city."(".$state.")</div></div>";
				$user_profile .= "<div class='user-prof-website'><div class='user-prof-website-txt'>Website:"." ".$website."</div></div>";
				$user_profile .= "<div class='user-prof-bio'><div class='user-prof-bio-txt'>Bio:</div><div class='usr-bio'>".$bio."</div></div>";
				$user_profile .= "</div>";

				echo $user_profile; 
			}
			?>

		</main><!-- .site-main -->



	</div><!-- .content-area -->
	<?php get_footer(); ?>