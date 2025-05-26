<?php
/**
 * Template Name: About U3A
 * Description: Detailed and engaging About page for U3A Townsville.
 */

get_header(); ?>

<section class="section about-hero">
  <div class="container text-center">
    <h1>About U3A Townsville</h1>
    <p>Fostering lifelong learning, connection, and community for people in their third age of life.</p>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Terry-and-TCC-Maurie-Soars.jpg" alt="Vincent campus opening" class="about-hero-image">
  </div>
</section>

<section class="section mission-values">
  <div class="container">
    <h2>Our Mission</h2>
    <p>To support and encourage our members in improving their well-being through mental and physical engagement, developing friendships, and embracing lifelong learning as an essential part of life in retirement.</p>

    <h2>Our Values</h2>
    <ul>
      <li>Lifelong learning contributes to quality of life and healthy aging.</li>
      <li>Learning in the company of others strengthens friendships and fosters respect.</li>
      <li>Volunteering our time and skills enhances well-being — for ourselves and the community.</li>
      <li>Collaboration builds a vibrant and sustainable organisation.</li>
    </ul>
  </div>
</section>

<section class="section history">
  <div class="container">
    <h2>Our Story</h2>
    <p>U3A Townsville was founded to provide seniors with accessible learning opportunities without pressure or assessment. Inspired by the international U3A movement, we’ve grown into a self-sustaining organisation powered by passionate volunteers and lifelong learners.</p>
    <p>Over the years, we've delivered hundreds of activities across the arts, sciences, fitness, technology, language, and humanities. We’ve created strong partnerships with James Cook University and regional councils to provide access, facilities, and exposure to new learning methods.</p>
  </div>
</section>

<section class="section what-we-offer bg-light">
  <div class="container">
    <h2>What We Offer</h2>
    <div class="grid-columns-3">
      <div class="card">
        <h3>Courses & Classes</h3>
        <p>Weekly activities such as languages, Tai Chi, art, finance, technology, and more — for fun and stimulation, not qualifications.</p>
      </div>
      <div class="card">
        <h3>Social Connection</h3>
        <p>Groups meet before and after classes for conversation, coffee, and events. Our community thrives on connection and inclusivity.</p>
      </div>
      <div class="card">
        <h3>Physical Activity</h3>
        <p>Walking groups, Tai Chi, dance, and gentle exercise keep both the body and brain active and resilient.</p>
      </div>
    </div>
  </div>
</section>

<section class="section subdomain-guide">
  <div class="container">
    <h2>Explore Our Programs</h2>
    <p>To better serve our growing community, U3A Townsville is introducing subdomains to organize and highlight different branches of our offerings:</p>
    <div class="grid-columns-2">
      <div>
        <h3><strong>members.u3atownsville.org.au</strong></h3>
        <p>A private portal for members to log in, register for classes, submit feedback, and access member-exclusive materials.</p>
      </div>
      <div>
        <h3><strong>events.u3atownsville.org.au</strong></h3>
        <p>All events, Friday talks, outings, and open days are listed here with RSVP features and photo archives.</p>
      </div>
      <div>
        <h3><strong>learn.u3atownsville.org.au</strong></h3>
        <p>Our digital learning hub for selected online activities and resources, including Zoom classes, handouts, and recorded sessions.</p>
      </div>
      <div>
        <h3><strong>volunteer.u3atownsville.org.au</strong></h3>
        <p>A dedicated space for volunteer coordination, role descriptions, training resources, and a sign-up hub for new volunteers.</p>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
