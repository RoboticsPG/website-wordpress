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

<section class="subsection <?php echo $backgroundColor?>">
    <div class="has-text-align-center <?php echo $textColor?>">
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