<?php

/**
 * Template Name: Events Page
 */
get_header();

$header = get_field('header');
$get_events = array('post_type' => 'events', 'posts_per_page' => 100);
$events = new WP_Query($get_events);
?>
<?php while (have_posts()) : the_post(); ?>
    <?php $event = get_field('event'); ?>
    <div class="events ftco-blocks-cover-1 ftco-blocks-single-cover">
        <div class="ftco-cover-1 ftco-blocks-single-cover overlay parallax-header-image" style="background-image: url('<?= bloginfo('template_directory') . "/images/event-default-image.jpg"; ?>')">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h1><?php the_title(); ?></h1>
                        <p><?= $event['start_date']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-light">
        <div class="container">
            <div class="row align-items-stretch">
                <div class="col-lg-12 col-md-6 mb-5">
                    <h2><?= (get_locale() == 'en_US') ? "Details" : "Детайли" ?>:</h2>
                        <?= the_content(); ?>
                    <?php if(!empty($event['time_start'])): ?>
                        <h2>Time start: </h2>
                        <p><?= $event['time_start']; ?> GMT</p>
                    <?php endif; ?>

                    <h2><?= (get_locale() == 'en_US') ? "Location" : "Локация" ?>:</h2>
                    <?= $event['location']; ?>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>
<?php
get_footer();
