<?php
/**
 * Template Name: Events
 * Description: A dynamic and community-focused page to highlight upcoming U3A Townsville events.
 */

get_header(); ?>

<section class="section events-hero">
  <div class="container text-center">
    <h1>Upcoming Events</h1>
    <p>Join us for special events, social gatherings, and our popular Friday Talks.</p>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/FridayTalks001.jpg" alt="U3A Friday Talks" class="events-hero-image">
  </div>
</section>

<section class="section event-listings">
  <div class="container">
    <h2>Featured Events</h2>
    <div class="grid-columns-2">
      <div class="event-card">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/FridayTalk_SuzieDancenorth.jpg" alt="Friday Talk">
        <h3>Friday Talk: Dance & Movement</h3>
        <p><strong>Date:</strong> July 12, 2025<br>
        <strong>Location:</strong> Aitkenvale Library<br>
        <strong>Time:</strong> 2:00 PM – 3:00 PM</p>
        <p>Experience a fascinating talk and demonstration on how dance therapy helps with mental and physical wellness, presented by Suzie from Dancenorth.</p>
      </div>

      <div class="event-card">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/U3APromoDay.jpg" alt="Open Day">
        <h3>Annual Open Day</h3>
        <p><strong>Date:</strong> August 24, 2025<br>
        <strong>Location:</strong> Vincent Campus<br>
        <strong>Time:</strong> 9:00 AM – 1:00 PM</p>
        <p>Meet our facilitators, tour the campus, and sign up for classes. A great opportunity for new and prospective members.</p>
      </div>
    </div>
  </div>
</section>

<section class="section call-to-action">
  <div class="container text-center">
    <h2>Don't Miss Out</h2>
    <p>U3A events are free or low-cost and open to all members. Be part of the learning and fun.</p>
    <a href="/membership" class="btn btn-secondary">Become a Member</a>
    <a href="/contact" class="btn btn-outline">Contact Us</a>
  </div>
</section>

<?php get_footer(); ?>
