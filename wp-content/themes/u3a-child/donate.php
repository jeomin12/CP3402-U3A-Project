<?php
/**
 * Template Name: Donate
 * Description: A dedicated page for collecting and encouraging donations to U3A Townsville.
 */

get_header(); ?>

<section class="section donate-hero">
  <div class="container text-center">
    <h1>Make a Donation</h1>
    <p>Your contribution helps us provide affordable, meaningful learning experiences for older adults in our community.</p>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/U3APromoDay.jpg" alt="Donate Banner" class="donate-hero-image">
  </div>
</section>

<section class="section why-donate">
  <div class="container">
    <h2>Why Your Support Matters</h2>
    <p>As a volunteer-run organisation, U3A Townsville relies on community support to keep our membership fees low and our programs accessible. Donations help us with:</p>
    <ul>
      <li>Hiring and maintaining safe venues</li>
      <li>Printing and distributing learning materials</li>
      <li>Running events and community days</li>
      <li>Investing in technology and resources for tutors and members</li>
    </ul>
  </div>
</section>

<section class="section donation-methods bg-light">
  <div class="container">
    <h2>How to Donate</h2>
    <p>You can donate online, in-person, or by mail. All donations over $2 are tax-deductible.</p>

    <h3>1. Donate Online</h3>
    <p>Secure payments can be made via credit card or PayPal using our online donation form:</p>
    <a href="https://www.paypal.com/donate/example-u3a" class="btn btn-secondary" target="_blank">Donate via PayPal</a>

    <h3>2. Donate In Person</h3>
    <p>Visit the U3A Townsville office during business hours:<br>
    <strong>Address:</strong> 15 Patrick Street, Vincent QLD 4814<br>
    <strong>Hours:</strong> Mon–Fri, 9:00 AM – 12:00 PM</p>

    <h3>3. Donate by Post</h3>
    <p>Mail a cheque payable to “U3A Townsville Inc” with your contact details to the above address.</p>
  </div>
</section>

<section class="section call-to-action">
  <div class="container text-center">
    <h2>Thank You for Supporting U3A</h2>
    <p>Every donation helps us keep U3A Townsville inclusive, impactful, and affordable for all.</p>
    <a href="/support-us" class="btn btn-outline">Return to Support Options</a>
  </div>
</section>

<?php get_footer(); ?>
