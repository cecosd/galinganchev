<?php
/**
 * Template Name: Contacts Page
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
        <div class="col-lg-8 mb-5" >
            <div class="form-group row">
                <div class="col-md-12">
                    <input type="text" class="form-control" placeholder="Email address" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                    <textarea name="" id="" class="form-control" placeholder="Write your message." cols="30" rows="10" required></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6 mr-auto">
                    <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
                </div>
            </div>
        </div>
        <div class="col-lg-4 ml-auto">
            <div class="bg-white p-3 p-md-5">
                <h3 class="text-black mb-4"><?= $contactsPanel['header']; ?></h3>
                <ul class="list-unstyled footer-link">
                <li class="d-block mb-3"><span class="d-block text-black"><?= $contactsPanel['email_label']; ?>:</span><span><?= $contactsPanel['email_address']; ?></span></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</div>

</div>

<?php
get_footer();