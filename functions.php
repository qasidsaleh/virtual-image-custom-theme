<?php

//include_once get_stylesheet_directory() . '/custom-functions/register-cpt.php';
require_once get_stylesheet_directory() . '/includes/components.php';

/*****************************************************
                    Image Handler
*****************************************************/
function display_image($image, $options = []) {
	if ($image) {
		// using WP image src set
		$size = isset( $options['size'] ) ? $options['size'] : 'full';
		$attr = [];
		if ( isset( $options['class'] ) ) $attr['class'] = $options['class'];
		if ( isset($options['decorative']) || empty($image['alt']) ) {
			$attr['alt'] = '';
			$attr['role'] = 'presentation';
		} else {
			$attr['alt'] = esc_attr($image['alt']);
		}
		$attr['loading'] = 'lazy';
		echo wp_get_attachment_image( $image['id'], $size, false, $attr );
	}
}

/*****************************************************
                Load Custom Styles
*****************************************************/
function html5blank_styles()
{
	wp_register_style('html5blank', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all');
	wp_enqueue_style('html5blank');
	// wp_register_style('esa4ygr', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
	// wp_enqueue_style('esa4ygr');
}

/*****************************************************
                Load Custom Scripts
*****************************************************/
function html5blank_header_scripts()
{
	if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

		wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), '3.5.1');
		wp_enqueue_script('jquery');

		wp_register_script('html5blankscripts2', get_template_directory_uri() . '/css/node_modules/bootstrap/dist/js/bootstrap.min.js', array(), '1.0.0');
		wp_enqueue_script('html5blankscripts2');

        wp_register_script('html5blankscripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0');
		wp_enqueue_script('html5blankscripts');

	}
}

/*****************************************************
                Load Conditional Scripts
*****************************************************/
function html5blank_conditional_scripts()
{
	if (is_page('pagenamehere')) {
		wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0');
		wp_enqueue_script('scriptname');
	}
}

/*****************************************************
                    Defer Scripts
*****************************************************/
function mind_defer_scripts( $tag, $handle, $src ) {
	$defer = array(
		'jquery',
		'html5blankscripts',
		'html5blankscripts2'
	);
	if ( in_array( $handle, $defer ) ) {
		return '<script src="' . $src . '" defer="defer"></script>' . "\n";
	}

	return $tag;
}

/*****************************************************
                Register Navigation
*****************************************************/
function register_html5_menu()
{
	register_nav_menus(array(
		'header-menu' => __('Header Menu', 'Header Menu'),
		'footer-menu' => __('Footer Menu', 'Footer Menu'),
	));
}

/*****************************************************
            Add Page Slug to Body Class
*****************************************************/
function add_slug_to_body_class($classes)
{
	global $post;
	if (is_home()) {
		$key = array_search('blog', $classes);
		if ($key > -1) {
			unset($classes[$key]);
		}
	} elseif (is_page()) {
		$classes[] = sanitize_html_class($post->post_name);
	} elseif (is_singular()) {
		$classes[] = sanitize_html_class($post->post_name);
	}

	return $classes;
}

/*****************************************************
            Register ACF Theme Options
*****************************************************/
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
	  'page_title' => 'Theme Options',
	  'menu_title' => 'Theme Options',
	  'menu_slug' => 'theme-options',
	  'capability' => 'edit_posts',
	  'redirect' => false
	));
}

/*****************************************************
            Register Custom Shortcode
*****************************************************/
function my_shortcode() {
	ob_start(); ?>
	<div class="my-class">
	    <h2>My Shortcode</h2>
	    <p>This is a paragraph of text.</p>
	</div>
	<?php $html = ob_get_clean();
	return $html;
}
add_shortcode('my_shortcode', 'my_shortcode');


/*****************************************************
            Custom WooCommerce Snippets
*****************************************************/


/*****************************************************
            Action/Filters Hooks
*****************************************************/
// Add Actions
add_action('init', 'html5blank_header_scripts');
add_action('wp_print_scripts', 'html5blank_conditional_scripts');
add_action('wp_enqueue_scripts', 'html5blank_styles'); 
add_filter( 'script_loader_tag', 'mind_defer_scripts', 10, 3 );
add_action('init', 'register_html5_menu');
// Add Filters
add_filter('body_class', 'add_slug_to_body_class');
// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
// WooCommerce Support
//add_theme_support( 'woocommerce' );

//add_action( 'wp_enqueue_scripts', 'woocommerce_enqueue_styles' );

function woocommerce_enqueue_styles() {
    wp_enqueue_style( 'woocommerce-general', WC()->plugin_url() . '/assets/css/woocommerce.css' );
    wp_enqueue_style( 'woocommerce-layout', WC()->plugin_url() . '/assets/css/woocommerce-layout.css' );
    wp_enqueue_style( 'woocommerce-smallscreen', WC()->plugin_url() . '/assets/css/woocommerce-smallscreen.css' );
}



