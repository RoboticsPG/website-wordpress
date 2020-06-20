<?php
$page_color = get_post_meta(get_query_var('page_id'), '_custom_page_color', true);

if (get_post_meta($post->ID, '_custom_post_theme', true) == "colored") {
    // colored theme
    $background_color = "has-$page_color-background-color";
    $text_color = $heading_color = "has-white-light-color";

} else {
    // white themed
    $background_color = "has-white-light-background-color";
    $text_color = "has-text-black-color";
    $heading_color = "has-heading-$page_color-color";
}

?>

<section class="subsection <?php echo $backgroundColor?> <?php echo $heading_color?>">
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