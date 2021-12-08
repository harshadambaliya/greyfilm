<?php
/*
 * Template Name: Service Page
 */

get_header(''); ?>

<!-- Landing Section Start -->
<section class="gf-service-landing-section">
    <div class="gf-service-landing-content">
        <div class="gf-service-landing-img">
            <?php
                $landing_image = get_field('landing_image');
                $landing_image_mobile = get_field('landing_image_mobile');
            ?>
            <img src="<?php echo $landing_image['url']; ?>" alt="" class="w-100 d-none d-md-block">
            <img src="<?php echo $landing_image_mobile['url']; ?>" alt="" class="w-100 d-block d-md-none">
        </div>

        <div class="gf-service-landing-content__inner">
            <div class="container">
                <div class="gf-landing-section-heading">
                    <div class="gf-landing-section-heading__inner">
                        <h1 class="gf-section-title d-none d-md-block"><?php the_field('section_title'); ?></h1>
                        <p class="gf-section-description d-none d-md-block"><?php the_field('section_description'); ?></p>
                    </div>
                    <div class="landing-link-content">
                        <?php 
                            $contact_us_link = get_field('contact_us_link');
                        ?>
                        <a href="<?php echo $contact_us_link['url']; ?>" class="gf-landing-link"><?php echo $contact_us_link['title']; ?> <img src="<?php echo SITE_URL(); ?>/wp-content/uploads/2021/11/arrow.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="gf-service-landing-description">
            <div class="container">
                <h1 class="gf-section-title d-block d-md-none"><?php the_field('section_title'); ?></h1>
                <p class="gf-section-description d-block d-md-none"><?php the_field('section_description'); ?></p>
                <p><?php the_field('section_subdescription'); ?></p>
            </div>
        </div>
    </div>
</section>
<!-- Landing Section End -->

<!-- Service Section Start -->
<section class="gf-services-section">
    <div class="container">
        <?php if( have_rows('services') ): ?>
            <?php while( have_rows('services') ): the_row(); 
                $image = get_sub_field('image');
                ?>
                <div class="gf-services-content">
                    <div class="row no-gutters">
                        <div class="col col-12 col-md-6 col-lg-6">
                            <div class="gf-services-img">
                                <img src="<?php echo $image['url']; ?>" alt="support-pakage-img" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="col col-12 col-md-6 col-lg-6">
                            <div class="gf-services-content__inner">
                               <h2><?php the_sub_field('title'); ?></h2>
                               <div class="gf-services-details">
                                    <?php the_sub_field('description') ?>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>
<!-- Service Section End -->

<!-- Grey Film Promise Section Start -->
<section class="gf-promise-section">
    <div class="container">
        <h2 class="gf-section-title"><?php the_field('promise_section_title') ?></h2>
        <div class="row">
            <?php if( have_rows('promise') ): ?>
                <?php while( have_rows('promise') ): the_row(); 
                    $image = get_sub_field('image');
                    ?>
                    <div class="col col-6 col-md-4 col-lg-3">
                        <div class="gf-promise-card">
                            <img src="<?php echo $image['url']; ?>" alt="promise-img" class="img-fluid gf-promise-img">
                            <p class="gf-promise-description"><?php the_sub_field('description'); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class="gf-media-management">
            <div class="row">
                <div class="col col-12 col-md-6 col-lg-6">
                    <div class="gf-media-management-img">
                        <?php $media_image = get_field('media_image'); ?>
                        <img src="<?php echo $media_image['url']; ?>" alt="" class="img-fluid w-100">
                    </div>
                </div>
                <div class="col col-12 col-md-6 col-lg-6">
                    <div class="gf-media-management-content">
                        <h2 class="gf-media-management-title"><?php the_field('media_title') ?></h2>
                        <div class="gf-media-management-content__inner">
                            <?php the_field('media_description') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Grey Film Promise Section End -->

<!-- Our Serivce Domains Section Start -->
<section class="gf-serivce-domain-section">
    <div class="container">
        <div class="gf-section-heading text-center">
            <h2 class="gf-section-title"><?php the_field('domains_title') ?></h2>
            <p class="gf-section-description"><?php the_field('domains_description') ?></p>
        </div>
        <?php if( have_rows('serivce_domains') ): ?>
            <?php while( have_rows('serivce_domains') ): the_row(); 
                $image = get_sub_field('image');
                ?>
                <div class="gf-services-content">
                    <div class="row no-gutters">
                        <div class="col col-12 col-md-6 col-lg-6">
                            <div class="gf-services-img">
                                <img src="<?php echo $image['url']; ?>" alt="support-pakage-img" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="col col-12 col-md-6 col-lg-6">
                            <div class="gf-services-content__inner">
                               <h2><?php the_sub_field('title') ?></h2>
                               <div class="gf-services-details">
                                    <?php the_sub_field('description'); ?>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>
<!-- Our Serivce Domains Section End -->

<!-- Team Section Start -->
<section class="gf-client-say-sectionn gf-team-sectionn">
    <div class="container">
        <h2 class="gf-section-title"><?php the_field('team_title'); ?></h2>
    </div>
    <div class="gf-client-say-slider-content">
        <div class="gf-client-say-slider">
            <?php if( have_rows('team') ): ?>
                <?php while( have_rows('team') ): the_row(); 
                    $image = get_sub_field('image');
                    ?>
                    <div class="gf-client-say-slide">
                        <div class="gf-client-say-card">
                            <div class="gf-client-say-card-img">
                                <img src="<?php echo $image['url']; ?>" alt="" class="img-fluid">
                            </div>
                            <h3 class="gf-client-say-title"><?php the_sub_field('name') ?></h3>
                            <p class="gf-client-say-text"><?php the_sub_field('description'); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Team Section End -->

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
