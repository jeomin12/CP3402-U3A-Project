<?php
/**
 * Template Name: Sponsorship
 * Description: A page to encourage and guide sponsorship opportunities for U3A Townsville.
 */

get_header(); ?>

<section class="section sponsor-hero">
  <div class="container text-center">
    <h1>Partner With U3A</h1>
    <p>Support lifelong learning and healthy ageing by becoming a valued sponsor of U3A Townsville.</p>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/U3APromoDay.jpg" alt="Sponsorship Banner" class="sponsor-hero-image">
  </div>
</section>

<section class="section sponsor-benefits">
  <div class="container">
    <h2>Why Sponsor U3A?</h2>
    <ul>
      <li>Enhance your brand visibility within a vibrant and active senior community</li>
      <li>Demonstrate corporate social responsibility through intergenerational learning</li>
      <li>Support affordable access to programs, events, and community engagement</li>
      <li>Build goodwill through connection with an inclusive, not-for-profit organisation</li>
    </ul>
  </div>
</section>

<section class="section sponsorship-options bg-light">
  <div class="container">
    <h2>Sponsorship Opportunities</h2>
    <div class="grid-columns-2">
      <div class="card">
        <h3>Event Sponsorship</h3>
        <p>Support one of our Open Days, Friday Talks, or social events. Your brand will be promoted on-site and online.</p>
      </div>

      <div class="card">
        <h3>Program Support</h3>
        <p>Provide in-kind or financial assistance to support specific programs such as art, fitness, or tech learning.</p>
      </div>

      <div class="card">
        <h3>Material Donations</h3>
        <p>Contribute equipment, books, refreshments, or office supplies to help our volunteers and classes thrive.</p>
      </div>

      <div class="card">
        <h3>Ongoing Partnership</h3>
        <p>Become a recurring sponsor and develop a long-term relationship that grows with our members and programs.</p>
      </div>
    </div>
  </div>
</section>

<section class="section call-to-action">
  <div class="container text-center">
    <h2>Let’s Work Together</h2>
    <p>Contact our team to discuss how we can align your goals with our mission and community.</p>
    <a href="/contact" class="btn btn-secondary">Contact Us About Sponsorship</a>
  </div>
</section>

<?php get_footer(); ?>
