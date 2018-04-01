<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

            <?php

            $featuredImage = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
            if (empty($featuredImage)) {
                $heroStyle = "";
                $heroSize = "is-small";
            } else {
                $heroStyle = "background-image: linear-gradient(rgba(70, 130, 180, 0.5), rgba(70, 130, 180, 0.5)), url('" . $featuredImage . "')";
                $heroSize = "is-large";
            }

            ?>

            <div class="page-header hero is-bold <?php echo $heroSize; ?>" style="<?php echo $heroStyle; ?>">
                <div class="hero-body">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
