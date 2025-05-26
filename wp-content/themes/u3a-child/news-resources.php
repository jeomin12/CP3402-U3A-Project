<?php
/**
 * Template Name: News & Resources
 * Description: A page to share U3A Townsville news, updates, newsletters, and downloadable materials.
 */

get_header(); ?>

<section class="section news-hero">
  <div class="container text-center">
    <h1>News & Resources</h1>
    <p>Stay informed with the latest updates, stories, and downloadable resources from U3A Townsville.</p>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/NewsletterBanner.jpg" alt="News and Newsletter" class="news-hero-image">
  </div>
</section>

<section class="section latest-news">
  <div class="container">
    <h2>Latest Updates</h2>
    <div class="grid-columns-2">
      <div class="news-item">
        <h3>April Newsletter Released</h3>
        <p>Catch up on all the April activities, events, and highlights in our official newsletter.</p>
        <a href="/downloads/newsletter-april-2025.pdf" class="btn btn-outline">Read Newsletter</a>
      </div>

      <div class="news-item">
        <h3>New Courses Announced</h3>
        <p>We’ve added Digital Literacy and Creative Journaling to the Term 3 line-up. Check the full timetable for session details.</p>
        <a href="/timetable" class="btn btn-outline">View Timetable</a>
      </div>
    </div>
  </div>
</section>

<section class="section resources bg-light">
  <div class="container">
    <h2>Member Resources</h2>
    <ul class="resource-list">
      <li><a href="/downloads/u3a-membership-form.pdf">Membership Application Form (PDF)</a></li>
      <li><a href="/downloads/code-of-conduct.pdf">Code of Conduct</a></li>
      <li><a href="/downloads/tutor-handbook.pdf">Tutor Handbook</a></li>
      <li><a href="/downloads/strategic-plan-2024.pdf">Strategic Plan 2024–2027</a></li>
      <li><a href="/downloads/event-calendar.pdf">Event Calendar</a></li>
    </ul>
  </div>
</section>

<section class="section call-to-action">
  <div class="container text-center">
    <h2>Want Updates by Email?</h2>
    <p>Subscribe to our newsletter and never miss an important announcement.</p>
    <a href="/subscribe" class="btn btn-secondary">Subscribe Now</a>
  </div>
</section>

<?php get_footer(); ?>