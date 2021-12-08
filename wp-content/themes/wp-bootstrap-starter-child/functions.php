<?php
    function custom_link() {
    
        wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/assets/css/slick.css', 50);
    
        wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/assets/js/slick.min.js');
        wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/assets/js/custom.js');
    
    }
    add_action( 'wp_enqueue_scripts', 'custom_link',15 );


    if ( ! function_exists('work') ) {

        // Register Custom Post Type
        function work() {
        
            $labels = array(
                'name'                  => _x( 'Post Types', 'Post Type General Name', 'text_domain' ),
                'singular_name'         => _x( 'Work', 'Post Type Singular Name', 'text_domain' ),
                'menu_name'             => __( 'Work', 'text_domain' ),
                'name_admin_bar'        => __( 'Works', 'text_domain' ),
                'archives'              => __( 'Work Archives', 'text_domain' ),
                'attributes'            => __( 'Work Attributes', 'text_domain' ),
                'parent_item_colon'     => __( 'Parent Work:', 'text_domain' ),
                'all_items'             => __( 'All Works', 'text_domain' ),
                'add_new_item'          => __( 'Add New Work', 'text_domain' ),
                'add_new'               => __( 'Add New', 'text_domain' ),
                'new_item'              => __( 'New Work', 'text_domain' ),
                'edit_item'             => __( 'Edit Work', 'text_domain' ),
                'update_item'           => __( 'Update Work', 'text_domain' ),
                'view_item'             => __( 'View Work', 'text_domain' ),
                'view_items'            => __( 'View Works', 'text_domain' ),
                'search_items'          => __( 'Search Work', 'text_domain' ),
                'not_found'             => __( 'Not found', 'text_domain' ),
                'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
                'featured_image'        => __( 'Featured Image', 'text_domain' ),
                'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
                'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
                'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
                'insert_into_item'      => __( 'Insert into Work', 'text_domain' ),
                'uploaded_to_this_item' => __( 'Uploaded to this work', 'text_domain' ),
                'items_list'            => __( 'Works list', 'text_domain' ),
                'items_list_navigation' => __( 'Works list navigation', 'text_domain' ),
                'filter_items_list'     => __( 'Filter Works list', 'text_domain' ),
            );
            $args = array(
                'label'                 => __( 'Work', 'text_domain' ),
                'description'           => __( 'Post Type Description', 'text_domain' ),
                'labels'                => $labels,
                'supports'              => array( 'title', 'editor', 'thumbnail' ),
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
            );
            register_post_type( 'work', $args );
        
        }
        add_action( 'init', 'work', 0 );
        
        }
    
    
    if ( ! function_exists('story') ) {

        // Register Custom Post Type
        function story() {
        
            $labels = array(
                'name'                  => _x( 'Post Types', 'Post Type General Name', 'text_domain' ),
                'singular_name'         => _x( 'Story', 'Post Type Singular Name', 'text_domain' ),
                'menu_name'             => __( 'Story', 'text_domain' ),
                'name_admin_bar'        => __( 'Stories', 'text_domain' ),
                'archives'              => __( 'Story Archives', 'text_domain' ),
                'attributes'            => __( 'Story Attributes', 'text_domain' ),
                'parent_item_colon'     => __( 'Parent Story:', 'text_domain' ),
                'all_items'             => __( 'All Stories', 'text_domain' ),
                'add_new_item'          => __( 'Add New Story', 'text_domain' ),
                'add_new'               => __( 'Add New', 'text_domain' ),
                'new_item'              => __( 'New Story', 'text_domain' ),
                'edit_item'             => __( 'Edit Story', 'text_domain' ),
                'update_item'           => __( 'Update Story', 'text_domain' ),
                'view_item'             => __( 'View Story', 'text_domain' ),
                'view_items'            => __( 'View Stories', 'text_domain' ),
                'search_items'          => __( 'Search Story', 'text_domain' ),
                'not_found'             => __( 'Not found', 'text_domain' ),
                'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
                'featured_image'        => __( 'Featured Image', 'text_domain' ),
                'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
                'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
                'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
                'insert_into_item'      => __( 'Insert into Story', 'text_domain' ),
                'uploaded_to_this_item' => __( 'Uploaded to this Story', 'text_domain' ),
                'items_list'            => __( 'Stories list', 'text_domain' ),
                'items_list_navigation' => __( 'Stories list navigation', 'text_domain' ),
                'filter_items_list'     => __( 'Filter Stories list', 'text_domain' ),
            );
            $args = array(
                'label'                 => __( 'Story', 'text_domain' ),
                'description'           => __( 'Post Type Description', 'text_domain' ),
                'labels'                => $labels,
                'supports'              => array( 'title', 'editor', 'thumbnail' ),
                'taxonomies'            => array( 'category', 'post_tag' ),
                'hierarchical'          => false,
                'public'                => true,
                'show_ui'               => true,
                'show_in_menu'          => true,
                'menu_position'         => 6,
                'show_in_admin_bar'     => true,
                'show_in_nav_menus'     => true,
                'can_export'            => true,
                'has_archive'           => true,
                'exclude_from_search'   => false,
                'publicly_queryable'    => true,
                'capability_type'       => 'page',
            );
            register_post_type( 'story', $args );
        
        }
        add_action( 'init', 'story', 0 );
        
        }


        if( function_exists('acf_add_options_page') ) {
	
            acf_add_options_page(array(
                'page_title' 	=> 'Theme General Settings',
                'menu_title'	=> 'Theme Settings',
                'menu_slug' 	=> 'theme-general-settings',
                'capability'	=> 'edit_posts',
                'redirect'		=> false
            ));
            
            acf_add_options_sub_page(array(
                'page_title' 	=> 'Testimonial',
                'menu_title'	=> 'Testimonials',
                'parent_slug'	=> 'theme-general-settings',
            ));
            
            acf_add_options_sub_page(array(
                'page_title' 	=> 'Theme Header Settings',
                'menu_title'	=> 'Header',
                'parent_slug'	=> 'theme-general-settings',
            ));
            
            acf_add_options_sub_page(array(
                'page_title' 	=> 'Theme Footer Settings',
                'menu_title'	=> 'Footer',
                'parent_slug'	=> 'theme-general-settings',
            ));
            
        }
?>