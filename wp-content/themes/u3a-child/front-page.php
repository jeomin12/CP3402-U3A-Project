<?php
/**
 * Template Name: Homepage
 */
get_header();
?>

<main id="primary" class="site-main homepage-template">

    <!-- Hero Section -->
    <section class="home-hero">
        <div class="hero-content">
            <h1>Welcome to U3A Townsville</h1>
            <p class="hero-subtitle">Lifelong learning for retirees and semi-retirees</p>
            <div class="hero-buttons">
                <a href="/membership" class="button primary">Join Us</a>
                <a href="/courses" class="button secondary">View Courses</a>
            </div>
        </div>
    </section>

    <!-- Featured Courses -->
    <section class="featured-section">
        <h2 class="section-title">Featured Courses</h2>
        <div class="course-grid">
            <?php
            // Example of displaying 3 featured courses
            $courses = new WP_Query(array(
                'post_type' => 'course',
                'posts_per_page' => 3,
                'meta_key' => 'featured',
                'meta_value' => 'yes'
            ));
            
            if ($courses->have_posts()) :
                while ($courses->have_posts()) : $courses->the_post(); ?>
                    <article class="course-card">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="course-thumbnail">
                                <?php the_post_thumbnail('medium'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="course-content">
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                            <a href="<?php the_permalink(); ?>" class="read-more">Learn More</a>
                        </div>
                    </article>
                <?php endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </section>

    <!-- Upcoming Events -->
    <section class="events-section">
        <h2 class="section-title">Upcoming Events</h2>
        <div class="events-list">
            <?php
            // Example of displaying upcoming events
            $events = new WP_Query(array(
                'post_type' => 'event',
                'posts_per_page' => 3,
                'meta_key' => 'event_date',
                'orderby' => 'meta_value',
                'order' => 'ASC',
                'meta_query' => array(
                    array(
                        'key' => 'event_date',
                        'value' => date('Y-m-d'),
                        'compare' => '>=',
                        'type' => 'DATE'
                    )
                )
            ));
            
            if ($events->have_posts()) :
                while ($events->have_posts()) : $events->the_post(); ?>
                    <article class="event-card">
                        <div class="event-date">
                            <?php echo date('j M', strtotime(get_field('event_date'))); ?>
                        </div>
                        <div class="event-details">
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                        </div>
                    </article>
                <?php endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta-section">
        <div class="cta-content">
            <h2>Ready to start your learning journey?</h2>
            <a href="/contact" class="button primary">Get in Touch</a>
        </div>
    </section>

</main>

<?php
get_footer();
?>