<?php get_header(); ?>

<?php
$header = get_field('header');
?>
<?php while (have_posts()) : the_post(); ?>
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

<div class="site-section bg-light" id="contact-section">
  <div class="container">
    <div class="row">
        <?= the_content() ?>
    </div>
  </div>
</div>
<?php endwhile; ?>


<?php get_footer(); ?>