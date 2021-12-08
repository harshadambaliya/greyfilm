<?php
/*
 * Template Name: Subbiah Nallamuthu Portfolio Page
 */

get_header(''); ?>

<!-- Page Header Section Start -->
<div class="gf-page-header">
    <div class="container">
        <div class="gf-page-header__inner">
            <ul class="gf-page-header-menu">
                <?php if( have_rows('header_menu') ): ?>
                    <?php while( have_rows('header_menu') ): the_row(); 
                        $link = get_sub_field('link');
                        ?>
                        <li class="gf-page-menu-list">
                            <a href="<?php echo $link['url']; ?>" class="gf-page-menu-link"><?php echo $link['title']; ?></a>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
            <a href="/" class="gf-back-grey-link">
                <svg width="7" height="8" viewBox="0 0 7 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.500001 4.86603C-0.166666 4.48113 -0.166667 3.51887 0.5 3.13397L5 0.535898C5.66667 0.150998 6.5 0.632123 6.5 1.40192L6.5 6.59808C6.5 7.36788 5.66667 7.849 5 7.4641L0.500001 4.86603Z" fill="white"/>
                </svg>
                <span>Back to Grey Films</span>
            </a>
        </div>
    </div>
</div>
<!-- Page Header Section End -->

<!-- Landing Section Start -->
<?php
    $landing_image_one = get_field('landing_image_one');
?>
<section class="gf-landing-section gf-portfolio-landing-section" style="background-image: url(<?php echo $landing_image_one['url']; ?>);">
    <div class="gf-landing-img">
    </div>
    <div class="gf-portfolio-landing-content">
        <div class="container">
            <h1 class="gf-portfolio-title"><?php the_field('landing_title'); ?></h1>
            <p class="gf-portfolio-subtitle"><?php the_field('landing_designation'); ?> </p>
            <p class="gf-portfolio-description"><?php the_field('landing_description') ?></p>
            <div class="gf-portfolio-logo">
                <?php $landing_logo = get_field('landing_logo'); ?>
                <img src="<?php echo $landing_logo['url']; ?>" alt="" class="img-fluid">
            </div>
            <div class="gf-portfolio-link-list">
                <?php $landing_my_work_link = get_field('landing_my_work_link'); ?>
                <a href="<?php echo $landing_my_work_link['url']; ?>" class="gf-portfolio-link">
                    <span>My Work</span>
                    <svg width="7" height="8" viewBox="0 0 7 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.5 3.13397C7.16667 3.51887 7.16667 4.48113 6.5 4.86603L2 7.4641C1.33333 7.849 0.5 7.36788 0.5 6.59808L0.5 1.40192C0.5 0.632124 1.33333 0.150998 2 0.535898L6.5 3.13397Z" fill="white"/>
                    </svg>
                </a>
                <?php $landing_my_life_link = get_field('landing_my_life_link'); ?>
                <a href="<?php echo $landing_my_life_link['url']; ?>" class="gf-portfolio-link">
                    <span>My Life</span>
                    <svg width="7" height="8" viewBox="0 0 7 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.5 3.13397C7.16667 3.51887 7.16667 4.48113 6.5 4.86603L2 7.4641C1.33333 7.849 0.5 7.36788 0.5 6.59808L0.5 1.40192C0.5 0.632124 1.33333 0.150998 2 0.535898L6.5 3.13397Z" fill="white"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Landing Section End -->

<!-- Quote Section Start -->
<?php
    $quote_image = get_field('quote_image');
