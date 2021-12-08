<?php
/*
 * Template Name: Home Page
 */

get_header(''); ?>

<!-- Landing Section Start -->
<section class="gf-landing-section gf-home-landing-section">
    <div class="gf-landing-img d-none d-md-block">
        <?php
            $landing_image_one = get_field('landing_image_one');
            $landing_image_one_mobile = get_field('landing_image_one_mobile');
            $landing_image_two = get_field('landing_image_two');
            $landing_image_two_mobile = get_field('landing_image_two_mobile');
        ?>
        <img src="<?php echo $landing_image_one['url']; ?>" alt="" class="img-fluid w-100 d-none d-md-block">
        <img src="<?php echo $landing_image_two['url']; ?>" alt="" class="img-fluid w-100 d-none d-md-block">
    </div>
    <div class="gf-landing-content d-none d-md-block">
        <p class="gf-section-description"><?php the_field('landing_top_description') ?></p>
        <label class="gf-section-label"><?php the_field('landing_top_label') ?></label>
        
        <div class="gf-landing-content-bottom">
            <h2 class="gf-section-title"><?php the_field('landing_title') ?></h2>
            <div class="gf-section-description"><?php the_field('landing_bottom_description') ?></div>
        </div>
    </div>
    <div class="gf-home-landing-top-content d-block d-md-none">
        <img src="<?php echo $landing_image_one_mobile['url']; ?>" alt="" class="img-fluid w-100 d-block d-md-none">
        <div class="gf-landing-content">
            <p class="gf-section-description"><?php the_field('landing_top_description') ?></p>
            <label class="gf-section-label"><?php the_field('landing_top_label') ?></label>
        </div>
    </div>
    <div class="gf-home-landing-bottom-content d-block d-md-none">
        <img src="<?php echo $landing_image_two_mobile['url']; ?>" alt="" class="img-fluid w-100 d-block d-md-none">
        <div class="gf-landing-content">
            <div class="gf-landing-content-bottom">
                <h2 class="gf-section-title"><?php the_field('landing_title') ?></h2>
                <div class="gf-section-description"><?php the_field('landing_bottom_description') ?></div>
            </div>
        </div>
    </div>
</section>
<!-- Landing Section End -->

<!-- Works Section Start -->
<section class="gf-work-section">
    <div class="gf-work-img">
        <?php
            $work_image = get_field('work_image');
            $work_image_mobile = get_field('work_image_mobile');
        ?>
        <img src="<?php echo $work_image['url']; ?>" alt="" class="img-fluid w-100 d-none d-md-block">
        <img src="<?php echo $work_image_mobile['url']; ?>" alt="" class="img-fluid w-100 d-block d-md-none">
    </div>
    <div class="gf-work-content">
        <label class="gf-section-subtitle"><?php the_field(work_subtitle); ?></label>
        <h2 class="gf-section-title"><?php the_field(work_title); ?></h2>
    </div>
    <div class="container">
        <div class="gf-section-content">
            <?php if( have_rows('work_category') ): ?>
                <?php while( have_rows('work_category') ): the_row(); 
                    $image = get_sub_field('image');
                    $work_link = get_sub_field('work_link');
                    ?>
                    <div class="row">
                        <div class="col col-12 col-md-6 col-lg-6">
                            <div class="gf-works-img">
                                <img src="<?php echo $image['url']; ?>" alt="" class="img-fluid">
                            </div>    
                        </div>
                        <div class="col col-12 col-md-6 col-lg-6">
                            <div class="gf-works-content">
                                <label class="gf-works-label"><?php the_sub_field('label'); ?></label>
                                <h3 class="gf-works-title"><?php the_sub_field('title'); ?></h3>
                                <h5 class="gf-works-subtitle"><?php the_sub_field('subtitle'); ?></h5>
                                <p class="gf-works-description"><?php the_sub_field('description'); ?></p>
                                <a href="<?php echo $work_link['url']; ?>" class="btn btn-danger"><?php echo $work_link['title']; ?></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</section>
<!-- Works Section End -->

<!-- Our Services Section Start -->
<section class="gf-our-service-section">
    <div class="gf-our-service-heading">
        <h2 class="gf-section-title text-center"><?php the_field('services_title') ?></h2>
    </div>
    <div class="gf-our-service-slider-content">
        <div class="gf-our-service-slider">
            <?php if( have_rows('our_services') ): ?>
                <?php while( have_rows('our_services') ): the_row(); 
                    $image = get_sub_field('image');
                    $service_name = get_sub_field('service_name');
                    ?>
                    <div class="gf-our-service-slide">
                        <div class="gf-our-service-card">
                            <img src="<?php echo $image['url']; ?>" alt="" class="img-fluid">
                            <a href="<?php $service_name['url']; ?>" class="gf-our-service-card-title"><?php $service_name['title']; ?></a>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="text-center">
            <?php
                $see_detailed_service_button = get_field('see_detailed_service_button');
            ?>
            <a href="<?php echo $see_detailed_service_button['url']; ?>" class="btn btn-danger"><?php echo $see_detailed_service_button['title']; ?></a>
        </div>
    </div>
</section>
<!-- Our Services Section End -->

<!-- Nallamuthu About Section Start -->
<section class="gf-nallamuthu-about-section">
    <div class="gf-nallamuthu-about-heading">
        <h2 class="gf-section-title"><?php the_field('subbiah_tittle'); ?></h2>
        <p class="gf-section-description"><?php the_field('subbiah_designation'); ?></p>
        <div class="container">
            <div class="gf-nallamuthu-about-img">
                <?php
                    $subbiah_image = get_field('subbiah_image');
                ?>
                <img src="<?php echo $subbiah_image['url']; ?>" alt="subbiah-nallamuthu-round" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="text-center gf-nallamuthu-about-btn">
        <?php
            $subbiah_contact_button = get_field('subbiah_contact_button');
            $subbiah_about_button = get_field('subbiah_about_button');
        ?>
        <a href="<?php echo $subbiah_contact_button['url']; ?>" class="btn btn-danger"><?php echo $subbiah_contact_button['title']; ?></a>
        <a href="<?php echo $subbiah_about_button['url']; ?>" class="btn btn-danger"><?php echo $subbiah_about_button['title']; ?></a>
    </div>
    <div class="container">
        <div class="gf-nallamuthu-about-content">
            <p class="gf-nallamuthu-about-text"><?php the_field('subbiah_description'); ?></p>
        </div>
    </div>
    <hr class="gf-nallamuthu-about-line" />
</section>
<!-- Nallamuthu About Section End -->

<!-- What our Clients say Section Start -->
<section class="gf-client-say-sectionn">
    <div class="container">
        <h2 class="gf-section-title"><?php the_field('section_title' , 'option'); ?></h2>
    </div>
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

<!-- Natural History Section Start -->
<div class="text-center gf-our-stories-btn">
    <?php
        $read_stories_button = get_field('read_stories_button');
    ?>
    <a href="<?php echo $read_stories_button['url']; ?>" class="btn btn-danger"><?php echo $read_stories_button['title']; ?></a>
</div>
<!-- Natural History Section End -->

<?php get_footer(''); ?>
