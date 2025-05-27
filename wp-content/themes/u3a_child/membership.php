<?php
/**
 * Template Name: Membership
 * Description: A detailed and engaging membership information page for U3A Townsville.
 */

get_header(); ?>

<section class="section membership-hero">
  <div class="container text-center">
    <h1>Join U3A Townsville</h1>
    <p>Discover the benefits of becoming a member of our vibrant learning community.</p>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Unknown.JPG" alt="U3A Promo" class="membership-hero-image">
  </div>
</section>

<section class="section why-join">
  <div class="container">
    <h2>Why Join U3A?</h2>
    <ul class="membership-benefits">
      <li>Participate in unlimited weekly classes, lectures, and groups.</li>
      <li>Access to exclusive events, social gatherings, and field trips.</li>
      <li>Connect with a supportive community of lifelong learners.</li>
      <li>Volunteer opportunities that enrich others and yourself.</li>
      <li>Contribute ideas and shape the direction of our organisation.</li>
    </ul>
  </div>
</section>

<section class="section membership-details bg-light">
  <div class="container">
    <h2>Membership Details</h2>
    <p>U3A Townsville welcomes new and returning members. Membership runs on a calendar year basis and gives you access to all U3A courses, programs and social events.</p>
    <ul>
      <li><strong>Annual Fee:</strong> $45 per person</li>
      <li><strong>How to Join:</strong> Fill out our online form or visit the office to register in person.</li>
      <li><strong>Payments:</strong> Online (credit card or PayPal), or in-person via EFTPOS/cash.</li>
      <li><strong>Support:</strong> Need help? Volunteers at the U3A office are happy to assist you with registration and class selection.</li>
    </ul>
  </div>
</section>

<section class="section get-involved">
  <div class="container text-center">
    <h2>Ready to Become a Member?</h2>
    <p>Take the next step — join today and discover the joy of shared learning.</p>
    <a href="/membership-form" class="btn btn-secondary">Join Now</a>
    <a href="/contact" class="btn btn-outline">Contact Us</a>
  </div>
</section>

<section class="section renew">
  <div class="container">
    <h2>Returning Members</h2>
    <p>If you're already a member and want to renew, simply login to your account or drop by our office. We value your continued participation in U3A Townsville!</p>
    <ul>
      <li>Login at: <a href="https://members.u3atownsville.org.au">members.u3atownsville.org.au</a></li>
      <li>Visit the office during business hours (Mon–Fri, 9am–12pm)</li>
      <li>Membership renewal period begins November 1st each year</li>
    </ul>
  </div>
</section>

<?php get_footer(); ?>
