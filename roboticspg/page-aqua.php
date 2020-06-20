<?php

/**
 * Template Name: Aqua Page
 */

get_header(); ?>

<main role="main">

	<?php
	$sortingFilter = array(
		'post_type' => 'post',
		'meta_key' => '_custom_post_order',
		'orderby' => 'meta_value',
		'order' => 'ASC'
	);

	$posts = new WP_query($sortingFilter);

	if ($posts->have_posts()) :
		while ($posts->have_posts()) :
			$posts->the_post();

			// This if statement will skip posts that were assigned a custom sort value and then had that value removed 
			if (!empty(get_post_meta($post->ID, '_custom_post_order', true))) : 
				get_template_part('content', get_post_format()); 

			endif;
		endwhile;
	endif;
	
	wp_reset_postdata(); // Set up post data for next loop

	?>

</main>

<?php get_footer(); ?>