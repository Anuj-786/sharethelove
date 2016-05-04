<?php
/**
 * Template Name: Suspend Account Template
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
	<li><a href="');echo home_url(); print('/activity/"><img src="');echo home_url(); print('/wp-content/uploads/2016/04/1-e1459847100362.png" title="Activity"></a></li>
	<li><a href="');echo home_url(); print('/search/"><img src="');echo home_url(); print('/wp-content/uploads/2016/04/2-e1459847082992.png" title="Search"></a></li>
	<li><a href="');echo home_url(); print('/profile-page/"><img src="');echo home_url(); print('/wp-content/uploads/2016/04/3-e1459847059371.png" title="User Profile"></a></li>
	<li><a href="');echo home_url(); print('/add-projects/"><img src="');echo home_url(); print('/wp-content/uploads/2016/04/4-e1459846938556.png" title="Add Project"></a></li>
	</ul>
	</div>'); }
?>
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
		   if (isset($_POST['delete'])) {
		   	   include("./wp-admin/includes/user.php" );
			   $user_id = get_current_user_id();
			   wp_delete_user($user_id);
			   wp_redirect( home_url().'/home');
               exit;
	       }

	    ?>
	    <div class="del_btn">
		    <form action="" method="post" enctype="multipart/form-data">
	         <input type="submit" class="delete" name="delete" value="Delete Account" />
	        </form>
        </div>

	</main><!-- .site-main -->
	
</div><!-- .content-area -->
<script language="JavaScript" type="text/javascript">
jQuery(document).ready(function(){
    jQuery(".delete").click(function(e){
        if(!confirm('Are you sure?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});
</script>
<?php get_footer(); ?>
