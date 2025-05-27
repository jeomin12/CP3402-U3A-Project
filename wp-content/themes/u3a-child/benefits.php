<?php
/**
 * Template Name: Membership Benefits
 * Description: Highlights all the advantages of becoming a U3A Townsville member.
 */

get_header(); ?>

<section class="section benefits-hero">
  <div class="container text-center">
    <h1>Membership Benefits</h1>
    <p>Enjoy a vibrant lifestyle filled with learning, friendships, and meaningful activities.</p>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/IMG_3079.JPG" alt="Membership Benefits" class="benefits-hero-image">
  </div>
</section>

<section class="section benefits-list">
  <div class="container">
    <h2>What You Gain as a Member</h2>
    <div class="grid-columns-3">
      <div class="card">
        <h3>Unlimited Courses</h3>
        <p>Choose from over 50 activities weekly, including Tai Chi, arts, languages, STEM, and discussion groups — all led by experienced volunteers.</p>
      </div>

      <div class="card">
        <h3>Social Events</h3>
        <p>Connect through Friday Talks, open days, trips, and special occasions like Christmas in July and end-of-year gatherings.</p>
      </div>

      <div class="card">
        <h3>Health & Wellbeing</h3>
        <p>Stay active with walking groups, dance, and gentle exercise while enhancing mental health through creative and social programs.</p>
      </div>

      <div class="card">
        <h3>Member Resources</h3>
        <p>Access downloadable handbooks, forms, timetables, and helpful guides through our online portal and on-site office support.</p>
      </div>

      <div class="card">
        <h3>Opportunities to Lead</h3>
        <p>Volunteer as a tutor, event helper, or committee member — share your knowledge and help shape our community.</p>
      </div>

      <div class="card">
        <h3>Affordable Annual Fee</h3>
        <p>All these benefits are available for only $45 per year — providing value that’s educational, engaging, and fulfilling.</p>
      </div>
    </div>
  </div>
</section>

<section class="section call-to-action">
  <div class="container text-center">
    <h2>Ready to Join?</h2>
    <p>Start your U3A journey and enjoy all these benefits today.</p>
    <a href="/join-or-renew" class="btn btn-secondary">Join Now</a>
  </div>
</section>

<?php get_footer(); ?>
