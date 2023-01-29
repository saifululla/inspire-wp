<?php 


get_template_part('/inc/saiful-options');
function inspireone_setup_theme(){

    load_theme_textdomain( 'inspireone', get_template_directory_uri().'/languages' );
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array('post','sliders','teams','testimonials','gallerys','portfolio'));

    register_nav_menus(
        array(
            'main-menu' => __('Main Menu', 'inspireone')
        )
    );
}
add_action('after_setup_theme','inspireone_setup_theme');




function inspireone_widgets(){

    // Sidebar
    register_sidebar(array(
        'name' => __('Main Sidebar','inspireone'),
        'id' => 'main_sidebar',
        'description' => __('Main Sidebar for Blog Page', 'inspireone'),
        'before_widget' => '<div class="single-sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));

    // Footer Sidebar 1
    register_sidebar(array(
        'name' => __('Footer Sidebar 1','inspireone'),
        'id' => 'footer_sidebar1',
        'description' => __('Footer Widget 1 for Showing Widget', 'inspireone'),
        'before_widget' => '<div class="single-footer footer-logo">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Footer Sidebar 2
    register_sidebar(array(
        'name' => __('Footer Sidebar 2','inspireone'),
        'id' => 'footer_sidebar2',
        'description' => __('Footer Widget 2 for Showing Widget', 'inspireone'),
        'before_widget' => '<div class="single-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));

    // Footer Sidebar 3
    register_sidebar(array(
        'name' => __('Footer Sidebar 3','inspireone'),
        'id' => 'footer_sidebar3',
        'description' => __('Footer Widget 3 for Showing Widget', 'inspireone'),
        'before_widget' => '<div class="single-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));

    // Footer Sidebar 4
    register_sidebar(array(
        'name' => __('Footer Sidebar 4','inspireone'),
        'id' => 'footer_sidebar4',
        'description' => __('Footer Widget 4 for Showing Widget', 'inspireone'),
        'before_widget' => '<div class="single-footer contact-box">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}
add_action('widgets_init', 'inspireone_widgets');

//Comment fields Order

function inspireone_comment_filed( $fields ) {
    $comment = $fields['comment'];
    $author = $fields['author'];
    $email = $fields['email'];
    $url = $fields['url'];
    $cookies = $fields['cookies'];

    unset( $fields['comment'] );
    unset( $fields['author'] );
    unset( $fields['email'] );
    unset( $fields['url'] );
    unset( $fields['cookies'] );
    
    $fields['author'] = $author;
    $fields['email'] = $email;
    $fields['url'] = $url;
    $fields['comment'] = $comment;
    $fields['cookies'] = $cookies;
    
    return $fields;
}
add_filter( 'comment_form_fields', 'inspireone_comment_filed' );




function inspire_css_js_load(){
    wp_enqueue_style('poppins-font', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'fa5', 'https://use.fontawesome.com/releases/v5.13.0/css/all.css', array(), '5.13.0', 'all' );
    wp_enqueue_style('magnific-css', get_template_directory_uri().'/assets/css/magnific-popup.css', array(), '1.0', 'all' );
    wp_enqueue_style('owlcarousel-css', get_template_directory_uri().'/assets/css/owl.carousel.css', array(), '1.0', 'all' );
    wp_enqueue_style('main-css', get_template_directory_uri().'/assets/css/style.css', array(), '1.0', 'all' );
    wp_enqueue_style('responsive-css', get_template_directory_uri().'/assets/css/responsive.css', array(), '1.0', 'all' );
    
    wp_enqueue_style('style-css', get_stylesheet_uri());

    // JS Load
    wp_enqueue_script('popper-js', get_template_directory_uri().'/assets/js/popper.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('owlcarousel-js', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('magnific-js', get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('isotope-js', get_template_directory_uri().'/assets/js/isotope.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('imageloaded-js', get_template_directory_uri().'/assets/js/imageloaded.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('counter-js', get_template_directory_uri().'/assets/js/jquery.counterup.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('waypoint-js', get_template_directory_uri().'/assets/js/waypoint.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('main-js', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts','inspire_css_js_load');

require_once get_template_directory(  ).'/inc/inspire-one-activation.php';





