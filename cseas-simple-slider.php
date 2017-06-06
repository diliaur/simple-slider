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
		/*
		$result = '';

		wp_reset_query(); // to reset the query before calling a new loop
		global $post; // need this? apparently? https://digwp.com/2011/05/loops/

		$args = array( 'category_name' => 'Featured' );

		$featured_posts = get_posts($args);

		$result .= "<ul>";

		foreach ( $featured_posts as $post ) : setup_postdata( $post );// it HAS to be as $post, for some reason other vars won't work, probably something to do with the LOOP
			
			$result .= "<li>" . the_title() . "</li>";
			
		endforeach;

		$result .= "</ul>";

		wp_reset_query(); // should I have this here to clean up or does it ruin more than it helps?
		print_r($result);
		return $result;
		*/
		?>
		<ul>

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
					<?php the_post_thumbnail(); ?>
					<div class="excerpt"><?php the_excerpt(); ?></div>
				</li>
			<?php endwhile; ?>
		
		</ul>
		
		<?php
	}
	add_shortcode( 'simple-slider-shortcode', 'simple_slider_shortcode' );
?>