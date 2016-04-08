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
		<?php $p = get_the_ID(); 
			    //get the meta you need from each post
			    $pro_h_img = get_the_post_thumbnail($p);
			    $post_title = get_the_title($p);
			    $role_title = get_post_meta($p,"role-title",true);
			    $pro_vac = get_post_meta($p,"project-vacancies",true);
			    $post_by = get_post_field( 'post_author', $p );
			    $pro_loc = get_post_meta($p,"project-location",true);
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
			    $user_id = get_current_user_id();
				$user_info = get_userdata($post_by);
				$project = " ";
				$project .= "<div class='header_image'>" . $pro_h_img . "</div>";
				$project .= "<p>". $post_title .  "</p>";
				$project .= "<p>Role Title: ". $role_title .  "</p>";
				$project .= "<p>Vacancies: ". $pro_vac .  "</p>";
				$project .= "<p>Posted By: " . $user_info->user_login . " Location: " . $pro_loc . "</p>";
				$project .= "<p>Start Date: " . $pro_s_date . " Ends On: " . $pro_e_date . "</p>";
				$project .= "<p>". $pro_tags .  "</p>";
				$project .= "<img src=" . $pro_img1 . ">";
				$project .= "<img src=" . $pro_img2 . ">";
				$project .= "<img src=" . $pro_img3 . ">";
				$project .= "<img src=" . $pro_img4 . ">";
				$project .= "<img src=" . $pro_img5 . ">";
				$project .= "<div class='toggle-container'>";
				$project .= "<p><h3>Project Description</h3>". $pro_des .  "</p>";
				$project .= "<p><h3>Role Description</h3>". $pro_rol .  "</p>";
				$project .= "<p><h3>Facilities:</h3>";
				$project .= "<ul>" . implode($pro_fac,', ') . "</ul></p>";
				$project .= "<p><h3>Contact Details</h3>". $pro_email .  "</p>";
				$project .= "<p>" . $pro_phone . " " . $pro_mobile . "</p>";
				$project .= "</div>";
				$project .= "<a class='moreshow'><span>Know More</span></a>";
				//echo $project;
				echo $project;	
			?>
	</header>
</article><!-- #post-## -->

