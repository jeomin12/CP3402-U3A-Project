<?php
/**
 * Template Name: Special Events
 * Description: Highlight key social, seasonal, and unique events at U3A Townsville.
 */

get_header(); ?>

<section class="section special-events-hero">
  <div class="container text-center">
    <h1>Special Events</h1>
    <p>Explore upcoming open days, celebrations, and one-off events for U3A members and guests.</p>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/U3APromoDay.jpg" alt="Special Events Banner" class="special-events-hero-image">
  </div>
</section>

<section class="section featured-events">
  <div class="container">
    <h2>Upcoming Highlights</h2>
    <div class="grid-columns-2">

      <div class="event-card">
        <h3>U3A Open Day</h3>
        <p><strong>Date:</strong> Saturday, August 24, 2025<br>
        <strong>Time:</strong> 9:00 AM – 1:00 PM<br>
        <strong>Location:</strong> Vincent Campus</p>
        <p>Meet our facilitators, tour classrooms, and explore activities. Refreshments and welcome kits provided.</p>
      </div>

      <div class="event-card">
        <h3>Christmas in July</h3>
        <p><strong>Date:</strong> Friday, July 19, 2025<br>
        <strong>Time:</strong> 12:00 PM – 2:00 PM<br>
        <strong>Location:</strong> Local function centre (TBA)</p>
        <p>A festive gathering with lunch, entertainment, and prize draws. Limited seating – RSVP required.</p>
      </div>

      <div class="event-card">
        <h3>Annual General Meeting (AGM)</h3>
        <p><strong>Date:</strong> Thursday, October 10, 2025<br>
        <strong>Time:</strong> 10:00 AM – 12:00 PM<br>
        <strong>Location:</strong> Aitkenvale Library</p>
        <p>All members are encouraged to attend. Hear updates, elect committee members, and enjoy morning tea.</p>
      </div>

      <div class="event-card">
        <h3>End-of-Year Celebration</h3>
        <p><strong>Date:</strong> Friday, December 6, 2025<br>
        <strong>Time:</strong> 1:00 PM – 3:00 PM<br>
        <strong>Location:</strong> Vincent Campus Hall</p>
        <p>Celebrate another wonderful year with performances, awards, and member tributes.</p>
      </div>

    </div>
  </div>
</section>

<section class="section call-to-action">
  <div class="container text-center">
    <h2>Questions About Events?</h2>
    <p>Contact us to learn more, suggest an event, or RSVP for any listed activity.</p>
    <a href="/contact" class="btn btn-secondary">Get In Touch</a>
  </div>
</section>

<?php get_footer(); ?>
