<?php
/**
 * Template Name: Front Page
 * Description: A content-rich, modern front page for U3A Townsville.
 */

get_header(); ?>

<section class="hero" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/U3APromoDay.jpg');">
  <div class="container hero-content">
    <h1>Welcome to U3A Townsville</h1>
    <p>Empowering seniors through lifelong learning, active living, and social connection in our vibrant community.</p>
    <a href="/membership" class="btn btn-secondary">Join U3A Today</a>
  </div>
</section>


<section class="about-u3a section">
  <div class="container">
    <h2>What is U3A?</h2>
    <p>University of the Third Age (U3A) is a community-based organization that fosters lifelong learning and healthy aging for people in their 'third age' of life. We offer educational, social, and physical activities to keep minds and bodies engaged.</p>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Terry and TCC  Maurie Soars at opening of Vincent campus office.jpeg" alt="Vincent campus opening">
  </div>
</section>

<section class="activities section">
  <div class="container">
    <h2>Popular Activities</h2>
    <div class="grid-columns-3">
      <div class="card">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/MagneticIslandTaiChi003.jpg" alt="Tai Chi">
        <h3>Tai Chi</h3>
        <p>Improve balance and mental focus with our Tai Chi classes held on Magnetic Island and in Townsville.</p>
      </div>
      <div class="card">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Spanish.jpg" alt="Spanish Class">
        <h3>Language Learning</h3>
        <p>Join friendly conversation groups in Spanish, French, Russian and more. Beginners welcome!</p>
      </div>
      <div class="card">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Photographyclass.jpg" alt="Photography Class">
        <h3>Photography</h3>
        <p>Learn the art of photography from passionate peers and share your work with others.</p>
      </div>
    </div>
    <div class="text-center mt-4">
      <a href="/courses" class="btn">View All Activities</a>
    </div>
  </div>
</section>

<section class="events-news section bg-light">
  <div class="container">
    <h2>Latest News & Events</h2>
    <div class="grid-columns-2">
      <div class="event">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/FridayTalk_SuzieDancenorth.jpg" alt="Friday Talk">
        <h3>Friday Talks</h3>
        <p>Weekly educational talks on diverse topics, free for all members at Aitkenvale Library.</p>
      </div>
      <div class="event">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/SuccessfulInvestors2.jpg" alt="Investment Class">
        <h3>Finance & Learning</h3>
        <p>Stay sharp and informed with classes on investing, budgeting and smart money habits.</p>
      </div>
    </div>
    <div class="text-center mt-4">
      <a href="/news" class="btn">More News</a>
    </div>
  </div>
</section>

<section class="call-to-action section">
  <div class="container text-center">
    <h2>Get Involved with U3A Today</h2>
    <p>Whether you're looking to learn, teach, volunteer or make new friends — U3A Townsville has something for you.</p>
    <a href="/membership" class="btn btn-secondary">Become a Member</a>
    <a href="/volunteer" class="btn btn-outline">Volunteer With Us</a>

  </div>
</section>

<?php get_footer(); ?>
