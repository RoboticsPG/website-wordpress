<?php 

$page_color = get_post_meta(get_query_var('page_id'), '_custom_page_color', true);

if (get_post_meta($post->ID, '_custom_post_theme', true) == "colored") {
    // colored theme
    $background_color = "has-$page_color-background-color";
    $text_color = "has-text-black-color";

} else {
    // white themed
    $background_color = "has-white-light-background-color";
    $text_color = "has-text-black-color";
    $heading_color = "has-$page_color";
}
?>

<section class="subsection <?php echo $background_color?>">
    <div class="has-text-align-center <?php echo $text_color?>">
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