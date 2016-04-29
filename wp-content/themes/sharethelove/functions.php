<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

/* Add action for auto login 28-03-2016 **/
add_action("gform_user_registered", "autologin", 10, 4);
function autologin($user_id, $config, $entry, $password) {
	wp_set_auth_cookie($user_id, false, '');
}

/* for logged-in and logged-out 28-03-2016 **/
function my_wp_nav_menu_args( $args = '' ) {

	if( is_user_logged_in() ) {
		$args['menu'] = 'logged-in';
	} else {
		$args['menu'] = 'logged-out';
	}
	return $args;
}
add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );

/* add login shortcode 29-03-16**/
add_action( 'init', 'my_add_shortcodes' );

function my_add_shortcodes() {

	add_shortcode( 'my-login-form', 'my_login_form_shortcode' );
}

function my_login_form_shortcode( $attr ) {

	if ( is_user_logged_in() )
		return 'You are already logged in';

	/* Set up some defaults. */
	$defaults = array(
		'label_username' => 'Email Id',
		'label_password' => 'Password',
		'label_remember' => __( 'Keep me logged in' ),
		'label_log_in'   => __( 'Go!' ),
		);
	/* Merge the user input arguments with the defaults. */
	$attr = shortcode_atts( $defaults, $attr );
	/* Set 'echo' to 'false' because we want it to always return instead of print for shortcodes. */
	$attr['echo'] = false;
	$url = wp_lostpassword_url();
	$forgot_pass = "<a class='forgot-password' href='".$url."'>Forgot Password</a>";
	echo $forgot_pass;
	$errors = $_GET['reason'];
	echo "<div class='errors'>". $errors ."</div>" ;
	return wp_login_form( $attr );
}

add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'projects',
		array(
			'labels' => array(
				'name' => __( 'Projects' ),
				'singular_name' => __( 'Project' )
				),
			'public' => true,
			'has_archive' => true,
			)
		);
}

add_theme_support('post-thumbnails');
add_post_type_support( 'projects', 'thumbnail' );
/**
 * Redirect user after successful login.
 *
 */

add_filter('login_redirect', 'my_login_redirect', 10, 3);
function my_login_redirect($redirect_to, $requested_redirect_to, $user) {
	if (is_wp_error($user)) {
        //Login failed, find out why...
		$error_types = array_keys($user->errors);
        //Error type seems to be empty if none of the fields are filled out
		$error_type = 'Incorrect Data';
        //Otherwise just get the first error (as far as I know there
        //will only ever be one)
		if (is_array($error_types) && !empty($error_types)) {
			$error_type = $error_types[0];
		}
		wp_redirect( home_url() . "?login=failed&reason=" . $error_type ); 
		exit;
	} else {
        //Login OK - redirect to another page?
		return home_url() . '/activity';
	}
}

// Disable dashboard for non admin users 

add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
		show_admin_bar(false);
	}
}

//Page Slug Body Class
function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
		$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

add_filter("gform_after_submission_7", "custom_post_edit_entry");


function custom_post_edit_entry ($form, $ajax_enabled, $field_values) {
	$form_fields = GFAPI::get_entry($_POST['edit_id']);
	echo "<pre>"; print_r($form_fields);
	if($_POST["action"] == "edit"){
		$post_id = $_POST['post_id'];
		$form_fields = GFAPI::get_entry($_POST['edit_id']);
		$img_1 =$form_fields[15];
		$img_2 =$form_fields[16];
		$img_3 =$form_fields[17];
		$img_4 =$form_fields[18];
		update_post_meta( $post_id, 'project-image-1', $img_1);
		update_post_meta( $post_id, 'project-image-2', $img_2);
		update_post_meta( $post_id, 'project-image-3', $img_3);
		update_post_meta( $post_id, 'project-image-4', $img_4);
		}
}

    if( is_user_logged_in() ) {
    $page = get_page_by_title( 'Activity');
    update_option( 'page_on_front', $page->ID );
    update_option( 'show_on_front', 'page' );
	}
	else {
	    $page = get_page_by_title( 'Home' );
	    update_option( 'page_on_front', $page->ID );
	    update_option( 'show_on_front', 'page' );
	}