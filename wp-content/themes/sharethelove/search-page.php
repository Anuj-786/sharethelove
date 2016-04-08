 <?php
/*
Template Name: Search Project Listing

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

		<?php get_search_form(); ?>
	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->
<?php get_footer(); ?>