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
	    <li><a href="');echo home_url(); print('/?page_id=35"><img src="');echo home_url(); print('/wp-content/uploads/2016/04/1-e1459847100362.png"></a></li>
	    <li><a href="');echo home_url(); print('/?page_id=286"><img src="');echo home_url(); print('/wp-content/uploads/2016/04/2-e1459847082992.png"></a></li>
	    <li><a href="');echo home_url(); print('/?page_id=24"><img src="');echo home_url(); print('/wp-content/uploads/2016/04/3-e1459847059371.png"></a></li>
	    <li><a href="');echo home_url(); print('/?page_id=104"><img src="');echo home_url(); print('/wp-content/uploads/2016/04/4-e1459846938556.png"></a></li>
		</ul>
		</div>'); }
	?>
	</div>
     <?php  
          $home_url = home_url(); 
          $user_id = $_GET['id'];
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
		  
		  $user_profile = " ";
		  $user_profile .= "<div class='user-prof-img'><div class='usr-img'><img src=".$Image."></div><div class='user-prof-img-txt'>Image</div></div>";
		  $user_profile .= "<div class='user-prof-main'>";
		  $user_profile .= "<div class='user-prof-name'><div class='user-prof-name-txt'>Name:"." ".$Name."</div></div>";
          $user_profile .= "<div class='user-prof-state'><div class='user-prof-state-txt'>Location:"." ".$State."(".$usr_distrt.")</div></div>";
          $user_profile .= "<div class='user-prof-website'><div class='user-prof-website-txt'>Website:"." ".$Website."</div></div>";
          $user_profile .= "<div class='user-prof-bio'><div class='user-prof-bio-txt'>Bio:"." ".$Bio."</div></div>";
		  $user_profile .= "</div>";

		  echo $user_profile; 
	   
     ?>
		
	</main><!-- .site-main -->

	

</div><!-- .content-area -->
<?php get_footer(); ?>