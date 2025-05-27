<?php
/**
 * Template Name: Newsletters
 * Description: A page to display downloadable U3A Townsville newsletters and encourage email subscriptions.
 */

get_header(); ?>

<section class="section newsletter-hero">
  <div class="container text-center">
    <h1>U3A Townsville Newsletters</h1>
    <p>Catch up on everything happening across our community — delivered monthly, filled with stories, events, and course highlights.</p>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/NewsletterBanner.jpg" alt="Newsletter Banner" class="newsletter-hero-image">
  </div>
</section>

<section class="section latest-newsletters bg-light">
  <div class="container">
    <h2>Latest Editions</h2>
    <ul class="newsletter-list">
      <li><a href="/downloads/newsletter-july-2025.pdf" target="_blank">July 2025</a></li>
      <li><a href="/downloads/newsletter-june-2025.pdf" target="_blank">June 2025</a></li>
      <li><a href="/downloads/newsletter-may-2025.pdf" target="_blank">May 2025</a></li>
      <li><a href="/downloads/newsletter-april-2025.pdf" target="_blank">April 2025</a></li>
    </ul>
  </div>
</section>

<section class="section subscribe-cta">
  <div class="container text-center">
    <h2>Subscribe to Our Newsletter</h2>
    <p>Want updates delivered to your inbox? Join our email list and never miss a class or event!</p>
    <a href="/subscribe" class="btn btn-secondary">Subscribe Now</a>
  </div>
</section>

<?php get_footer(); ?>
