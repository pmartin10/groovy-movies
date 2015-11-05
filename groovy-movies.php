<?php
/*
Plugin Name: groovy-movies
Description:    Create a custom post type called Movies 
Version:        1.0
Author:         Patrick Martin
*/

// Register Movie Post Type
function wpdocs_codex_custom_init() {
    $args = array(
        'public' => true,
        'label'  => __( 'Movies' ),
    );

    register_post_type( 'movies', $args );
}
add_action( 'init', 'wpdocs_codex_custom_init' );

// Register 'genre' taxonomy
function wpdocs_create_genre() {
    register_taxonomy( 'genre', array( 'movies' ),
        array(
            'label' => __( 'Genre' ),
            'rewrite' => array( 'slug' => 'genre' ),
            'hierarchical' => true, 
        )
    );
}
add_action( 'init', 'wpdocs_create_genre' );
