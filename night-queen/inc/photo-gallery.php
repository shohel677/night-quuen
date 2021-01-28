<?php

function night_queen_photo_gallery_custom_post_type() {

    $labels = array(
        'name'                  => esc_html_x( 'Photo Gallery', 'Post type general name', 'night-queen' ),
        'singular_name'         => esc_html_x( 'Photo Gallery Item', 'Post type singular name', 'night-queen' ),
        'menu_name'             => esc_html_x( 'Photo Gallery', 'Admin Menu text', 'night-queen' ),
        'name_admin_bar'        => esc_html_x( 'Photo Gallery Item', 'Add New on Toolbar', 'night-queen' ),
        'add_new'               => esc_html__( 'Add New', 'night-queen' ),
        'add_new_item'          => esc_html__( 'Add New Photo Gallery Item', 'night-queen' ),
        'new_item'              => esc_html__( 'New Photo Gallery Item', 'night-queen' ),
        'edit_item'             => esc_html__( 'Edit Photo Gallery Item', 'night-queen' ),
        'view_item'             => esc_html__( 'View Photo Gallery Item', 'night-queen' ),
        'view_items'            => esc_html__( 'View Photo Gallery Items', 'night-queen' ),
        'all_items'             => esc_html__( 'All Photo Gallery Items', 'night-queen' ),
        'search_items'          => esc_html__( 'Search Photo Gallery Items', 'night-queen' ),
        'parent_item_colon'     => esc_html__( 'Parent Photo Gallery Items:', 'night-queen' ),
        'not_found'             => esc_html__( 'No Photo Gallery Items found.', 'night-queen' ),
        'not_found_in_trash'    => esc_html__( 'No Photo Gallery Items found in Trash.', 'night-queen' ),
        'featured_image'        => esc_html_x( 'Photo Gallery Item Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'night-queen' ),
        'set_featured_image'    => esc_html_x( 'Set Photo Gallery item image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'night-queen' ),
        'remove_featured_image' => esc_html_x( 'Remove Photo Gallery item image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'night-queen' ),
        'use_featured_image'    => esc_html_x( 'Use as Photo Gallery item image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'night-queen' ),
        'archives'              => esc_html_x( 'Photo Gallery archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'night-queen' ),
        'insert_into_item'      => esc_html_x( 'Insert into Photo Gallery item', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'night-queen' ),
        'uploaded_to_this_item' => esc_html_x( 'Uploaded to this Photo Gallery item', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'night-queen' ),
        'filter_items_list'     => esc_html_x( 'Filter Photo Gallery items list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'night-queen' ),
        'items_list_navigation' => esc_html_x( 'Photo Gallery items list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'night-queen' ),
        'items_list'            => esc_html_x( 'Photo Gallery items list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'night-queen' ),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-format-gallery',
        'supports' => array('title', 'editor'),
        'rewrite' => array('slug' => 'photo-gallery')
    );
    register_post_type('night_queen_photo', $args);


    
}

add_action('init', 'night_queen_photo_gallery_custom_post_type');
function night_queen_video_gallery_custom_post_type() {

    $labels = array(
        'name'                  => esc_html_x( 'Video Gallery', 'Post type general name', 'night-queen' ),
        'singular_name'         => esc_html_x( 'Video Gallery Item', 'Post type singular name', 'night-queen' ),
        'menu_name'             => esc_html_x( 'Video Gallery', 'Admin Menu text', 'night-queen' ),
        'name_admin_bar'        => esc_html_x( 'Video Gallery Item', 'Add New on Toolbar', 'night-queen' ),
        'add_new'               => esc_html__( 'Add New', 'night-queen' ),
        'add_new_item'          => esc_html__( 'Add New Video Gallery Item', 'night-queen' ),
        'new_item'              => esc_html__( 'New Video Gallery Item', 'night-queen' ),
        'edit_item'             => esc_html__( 'Edit Video Gallery Item', 'night-queen' ),
        'view_item'             => esc_html__( 'View Video Gallery Item', 'night-queen' ),
        'view_items'            => esc_html__( 'View Video Gallery Items', 'night-queen' ),
        'all_items'             => esc_html__( 'All Video Gallery Items', 'night-queen' ),
        'search_items'          => esc_html__( 'Search Video Gallery Items', 'night-queen' ),
        'parent_item_colon'     => esc_html__( 'Parent Video Gallery Items:', 'night-queen' ),
        'not_found'             => esc_html__( 'No Video Gallery Items found.', 'night-queen' ),
        'not_found_in_trash'    => esc_html__( 'No Video Gallery Items found in Trash.', 'night-queen' ),
        'featured_image'        => esc_html_x( 'Video Gallery Item Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'night-queen' ),
        'set_featured_image'    => esc_html_x( 'Set Video Gallery item image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'night-queen' ),
        'remove_featured_image' => esc_html_x( 'Remove Video Gallery item image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'night-queen' ),
        'use_featured_image'    => esc_html_x( 'Use as Video Gallery item image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'night-queen' ),
        'archives'              => esc_html_x( 'Video Gallery archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'night-queen' ),
        'insert_into_item'      => esc_html_x( 'Insert into Video Gallery item', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'night-queen' ),
        'uploaded_to_this_item' => esc_html_x( 'Uploaded to this Video Gallery item', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'night-queen' ),
        'filter_items_list'     => esc_html_x( 'Filter Video Gallery items list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'night-queen' ),
        'items_list_navigation' => esc_html_x( 'Video Gallery items list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'night-queen' ),
        'items_list'            => esc_html_x( 'Video Gallery items list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'night-queen' ),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-controls-play',
        'supports' => array('title', 'editor'),
        'rewrite' => array('slug' => 'video-gallery')
    );
    register_post_type('night-queen_video', $args);


    
}

add_action('init', 'night_queen_video_gallery_custom_post_type');