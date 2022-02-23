<?php
get_header();
?>
<div id="mainwrapper" class="package-mods">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="background:  linear-gradient(#000000 0.5%, rgba(173, 225, 250, 0.7) 0.51%, rgba(97,202,219, 0.7) 52.97%),url('<?php echo get_field('top_background'); ?>') center/cover no-repeat;">
                <div class="carousel-caption">
                    <div class="container position-relative d-flex align-items-center h-100">
                        <a href="<?php echo get_home_url(); ?>" class="logo-sec d-none d-lg-flex">
                            <img src="<?php echo get_theme_mod('visanduma_logo_setting'); ?>" alt="logo"/>
                        </a>
                        <h1>
                            <?php the_title(); ?>
                            <div class="link-sec">
                                <a href="<?php echo get_home_url(); ?>">Home</a>
                                <a href="<?php echo get_home_url(); ?>/all-courses">Courses</a>
                            </div>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <svg class="curve-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="418 834.3 1301 91.8" style="enable-background:new 418 834.3 1301 91.8;" xml:space="preserve" fill="#fff">
            <path class="curve" d="M418,862.1c0,0,257.2-65.4,543.3,4.3c286.1,69.7,743.7,19.3,757.7-24.6v84.3H418V862.1z"></path>
        </svg>
    </div>
    <div class="container">
        <?php 
            $modules = get_field( "modules" ); 
            $entry_qualifications = get_field( "entry_qualifications" ); 
            $questions_issues = get_field( "questions_issues" ); 
            $about_us = get_field( "about_us" ); 
        ?>
        <div class="row mt-3">
            <div class="col-md-3">
                <div class="position-relative">
                    <select id="selectTab" name="cd-dropdown" class="cd-select d-block w-100 d-md-none">
                        <option data-toggle="#introductionSec">Introduction</option>
                        <?php if ( $modules ) : ?>
                        <option data-toggle="#modulesSec">Modules</option>
                        <?php endif; ?>
                        <?php if ( $entry_qualifications ) : ?>
                        <option data-toggle="#entrySec">Entry Qualifications</option>
                        <?php endif; ?>
                        <?php if ( $questions_issues ) : ?>
                        <option data-toggle="#questionSec">Questions and issues</option>
                        <?php endif; ?>
                        <?php if ( $about_us ) : ?>
                        <option data-toggle="#aboutSec">About us</option>
                        <?php endif; ?>
                        <option data-toggle="#applySec" selected>Apply Now</option>
                    </select>
                    <svg class="arrow-svg d-md-none" width="12" height="6" viewBox="0 0 12 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.00003 6.00003C5.87216 6.00003 5.74416 5.95116 5.64653 5.85353L0.646531 0.853531C0.451156 0.658156 0.451156 0.341781 0.646531 0.146531C0.841906 -0.0487188 1.15828 -0.0488437 1.35353 0.146531L6.00003 4.79303L10.6465 0.146531C10.8419 -0.0488437 11.1583 -0.0488437 11.3535 0.146531C11.5488 0.341906 11.5489 0.658281 11.3535 0.853531L6.35354 5.85353C6.25591 5.95116 6.12791 6.00003 6.00003 6.00003Z" fill="#009C80"/>
                    </svg>
                </div>
                <div class="nav flex-column nav-pills d-none d-md-flex" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link " id="introductionTab" data-toggle="pill" href="#introductionSec" role="tab" aria-controls="introductionSec" aria-selected="true">Introduction</a>
                    <?php if ( $modules ) : ?>
                        <a class="nav-link" id="#modulesTab" data-toggle="pill" href="#modulesSec" role="tab" aria-controls="modulesSec" aria-selected="false">Modules</a>
                    <?php endif; ?>
                    <?php if ( $entry_qualifications ) : ?>
                        <a class="nav-link" id="#entryTab" data-toggle="pill" href="#entrySec" role="tab" aria-controls="entrySec" aria-selected="false">Entry Qualifications</a>
                    <?php endif; ?>
                    <?php if ( $questions_issues ) : ?>
                        <a class="nav-link" id="#questionTab" data-toggle="pill" href="#questionSec" role="tab" aria-controls="questionSec" aria-selected="false">Questions and issues</a>
                    <?php endif; ?>
                    <?php if ( $about_us ) : ?>
                        <a class="nav-link" id="#aboutTab" data-toggle="pill" href="#aboutSec" role="tab" aria-controls="aboutSec" aria-selected="false">About us</a>
                    <?php endif; ?>
                    <a class="nav-link active" id="#applyTab" data-toggle="pill" href="#applySec" role="tab" aria-controls="applySec" aria-selected="false">Apply Now</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade" id="introductionSec" role="tabpanel" aria-labelledby="introductionTab">
                         <h3><?php the_field('course_name'); ?></h3>
                         <h4><?php the_field('course_instructor'); ?></h4>
                         <div class="info-text"><?php the_field('course_information_text'); ?></div>
                    </div>
                    <?php if ( $modules ) : ?>
                    <div class="tab-pane fade" id="modulesSec" role="tabpanel" aria-labelledby="modulesTab">
                         <h3 class="mb-3">Modules</h3>
                         <div class="info-text"><?php the_field('modules'); ?></div>
                    </div>
                    <?php endif; ?>
                    <?php if ( $entry_qualifications ) : ?>
                    <div class="tab-pane fade" id="entrySec" role="tabpanel" aria-labelledby="entryTab">
                         <h3 class="mb-3">Entry Qualifications</h3>
                         <div class="info-text"><?php the_field('entry_qualifications'); ?></div>
                    </div>
                    <?php endif; ?>
                    <?php if ( $questions_issues ) : ?>
                    <div class="tab-pane fade" id="questionSec" role="tabpanel" aria-labelledby="questionTab">
                         <h3 class="mb-3">Questions and issues</h3>
                         <div class="info-text"><?php the_field('questions_issues'); ?></div>
                    </div>
                    <?php endif; ?>
                    <?php if ( $about_us ) : ?>
                    <div class="tab-pane fade" id="aboutSec" role="tabpanel" aria-labelledby="aboutTab">
                         <h3 class="mb-3">About us</h3>
                         <div class="info-text"><?php the_field('about_us'); ?></div>
                    </div>
                    <?php endif; ?>
                    <div class="tab-pane fade show active" id="applySec" role="tabpanel" aria-labelledby="applyTab">
                        <h3 class="mb-3">Apply Now !</h3>
                        <?php echo do_shortcode('[contact-form-7 id="47" title="Apply Form"]'); ?>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();

