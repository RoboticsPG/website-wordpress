<?php

$page_color = get_post_meta(get_query_var('page_id'), '_custom_page_color', true);
$post_theme = get_post_meta($post->ID, '_custom_post_theme', true);

$coloring = get_post_coloring($page_color, $post_theme);

?>
<?php if (has_post_thumbnail()) : ?>
    <section class="subsection parallax <?php echo $coloring["background_color"] ?>" style="background-image: url(<?php echo get_the_post_thumbnail_url($_post->ID, 'full') ?>)">
    </section>

<?php endif ?>