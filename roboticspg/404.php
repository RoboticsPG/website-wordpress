<?php get_header(); ?>
<main role="main" class="has-blue-light-background-color">
	<!-- section -->
	<section>

		<!-- article -->
		<article id="post-404">`
			<img class="center-image" src="<?php echo get_template_directory_uri(); ?>/img/icons/spanner.png" width="5%" alt="spanner">
			</br>

			<h1 class="has-white-light-color"><?php _e('We Couldn\'t Find the Page', 'html5blank'); ?></h1>
			<h2 class="center-text">
				<a class="has-white-light-color" href="<?php echo home_url(); ?>"><?php _e('Would you like to return home?', 'html5blank'); ?></a>
			</h2>

		</article>
		<!-- /article -->

	</section>
	<!-- /section -->
</main>


<?php get_footer(); ?>