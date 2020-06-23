<?php

define("WHITE_LIGHT", "F2F7F8");
define("WHITE_DARK", "DFE4E5");
define("YELLOW_LIGHT", "E59B38");
define("YELLOW_DARK", "D38F34");
define("AQUA_LIGHT", "46B5BB");
define("AQUA_DARK", "42a9ae");
define("PINK_LIGHT", "FAD6E2");
define("PINK_DARK", "EBC9D4");
define("BLUE_LIGHT", "1D49B5");
define("BLUE_DARK", "1B43A7");
define("TEXT_BLACK", "111111");

function add_custom_color_palette()
{
    add_theme_support('editor-color-palette', array(
        array(
            'name' => __('White Light', 'themeLangDomain'),
            'slug' => 'white-light',
            'color' => WHITE_LIGHT,
        ),
        array(
            'name' => __('White Dark', 'themeLangDomain'),
            'slug' => 'white-dark',
            'color' => WHITE_DARK,
        ),
        array(
            'name' => __('Yellow Light', 'themeLangDomain'),
            'slug' => 'yellow-light',
            'color' => YELLOW_LIGHT,
        ),
        array(
            'name' => __('Yellow Dark', 'themeLangDomain'),
            'slug' => 'yellow-dark',
            'color' => YELLOW_DARK,
        ),
        array(
            'name' => __('Aqua Light', 'themeLangDomain'),
            'slug' => 'aqua-light',
            'color' => AQUA_LIGHT,
        ),
        array(
            'name' => __('Aqua Dark', 'themeLangDomain'),
            'slug' => 'aqua-dark',
            'color' => AQUA_DARK,
        ),
        array(
            'name' => __('Pink Light', 'themeLangDomain'),
            'slug' => 'pink-light',
            'color' => PINK_LIGHT,
        ),
        array(
            'name' => __('Pink Dark', 'themeLangDomain'),
            'slug' => 'pink-dark',
            'color' => PINK_DARK,
        ),
        array(
            'name' => __('Blue Light', 'themeLangDomain'),
            'slug' => 'blue-light',
            'color' => BLUE_LIGHT,
        ),
        array(
            'name' => __('Blue Dark', 'themeLangDomain'),
            'slug' => 'blue-dark',
            'color' => BLUE_DARK,
        ),
        array(
            'name' => __('Text Black', 'themeLangDomain'),
            'slug' => 'text-black',
            'color' => TEXT_BLACK,
        ),
    ));
}

function get_post_coloring($page_color, $post_theme)
{


    $coloring = [];

    if ($post_theme == "colored") {
        // colored theme
        $coloring["background_color"] = "has-$page_color-background-color";

        $coloring["text_color"] = "has-white-light-color";
        $coloring["heading_color"] = "has-white-light-color";

        $coloring["button_background"] = "white-light-background-button";
        $coloring["button_highlight"] = "$page_color-highlight-button";


    } else {
        // white themed
        $coloring["background_color"] = "has-white-light-background-color";

        $coloring["text_color"] = "has-text-black-color";
        $coloring["heading_color"] = "has-heading-$page_color-color";

        $coloring["button_background"] = "$page_color-background-button";
        $coloring["button_highlight"] = "white-light-highlight-button";
    }

    return $coloring;
}

function get_subsection_class($coloring)
{
    return 'subsection ' . $coloring["button_background"] . ' ' .
        $coloring["button_highlight"] . ' ' .  $coloring["background_color"] . ' ' .
        $coloring["heading_color"];
}

add_action('after_setup_theme', 'add_custom_color_palette'); // add color palette

?>