?>
<section class="gf-quote-section" style="background-image: url(<?php echo $quote_image['url']; ?>);">
    <div class="container">
        <div class="gf-quote-content">
            <h2 class="gf-quote-title"><?php the_field('quote_title'); ?></h2>
            <div class="gf-quote-description">
                <?php the_field('quote_description'); ?>
            </div>
            <?php 
                $quote_read_more_link = get_field('quote_read_more_link');
            ?>
            <a href="<?php echo $quote_read_more_link['url']; ?>" class="gf-quote-link">
                <span><?php echo $quote_read_more_link['title']; ?></span>
                <svg width="7" height="8" viewBox="0 0 7 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.5 3.13397C7.16667 3.51887 7.16667 4.48113 6.5 4.86603L2 7.4641C1.33333 7.849 0.5 7.36788 0.5 6.59808L0.5 1.40192C0.5 0.632124 1.33333 0.150998 2 0.535898L6.5 3.13397Z" fill="white"/>
                </svg>
            </a>
        </div>
    </div>
</section>
<!-- Quate Section End -->

<!-- Quate Section Start -->
<section class="gf-nalla-achievement-section">
    <div class="gf-nalla-achievement-content">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-md-12 col-lg-4 col-xl-5">
                    <div class="gf-nalla-achievement-logo-content">
                        <?php
                            $achievement_logo = get_field('achievement_logo');
                            $achievement_read_link = get_field('achievement_read_link');
                        ?>
                        <img src="<?php echo $achievement_logo['url']; ?>" alt="nallamuthu-logo-dark" class="img-fluid gf-nalla-achievement-logo">
                        <a href="<?php echo $achievement_read_link['url']; ?>" class="gf-nalla-achievement-link">
                            <span>Read More About Me</span>
                            <svg width="7" height="8" viewBox="0 0 7 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.5 3.13397C7.16667 3.51887 7.16667 4.48113 6.5 4.86603L2 7.4641C1.33333 7.849 0.5 7.36788 0.5 6.59808L0.5 1.40192C0.5 0.632124 1.33333 0.150998 2 0.535898L6.5 3.13397Z" fill="#7597C9"/>
                            </svg>
                        </a>
                        <div class="gf-nalla-contact">
                            <label class="gf-nalla-contact-label"><?php the_field('achievement_contact_title') ?></label>
                            <ul class="gf-nalla-contact-list">
                                <?php $contact_email = get_field('contact_email'); ?>
                                <li class="gf-nalla-contact-item"><span>Email:</span> <a class="gf-nalla-contact-link" href="<?php echo $contact_email['url']; ?>"><?php echo $contact_email['title']; ?></a> </li>
                                <?php $contact_mobile = get_field('contact_mobile'); ?>
                                <li class="gf-nalla-contact-item"><span>Mobile:</span> <a class="gf-nalla-contact-link" href="<?php echo $contact_mobile['url']; ?>"><?php echo $contact_mobile['title']; ?></a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-12 col-lg-8 col-xl-7">
                    <div class="gf-nalla-achievement-content__inner">
                        <div class="gf-nalla-achievement-heading">
                            <h2 class="gf-nalla-achievement-title"><?php the_field('achievements_title'); ?></h2>
                        </div>
                        <div class="gf-nalla-achievement-card-content">
                            <div class="row">
                                <?php if( have_rows('achievements') ): ?>
                                    <?php while( have_rows('achievements') ): the_row(); 
                                        $achievements_icon = get_sub_field('achievements_icon');
                                        $achievements_link = get_sub_field('achievements_link');
                                        ?>
                                        <div class="col col-6 col-md-6 col-lg-6">
                                            <div class="gf-nalla-achievement-card text-center">
                                                <div class="gf-nalla-achievement-card-img">
                                                    <img src="<?php echo $achievements_icon['url']; ?>" alt="" class="img-fluid">
                                                </div>
                                                <div class="gf-nalla-achievement-body">
                                                    <h3 class="gf-nalla-achievement-since"><?php the_sub_field('achievements_since'); ?></h3>
                                                    <p class="gf-nalla-achievement-description"><?php the_sub_field('achievements_description'); ?></p>
                                                </div>
                                                <div class="gf-nalla-achievement-footer">
                                                    <a href="<?php echo $achievements_link['url']; ?>" class="gf-nalla-achievement-link"><?php echo $achievements_link['title']; ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="gf-nalla-achievement-heading">
                            <h2 class="gf-nalla-achievement-title"><?php the_field('research_title'); ?></h2>
                        </div>
                        <div class="gf-nalla-research-content">
                            <?php if( have_rows('research') ): ?>
                                <?php while( have_rows('research') ): the_row(); 
                                    $image = get_sub_field('image');
                                    $link = get_sub_field('link');
                                    ?>
                                    <div class="gf-nalla-research-card">
                                        <div class="gf-nalla-research-card-img">
                                            <img src="<?php echo $image['url']; ?>" alt="research-img" class="img-fluid w-100">
                                        </div>
                                        <div class="gf-nalla-research-body">
                                            <label class="gf-nalla-research-label"><?php the_sub_field('label'); ?></label>
                                            <h3 class="gf-nalla-research-title"><?php the_sub_field('title'); ?></h3>
                                            <p class="gf-nalla-research-category"><?php the_sub_field('category') ?></p>
                                            <p class="gf-nalla-research-description"><?php the_sub_field('description') ?></p>
                                            <a href="<?php echo $link['url']; ?>" class="gf-nalla-research-link"><?php echo $link['title']; ?></a>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Quate Section End -->

