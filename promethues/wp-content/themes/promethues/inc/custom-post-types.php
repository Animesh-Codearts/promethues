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