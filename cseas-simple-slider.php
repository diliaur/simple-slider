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
	function cseas_simple_slider_enqueue_scripts_styles() {
		wp_enqueue_script( 'cseas-simple-slider-js', plugins_url( 'slider.js', __FILE__ ), array( 'jquery' ) ); // slider.js
		wp_enqueue_style( 'cseas-simple-slider-css', plugins_url( 'slider.css', __FILE__ ) );
	}
	add_action( 'wp_enqueue_scripts', 'cseas_simple_slider_enqueue_scripts_styles' );

	/**
	 *
	 * Display the slider.
	 *
	 */
	function cseas_simple_slider_shortcode() {
		?>
		<div class="container-slider">
			<div class="container-slides">
				<ul class="slide-list">
					<?php
					$args = array(
						'category_name' => 'Featured',
						'posts_per_page' => 5,
						'meta_key' => '_thumbnail_id'
						);
					$my_query = new WP_Query( $args );
					while ( $my_query->have_posts() ) : $my_query->the_post();
					//$do_not_duplicate = $post->ID; idk if this is necessary?
						if ( has_post_thumbnail() ) { // if in this order, # slides is impacted.
						?>
							<li>
								<div class="title-and-date">
									<span class="title"><a href=<?php the_permalink(); ?>><?php the_title(); ?></a></span>
									<span class="date"><?php echo get_the_date(); ?></span>
								</div>
								<div class="categories"><?php the_category(); ?></div>
								<a href=<?php the_permalink(); ?>>
									<?php the_post_thumbnail(null, array( 'class' => 'current-slide-img' )); ?>
								</a>
								<div class="excerpt"><?php the_excerpt(); ?></div>
							</li>
						<?php 
						}
					endwhile; 
					wp_reset_postdata(); // since used the_post()
					?>
				</ul>
				<div class="slide-nav">
					<div class="arrow-left"><</div>
					<div class="cs-dots"></div>
					<div class="arrow-right">></div>
					<div class="clearfix-dt"></div>
				</div>
			</div>
			<div class="container-titles"></div>
			<div class="clearfix-dt"></div>
		</div><!--end slider container-->
		<?php
	}
	add_shortcode( 'cseas-simple-slider', 'cseas_simple_slider_shortcode' );
?>