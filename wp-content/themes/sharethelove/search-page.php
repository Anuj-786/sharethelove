 <?php
/*
Template Name: Search Project Listing

*/
get_header(); ?>
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
		</div>'); }
	?>
	</div>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	

		<?php get_search_form(); ?>
	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->
<?php get_footer(); ?>