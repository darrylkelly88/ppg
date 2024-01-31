<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">

    <?php 
    wp_head();
    ?>

</head>



<!-- Navbar -->
<!-- 
Dropdown Headers, Dropdown Dividers & Dropdown Item Text
Headers, dividers and text only items can be added within dropdowns by adding a Custom Link and adding either dropdown-header, dropdown-divider or dropdown-item-text into the CSS Classes input. 
Note: This will remove the href on the item and change it to either a <span> for headers or a <div> for dividers. 
Custom Links can be used to create headers for dropdown items if required - they do not need to link to anywhere.
-->

<nav class="navbar navbar-expand-lg fixed-top petweb-nav mb-5">
    <div class="container">
      <a class="navbar-brand petweb-nav-links" href="/index.php"><?php echo get_bloginfo('name') ?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <?php
                wp_nav_menu( array(
                    'theme_location'  => 'primary',
                    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                    'container_id'    => 'bs-example-navbar-collapse-1',
                    'menu_class'      => 'navbar-nav me-auto mb-2 mb-lg-0',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                ) );
            ?>

            <div class="ms-auto">
                <form class="d-flex">
                    <button class="btn btn-nav-bar me-2" type="button" a href="#new-owner">New Owner Guide</button>
                </form>
            </div>
        </div>
    </div>
</nav>

<body>
