<?php

/**
 * Template name: Biography page
 */

get_header();

$header = get_field('header');
$bio = get_field('biography');
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

  <div class="container site-section">
    <div class="row align-items-stretch feature-2">
      <div class="col-lg-5 feature-2-img">
        <img src="<?= $bio['section_3']['image']; ?>" alt="Image" class="img-fluid">
      </div>
      <div class="col-lg-7 feature-2-contents pl-lg-5">
        <div class="fixed-content">
          <span class="caption"><?= $bio['section_3']['number']; ?></span>
          <h3 class="mb-5"><?= $bio['section_3']['title']; ?></h3>
          <p><?= $bio['section_3']['content']; ?></p>
        </div>
      </div>
    </div>
  </div>

  <div class="container site-section">
    <div class="row align-items-stretch feature-2">
      <div class="col-lg-5 feature-2-img order-lg-2">
        <img src="<?= $bio['section_4']['image']; ?>" alt="Image" class="img-fluid">
      </div>
      <div class="col-lg-7 feature-2-contents pr-lg-5">
        <div class="fixed-content">
          <span class="caption"><?= $bio['section_4']['number']; ?></span>
          <h3 class="mb-5"><?= $bio['section_4']['title']; ?></h3>
          <p><?= $bio['section_4']['content']; ?></p>
        </div>
      </div>
    </div>
  </div>

  <div class="container site-section">
    <div class="row align-items-stretch feature-2">
      <div class="col-lg-5 feature-2-img">
        <img src="<?= $bio['section_5']['image']; ?>" alt="Image" class="img-fluid">
      </div>
      <div class="col-lg-7 feature-2-contents pl-lg-5">
        <div class="fixed-content">
          <span class="caption"><?= $bio['section_5']['number']; ?></span>
          <h3 class="mb-5"><?= $bio['section_5']['title']; ?></h3>
          <p><?= $bio['section_5']['content']; ?></p>
        </div>
      </div>
    </div>
  </div>

  <div class="container site-section">
    <div class="row align-items-stretch feature-2">
      <div class="col-lg-5 feature-2-img order-lg-2">
        <img src="<?= $bio['section_6']['image']; ?>" alt="Image" class="img-fluid">
      </div>
      <div class="col-lg-7 feature-2-contents pr-lg-5">
        <div class="fixed-content">
          <span class="caption"><?= $bio['section_6']['number']; ?></span>
          <h3 class="mb-5"><?= $bio['section_6']['title']; ?></h3>
          <p><?= $bio['section_6']['content']; ?></p>
        </div>
      </div>
    </div>
  </div>

  <div class="container site-section">
    <div class="row align-items-stretch feature-2">
      <div class="col-lg-5 feature-2-img">
        <img src="<?= $bio['section_7']['image']; ?>" alt="Image" class="img-fluid">
      </div>
      <div class="col-lg-7 feature-2-contents pl-lg-5">
        <div class="fixed-content">
          <span class="caption"><?= $bio['section_7']['number']; ?></span>
          <h3 class="mb-5"><?= $bio['section_7']['title']; ?></h3>
          <p><?= $bio['section_7']['content']; ?></p>
        </div>
      </div>
    </div>
  </div>

  <div class="container site-section">
    <div class="row align-items-stretch feature-2">
      <div class="col-lg-5 feature-2-img order-lg-2">
        <img src="<?= $bio['section_8']['image']; ?>" alt="Image" class="img-fluid">
      </div>
      <div class="col-lg-7 feature-2-contents pr-lg-5">
        <div class="fixed-content">
          <span class="caption"><?= $bio['section_8']['number']; ?></span>
          <h3 class="mb-5"><?= $bio['section_8']['title']; ?></h3>
          <p><?= $bio['section_8']['content']; ?></p>
        </div>
      </div>
    </div>
  </div>

  <div class="container site-section">
    <div class="row align-items-stretch feature-2">
      <div class="col-lg-5 feature-2-img">
        <img src="<?= $bio['section_9']['image']; ?>" alt="Image" class="img-fluid">
      </div>
      <div class="col-lg-7 feature-2-contents pl-lg-5">
        <div class="fixed-content">
          <span class="caption"><?= $bio['section_9']['number']; ?></span>
          <h3 class="mb-5"><?= $bio['section_9']['title']; ?></h3>
          <p><?= $bio['section_9']['content']; ?></p>
        </div>
      </div>
    </div>
  </div>

  <div class="container site-section">
    <div class="row align-items-stretch feature-2">
      <div class="col-lg-5 feature-2-img order-lg-2">
        <img src="<?= $bio['section_10']['image']; ?>" alt="Image" class="img-fluid">
      </div>
      <div class="col-lg-7 feature-2-contents pr-lg-5">
        <div class="fixed-content">
          <span class="caption"><?= $bio['section_10']['number']; ?></span>
          <h3 class="mb-5"><?= $bio['section_10']['title']; ?></h3>
          <p><?= $bio['section_10']['content']; ?></p>
        </div>
      </div>
    </div>
  </div>

</div>

<?php
get_footer();
