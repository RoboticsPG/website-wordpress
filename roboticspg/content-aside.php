<section class="subsection has-aqua-light-background-color">
    <div class="has-white-light-color has-text-align-center">
        <!-- need to do coloring -->

        <?php if (has_post_thumbnail()) : ?>
            <div class="image-icon">
                <?php echo get_the_post_thumbnail($_post->ID, 'thumbnail') ?>
            </div>
            </br>
        <?php endif ?>

        <h2><?php the_title(); ?></h2>

        <?php the_content(); ?>

    </div>
</section>