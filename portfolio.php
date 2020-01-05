<?php
/*
Plugin Name: Portfolio Custom Post Type
Plugin URI: https://amberalter.com
Description: A plugin that will create a custom post type for portfolio items.
Version: 1.0
Author: Amber Alter
Author URI: https://amberalter.com
License: GPLv2
*/

add_action( 'init', 'create_portfolio_cpt' );

function create_portfolio_cpt() {
    register_post_type( 'portfolio_topic',
        array(       
            'labels' => array(
                'name'               => 'Projects',
                'singular_name'      => 'Project',
				'menu_name'          => 'Portfolio',
				'name_admin_bar'     => 'Portfolio Topic',
				'add_new'            => 'Add New',
				'add_new_item'       => 'Add New Topic',
				'edit_item'          => 'Edit Topic',
				'new_item'           => 'New Topic',
				'view_item'          => 'View Topic',
				'search_items'       => 'Search Topics',
				'not_found'          => 'No topics found',
				'not_found_in_trash' => 'No topics found in trash',
				'all_items'          => 'Topics',
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields', 'page-attributes' ),
            'show_in_rest' => true,
            'taxonomies' => array( '' ),            
			'menu_icon'           => 'dashicons-portfolio',
			'has_archive'         => 'portfolio'
        )
    );
}
?>