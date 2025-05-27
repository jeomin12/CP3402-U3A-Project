<?php
/**
 * Template Name: Trips & Outings
 * Description: A page to highlight U3A Townsville’s recreational excursions and community trips.
 */

get_header(); ?>

<section class="section trips-hero">
  <div class="container text-center">
    <h1>Trips & Outings</h1>
    <p>Enjoy community-based travel, guided tours, and fun social outings with fellow U3A members.</p>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Bushwalking003.jpg" alt="Trips & Outings" class="trips-hero-image">
  </div>
</section>

<section class="section upcoming-trips">
  <div class="container">
    <h2>Upcoming Adventures</h2>
    <div class="grid-columns-2">

      <div class="event-card">
        <h3>Magnetic Island Day Trip</h3>
        <p><strong>Date:</strong> Tuesday, September 10, 2025<br>
        <strong>Time:</strong> 8:30 AM – 4:00 PM</p>
        <p>Join a guided walk, visit local heritage sites, and relax by the beach. Bus and ferry included. Morning tea and lunch optional.</p>
      </div>

      <div class="event-card">
        <h3>Historic Walk: Charters Towers</h3>
        <p><strong>Date:</strong> Wednesday, October 16, 2025<br>
        <strong>Time:</strong> 7:30 AM – 6:00 PM</p>
        <p>Explore historic Charters Towers with expert guides. Travel by coach, includes museum entry and catered lunch.</p>
      </div>

      <div class="event-card">
        <h3>Riverway Sunset Picnic</h3>
        <p><strong>Date:</strong> Friday, November 8, 2025<br>
        <strong>Time:</strong> 5:00 PM – 7:30 PM</p>
        <p>Bring a chair or blanket and enjoy a relaxing evening with live music, nibbles, and good company. BYO or pre-order a snack box.</p>
      </div>

    </div>
  </div>
</section>

<section class="section call-to-action">
  <div class="container text-center">
    <h2>Book a Spot or Suggest a Trip</h2>
    <p>Our trips are designed to be low-cost, accessible, and enjoyable for all members. Let us know where you’d like to go next!</p>
    <a href="/contact" class="btn btn-secondary">Contact the Events Team</a>
  </div>
</section>

<?php get_footer(); ?>
