<?php   

     /*Custom Post type start*/
    function cw_post_type_banner() {
    $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    );
    $labels = array(
    'name' => _x('Banner', 'plural'),
    'singular_name' => _x('Banner', 'singular'),
    'menu_name' => _x('Banner', 'admin menu'),
    'name_admin_bar' => _x('Banner', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Banner'),
    'new_item' => __('New Banner'),
    'edit_item' => __('Edit Banner'),
    'view_item' => __('View Banner'),
    'all_items' => __('All Banner'),
    'search_items' => __('Search Banner'),
    'not_found' => __('No Banner found.'),
    );
    $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'banner'),
    'has_archive' => true,
    'hierarchical' => false,
    'menu_icon' => 'dashicons-format-image',
    );
    register_post_type('cpt_banner', $args);
    }
    add_action('init', 'cw_post_type_banner');



         /*Custom Post type start*/
    function cw_post_type_bulletin() {
    $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    );
    $labels = array(
    'name' => _x('Bulletin', 'plural'),
    'singular_name' => _x('Bulletin', 'singular'),
    'menu_name' => _x('Bulletin', 'admin menu'),
    'name_admin_bar' => _x('Bulletin', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Bulletin'),
    'new_item' => __('New Bulletin'),
    'edit_item' => __('Edit Bulletin'),
    'view_item' => __('View Bulletin'),
    'all_items' => __('All Bulletin'),
    'search_items' => __('Search Bulletin'),
    'not_found' => __('No Bulletin found.'),
    );
    $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'bulletin'),
    'has_archive' => true,
    'hierarchical' => false,
    'menu_icon' => 'dashicons-format-quote',
    );
    register_post_type('cpt_bulletin', $args);
    }
    add_action('init', 'cw_post_type_bulletin');


             /*Custom Post type start*/
    function cw_post_type_before_after() {
    $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    );
    $labels = array(
    'name' => _x('Before After', 'plural'),
    'singular_name' => _x('Before After', 'singular'),
    'menu_name' => _x('Before After', 'admin menu'),
    'name_admin_bar' => _x('Before After', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Before After'),
    'new_item' => __('New Before After'),
    'edit_item' => __('Edit Before After'),
    'view_item' => __('View Before After'),
    'all_items' => __('All Before After'),
    'search_items' => __('Search Before After'),
    'not_found' => __('No Before After found.'),
    );
    $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'beforeafter'),
    'has_archive' => true,
    'hierarchical' => false,
    'menu_icon' => 'dashicons-share-alt',
    );
    register_post_type('cpt_beforeafter', $args);
    }
    add_action('init', 'cw_post_type_before_after');



             /*Custom Post type start*/
    function cw_post_type_testimonials() {
    $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    );
    $labels = array(
    'name' => _x('Testimonials', 'plural'),
    'singular_name' => _x('Testimonials', 'singular'),
    'menu_name' => _x('Testimonials', 'admin menu'),
    'name_admin_bar' => _x('Testimonials', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Testimonials'),
    'new_item' => __('New Testimonials'),
    'edit_item' => __('Edit Testimonials'),
    'view_item' => __('View Testimonials'),
    'all_items' => __('All Testimonials'),
    'search_items' => __('Search Testimonials'),
    'not_found' => __('No Testimonials found.'),
    );
    $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'testimonials'),
    'has_archive' => true,
    'hierarchical' => false,
    'menu_icon' => 'dashicons-format-status',
    );
    register_post_type('cpt_testimonials', $args);
    }
    add_action('init', 'cw_post_type_testimonials');




             /*Custom Post type start*/
    function cw_post_type_doctors() {
    $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    );
    $labels = array(
    'name' => _x('Expert Doctors', 'plural'),
    'singular_name' => _x('Expert Doctors', 'singular'),
    'menu_name' => _x('Expert Doctors', 'admin menu'),
    'name_admin_bar' => _x('Expert Doctors', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Expert Doctors'),
    'new_item' => __('New Expert Doctors'),
    'edit_item' => __('Edit Expert Doctors'),
    'view_item' => __('View Expert Doctors'),
    'all_items' => __('All Expert Doctors'),
    'search_items' => __('Search Expert Doctors'),
    'not_found' => __('No Expert Doctors found.'),
    );
    $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'doctors'),
    'has_archive' => true,
    'hierarchical' => false,
    'menu_icon' => 'dashicons-businesswoman',
    );
    register_post_type('cpt_doctors', $args);
    }
    add_action('init', 'cw_post_type_doctors');



             /*Custom Post type start*/
    function cw_post_type_services() {
    $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    );
    $labels = array(
    'name' => _x('Services', 'plural'),
    'singular_name' => _x('Services', 'singular'),
    'menu_name' => _x('Services', 'admin menu'),
    'name_admin_bar' => _x('Services', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Services'),
    'new_item' => __('New Services'),
    'edit_item' => __('Edit Services'),
    'view_item' => __('View Services'),
    'all_items' => __('All Services'),
    'search_items' => __('Search Services'),
    'not_found' => __('No Services found.'),
    );
    $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'services'),
    'has_archive' => true,
    'hierarchical' => false,
    'menu_icon' => 'dashicons-format-status',
    );
    register_post_type('cpt_services', $args);
    }
    add_action('init', 'cw_post_type_services');



                 /*Custom Post type start*/
    function cw_post_type_practice() {
    $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    );
    $labels = array(
    'name' => _x('Practice', 'plural'),
    'singular_name' => _x('Practice', 'singular'),
    'menu_name' => _x('Practice', 'admin menu'),
    'name_admin_bar' => _x('Practice', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Practice'),
    'new_item' => __('New Practice'),
    'edit_item' => __('Edit Practice'),
    'view_item' => __('View Practice'),
    'all_items' => __('All Practice'),
    'search_items' => __('Search Practice'),
    'not_found' => __('No Practice found.'),
    );
    $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'practice'),
    'has_archive' => true,
    'hierarchical' => false,
    'menu_icon' => 'dashicons-image-filter',
    );
    register_post_type('cpt_practice', $args);
    }
    add_action('init', 'cw_post_type_practice');