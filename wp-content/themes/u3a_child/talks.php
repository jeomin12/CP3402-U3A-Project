<?php
/**
 * Template Name: Friday Talks
 * Description: A dedicated page to showcase the popular Friday Talks series at U3A Townsville.
 */

get_header(); ?>

<section class="section talks-hero">
  <div class="container text-center">
    <h1>Friday Talks</h1>
    <p>Engaging, informative sessions led by guest speakers every Friday afternoon.</p>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/FridayTalk_SuzieDancenorth.jpg" alt="Friday Talk Banner" class="talks-hero-image">
  </div>
</section>

<section class="section talks-overview">
  <div class="container">
    <h2>What Are Friday Talks?</h2>
    <p>Our Friday Talks are weekly sessions featuring fascinating presentations on topics ranging from science, travel, health, history, art, and community initiatives. Open to all members, they are a great opportunity to learn, connect, and participate.</p>
    <p><strong>When:</strong> Fridays from 2:00 PM to 3:00 PM<br>
    <strong>Where:</strong> Aitkenvale Library Meeting Room</p>
  </div>
</section>

<section class="section upcoming-talks bg-light">
  <div class="container">
    <h2>Upcoming Talks</h2>
    <ul class="talk-list">
      <li><strong>July 5:</strong> "Understanding the Brain" with Dr. Naomi Green</li>
      <li><strong>July 12:</strong> "Movement for Health" by Suzie from Dancenorth</li>
      <li><strong>July 19:</strong> "The Coral Sea’s Hidden World" with James Cook Marine Biologists</li>
      <li><strong>July 26:</strong> "Storytelling Through Photography" with Roland Lange</li>
    </ul>
    <p>For a complete schedule, check our <a href="/event-calendar">event calendar</a> or contact the office.</p>
  </div>
</section>

<section class="section call-to-action">
  <div class="container text-center">
    <h2>Have a Topic or Speaker Suggestion?</h2>
    <p>We welcome member ideas and referrals. Let us know if you or someone you know could give a talk!</p>
    <a href="/contact" class="btn btn-secondary">Submit a Speaker</a>
  </div>
</section>

<?php get_footer(); ?>
