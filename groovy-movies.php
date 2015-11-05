<?php
/*
Plugin Name: groovy-movies
Description:    Create a custom post type called Movies 
Version:        1.0
Author:         Patrick Martin
Text Domain:    groovy-movies
*/

// Register Movie Post Type
function pmgm_reg_post_movies() {
    $args = array(
        'public' => true,
        'label'  => __( 'Movies', 'groovy-movies' ),
    );

    register_post_type( 'movies', $args );
}
add_action( 'init', 'pmgm_reg_post_movies' );

// Register 'genre' taxonomy
function pmgm_reg_tax_genre() {
    register_taxonomy( 'genre', array( 'movies' ),
        array(
            'label' => __( 'Genre', 'groovy-movies' ),
            'rewrite' => array( 'slug' => 'genre' ),
            'hierarchical' => true, 
        )
    );
}
add_action( 'init', 'pmgm_reg_tax_genre' );
