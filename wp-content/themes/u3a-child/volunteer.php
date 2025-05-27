<?php
/**
 * Template Name: Volunteer
 * Description: A page to inspire and guide U3A Townsville members to become volunteers.
 */

get_header(); ?>

<section class="section volunteer-hero">
  <div class="container text-center">
    <h1>Volunteer With U3A</h1>
    <p>Share your skills, meet new people, and make a meaningful contribution to the U3A community.</p>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/volunteer.png" alt="Volunteer Banner" class="volunteer-hero-image">
  </div>
</section>

<section class="section why-volunteer">
  <div class="container">
    <h2>Why Volunteer?</h2>
    <p>U3A Townsville is powered by volunteers. From teaching classes to helping at the office, every contribution matters. Volunteering helps you:</p>
    <ul>
      <li>Share your knowledge and passions</li>
      <li>Connect with others in a welcoming environment</li>
      <li>Gain a sense of purpose and community involvement</li>
      <li>Stay active mentally, physically, and socially</li>
    </ul>
  </div>
</section>

<section class="section roles bg-light">
  <div class="container">
    <h2>Volunteer Roles</h2>
    <div class="grid-columns-2">
      <div class="card">
        <h3>Class Tutor</h3>
        <p>Lead a course in any topic you enjoy — from languages to crafts, fitness to philosophy. No teaching qualification required.</p>
      </div>

      <div class="card">
        <h3>Office Assistant</h3>
        <p>Help greet members, manage registrations, and support administrative tasks during weekday mornings.</p>
      </div>

      <div class="card">
        <h3>Event Helper</h3>
        <p>Assist with setup, hospitality, or coordination of open days, special events, and social gatherings.</p>
      </div>

      <div class="card">
        <h3>Committee or Project Roles</h3>
        <p>Join the committee or offer expertise in communications, planning, promotion, or special projects.</p>
      </div>
    </div>
  </div>
</section>

<section class="section call-to-action">
  <div class="container text-center">
    <h2>Ready to Volunteer?</h2>
    <p>We’ll match your interests with a role that suits you. It’s rewarding, flexible, and fun!</p>
    <a href="/contact" class="btn btn-secondary">Get In Touch</a>
    <a href="/downloads/volunteer-form.pdf" class="btn btn-outline" target="_blank">Download Volunteer Form</a>
  </div>
</section>

<?php get_footer(); ?>
