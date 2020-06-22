<?php
/*------------------------------------*\
	Additional Attrs for Pages & Posts
\*------------------------------------*/

/** adds the meta box in side bar */
function add_custom_meta_boxes($post)
{

    // add meta box for page
    add_meta_box(
        'page_color_meta_box', // id, used as the html id att
        __('Page Color'), // meta box title
        'page_color_meta_box_options', // callback function, spits out the content
        'page', // add to page
        'side', // context (where on the screen)
        'high' // priority
    );

    // add meta box for post
    add_meta_box(
        'post_order_theme_meta_box',
        'Post Order & Theme',
        'post_order_theme_meta_box_options',
        'post', // add to posts
        'side'
    );
}

/** adds drop down for for custom page attrs in side bar */
function page_color_meta_box_options($post)
{
    wp_nonce_field(basename(__FILE__), 'page_color_meta_box_options_nonce');
    $current_color = get_post_meta($post->ID, '_custom_page_color', true);

    $colors = [
        "aqua-light" => "Aqua",
        "blue-light" => "Blue",
        "pink-light" => "Pink",
        "yellow-dark" => "Yellow"
    ];


    ?>
        <p>Page Color:</p>
        <p>
            <select name="page_color">
                <?php
                foreach ($colors as $value => $display_name) {
                    echo "<option " . ($value == $current_color ? "selected='selected'" : "") . " value='$value'>$display_name</option>";
                }
                ?>
            </select>
        </p>

    <?php
}

/** adds drop down for for custom post attrs in side bar */
function post_order_theme_meta_box_options($post)
{
    wp_nonce_field(basename(__FILE__), 'post_order_theme_meta_box_options_nonce');

    $current_pos = get_post_meta($post->ID, '_custom_post_order', true);
    $current_theme = get_post_meta($post->ID, '_custom_post_theme', true);

    $themes = [
        "white" => "White Themed",
        "colored" => "Colored Themed"
    ];
    ?>


        <!-- post order on page -->
        <p>Post's position to appear in. E.g. post "1" will appear first, post "2" second.</p>
        <p><input type="number" name="pos" value="<?php echo $current_pos; ?>" /></p>

        </br>

        <!-- post theme -->
        <p>White Themed or Colored Themed?</p>
        <p>
            <select name="theme">
                <?php
                foreach ($themes as $value => $display_name) {
                    echo "<option " . ($value == $current_theme ? "selected='selected'" : "") . " value='$value'>$display_name</option>";
                }
                ?>
            </select>
        </p>
    <?php
}

/** TRUE iff user can save custom attrs */
function can_save_custom_attrs($post_id, $post_attr_name, $attr_name, $capability)
{
    if (!isset($_POST[$post_attr_name]) || !wp_verify_nonce($_POST[$post_attr_name], basename(__FILE__))) {
        return FALSE;
    } else if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return FALSE;
    } else if (!current_user_can($capability, $post_id)) {
        return FALSE;
    }

    return isset($_REQUEST[$attr_name]);
}

/** saves custom post attrs if possible */
function jpen_save_cusom_attrs($post_id)
{
    if (can_save_custom_attrs($post_id, 'post_order_theme_meta_box_options_nonce', 'pos', 'edit_post')) {
        update_post_meta($post_id, '_custom_post_order', sanitize_text_field($_POST['pos']));
        update_post_meta($post_id, '_custom_post_theme', sanitize_text_field($_POST['theme']));
    } else if (can_save_custom_attrs($post_id, 'page_color_meta_box_options_nonce', 'page_color', 'edit_page')) {
        update_post_meta($post_id, '_custom_page_color', sanitize_text_field($_POST['page_color']));
    }
}

/** adds the summary columns for displaying to admin */
function add_custom_post_attrs_column($columns)
{
    return array_merge(
        $columns,
        array('pos' => 'Position', 'theme' => 'Theme')
    );
}

/** adds the summary columns for displaying to admin */
function add_custom_page_attrs_column($columns)
{
    return array_merge(
        $columns,
        array('page_color' => 'Page Color')
    );
}


/** populates custom attrs in summary page */
function display_custom_attr_in_columns($column, $post_id)
{
    if ($column == 'pos') {
        echo '<p>' . get_post_meta($post_id, '_custom_post_order', true) . '</p>';
    } else if ($column == 'theme') {
        echo '<p>' . get_post_meta($post_id, '_custom_post_theme', true) . '</p>';
    } else if ($column == 'page_color') {
        echo '<p>' . get_post_meta($post_id, '_custom_page_color', true) . '</p>';
    }
}

/** automatically sorts posts when calling get_posts when constructing the page. */
function jpen_custom_post_order_sort($query)
{
    if ($query->is_main_query() && is_home()) {
        $query->set('orderby', 'meta_value');
        $query->set('meta_key', '_custom_post_order');
        $query->set('order', 'ASC');
    }
}

// PAGE COLOR ATTR
add_action('add_meta_boxes', 'add_custom_meta_boxes'); // add custom post sorting
add_action('save_post', 'jpen_save_cusom_attrs'); // add custom post saving order
add_action('manage_posts_custom_column', 'display_custom_attr_in_columns', 10, 2); // display custom post order in admin view
add_action('pre_get_posts', 'jpen_custom_post_order_sort'); // get posts so they are custom sorted

add_filter('manage_posts_columns', 'add_custom_post_attrs_column'); // Sort custom post order in admin view

?>