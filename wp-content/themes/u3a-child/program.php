<?php
/**
 * Template Name: Program Overview
 * Description: Detailed summary of U3A Townsville’s course delivery format, terms, and timetable access.
 */

get_header(); ?>

<section class="section program-hero">
  <div class="container text-center">
    <h1>Program Overview</h1>
    <p>Learn how our program works — from term dates and course structure to how to join and access the latest timetable.</p>
  </div>
</section>

<section class="section program-details bg-light">
  <div class="container">
    <h2>Course Delivery</h2>
    <p>U3A Townsville courses are peer-led, informal, and flexible. Classes are offered weekly, fortnightly, or monthly depending on the topic and tutor availability. You can participate in as many courses as you like for one annual membership fee.</p>

    <h2>Program Terms</h2>
    <ul>
      <li><strong>Term 1:</strong> February to April</li>
      <li><strong>Term 2:</strong> May to June</li>
      <li><strong>Term 3:</strong> July to September</li>
      <li><strong>Term 4:</strong> October to November</li>
    </ul>

    <h2>How to Enrol</h2>
    <p>You can enrol via our <a href="https://members.u3atownsville.org.au" target="_blank">Member Portal</a> or by visiting the office. Our friendly volunteers can help you sign up, find classes, and manage your registration.</p>

    <h2>Timetables</h2>
    <p>View or download the current course timetable below:</p>
    <a href="/assets/Calendar.pdf" class="btn btn-secondary" target="_blank">Download Timetable</a>
  </div>
</section>

<style>
.program-hero {
  background-color: #0057a8;
  color: white;
  padding: 60px 20px;
  text-align: center;
}

.program-hero h1 {
  font-size: 2.5rem;
  margin-bottom: 10px;
}

.program-hero p {
  font-size: 1.1rem;
  max-width: 800px;
  margin: 0 auto;
}

.program-details h2 {
  color: #0057a8;
  margin-top: 30px;
  margin-bottom: 10px;
}

.program-details p,
.program-details ul {
  font-size: 1rem;
  line-height: 1.6;
}

.program-details ul {
  padding-left: 20px;
  list-style-type: disc;
}

.btn-secondary {
  background-color: #106d5e;
  color: white;
  padding: 10px 20px;
  border-radius: 6px;
  text-decoration: none;
  display: inline-block;
  margin-top: 20px;
}

.btn-secondary:hover {
  background-color: #0b5d50;
}

@media screen and (max-width: 768px) {
  .program-hero h1 {
    font-size: 2rem;
  }
}
</style>

<?php get_footer(); ?>
