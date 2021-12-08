<?php
/*
 * Template Name: Contact Us Page
 */

get_header(''); ?>

<!-- Landing Section Start -->
<section class="gf-landing-section gf-contact-landing-section" style="background-image: url(http://greyfilm.notionprojects.tech/wp-content/uploads/2021/11/cotact-landing-img.png);">
    <div class="container">
        <div class="gf-contact-landing-content">
            <div class="row">
                <div class="col col-12 col-md-6 col-lg-6">
                    <div class="gf-contact-details">
                        <?php if( have_rows('contact') ): ?>
                            <?php while( have_rows('contact') ): the_row(); 
                                $email = get_sub_field('email');
                                $mobile = get_sub_field('mobile');
                                ?>
                                <div class="gf-contact-details__inner">
                                    <h3 class="gf-contact-detail-title"><?php the_sub_field('title'); ?></h3>
                                    <p class="gf-contact-detail-designation"><?php the_sub_field('designation'); ?></p>
                                    <p class="gf-contact-detail"><span>Email:</span> <a href="<?php echo $email['url']; ?>"><?php echo $email['title']; ?></a></p>
                                    <p class="gf-contact-detail"><span>Mobile:</span> <a href="<?php echo $mobile['url']; ?>"><?php echo $mobile['title']; ?></a></p>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <div class="gf-contact-details__inner">
                            <p class="gf-contact-detail-address"><?php the_field('address') ?></p>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="gf-contact-form">
                        <div class="gf-contact-form__inner">
                            <h3 class="gf-section-title"><?php the_field('form_title') ?></h3>
                            <p class="gf-section-description"><?php the_field('form_description') ?></p>
                            <?php echo do_shortcode( '[contact-form-7 id="193" title="Contact Page Form"]' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Landing Section End -->

<!-- Our Serivces Section Start -->
<section class="gf-serivce-domain-section gf-who-are-section">
    <div class="container">
        <div class="gf-section-heading text-center">
            <h2 class="gf-section-title"><?php the_field('who_are_title') ?></h2>
            <p class="gf-section-description"><?php the_field('who_are_description') ?></p>
            <?php $who_are_button = get_field('who_are_button'); ?>
            <a href="<?php echo $who_are_button['url']; ?>" class="btn btn-danger"><?php echo $who_are_button['title']; ?></a>
        </div>
    </div>
</section>
<!-- Our Serivces Section End -->


<!-- What our Clients say Section Start -->
<section class="gf-client-say-sectionn">
    <div class="gf-client-say-slider-content">
        <div class="gf-client-say-slider">
            <?php if( have_rows('testimonials' , 'option') ): ?>
                <?php while( have_rows('testimonials' , 'option') ): the_row(); 
                    $image = get_sub_field('image');
                    ?>
                    <div class="gf-client-say-slide">
                        <div class="gf-client-say-card">
                            <div class="gf-client-say-card-img">
                                <img src="<?php echo $image['url']; ?>" alt="" class="img-fluid">
                            </div>
                            <h3 class="gf-client-say-title"><?php the_sub_field('name'); ?></h3>
                            <p class="gf-client-say-text"><?php the_sub_field('description'); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- What our Clients say Section End -->

<!-- Natural History Section Start -->
<?php
    $history_image = get_field('history_image' , 'option');
?>
<section class="gf-natural-history-section" style="background-image: url(<?php echo $history_image['url']; ?>);">
    <div class="container">
        <div class="row">
            <div class="col col-6 col-md-6 col-lg-3">
                <div class="gf-natural-history-logo">
                    <?php
                        $history_logo = get_field('history_logo' , 'option');
                    ?>
                    <img src="<?php echo $history_logo['url']; ?>" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col col-6 col-md-6 col-lg-6">
                <div class="gf-natural-history-content">
                    <h2 class="gf-section-title"><?php the_field('history_title' , 'option'); ?></h2>
                    <p class="gf-section-description"><?php the_field('history_label' , 'option'); ?></p>
                </div>
            </div>
            <div class="col col-12 col-md-6 col-lg-3">
                <div class="gf-natural-history-content">
                    <p class="gf-section-description"><?php the_field('history_description' , 'option'); ?></p>
                    <?php
                        $history_button = get_field('history_button' , 'option');
                    ?>
                    <a href="<?php echo $history_button['url']; ?>" class="btn btn-danger"><?php echo $history_button['title']; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Natural History Section End -->

<?php get_footer(''); ?>
