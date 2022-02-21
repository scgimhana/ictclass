<?php

if (!defined('ABSPATH'))
    exit; // Exit if accessed directly

    
//Include Bootstrap menu functions
include_once( 'functions_menu.php' );

//Include comments walker
include_once( 'comments_walker.php' );

//Include theme customizatin optins "Appearance > Customize". Adds 2 items. "Footer area" & "Social Icons"
include_once( 'theme-options/theme_customization.php' ); //Settings appear under Appearance > Customize

//Include Advanced Custom Fields support to theme
define('ACF_LITE', false); //Hide Advanced Custom Fields admin menu from dashboard OPTION 1
include_once( 'plugins/custom-fields/acf.php' );

//Include additional theme fields
include_once( 'theme-options/theme_fields.php' ); //This will appear under Pages > Above WYSIWYG editor
//Adds the featured image feature supprt to the theme for posts
add_theme_support('post-thumbnails');

/*
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
 */
add_theme_support('title-tag');

/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support('html5', array(
    'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
));
function visanduma_vendors() {
    wp_enqueue_style('aos','https://unpkg.com/aos@next/dist/aos.css');
    wp_enqueue_style('slick','https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style('datatables','https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css');
    wp_enqueue_style('jquery-ui', get_template_directory_uri() . '/vendor/jquery-ui/jquery-ui.min.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('visanduma-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    
    wp_enqueue_script('jQuery', get_template_directory_uri() . '/vendor/jQuery/jquery.min.js', array(), '3.5.1', true);
    wp_enqueue_script('jquary-lazy', get_template_directory_uri() . '/vendor/jquery.lazy-master/jquery.lazy.min.js', array(), '1.9.1');
    wp_enqueue_script('aos','https://unpkg.com/aos@next/dist/aos.js');
    wp_enqueue_script('slick-js','https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), '1.12.1', true);
    wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/vendor/jquery-ui/jquery-ui.min.js', array(), '1.12.1', true);
    wp_enqueue_script('popper', get_template_directory_uri() . '/vendor/popper/popper.min.js', array(), '1.0.1', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array(), '4.3.1', true);
}

add_action('wp_enqueue_scripts', 'visanduma_vendors');



//Register sidebars
register_sidebar(array(
    'name' => 'ST Sidebar',
    'id' => 'st_sidebar',
    'description' => 'ST Sidebar Widget',
    'before_widget' => '<div class="widget-wrapper">',
    'after_widget' => '</div>'
));

//Register top main menu (method 1)
register_nav_menu('top_menu', 'Top Main Menu');

//Register a footer menu (method 2)
function footer_menu() {
    register_nav_menu('footer_menu', __('Footer Menu'));
}

add_action('init', 'footer_menu');



// Add Shortcode to get 4 custom posts from a custom category with an offset. Usage "echo do_shortcode('[st_get_posts]');" or "echo do_shortcode('[st_get_posts posts_per_page="5" offset="0" category="1"]');"
function get_posts_shortcode($atts) {
    global $post;
    extract(shortcode_atts(
                    array(
        'posts_per_page' => 4, //default limited to 4 posts
        'offset' => 0, //this says to skip the n number of posts and start the loop
        'category' => 1, //category of the posts
        'category_name' => 'Uncategorized' //category name of the posts
                    ), $atts)
    );
    //To get custom posts according to a specific category use the following
    $args = array('posts_per_page' => $posts_per_page, 'offset' => $offset, 'category' => $category, 'category_name' => $category_name);
    $get_posts = get_posts($args);
    $output = "";
    foreach ($get_posts as $post) : setup_postdata($post);
        $output .= '<p>POST: ';
        $output .= get_the_excerpt();
        $output .= '</p>';
    endforeach;
    wp_reset_postdata();
    return $output;
}

add_shortcode('st_get_posts', 'get_posts_shortcode');

//Shortcode to get template path / theme path. Usage: [theme_path]/images/myImage.jpg
function st_theme_path() {
    return get_bloginfo("template_directory");
}

add_shortcode('theme_path', 'st_theme_path');

//Shortcode to get home url / homepage path. Usage: [home_url]/sample-page
function st_home_url() {
    return get_bloginfo("url");
}

add_shortcode('home_url', 'st_home_url');


//Removes adding auto <p> tags in the wysiwyg editor
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');

//Removes <p>tags and <br>tags from wrapping our shortcodes
function cleanup_shortcodes($content) {
    $array = array(
        '<p>[' => '[',
        ']</p>' => ']',
        ']<br />' => ']',
        ']<br>' => ']'
    );
    $content = strtr($content, $array);
    return $content;
}

add_filter('the_content', 'cleanup_shortcodes', 10);

//Adds bootstrap CSS styling to the wysiwyg editor front-end
function my_theme_styles_1() {
    add_editor_style('css/bootstrap.min.css');
}

add_action('after_setup_theme', 'my_theme_styles_1');

//Adds custom CSS styling on style.css to the wysiwyg editor
function my_theme_styles_2() {
    add_editor_style('style.css');
}

add_action('after_setup_theme', 'my_theme_styles_2');

// Replaces the excerpt "Read More" text by a link
function new_excerpt_more() {
    global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read more...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

//Optional smtp mail configuration
//Customize default mailer service to use SMTP with SMTP authentication
add_action('phpmailer_init', 'mailer_config', 10, 1);

function mailer_config(PHPMailer $mailer) {
    //$mailer->IsSMTP();
    //$mailer->Host = 'mail.seneview.lk';
    //$mailer->SMTPAuth = TRUE;
    //$mailer->Port = 587;
    //$mailer->Username = 'test@visanduma.lk';
    //$mailer->Password = 'HF2y2xhT]KlN';
    //$mailer->SMTPSecure = 'tls';
    //$mailer->SMTPDebug = 0; // write 0 if you don't want to see client/server communication in page
    $mailer->CharSet = "utf-8";
//    $mailer->From = 'no-reply@seneview.lk';
    $mailer->FromName = 'WordPress';
}
// Our custom post type function
function create_courses() {
    $supports = array(
        'title',        // Post title
        'editor',       // Post content
        'excerpt',      // Allows short description
        'author',       // Allows showing and choosing author
        'thumbnail',    // Allows feature images
        'comments',     // Enables comments
        'trackbacks',   // Supports trackbacks
        'revisions',    // Shows autosaved version of the posts
        'custom-fields' // Supports by custom fields
    );
    register_post_type( 'courses',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Courses' ),
                'singular_name' => __( 'Course' ),
                'menu_name'             => __( 'Courses', 'text_domain' ),
		'name_admin_bar'        => __( 'Course', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Courses', 'text_domain' ),
		'add_new_item'          => __( 'Add New Course', 'text_domain' ),
		'add_new'               => __( 'Add Course', 'text_domain' ),
		'new_item'              => __( 'New Course', 'text_domain' ),
		'edit_item'             => __( 'Edit Course', 'text_domain' ),
		'update_item'           => __( 'Update Course', 'text_domain' ),
		'view_item'             => __( 'View Course', 'text_domain' ),
		'view_items'            => __( 'View Courses', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Courses list', 'text_domain' ),
		'items_list_navigation' => __( 'Courses list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
            ),
            'label'                 => __( 'Course', 'text_domain' ),
            'description'           => __( 'Course Description', 'text_domain' ),
            'supports'              => $supports,
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
            'rewrite' => array('slug' => 'courses'),
            'show_in_rest' => true,
 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_courses' );

function create_blogs() {
     $supports = array(
        'title',        // Post title
        'editor',       // Post content
        'excerpt',      // Allows short description
        'author',       // Allows showing and choosing author
        'thumbnail',    // Allows feature images
        'comments',     // Enables comments
        'trackbacks',   // Supports trackbacks
        'revisions',    // Shows autosaved version of the posts
        'custom-fields' // Supports by custom fields
    );
    register_post_type( 'blogs',
        array(
            'labels' => array(
                'name' => __( 'Blogs' ),
                'singular_name' => __( 'Blog' ),
                'menu_name'             => __( 'Blogs', 'text_domain' ),
		'name_admin_bar'        => __( 'Blog', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Blogs', 'text_domain' ),
		'add_new_item'          => __( 'Add New Blog', 'text_domain' ),
		'add_new'               => __( 'Add Blog', 'text_domain' ),
		'new_item'              => __( 'New Blog', 'text_domain' ),
		'edit_item'             => __( 'Edit Blog', 'text_domain' ),
		'update_item'           => __( 'Update Blog', 'text_domain' ),
		'view_item'             => __( 'View Blog', 'text_domain' ),
		'view_items'            => __( 'View Blogs', 'text_domain' ),
		'search_items'          => __( 'Search Blog', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Blogs list', 'text_domain' ),
		'items_list_navigation' => __( 'Blogs list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
            ),
            'label'                 => __( 'Blog', 'text_domain' ),
            'description'           => __( 'Blog Description', 'text_domain' ),
            'supports'              => $supports,
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
            'rewrite' => array('slug' => 'blogs'),
            'show_in_rest' => true,
 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_blogs' );

function initiate_customizer($wp_customize) {
    $wp_customize->add_panel('visanduma-logo-customizer', array(
        'title' => 'Visanduma Details',
        'description' => 'Visanduma Settings',
        'priority' => 5,
    ));
    $wp_customize->add_section('visanduma-color-logo', array(
       'title' => __('Visanduma Color Logo', 'Visanduma'),
       'priority' => 10,
       'panel' => 'visanduma-logo-customizer',
     ));
    $wp_customize->add_setting('visanduma_logo_setting', array(
        'default' => 'none',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'visanduma_logo_selector', array(
         'label' => __('Visanduma Color Logo', 'Visanduma'),
         'section' => 'visanduma-color-logo',
         'settings' => 'visanduma_logo_setting',
     )));
}
add_action('customize_register', 'initiate_customizer');