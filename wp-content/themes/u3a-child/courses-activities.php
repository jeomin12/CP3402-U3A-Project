<?php
/**
 * Template Name: Courses & Activities
 * Description: Displays U3A Townsville's courses and activities in an engaging and categorized format.
 */

get_header(); ?>

<section class="section activity-hero">
  <div class="container text-center">
    <h1>Courses & Activities</h1>
    <p>Engage your mind and body with our wide variety of learning opportunities and social groups.</p>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Photographyclass.jpg" alt="Photography class" class="activity-hero-image">
  </div>
</section>

<section class="section activity-overview">
  <div class="container">
    <h2>What We Offer</h2>
    <p>U3A Townsville offers over 30 courses and activity groups every week, all facilitated by passionate volunteers. Whether you want to stimulate your intellect, stay active, or meet new friends, there’s something for everyone.</p>
  </div>
</section>

<section class="section course-categories bg-light">
  <div class="container">
    <h2>Explore by Category</h2>
    <div class="grid-columns-3">

      <div class="card">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/MagneticIslandTaiChi002.jpg" alt="Tai Chi">
        <h3>Health & Fitness</h3>
        <p>Tai Chi, walking, and gentle exercise help maintain flexibility, balance, and well-being.</p>
      </div>

      <div class="card">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/FrenchGroup1.jpg" alt="Language class">
        <h3>Languages</h3>
        <p>Practice and learn languages including French, Spanish, Russian, Indonesian, and more in a social setting.</p>
      </div>

      <div class="card">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ArtGroup.jpg" alt="Art class">
        <h3>Arts & Creativity</h3>
        <p>Join drawing, painting, pottery, craft, and beading classes to express your creativity and relax.</p>
      </div>

      <div class="card">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/SuccessfulInvestors3.jpg" alt="Finance course">
        <h3>Finance & Technology</h3>
        <p>Understand markets, investment, and computing with confidence. Our tech and investor groups make it simple.</p>
      </div>

      <div class="card">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/FridayTalk_SuzieDancenorth.jpg" alt="Friday Talk">
        <h3>Talks & Lectures</h3>
        <p>Attend our popular Friday Talks, guest speaker events, and themed discussion series covering many interests.</p>
      </div>

      <div class="card">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/U3A-SINGERS.jpg" alt="Singers">
        <h3>Music & Performance</h3>
        <p>Enjoy singing, playing instruments, and even performing with others in a relaxed, supportive environment.</p>
      </div>

    </div>
  </div>
</section>

<section class="section call-to-action">
  <div class="container text-center">
    <h2>Ready to Join a Course?</h2>
    <p>Browse the full timetable or contact us to find the perfect course for your interests and schedule.</p>
    <a href="/membership" class="btn btn-secondary">Become a Member</a>
    <a href="/timetable" class="btn btn-outline">View Full Timetable</a>
  </div>
</section>

<?php get_footer(); ?>
