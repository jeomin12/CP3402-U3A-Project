<?php
/**
 * Template Name: Support Us
 * Description: A page to explain ways to support U3A Townsville through donations, sponsorship, and volunteering.
 */

get_header(); ?>

<section class="section support-hero">
  <div class="container text-center">
    <h1>Support U3A Townsville</h1>
    <p>Help us continue to provide learning, connection, and wellbeing to the senior community.</p>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/U3APromoDay.jpg" alt="Support Banner" class="support-hero-image">
  </div>
</section>

<section class="section support-methods">
  <div class="container">
    <h2>Ways You Can Help</h2>
    <div class="grid-columns-3">
      <div class="card">
        <h3>Make a Donation</h3>
        <p>Your financial contribution helps us fund programs, activities, venue costs, and learning resources for seniors.</p>
        <a href="/donate" class="btn btn-outline">Donate Now</a>
      </div>

      <div class="card">
        <h3>Become a Volunteer</h3>
        <p>We rely on our amazing volunteers to run classes, assist in the office, manage events, and support fellow members.</p>
        <a href="/volunteer" class="btn btn-outline">Volunteer With Us</a>
      </div>

      <div class="card">
        <h3>Sponsor or Partner</h3>
        <p>Help promote lifelong learning by partnering with U3A. Sponsors are acknowledged on our website, materials, and events.</p>
        <a href="/contact" class="btn btn-outline">Become a Sponsor</a>
      </div>
    </div>
  </div>
</section>

<section class="section call-to-action">
  <div class="container text-center">
    <h2>Every Contribution Matters</h2>
    <p>With your support, U3A Townsville can continue to enrich the lives of older adults through learning, friendship, and community.</p>
    <a href="/donate" class="btn btn-secondary">Give Today</a>
  </div>
</section>

<?php get_footer(); ?>
