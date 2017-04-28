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
	function simple_slider_enequeue_scripts_styles() {
		wp_enqueue_script(); // jquery
		wp_enqueue_script(); // slider.js
		wp_enqueue_style( 'slider', plugin_dir_path(__FILE__) . 'slider.css' );
	}

	/**
	 *
	 * Display something. This is a test to check enqueueing and how to add stuff
	 * to a page T__T
	 *
	 */
	function simple_slider_shortcode() {

		$result = "
			<div class='container'>
				<div class='row'>
					<div class='col-md-12'>
						<div class='container-slider'>
							<div class='container-slides'>
								<ul class='slide-list'>
									<li>
										<div class='title-and-date'>
											<span class='title'>Title 1</span>
											<span class='date'>March 20, 2017</span>
										</div>
										<div class='categories'>
											<span class='category'>category one</span>
											<span class='category'>category two</span>
											<span class='category'>and etc</span>
										</div>
										<img class='current-slide-img' src=" . plugins_url( 'img/931.png', __FILE__ ) . ">
										<div class='excerpt'>
											excerpt the first
										</div>
									</li>
								</ul>
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