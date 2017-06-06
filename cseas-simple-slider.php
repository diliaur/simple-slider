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
		wp_enqueue_script( 'cseas-simple-slider-js', plugins_url( 'slider.js', __FILE__ ), array( 'jquery' ) ); // slider.js
		wp_enqueue_style( 'cseas-simple-slider-css', plugins_url( 'slider.css', __FILE__ ) );
	}
	add_action( 'wp_enqueue_scripts', 'simple_slider_enqueue_scripts_styles' );

	/**
	 *
	 * Display the slider.
	 *
	 */
	function simple_slider_shortcode() {
		?>
		<div class="container-slider">
		<div class="container-slides">
		<ul class="slide-list">

			<?php 
			$my_query = new WP_Query( 'category_name=Featured&posts_per_page=5' );
			while ( $my_query->have_posts() ) : $my_query->the_post();
			$do_not_duplicate = $post->ID; ?>
				<li>
					<div class="title-and-date">
						<span class="title"><?php the_title(); ?></span>
						<span class="date"><?php the_date(); ?></span>
					</div>
					<div class="categories"><?php the_category(); ?></div>
					<?php the_post_thumbnail(null, array( 'class' => 'current-slide-img' )); ?>
					<div class="excerpt"><?php the_excerpt(); ?></div>
				</li>
			<?php endwhile; ?>
		
		</ul>
		<div class="slide-nav">
			<div class="arrow-left">&#9668;</div>
			<div class="dots"></div>
			<div class="arrow-right">&#9658;</div>
			<div class="clearfix-dt"></div>
		</div>
		</div>
		<div class="container-titles"></div>
		<div class="clearfix-dt"></div>
		
		<?php

	}
	add_shortcode( 'simple-slider-shortcode', 'simple_slider_shortcode' );
?>