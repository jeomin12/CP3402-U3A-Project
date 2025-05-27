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
  <div class="u3a-header-top">
    <div class="u3a-header-inner">
      <div class="u3a-logo">
        <a href="<?php echo home_url(); ?>">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo1.png" alt="U3A Townsville Logo">
        </a>
      </div>
      <div class="u3a-header-utilities">
        <a href="/contact">Contact</a>
        <a href="/login">Login</a>
        <form class="u3a-search-form" method="get" action="<?php echo esc_url(home_url('/')); ?>">
          <input type="search" name="s" placeholder="Search...">
          <button type="submit"><span class="dashicons dashicons-search"></span></button>
        </form>
      </div>
    </div>
  </div>

  <nav class="u3a-navbar">
    <div class="u3a-nav-inner">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'primary',
          'menu_class'     => 'u3a-menu',
          'container'      => false,
          'depth'          => 2, // Enable dropdowns
        ));
      ?>
      <a href="/donate" class="u3a-donate-btn">Donate Now</a>
    </div>
  </nav>
</header>
