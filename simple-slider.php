<?php
	/*
	Plugin Name: Awesomeness Creator
	Plugin URI: http://my-awesomeness-emporium.com
	Description: a plugin to create awesomeness and spread joy
	Version: 1.2
	Author: Mr. Awesome
	Author URI: http://mrtotallyawesome.com
	License: GPL2
	*/

	/**
	 *
	 * Enqueue scripts and styles
	 *
	 */
	function simple_slider_enequeue_scripts_styles() {
		wp_enqueue_script();
		wp_enqueue_style( 'slider', plugin_dir_path(__FILE__) . 'slider.css' );
	}

	/**
	 *
	 * Display something. This is a test to check enqueueing and how to add stuff
	 * to a page T__T
	 *
	 */
	function simple_slider_shortcode() {
		return "simple slider";
	}
	add_shortcode( 'simple-slider-shortcode', 'simple_slider_shortcode' );
?>

<html>
<head>
	<title></title>
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- slider css -->
	<link rel="stylesheet" type="text/css" href="slider.css">

	<!-- slider JS -->
	<script src="slider.js"></script>

</head>

<body>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="container-slider">
				<div class="container-slides">
					<?php 
						$args = array('category_name'=>'Featured'));
						$featured_posts = get_posts($args);

						foreach ($featured_posts as $post):
							echo get_the_post_thumbnail();
						endforeach;
					?>

					<ul class="slide-list">
						<li>
							<div class="title-and-date">
								<span class="title">Title 1</span>
								<span class="date">March 20, 2017</span>
							</div>
							<div class="categories">
								<span class="category">category one</span>
								<span class="category">category two</span>
								<span class="category">and etc</span>
							</div>
							<img class="current-slide-img" src="img/931.png">
							<div class="excerpt">
								excerpt the first
							</div>
						</li>
					</ul>
					<div class="slide-nav">
						<div class="arrow-left">
							&#9668;
						</div>
						<div class="dots">
						</div>
						<div class="arrow-right">
							&#9658;
						</div>
						<div class="clearfix-dt"></div>
					</div>
				</div>
				<div class="container-titles">
					<!--
					<div class="slide-title">
						<span class="title-inner">This title tests how long titles can get. How many chars: 60</span>
						<span class="date">March 15, 2017</span>
					</div>
					-->

				</div>
				<div class="clearfix-dt"></div>
			</div>
		</div>
	</div>
</div>

<span class="pause">Pause</span>

</body>
</html>