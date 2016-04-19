<?php
/**
 * Template Name: User Profile Template
 *
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<div class="secondary-menu">
	<?php
	if (is_user_logged_in()) {
		print(' <div class="secondary-menu-logo">
			<ul>
			<li><a href="');echo home_url(); print('/?page_id=35"><img src="');echo home_url(); print('/wp-content/uploads/2016/04/1-e1459847100362.png"></a></li>
			<li><a href="');echo home_url(); print('/?page_id=286"><img src="');echo home_url(); print('/wp-content/uploads/2016/04/2-e1459847082992.png"></a></li>
			<li><a href="');echo home_url(); print('/?page_id=24"><img src="');echo home_url(); print('/wp-content/uploads/2016/04/3-e1459847059371.png"></a></li>
			<li><a href="');echo home_url(); print('/?page_id=104"><img src="');echo home_url(); print('/wp-content/uploads/2016/04/4-e1459846938556.png"></a></li>
			</ul>
			</div>'); }
			?>
		</div>
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<?php
		// Start the loop.
				while ( have_posts() ) : the_post();

			// Include the page content template.
				get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			// End of the loop.
				endwhile;
				?>
				<?php 
				$user_id = get_current_user_id();
				$Image = get_user_meta($user_id ,"profile_image", true);
				$Name = get_user_meta($user_id ,"first_name", true);
				$State = get_user_meta($user_id ,"State", true); 
				
				$District = get_user_meta($user_id ,"District", true);
				$District1 = get_user_meta($user_id ,"District1", true); 
				$District2 = get_user_meta($user_id ,"District2", true); 
				$District3 = get_user_meta($user_id ,"District3", true); 
				$District4 = get_user_meta($user_id ,"District4", true); 
				$District5 = get_user_meta($user_id ,"District5", true); 
				$District6 = get_user_meta($user_id ,"District6", true); 
				$District7 = get_user_meta($user_id ,"District7", true); 
				$District8 = get_user_meta($user_id ,"District8", true); 
				$District9 = get_user_meta($user_id ,"District9", true); 
				$District10 = get_user_meta($user_id ,"District10", true); 
				$District11 = get_user_meta($user_id ,"District11", true); 
				$District12 = get_user_meta($user_id ,"District12", true); 
				$District13 = get_user_meta($user_id ,"District13", true); 
				$District14 = get_user_meta($user_id ,"District14", true); 
				$District15 = get_user_meta($user_id ,"District15", true); 
				$District16 = get_user_meta($user_id ,"District16", true); 
				$District17 = get_user_meta($user_id ,"District17", true); 
				$District18 = get_user_meta($user_id ,"District18", true); 
				$District19 = get_user_meta($user_id ,"District19", true); 
				$District20 = get_user_meta($user_id ,"District20", true); 
				$District21 = get_user_meta($user_id ,"District21", true); 
				$District22 = get_user_meta($user_id ,"District22", true); 
				$District23 = get_user_meta($user_id ,"District23", true); 
				$District24 = get_user_meta($user_id ,"District24", true); 
				$District25 = get_user_meta($user_id ,"District25", true); 
				$District26 = get_user_meta($user_id ,"District26", true); 
				$District27 = get_user_meta($user_id ,"District27", true); 
				$District28 = get_user_meta($user_id ,"District28", true); 
				$District29 = get_user_meta($user_id ,"District29", true); 
				$District30 = get_user_meta($user_id ,"District30", true); 
				$District31 = get_user_meta($user_id ,"District31", true); 
				$District32 = get_user_meta($user_id ,"District32", true); 
				$District33 = get_user_meta($user_id ,"District33", true); 
				$District34 = get_user_meta($user_id ,"District34", true); 
				$District35 = get_user_meta($user_id ,"District35", true); 

				$usr_distrt = $District.$District1.$District2.$District3.$District4.$District5.$District6.$District7.$District8.$District9.$District10.$District11.$District12.$District13.$District14.$District15.$District16.$District17.$District18.$District19.$District20.$District21.$District22.$District23.$District24.$District25.$District26.$District27.$District28.$District29.$District30.$$District31.$$District32.$District33.$District34.$District35;
				$Website = get_user_meta($user_id ,"website", true); 
				$Bio = get_user_meta($user_id ,"description", true); 
				$form =  do_shortcode('[gravityform id="4" title="true" description="false" ajax="true"]');
				$user_profile = " ";
				$user_profile .= "<div class='profile-form'>" .$form. "</div><span class='profile-edit'><a href='#'>Update</a></span>" ;
				$user_profile .= "<div class='user-prof-img'><div class='usr-img'><img src=".$Image."></div><div class='user-prof-img-txt'>Image</div></div>";
				$user_profile .= "<div class='user-prof-main'>";
				
				$user_profile .= "<div class='user-prof-name'><div class='user-prof-name-txt'>Name:"." ".$Name."</div></div>";
				$user_profile .= "<div class='user-prof-state'><div class='user-prof-state-txt'>Location:"." ".$State."(".$usr_distrt.")</div></div>";
				$user_profile .= "<div class='user-prof-website'><div class='user-prof-website-txt'>Website:"." ".$Website."</div></div>";
				$user_profile .= "<div class='user-prof-bio'><div class='user-prof-bio-txt'>Bio:</div><div class='usr-bio'><textarea row='50' cols='100'>".$Bio."</textarea></div></div>";
				$user_profile .= "</div>";

				echo $user_profile;
				?>

			</main><!-- .site-main -->
		</div><!-- .content-area -->
		<h3 class="my-projects"> My Projects </h3>
		<?php 
            //get your custom posts ids as an array
		$posts = get_posts(array(
			'post_type'   => 'projects',
			'post_status' => 'publish',
			'posts_per_page' => -1,
			'fields' => 'ids'
			)
		);
			//loop over each post
		foreach($posts as $p){
			    //get the meta you need from each post
			$home_url = home_url();
			$pro_h_img = get_the_post_thumbnail($p);
			$hed_img_url = wp_get_attachment_url( get_post_thumbnail_id($p) );
			$post_title = get_the_title($p);
			$role_title = get_post_meta($p,"role-title",true);
			$pro_vac = get_post_meta($p,"project-vacancies",true);
			$post_by = get_post_field( 'post_author', $p );
			$pro_loc = get_post_meta($p,"project-location",true);
			$pro_loc_dl = get_post_meta($p,"location-delhi",true);
			$pro_loc_hp = get_post_meta($p,"location-himachal",true);
			$pro_loc_pl = get_post_meta($p,"location-place",true);
			$pro_s_date = get_post_meta($p,"project-from-date",true);
			$pro_e_date = get_post_meta($p,"project-to-date",true);
			$pro_tags = get_post_meta($p,"project-tags",true);
			$pro_img1 = get_post_meta($p,"project-image-1",true);
			$pro_img2 = get_post_meta($p,"project-image-2",true);
			$pro_img3 = get_post_meta($p,"project-image-3",true);
			$pro_img4 = get_post_meta($p,"project-image-4",true);
			$pro_img5 = get_post_meta($p,"project-image-5",true);
			$pro_des = get_post_meta($p,"project-description",true);
			$pro_rol = get_post_meta($p,"role-description",true);
			$pro_fac = get_post_meta($p,"project-facilities",false);
			$pro_email = get_post_meta($p,"project-email",true);
			$pro_phone = get_post_meta($p,"project-phone",true);
			$pro_mobile = get_post_meta($p,"project-mobile",true);
			$user_info = get_userdata($post_by);
			$user_id = get_current_user_id();
			if($user_id == $post_by){
				$project = " ";
				$project .= "<div class='activity-main'>";
				$project .= "<a href='".$home_url."/manage-projects'>Manage Projects</a>";
				$project .= "<div class='header_image'><a href='".$hed_img_url."'rel='lightbox[".$p."]'>" . $pro_h_img . "</a></div>";
				$project .= "<div class='activity-desc'>";
				$project .= "<p>". $post_title .  "</p>";
				$project .= "<p>Role Title: ". $role_title .  "</p>";
				$project .= "<p>Vacancies: ". $pro_vac .  "</p>";
				$project .= "<p>Posted By: " . $user_info->user_login . "</p>";
				$project .= "<p>Location: <a href='".$home_url."/?s=".$pro_loc."'>". $pro_loc . "</a>,";
				$project .= "<a href='".$home_url."/?s=".$pro_loc_dl."'>". $pro_loc_dl . "</a>" ;
				$project .= "<a href='".$home_url."/?s=".$pro_loc_hp."'>". $pro_loc_hp . "</a>," ;
				$project .= "<a href='".$home_url."/?s=".$pro_loc_pl."'>". $pro_loc_pl . "</a></p>" ;
				$project .= "<p>Start Date: " . $pro_s_date . "</p>";
				$project .= "<p> Ends On: " . $pro_e_date . "</p>";
				$tags = explode(" ", $pro_tags);
				foreach($tags as $pro_tag){
					$tag_seacrh = preg_replace('/[^A-Za-z0-9\-]/', '', $pro_tag);
					$project .= "<a href='".$home_url."/?s=%23".$tag_seacrh."'>". $pro_tag . "&nbsp;</a>" ;
				}
				$project .= "</div>";
				$project .= "<div class='project-img'>";
				$project .= "<a href='".$pro_img1."'rel='lightbox[".$p."]'><img src=" . $pro_img1 . "></a>";
				$project .= "<a href='".$pro_img2."'rel='lightbox[".$p."]'><img src=" . $pro_img2 . "></a>";
				$project .= "<a href='".$pro_img3."'rel='lightbox[".$p."]'><img src=" . $pro_img3 . "></a>";
				$project .= "<a href='".$pro_img4."'rel='lightbox[".$p."]'><img src=" . $pro_img4 . "></a>";
				$project .= "</div>";
				$project .= "<div class='toggle-container'>";
				$project .= "<div class='description'>";
				$project .= "<h3>Project Description </h3>";
				$project .= "<p>". $pro_des .  "</p>";
				$project .= "</div>";
				$project .= "<div class='role-description'>";
				$project .= "<h3>Role Description </h3>";
				$project .= "<p>". $pro_rol .  "</p>";
				$project .= "</div>";
				$project .= "<div class='facilities'>";
				$project .= "<h3>Facilities:</h3>";
				$project .= "<p>" . implode($pro_fac,', ') . "</p>";
				$project .= "</div>";
				$project .= "<div class='contact-details'>";
				$project .= "<h3>Contact Details</h3>";
				$project .= "<p> ". $pro_email .  "</p>";
				$project .= "<p>" . $pro_phone . "</p>";
				$project .= "<p>" . $pro_mobile . "</p>";
				$project .= "</div>";
				$project .= "</div>";
				$project .= "<a class='moreshow'><span>Know More</span></a>";
				$project .= "</div>";
				//echo $project;
				echo $project;	
			}
		}
		?>
		<div class="add-project-logo">
			<a href="<?php echo home_url(); ?>/?page_id=104"><img src='<?php echo home_url(); ?>/wp-content/uploads/2016/04/4-e1459846938556.png' /></a>
			<div class="add-project">Add Project</div>
		</div>
		<?php get_footer(); ?>
