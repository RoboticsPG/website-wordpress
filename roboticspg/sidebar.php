<!-- NO LONGER USED, REMOVE -->

<!-- sidebar -->
<div class="navbar-menu navbar-end" id="sidebar">
    <?php $pages = get_pages(); ?>
    <?php foreach($pages as $page): ?>
        <a href="<?php echo get_page_link($page->ID); ?>" class="navbar-item sidebar-link">
            <?php echo $page->post_title ?>
        </a>
    <?php endforeach; ?>
</div>
<!-- /sidebar -->
