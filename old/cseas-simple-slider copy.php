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

		$result = "
			<div class='container'>
				<div class='row'>
					<div class='col-md-12'>
						<div class='container-slider'>
							<div class='container-slides'>
								<ul class='slide-list'>";

		$args = array( 'category_name' => 'Featured' );
		$featured_posts = get_posts($args);

		foreach ($featured_posts as $post) :
			$result .= '<li>' . the_title() . '</li>';
		endforeach;
		
	$result .= "</ul>
								<div class='slide-nav'>
									<div class='arrow-left'>
										&#9668;
									</div>
									<div class='dots'>
									</div>
									<div class='arrow-right'>
										&#9658;
									</div>
									<div class='clearfix-dt'></div>
								</div>
							</div>
							<div class='container-titles'>
								<!--
								<div class='slide-title'>
									<span class='title-inner'>This title tests how long titles can get. How many chars: 60</span>
									<span class='date'>March 15, 2017</span>
								</div>
								-->

							</div>
							<div class='clearfix-dt'></div>
						</div>
					</div>
				</div>
			</div>";

		return $result;
	}
	add_shortcode( 'simple-slider-shortcode', 'simple_slider_shortcode' );
?>