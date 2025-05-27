<?php
/**
 * Template Name: Course Overview
 * Description: Landing page for U3A Townsville’s course categories and activities.
 */

get_header(); ?>

<section class="section course-overview-hero">
  <div class="container text-center">
    <h1>Courses & Activities</h1>
    <p>U3A Townsville offers a rich variety of programs to stimulate your mind, body, and spirit. Whether you're interested in history, want to stay active, or enjoy social games and gatherings, there's something for everyone.</p>
  </div>
</section>

<section class="section course-category-grid bg-light">
  <div class="container">
    <div class="grid-columns-3">

      <div class="card">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/IMG_3133.JPG" alt="Academic Courses" style="width:100%; border-radius: 8px; margin-bottom: 15px;">
        <h3>Academic & Interest-Based</h3>
        <p>Delve into topics like history, philosophy, language, and the arts through engaging peer-led classes and discussion groups that foster creativity and critical thinking.</p>
        <a href="/academic" class="btn btn-outline">Explore Topics</a>
      </div>
      
      <div class="card">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/MagneticIslandTaiChi003.JPG" alt="Health & Wellbeing" style="width:100%; border-radius: 8px; margin-bottom: 15px;">
        <h3>Health & Wellbeing</h3>
        <p>Keep your body active and mind balanced with courses in Tai Chi, walking groups, dance for fitness, gentle exercise, and mindfulness techniques that enhance wellness.</p>
        <a href="/health" class="btn btn-outline">View Activities</a>
      </div>

      <div class="card">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/History.JPG" alt="Social Courses" style="width:100%; border-radius: 8px; margin-bottom: 15px;">
        <h3>Social & Special Interest</h3>
        <p>Make new friends and enjoy casual games, singing, crafting, and group meetups that promote connection, fun, and shared hobbies in a relaxed setting.</p>
        <a href="/social" class="btn btn-outline">Join Social Groups</a>
      </div>

    </div>
  </div>
</section>

<style>
.course-overview-hero {
  background-color: #0057a8;
  color: white;
  padding: 60px 20px;
  text-align: center;
}

.course-overview-hero h1 {
  font-size: 2.5rem;
  margin-bottom: 10px;
}

.course-overview-hero p {
  font-size: 1.1rem;
  max-width: 800px;
  margin: 0 auto;
}

.course-category-grid .grid-columns-3 {
  display: grid;
  gap: 30px;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  margin-top: 40px;
}

.course-category-grid .card {
  background: white;
  padding: 25px;
  border-radius: 10px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.08);
  text-align: center;
}

.course-category-grid .card h3 {
  color: #106d5e;
  margin-bottom: 10px;
  font-size: 1.3rem;
}

.course-category-grid .card p {
  font-size: 0.95rem;
  line-height: 1.6;
  margin-bottom: 15px;
}

.course-category-grid .btn {
  padding: 10px 20px;
  text-decoration: none;
  border: 2px solid #0057a8;
  border-radius: 6px;
  color: #0057a8;
  font-weight: bold;
  transition: 0.3s;
  display: inline-block;
}

.course-category-grid .btn:hover {
  background-color: #0057a8;
  color: white;
}

@media screen and (max-width: 768px) {
  .course-overview-hero h1 {
    font-size: 2rem;
  }
  .course-category-grid .card h3 {
    font-size: 1.1rem;
  }
  .course-category-grid .card p {
    font-size: 0.9rem;
  }
}
</style>

<?php get_footer(); ?>
