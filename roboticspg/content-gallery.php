<?php
if (get_post_meta($post->ID, '_custom_post_theme', true) == "colored") {
    $backgroundColor = "has-pink-light-background-color";
    $textColor = "has-text-black-color";
} else {
    // white themed
    $backgroundColor = "has-white-light-background-color";
    $textColor = "has-text-black-color";
}

?>

<section class="subsection <?php echo $backgroundColor ?>">
    <div class="row has-text-align-center <?php echo $textColor ?>">
        <div class="col-md-6 col-sm-12 has-vertical-align-center">
            <?php if (has_post_thumbnail()) : ?>
                <?php echo get_the_post_thumbnail($_post->ID, 'full') ?>
            <?php endif ?>
        </div>

        <div class="col-md-6 col-sm-12 has-vertical-align-center">
            <h2><?php the_title(); ?></h2>

            <?php the_content(); ?>
        </div>
    </div>

    </div>
</section>