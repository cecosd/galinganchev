<?php
/**
 * Template Name: Media Page
 */
get_header();

$header = get_field('header');
$bio = get_field('biography');
$contactsPanel = get_field('contacts_panel');
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

<div class="site-section bg-light" id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-5" >
                <iframe width="100%" height="300px" src="https://www.youtube.com/embed/Ao-o8xzInh4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-lg-4 mb-5" >
                <iframe width="100%" height="300px" src="https://www.youtube.com/embed/CGRhC7QWgfg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-lg-4 mb-5" >
                <iframe width="100%" height="300px" src="https://www.youtube.com/embed/063w5MftUCs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-lg-4 mb-5" >
                <iframe width="100%" height="300px" src="https://www.youtube.com/embed/Z0cyjWPrCV8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-lg-4 mb-5" >
                <iframe width="100%" height="300px" src="https://www.youtube.com/embed/FzGupcx7SD4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-lg-4 mb-5" >
                <iframe width="100%" height="300px" src="https://www.youtube.com/embed/o-C0XB3r5a4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-lg-4 mb-5" >
                <iframe width="100%" height="300px" src="https://www.youtube.com/embed/tGfjZY-3LYw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-lg-4 mb-5" >
                <iframe width="100%" height="300px" src="https://www.youtube.com/embed/0gepoeU0vHI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-lg-4 mb-5" >
                <iframe width="100%" height="300px" src="https://www.youtube.com/embed/06VYlAWGK3M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

</div>

<?php
get_footer();