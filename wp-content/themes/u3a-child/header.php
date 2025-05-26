<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="u3a-header">
  <div class="u3a-top-bar">
    <div class="u3a-logo">
      <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo1.png" alt="U3A Townsville Logo">
      </a>
    </div>

    <div class="u3a-header-right">
      <a href="#">Contact</a>
      <a href="#">Login</a>

      <form class="u3a-search-form" method="get" action="<?php echo esc_url(home_url('/')); ?>">
        <input type="search" name="s" placeholder="Search">
        <button type="submit"><span class="dashicons dashicons-search"></span></button>
      </form>
    </div>
  </div>

  <nav class="u3a-navbar">
    <?php
      wp_nav_menu(array(
        'theme_location' => 'primary',
        'menu_class'     => 'u3a-menu',
        'container'      => false,
      ));
    ?>

    <a href="#" class="u3a-donate-btn">Donate now</a>
  </nav>
</header>
