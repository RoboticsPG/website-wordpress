<?php 

$page_color = get_post_meta(get_query_var('page_id'), '_custom_page_color', true);
$post_theme = get_post_meta($post->ID, '_custom_post_theme', true);

$coloring = get_post_coloring($page_color, $post_theme);

?>

<section class="subsection   <?php echo $coloring["button_background"]?> <?php echo $coloring["background_color"]?> <?php echo $coloring["heading_color"]?>">
    <div class="row has-text-align-center <?php echo $coloring["button_highlight"]?> <?php echo $coloring["text_color"]?>">
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