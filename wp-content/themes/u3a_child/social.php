<?php
/**
 * Template Name: Social & Special Interest Courses
 * Description: Page showcasing U3A Townsville’s community groups, games, and informal social offerings.
 */

get_header(); ?>

<section class="section social-hero">
  <div class="container text-center">
    <h1>Social & Special Interest Courses</h1>
    <p>Make new friends and enjoy activities that connect, entertain, and inspire through shared interests.</p>
  </div>
</section>

<section class="section social-courses bg-light">
  <div class="container">
    <div class="grid-columns-2">

      <div class="card">
        <h3>Beading Group</h3>
        <p>Join a relaxed weekly gathering to work on your beading projects, share tips, and enjoy good company.</p>
      </div>

      <div class="card">
        <h3>Canasta Club</h3>
        <p>Play social rounds of this classic card game in a welcoming, supportive group of members.</p>
      </div>

      <div class="card">
        <h3>Friday Social Group</h3>
        <p>Wind down the week with a casual catch-up, tea, and a friendly chat every Friday afternoon.</p>
      </div>

      <div class="card">
        <h3>U3A Singers</h3>
        <p>Sing your heart out in this joyful, inclusive choir. No experience needed — just enthusiasm.</p>
      </div>

      <div class="card">
        <h3>Games & Trivia</h3>
        <p>Stimulate your brain with casual trivia, crosswords, and social board game sessions.</p>
      </div>

      <div class="card">
        <h3>Special Interest Groups</h3>
        <p>From local history walks to guest speaker lunches, explore new ideas and enjoy events as a group.</p>
      </div>

    </div>
  </div>
</section>

<style>
.social-hero {
  background-color: #0057a8;
  color: white;
  padding: 60px 20px;
  text-align: center;
}

.social-hero h1 {
  font-size: 2.5rem;
  margin-bottom: 10px;
}

.social-hero p {
  font-size: 1.1rem;
  max-width: 800px;
  margin: 0 auto;
}

.social-courses .grid-columns-2 {
  display: grid;
  gap: 30px;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  margin-top: 40px;
}

.social-courses .card {
  background: white;
  padding: 25px;
  border-radius: 10px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.08);
  text-align: left;
}

.social-courses .card h3 {
  color: #106d5e;
  margin-bottom: 10px;
  font-size: 1.2rem;
}

.social-courses .card p {
  font-size: 0.95rem;
  line-height: 1.6;
}

@media screen and (max-width: 768px) {
  .social-hero h1 {
    font-size: 2rem;
  }
  .social-courses .card h3 {
    font-size: 1.1rem;
  }
  .social-courses .card p {
    font-size: 0.9rem;
  }
}
</style>

<?php get_footer(); ?>
