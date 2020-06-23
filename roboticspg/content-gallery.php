<?php 

$page_color = get_post_meta(get_query_var('page_id'), '_custom_page_color', true);
$post_theme = get_post_meta($post->ID, '_custom_post_theme', true);

$coloring = get_post_coloring($page_color, $post_theme);

?>

<section class="subsection  blue-background-button <?php echo $coloring["background_color"]?> <?php echo $coloring["heading_color"]?>">
    <div class="has-text-align-center blue-background-button <?php echo $coloring["text_color"]?>">
        <div class="col-md-4 col-sm-6 has-vertical-align-center">
            <?php if (has_post_thumbnail()) : ?>
                <?php echo get_the_post_thumbnail($_post->ID, 'full') ?>
            <?php endif ?>
        </div>

        
    </div>

    </div>
</section>