<?php
/**
 * Template Name: For Members
 * Description: A helpful member hub for accessing resources, policies, volunteer info, and tutor support.
 */

get_header(); ?>

<section class="section members-hero">
  <div class="container text-center">
    <h1>For Our Members</h1>
    <p>Everything you need as a U3A Townsville member — resources, support, and ways to get involved.</p>
  </div>
</section>

<section class="section member-links bg-light">
  <div class="container">
    <div class="grid-columns-2">

      <div class="card">
        <h3>Member Portal</h3>
        <p>Access your profile, register for classes, and renew your membership securely online.</p>
        <a href="/login" class="btn btn-outline" target="_blank">Go to Portal</a>
      </div>

      <div class="card">
        <h3>Volunteer With Us</h3>
        <p>Explore flexible volunteer roles — from tutors to admin support and event helpers.</p>
        <a href="/volunteer" class="btn btn-outline">Volunteer Info</a>
      </div>

      <div class="card">
        <h3>Resources & Downloads</h3>
        <p>Find timetables, handbooks, membership forms, and more in one central location.</p>
        <a href="/news-resources" class="btn btn-outline">View Resources</a>
      </div>

      <div class="card">
        <h3>Policies & Code of Conduct</h3>
        <p>Learn about the expectations and standards that help keep U3A welcoming for all.</p>
        <a href="/downloads/code-of-conduct.pdf" class="btn btn-outline" target="_blank">Download Code</a>
      </div>

      <div class="card">
        <h3>Tutor Support</h3>
        <p>New or experienced tutors can access support, guides, and contact info to help run successful classes.</p>
        <a href="/downloads/tutor-handbook.pdf" class="btn btn-outline" target="_blank">Tutor Handbook</a>
      </div>

      <div class="card">
        <h3>Contact the Office</h3>
        <p>Need help? Our friendly admin team is available on weekdays to support members with any enquiry.</p>
        <a href="/contact" class="btn btn-outline">Contact Us</a>
      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>
