<?php
/**
 * The template part for displaying results in search pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title" style="display:none;"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php 
            //get your custom posts ids as an array
			$p = get_the_ID();
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
				$project = " ";
				$project .= "<div class='activity-main'>";
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
				$project .= "<a href='".$home_url."/?s=%23".$tag_seacrh."'>". $pro_tag . "</a>" ;
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
				?>
	</header>
</article><!-- #post-## -->