<!-- My Archival Footage Section Start -->
<section class="gf-archival-footage-section">
    <div class="gf-nalla-achievement-heading">
        <h2 class="gf-nalla-achievement-title"><?php the_field('archival_footage_title') ?></h2>
    </div>
    <div class="container">
        <div class="gf-archival-footage-content">
            <div class="gf-archival-footage">
                <span class="gf-video-icon play">
                    <img src="/wp-content/themes/wp-bootstrap-starter-child/assets/images/play-icon.png" alt="" class="img-fluid">
                </span>
                <?php 
                    $archival_footage_video = get_field('archival_footage_video');
                    $archival_footage_video_poster = get_field('archival_footage_video_poster'); 
                ?>
                <video width="100%" poster="<?php echo $archival_footage_video_poster['url']; ?>" id="archival_footage_video">
                    <source src="<?php echo $archival_footage_video['url']; ?>" type="video/mp4">
                </video>
            </div>
            <div class="gf-archival-footage-description">
               <?php the_field('footage_description'); ?>
            </div>
        </div> 
    </div>
</section>
<!-- My Archival Footage Section End -->

<!-- Questions with Nalla Section Start -->
<section class="gf-question-section">
    <div class="container">
        <h2 class="gf-section-title"><?php the_field('faq_title'); ?></h2>
        <div class="gf-question-content">
            <?php if( have_rows('faq') ): ?>
                <?php while( have_rows('faq') ): the_row(); 
                    $image = get_sub_field('image');
                    ?>
                    <div class="gf-question-card">
                        <div class="gf-question-img">
                            <img src="<?php echo $image['url']; ?>" alt="" class="img-fluid">
                        </div>
                        <div class="gf-question-body">
                            <div class="gf-question-heading">
                                <ul class="gf-question-img-list">
                                    <?php if( have_rows('heading_image') ): ?>
                                        <?php while( have_rows('heading_image') ): the_row(); 
                                            $image = get_sub_field('image');
                                            ?>
                                            <li class="gf-question-img-item">
                                                <img src="<?php echo $image['url']; ?>" alt="" class="img-fluid">
                                            </li>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                                <h3 class="gf-question-title"><?php the_sub_field('question') ?></h3>
                            </div>
                            <div class="gf-question-answer">
                                <?php the_sub_field('answer'); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="text-center gf-question-btn">
            <?php $faq_see_more_button = get_field('faq_see_more_button'); ?>
            <a href="<?php echo $faq_see_more_button['url'] ?>" class="btn btn-success"><?php echo $faq_see_more_button['title'] ?></a>
        </div>
    </div>
</section>
<!-- Questions with Nalla Section End -->

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
