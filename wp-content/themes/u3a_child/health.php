<?php
/**
 * Template Name: Health & Wellbeing Courses
 * Description: Page showcasing U3A Townsville’s fitness, mindfulness, and wellness activities.
 */

get_header(); ?>

<section class="section health-hero">
  <div class="container text-center">
    <h1>Health & Wellbeing Courses</h1>
    <p>Stay active, energised, and balanced with a wide range of wellness programs designed for seniors.</p>
  </div>
</section>

<section class="section health-courses bg-light">
  <div class="container">
    <div class="grid-columns-2">

      <div class="card">
        <h3>Tai Chi</h3>
        <p>Practice slow, flowing movements to improve balance, coordination, and calm. Taught by trained facilitators using the Yang 85 form.</p>
      </div>

      <div class="card">
        <h3>Gentle Exercise</h3>
        <p>Low-impact routines suitable for all fitness levels to improve flexibility, strength, and general mobility.</p>
      </div>

      <div class="card">
        <h3>Walking Group</h3>
        <p>Meet weekly for casual social walks around Townsville’s parks, pathways, and coastline.</p>
      </div>

      <div class="card">
        <h3>Dance for Fitness</h3>
        <p>Enjoy upbeat group movement sessions with music to keep your heart pumping and spirit high.</p>
      </div>

      <div class="card">
        <h3>Mindfulness & Meditation</h3>
        <p>Learn simple breathing and awareness techniques to reduce stress, improve sleep, and stay centred.</p>
      </div>

      <div class="card">
        <h3>Journaling for Wellness</h3>
        <p>Use reflective writing as a tool for emotional clarity, goal setting, and personal peace.</p>
      </div>

    </div>
  </div>
</section>

<style>
.health-hero {
  background-color: #0057a8;
  color: white;
  padding: 60px 20px;
  text-align: center;
}

.health-hero h1 {
  font-size: 2.5rem;
  margin-bottom: 10px;
}

.health-hero p {
  font-size: 1.1rem;
  max-width: 800px;
  margin: 0 auto;
}

.health-courses .grid-columns-2 {
  display: grid;
  gap: 30px;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  margin-top: 40px;
}

.health-courses .card {
  background: white;
  padding: 25px;
  border-radius: 10px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.08);
  text-align: left;
}

.health-courses .card h3 {
  color: #106d5e;
  margin-bottom: 10px;
  font-size: 1.2rem;
}

.health-courses .card p {
  font-size: 0.95rem;
  line-height: 1.6;
}

@media screen and (max-width: 768px) {
  .health-hero h1 {
    font-size: 2rem;
  }
  .health-courses .card h3 {
    font-size: 1.1rem;
  }
  .health-courses .card p {
    font-size: 0.9rem;
  }
}
</style>

<?php get_footer(); ?>
