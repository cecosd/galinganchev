<?php
/**
 * Template Name: Events Page
 */
get_header();

$header = get_field('header');
$get_events = array('post_type' => 'events', 'posts_per_page' => 100);
$events = new WP_Query($get_events);
?>
<div class="ftco-blocks-cover-1">
    <div class="ftco-cover-1 overlay parallax-header-image" style="background-image: url('<?= $header['image']; ?>')">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-center">
                    <?php if (isset($header['title'])) : ?>
                        <h1><?= $header['title']; ?></h1>
                    <?php endif; ?>
                    <?php if (isset($header['subtitle'])) : ?>
                        <p><?= $header['subtitle']; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section bg-light">
  <div class="container">
    <div class="row align-items-stretch">
      <?php if ($events->have_posts()) : ?>
        <?php while ($events->have_posts()) : $events->the_post(); ?>
          <?php $event = get_field('event'); ?>
          <div class="col-lg-3 col-md-6 mb-5">
            <div class="post-entry-1 h-100">
              <a href="#">
                <img src="<?= (!$event['image']) ? bloginfo('template_directory') . "/images/event-default-image.jpg" : $event['start_date']; ?>" alt="Image" class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                <span class="meta"><?= $event['start_date'];?></span>
                <a href="#">
                  <h2><?php the_title(); ?></h2>
                </a>
                <a href="<?php the_permalink(); ?>" class="more">Read More</a>
              </div>
            </div>
          </div>
          <?php wp_reset_postdata(); ?>
        <?php endwhile; ?>
        <?php echo paginate_links( $get_events ); ?>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php
get_footer();
