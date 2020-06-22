<?php


function theme_styles()
{
    /*
     * This if() statement is unnecessary, as wp_enqueue_scripts
     * doesn't fire on the admin pages.
     * if( is_admin() ) {
     *   return;
     * }
     */
    wp_enqueue_style(
        'animations',
        get_template_directory_uri() . '/css/animations.css',
        array(),
        false,
        'all'
    );

    wp_enqueue_style(
        'style-buttons',
        get_template_directory_uri() . '/css/buttons.css',
        array(),
        false,
        'all'
    );

    wp_enqueue_style(
        'footer',
        get_template_directory_uri() . '/css/footer.css',
        array(),
        false,
        'all'
    );

    wp_enqueue_style(
        'navbar',
        get_template_directory_uri() . '/css/navbar.css',
        array(),
        false,
        'all'
    );

    wp_enqueue_style(
        'subsections',
        get_template_directory_uri() . '/css/subsections.css',
        array(),
        false,
        'all'
    );

    wp_enqueue_style(
        'text-color',
        get_template_directory_uri() . '/css/text-color.css',
        array(),
        false,
        'all'
    );
}

// add style sheets
add_action('wp_enqueue_scripts', 'theme_styles');

?>