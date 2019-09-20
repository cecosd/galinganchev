<?php

function register_menus() {
    register_nav_menus(
      array(
        'header-left-menu' => __( 'Header Left Menu' ),
        'header-right-menu' => __( 'Header Right Menu' ),
        'footer-menu' => __( 'Footer Menu' )
      )
    );
  }
add_action( 'init', 'register_menus' );

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

function load_stylesheets()
{
    wp_register_style('font', get_template_directory_uri() . '/fonts/icomoon/style.css', [], 1, 'all');
    wp_enqueue_style('font');
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', [], 1, 'all');
    wp_enqueue_style('bootstrap');
    wp_register_style('fancybox', get_template_directory_uri() . '/css/jquery.fancybox.min.css', [], 1, 'all');
    wp_enqueue_style('fancybox');
    wp_register_style('owlcarousel', get_template_directory_uri() . '/css/owl.carousel.min.css', [], 1, 'all');
    wp_enqueue_style('owlcarousel');
    wp_register_style('owlthemedefault', get_template_directory_uri() . '/css/owl.theme.default.min.css', [], 1, 'all');
    wp_enqueue_style('owlthemedefault');
    wp_register_style('flaticon', get_template_directory_uri() . '/fonts/flaticon/font/flaticon.css', [], 1, 'all');
    wp_enqueue_style('flaticon');
    wp_register_style('aos', get_template_directory_uri() . '/css/aos.css', [], 1, 'all');
    wp_enqueue_style('aos');
    wp_register_style('style', get_template_directory_uri() . '/css/style.css', [], 1, 'all');
    wp_enqueue_style('style');
    wp_register_style('custom', get_template_directory_uri() . '/custom.css', [], 1, 'all');
    wp_enqueue_style('custom');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_scripts()
{
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', [], 1, 1);
    wp_enqueue_script('jquery');
    wp_register_script('popper', get_template_directory_uri() . '/js/popper.min.js', [], 1, 1);
    wp_enqueue_script('popper');
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', [], 1, 1);
    wp_enqueue_script('bootstrap');
    wp_register_script('owlcarousel', get_template_directory_uri() . '/js/owl.carousel.min.js', [], 1, 1);
    wp_enqueue_script('owlcarousel');
    wp_register_script('sticky', get_template_directory_uri() . '/jquery.sticky.js', [], 1, 1);
    wp_enqueue_script('sticky');
    wp_register_script('waypoints', get_template_directory_uri() . '/jquery.waypoints.min.js', [], 1, 1);
    wp_enqueue_script('waypoints');
    wp_register_script('animateNumber', get_template_directory_uri() . '/jquery.animateNumber.min.js', [], 1, 1);
    wp_enqueue_script('animateNumber');
    wp_register_script('fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', [], 1, 1);
    wp_enqueue_script('fancybox');
    wp_register_script('easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', [], 1, 1);
    wp_enqueue_script('easing');
    wp_register_script('aos', get_template_directory_uri() . '/js/aos.js', [], 1, 1);
    wp_enqueue_script('aos');
    wp_register_script('main', get_template_directory_uri() . '/js/main.js', [], 1, 1);
    wp_enqueue_script('main');
    wp_register_script('custom', get_template_directory_uri() . '/custom.js', [], 1, 1);
    wp_enqueue_script('custom');
}

add_action('wp_enqueue_scripts', 'load_scripts');

/*
* Creating a function to create our Quotes
*/

function custom_quotes()
{

    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x('Quotes', 'Quotes from others', 'twentythirteen'),
        'singular_name'       => _x('Quote', 'Quote from someone', 'twentythirteen'),
        'menu_name'           => __('Quotes', 'twentythirteen'),
        'all_items'           => __('All Quotes', 'twentythirteen'),
        'view_item'           => __('View Quote', 'twentythirteen'),
        'add_new_item'        => __('Add New Quote', 'twentythirteen'),
        'add_new'             => __('Add New', 'twentythirteen'),
        'edit_item'           => __('Edit Quote', 'twentythirteen'),
        'update_item'         => __('Update Quote', 'twentythirteen'),
        'search_items'        => __('Search Quote', 'twentythirteen'),
        'not_found'           => __('Not Found', 'twentythirteen'),
        'not_found_in_trash'  => __('Not found in Trash', 'twentythirteen'),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label'               => __('quotes', 'twentythirteen'),
        'description'         => __('Quotes', 'twentythirteen'),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'custom-fields'),
        /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );

    // Registering your Custom Post Type
    register_post_type('quotes', $args);
}

/* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */

add_action('init', 'custom_quotes', 0);

/*
* Creating a function to create our Quotes
*/

function custom_events()
{

    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x('Events', 'Events', 'twentythirteen'),
        'singular_name'       => _x('Event', 'Event', 'twentythirteen'),
        'menu_name'           => __('Events', 'twentythirteen'),
        'all_items'           => __('All Events', 'twentythirteen'),
        'view_item'           => __('View Event', 'twentythirteen'),
        'add_new_item'        => __('Add New Event', 'twentythirteen'),
        'add_new'             => __('Add New', 'twentythirteen'),
        'edit_item'           => __('Edit Event', 'twentythirteen'),
        'update_item'         => __('Update Event', 'twentythirteen'),
        'search_items'        => __('Search Event', 'twentythirteen'),
        'not_found'           => __('Not Found', 'twentythirteen'),
        'not_found_in_trash'  => __('Not found in Trash', 'twentythirteen'),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label'               => __('events', 'twentythirteen'),
        'description'         => __('Events', 'twentythirteen'),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'custom-fields'),
        /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );

    // Registering your Custom Post Type
    register_post_type('events', $args);
}

/* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */

add_action('init', 'custom_events', 0);
