<?php
/**
 * Template Name: Join or Renew
 * Description: Detailed page guiding new and returning members through the U3A Townsville membership process.
 */

get_header(); ?>

<section class="section join-hero">
  <div class="container text-center">
    <h1>Join or Renew Your Membership</h1>
    <p>Become part of our community and enjoy access to classes, events, and lifelong learning opportunities.</p>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/U3APromoDay.jpg" alt="Join U3A" class="join-hero-image">
  </div>
</section>

<section class="section join-benefits">
  <div class="container">
    <h2>Why Join U3A Townsville?</h2>
    <ul class="benefit-list">
      <li>Unlimited access to a wide variety of weekly courses and programs</li>
      <li>Friendly and inclusive community of learners</li>
      <li>Opportunities to volunteer or become a tutor</li>
      <li>Invitations to social events, Friday talks, and trips</li>
    </ul>
  </div>
</section>

<section class="section how-to-join bg-light">
  <div class="container">
    <h2>How to Join</h2>
    <p>There are two ways to become a member:</p>
    <ol>
      <li>Fill out the <a href="/downloads/u3a-membership-form.pdf">membership form</a> and bring it to the U3A Office.</li>
      <li>Join online via our secure member portal at <a href="https://members.u3atownsville.org.au" target="_blank">members.u3atownsville.org.au</a>.</li>
    </ol>
    <p><strong>Annual Membership Fee:</strong> $45</p>
    <p><strong>Office Hours:</strong> Monday to Friday, 9:00 AM to 12:00 PM</p>
  </div>
</section>

<section class="section renew-membership">
  <div class="container">
    <h2>Returning Members</h2>
    <p>Renew your membership each year to keep enjoying our programs and services.</p>
    <ul>
      <li>Login to your member profile to renew and pay online.</li>
      <li>Renewal period begins every November for the upcoming year.</li>
      <li>Contact our office if you need help with renewal or updating details.</li>
    </ul>
  </div>
</section>

<section class="section call-to-action">
  <div class="container text-center">
    <h2>Need Help Joining?</h2>
    <p>Our friendly office volunteers are here to help you complete your membership and find the right activities.</p>
    <a href="/contact" class="btn btn-secondary">Contact Us</a>
    <a href="https://members.u3atownsville.org.au" class="btn btn-outline" target="_blank">Join Online</a>
  </div>
</section>

<?php get_footer(); ?>
