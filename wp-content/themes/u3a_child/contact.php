<?php
/**
 * Template Name: Contact
 * Description: A welcoming and informative contact page for U3A Townsville.
 */

get_header(); ?>

<section class="section contact-hero">
  <div class="container text-center">
    <h1>Contact U3A Townsville</h1>
    <p>We’d love to hear from you. Whether you have a question, suggestion, or need help joining — we’re here for you.</p>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/IMG_3073.JPG" alt="U3A Community" class="contact-hero-image">
  </div>
</section>

<section class="section contact-details">
  <div class="container">
    <h2>Our Office</h2>
    <p><strong>Address:</strong><br>
    U3A Townsville Office<br>
    Vincent Campus, 15 Patrick Street, Vincent QLD 4814</p>

    <p><strong>Phone:</strong> (07) 4724 3530<br>
    <strong>Email:</strong> <a href="mailto:info@u3atownsville.org.au">info@u3atownsville.org.au</a></p>

    <p><strong>Office Hours:</strong><br>
    Monday to Friday – 9:00am to 12:00pm</p>
  </div>
</section>

<section class="section contact-form bg-light">
  <div class="container">
    <h2>Send Us a Message</h2>
    <p>If you prefer to reach out digitally, please complete the form below. A volunteer will respond to your inquiry shortly.</p>

    <?php echo do_shortcode('[contact-form-7 id="8154cc3" title="U3A Contact Form"]'); ?>
  </div>
</section>

<section class="section visit-map">
  <div class="container text-center">
    <h2>Find Us</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3516.842870872617!2d146.7750!3d-19.2921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6bd476501234567%3A0x1a2b3c4d5e6f789!2s15%20Patrick%20St%2C%20Vincent%20QLD%204814%2C%20Australia!5e0!3m2!1sen!2sau!4v1681256543210!5m2!1sen!2sau" width="100%" height="350" style="border:0; border-radius: 8px;" allowfullscreen="" loading="lazy"></iframe>
  </div>
</section>

<?php get_footer(); ?>
