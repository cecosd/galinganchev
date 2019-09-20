<?php get_header(); ?>

<?php
$header = get_field('header');
$bio = get_field('biography');
$get_quotes = array('post_type' => 'quotes', 'posts_per_page' => 10);
$quotes = new WP_Query($get_quotes);
$get_events = array('post_type' => 'events', 'posts_per_page' => 4);
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

<div class="site-section section-2">
  <div class="container">
    <div class="row justify-content-center text-center mb-5 section-2-title">
      <div class="col-md-6">
        <h2 class="mb-4 text-primary"><?= $bio['title']; ?></h2>
        <span class="text-primary"><?= $bio['subtitle']; ?></span>
        <p><?= $bio['before_content']; ?></p>
      </div>
    </div>
  </div>
  <div class="container site-section">
    <div class="row align-items-stretch feature-2">
      <div class="col-lg-5 feature-2-img">
        <img src="<?= $bio['section_1']['image']; ?>" alt="Image" class="img-fluid">
      </div>
      <div class="col-lg-7 feature-2-contents pl-lg-5">
        <div class="fixed-content">
          <span class="caption"><?= $bio['section_1']['number']; ?></span>
          <h3 class="mb-5"><?= $bio['section_1']['title']; ?></h3>
          <p><?= $bio['section_1']['content']; ?></p>
        </div>
      </div>
    </div>
  </div>

  <div class="container site-section">
    <div class="row align-items-stretch feature-2">
      <div class="col-lg-5 feature-2-img order-lg-2">
        <img src="<?= $bio['section_2']['image']; ?>" alt="Image" class="img-fluid">
      </div>
      <div class="col-lg-7 feature-2-contents pr-lg-5">
        <div class="fixed-content">
          <span class="caption"><?= $bio['section_2']['number']; ?></span>
          <h3 class="mb-5"><?= $bio['section_2']['title']; ?></h3>
          <p><?= $bio['section_2']['content']; ?></p>
        </div>
      </div>
    </div>
  </div>

</div>

<?php if ($quotes->have_posts()) : ?>
  <div class="site-section section-4">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-md-12 owl-carousel owl-theme">
          <?php while ($quotes->have_posts()) : $quotes->the_post(); ?>
            <blockquote class="testimonial-1 item">
              <span class="quote quote-icon-wrap"><span class="icon-format_quote"></span></span>
              <?php the_content(); ?>
              <cite><span class="text-black"><?php the_title(); ?></span></cite>
            </blockquote>
            <?php wp_reset_postdata(); ?>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>

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
      <?php endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>