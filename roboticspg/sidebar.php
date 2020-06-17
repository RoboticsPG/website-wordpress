<nav id="navbar-wrapper" class="navbar navbar-expand-lg navbar-light navbar-fixed-top">
    <a class="navbar-brand" id="menuFavicon" href="index.php#Top"><img id="navbar-logo" src="logo-square-grey.png" width="50px" alt="logo"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link  " href="http://localhost:8000/?page_id=6">ABOUT</a></li>
            <li class="nav-item"><a class="nav-link  active  " href="http://localhost:8000/?page_id=11">WHAT WE OFFER<span class="sr-only">(current)</span></a></li>
        </ul>
    </div>
</nav>

<!-- sidebar -->
<nav id="navbar-wrapper" class="navbar navbar-expand-lg navbar-light navbar-fixed-top">
    <a class="navbar-brand" id="menuFavicon" href="index.php#Top"><img id="navbar-logo" src="logo-square-grey.png" width="50px" alt="logo"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <?php $pages = get_pages(); ?>
            <?php
            foreach ($pages as $page) {
                $navItem = "<li class=\"nav-item\"";

                $navItem .= "><a class=\"nav-link ";

                if (is_page($page->post_title)) {
                    $navItem .= " active ";
                }

                $navItem .=  " \" href=\"" . get_page_link($page->ID) . "\">";
                $navItem .= strtoupper($page->post_title);

                if (is_page($page->post_title)) {
                    $navItem .= "<span class=\"sr-only\">(current)</span>";
                }

                $navItem .= "</a></li>";

                echo $navItem;
            }
            ?>

        </ul>
    </div>
</nav>