<?php 

$page_color = get_post_meta(get_query_var('page_id'), '_custom_page_color', true);
$post_theme = get_post_meta($post->ID, '_custom_post_theme', true);

$coloring = get_post_coloring($page_color, $post_theme);

?>

<section class="<?php echo get_subsection_class($coloring)?>">
    <div class="has-text-align-center <?php echo $coloring["text_color"]?>">

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