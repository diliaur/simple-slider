<?php
	/*
	Plugin Name: CSEAS Simple Slider
	Plugin URI: https://www.github.com/diliaur/simple-slider
	Description: A slider based on the featured image on featured post.
	Version: 1.0
	Author: Diliaur Tellei
	Author URI: http://diliaur.github.io
	License: GPL2
	*/

	/**
	 *
	 * Enqueue scripts and styles
	 *
	 */
	function simple_slider_enqueue_scripts_styles() {
		//wp_enqueue_script(); // jquery
		//wp_enqueue_script( 'cseas-simple-slider', plugins_url( 'slider.js', __FILE__ ), array( 'jquery' ) ); // slider.js
		//wp_enqueue_style( 'slider', plugins_url( 'slider.css', __FILE__ ) );
	}
	//add_action( 'wp_enqueue_scripts', 'simple_slider_enqueue_scripts_styles' );

	/**
	 *
	 * Display something.
	 *
	 */
	function simple_slider_shortcode() {

		$result = '';

		wp_reset_query(); // to reset the query before calling a new loop
		global $post; // need this? apparently? https://digwp.com/2011/05/loops/

		$args = array( 'category_name' => 'Featured' );

		$featured_posts = get_posts($args);

		foreach ( $featured_posts as $post ) : setup_postdata( $post );// it HAS to be as $post, for some reason other vars won't work, probably something to do with the LOOP
			$result .= '<div>' . get_the_post_thumbnail() . '</div>';
			$result .= '<div>' . the_title() . '</div>';
			$result .= '<div>' . the_excerpt() . '</div>';
		endforeach;


		return $result;
	}
	add_shortcode( 'simple-slider-shortcode', 'simple_slider_shortcode' );
?>