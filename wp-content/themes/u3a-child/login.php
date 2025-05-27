<?php
/**
 * Template Name: Member Portal Login
 * Description: Simple login gateway page linking to the external U3A Member Portal.
 */

get_header(); ?>

<section class="section portal-hero">
  <div class="container text-center">
    <h1>Member Portal</h1>
    <p>Access your personal U3A dashboard to enrol in courses, renew membership, and update your details securely.</p>
    <a href="https://members.u3atownsville.org.au" class="btn btn-primary" target="_blank">Go to Member Portal</a>
  </div>
</section>

<style>
.portal-hero {
  background-color: #0057a8;
  color: white;
  text-align: center;
  padding: 100px 20px;
}

.portal-hero h1 {
  font-size: 2.5rem;
  margin-bottom: 20px;
}

.portal-hero p {
  font-size: 1.1rem;
  max-width: 700px;
  margin: 0 auto 30px;
}

.btn-primary {
  background-color: #ffc107;
  color: #003b80;
  padding: 12px 24px;
  font-weight: bold;
  text-decoration: none;
  border-radius: 6px;
  display: inline-block;
  transition: background-color 0.3s;
}

.btn-primary:hover {
  background-color: #e6ad00;
}

@media screen and (max-width: 768px) {
  .portal-hero h1 {
    font-size: 2rem;
  }
  .portal-hero p {
    font-size: 0.95rem;
  }
}
</style>

<?php get_footer(); ?>
