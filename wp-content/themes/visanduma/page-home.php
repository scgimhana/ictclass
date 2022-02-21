<?php
/**
* Template Name: Home
 */
if (!defined('ABSPATH')) {
    exit;
} // Exit if accessed directly
get_header();
?>
<div id="mainwrapper" class="home-mods">
    <a id="top"></a>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleSlidesOnly" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleSlidesOnly" data-slide-to="1"></li>
            <li data-target="#carouselExampleSlidesOnly" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" style="background:  linear-gradient(#000000 0.5%, rgba(173, 225, 250, 0.7) 0.51%, rgba(97,202,219, 0.7) 52.97%),url('<?php echo get_field('top_background_1'); ?>') center/cover no-repeat;">
                <div class="carousel-caption">
                    <div class="container position-relative d-flex align-items-center h-100">
                        <div class="logo-sec d-none d-lg-flex">
                            <img src="<?php echo get_theme_mod('visanduma_logo_setting'); ?>" alt="logo"/>
                        </div>
                        <h1><?php echo get_field('top_heading_1'); ?></h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background:  linear-gradient(#000000 0.5%, rgba(173, 225, 250, 0.7) 0.51%, rgba(97,202,219, 0.7) 52.97%),url('<?php echo get_field('top_background_2'); ?>') center/cover no-repeat;">
                <div class="carousel-caption">
                    <div class="container position-relative d-flex align-items-center h-100">
                        <div class="logo-sec d-none d-lg-flex">
                            <img src="<?php echo get_theme_mod('visanduma_logo_setting'); ?>" alt="logo"/>
                        </div>
                        <h1><?php echo get_field('top_heading_2'); ?></h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background:  linear-gradient(#000000 0.5%, rgba(173, 225, 250, 0.7) 0.51%, rgba(97,202,219, 0.7) 52.97%),url('<?php echo get_field('top_background_3'); ?>') center/cover no-repeat;">
                <div class="carousel-caption">
                    <div class="container position-relative d-flex align-items-center h-100">
                        <div class="logo-sec d-none d-lg-flex">
                            <img src="<?php echo get_theme_mod('visanduma_logo_setting'); ?>" alt="logo"/>
                        </div>
                        <h1><?php echo get_field('top_heading_3'); ?></h1>
                    </div>
                </div>
            </div>
        </div>
        <svg class="curve-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="418 834.3 1301 91.8" style="enable-background:new 418 834.3 1301 91.8;" xml:space="preserve" fill="#fff">
            <path class="curve" d="M418,862.1c0,0,257.2-65.4,543.3,4.3c286.1,69.7,743.7,19.3,757.7-24.6v84.3H418V862.1z"></path>
        </svg>
    </div>
    <div class="about-us-sec" id="about-us">
        <div class="container">
            <h2 data-name="<?php echo get_field('about_us_title'); ?>"><?php echo get_field('about_us_title'); ?></h2>
            <?php echo get_field('about_us_text'); ?>
        </div>
    </div>
    <div class="mvp-sec">
        <div class="advantages-cards-sec">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-8 mb-3 mx-auto mx-md-0">
                        <a href="#" class="advantage-card">
                            <div class="advantage-card-inner"style="background:  linear-gradient(rgba(24, 24, 41, 0.65) 0.51%, rgba(24, 24, 41, 0.65) 52.97%),url('<?php echo get_template_directory_uri(); ?>/images/vision-bg.png') center/cover no-repeat;">
                                <div class="advantage-name-box d-block">
                                    <div class="advantage-name">Vision</div>
                                    <div class="advantage-text"><?php echo get_field('vision'); ?></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-8 mb-3 mx-auto mx-md-0">
                        <a href="#" class="advantage-card">
                            <div class="advantage-card-inner"style="background:  linear-gradient(rgba(24, 24, 41, 0.65) 0.51%, rgba(24, 24, 41, 0.65) 52.97%),url('<?php echo get_template_directory_uri(); ?>/images/mission-bg.png') center/cover no-repeat;">
                                <div class="advantage-name-box d-block">
                                    <div class="advantage-name">Mission</div>
                                    <div class="advantage-text"><?php echo get_field('mission'); ?></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="packages-sec">
        <div class="container">
            <h2 data-name="Courses">Courses</h2>
            <section class="courses slider">
                <?php
                $args = array( 
                'posts_per_page' => 6,
                'post_status' => 'publish',
                'post_type' => 'courses', );
                $courses = get_posts( $args );
                foreach ( $courses as $post ) : setup_postdata( $post ); ?>
                    <div class="slide">
                        <a href="<?php the_permalink(); ?>" class="card">
                            <div class="title">
                                <h3><?php the_title(); ?></h3>
                                <h4 class="text-left"><?php the_field ('course_instructor', $post->ID); ?></h4>
                            </div>
                            <div class="content">
                                <?php the_field ('course_information_text', $post->ID); ?>
                            </div>
                            <div class="circle"></div>
                        </a>
                    </div>
                 <?php endforeach; 
                    wp_reset_postdata(); ?>
            </section>
        </div>
    </div>
    <div class="mid-baner-sec" style="background-image: linear-gradient(#000000 0.5%, rgba(173, 225, 250, 0.2) 0.51%, rgba(97,202,219, 0.2) 52.97%),url('<?php echo get_template_directory_uri(); ?>/images/parallax.jpg');">
        <svg class="curve-svg top" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="418 834.3 1301 91.8" style="enable-background:new 418 834.3 1301 91.8;" xml:space="preserve" fill="#fff">
            <path class="curve" d="M418,862.1c0,0,257.2-65.4,543.3,4.3c286.1,69.7,743.7,19.3,757.7-24.6v84.3H418V862.1z"></path>
        </svg>
        <div class="container">
            <h3>WHY Study WITH US !</h3>
            <div class="row">
                <div class="col-md-4 text-center word-box" data-aos="fade-up">
                    <svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg" fill="#fff">
                        <path d="m511.4 38.222c-1.109-20.338-17.284-36.511-37.622-37.621-41.038-2.242-121.342-.061-198.13 39.656-39.145 20.248-80.545 54.577-113.584 94.185-.407.488-.803.979-1.207 1.468l-74.98 5.792c-12.342.954-23.335 7.423-30.161 17.747l-51.154 77.372c-5.177 7.83-6 17.629-2.203 26.212 3.798 8.584 11.602 14.566 20.877 16.003l63.171 9.784c-.223 1.228-.447 2.455-.652 3.683-2.103 12.58 2.065 25.514 11.151 34.599l87.992 87.993c7.533 7.533 17.712 11.686 28.142 11.686 2.148 0 4.308-.177 6.458-.536 1.228-.205 2.455-.429 3.683-.652l9.784 63.172c1.437 9.275 7.419 17.08 16.001 20.877 3.571 1.58 7.35 2.36 11.112 2.36 5.283-.001 10.529-1.539 15.101-4.562l77.372-51.155c10.325-6.827 16.793-17.82 17.745-30.161l5.792-74.979c.489-.404.981-.8 1.469-1.207 39.609-33.039 73.939-74.439 94.186-113.585 39.719-76.791 41.896-157.096 39.657-198.131zm-175.394 393.037-74.011 48.933-9.536-61.565c31.28-9.197 62.223-23.927 91.702-43.66l-3.773 48.845c-.235 3.047-1.833 5.762-4.382 7.447zm-129.895-37.377-87.993-87.993c-2.245-2.246-3.283-5.401-2.774-8.44 2.616-15.643 6.681-30.534 11.713-44.562l132.028 132.028c-16.848 6.035-31.939 9.635-44.534 11.741-3.044.506-6.195-.529-8.44-2.774zm-117.923-222.269 48.844-3.773c-19.734 29.479-34.464 60.422-43.661 91.702l-61.564-9.535 48.934-74.012c1.686-2.55 4.401-4.147 7.447-4.382zm270.155 155.286c-24.233 20.213-47.756 34.833-69.438 45.412l-149.221-149.221c13.858-28.304 30.771-51.873 45.417-69.431 30.575-36.655 68.602-68.276 104.331-86.756 70.474-36.453 144.725-38.416 182.713-36.348 5.028.274 9.027 4.273 9.301 9.302 2.071 37.988.104 112.238-36.349 182.713-18.479 35.728-50.1 73.754-86.754 104.329z"/><path d="m350.721 236.243c19.202-.002 38.412-7.312 53.031-21.931 14.166-14.165 21.966-32.999 21.966-53.031s-7.801-38.866-21.966-53.031c-29.242-29.243-76.822-29.241-106.062 0-14.166 14.165-21.967 32.999-21.967 53.031s7.802 38.866 21.967 53.031c14.622 14.622 33.822 21.933 53.031 21.931zm-31.82-106.781c8.772-8.773 20.295-13.159 31.818-13.159 11.524 0 23.047 4.386 31.819 13.159 8.499 8.499 13.179 19.799 13.179 31.818s-4.68 23.32-13.179 31.819c-17.544 17.545-46.093 17.544-63.638 0-8.499-8.499-13.18-19.799-13.18-31.818s4.682-23.32 13.181-31.819z" fill="#fff"/>
                        <path d="m15.301 421.938c3.839 0 7.678-1.464 10.606-4.394l48.973-48.973c5.858-5.858 5.858-15.355 0-21.213-5.857-5.858-15.355-5.858-21.213 0l-48.972 48.973c-5.858 5.858-5.858 15.355 0 21.213 2.928 2.929 6.767 4.394 10.606 4.394z"/><path d="m119.761 392.239c-5.857-5.858-15.355-5.858-21.213 0l-94.154 94.155c-5.858 5.858-5.858 15.355 0 21.213 2.929 2.929 6.767 4.393 10.606 4.393s7.678-1.464 10.606-4.394l94.154-94.154c5.859-5.858 5.859-15.355.001-21.213z"/><path d="m143.429 437.12-48.973 48.973c-5.858 5.858-5.858 15.355 0 21.213 2.929 2.929 6.768 4.394 10.606 4.394s7.678-1.464 10.606-4.394l48.973-48.973c5.858-5.858 5.858-15.355 0-21.213-5.857-5.858-15.355-5.858-21.212 0z" fill="#fff"/>
                    </svg>
                    <div class="title">Pitch ready MVP</div>
                    <div class="text">Fully Functional Simple MVP</div>
                    <div class="info">$7500.00 - 30 Days</div>
                </div>
                <div class="col-md-4 text-center word-box" data-aos="fade-up">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" fill="#fff">
                        <g>
                            <g>
                                <path d="M491.375,157.662c-13.15-30.297-31.856-57.697-55.598-81.439s-51.142-42.448-81.439-55.598C322.809,6.939,289.723,0,256,0
                                      c-33.723,0-66.809,6.939-98.338,20.625c-30.297,13.15-57.697,31.856-81.439,55.598c-23.742,23.742-42.448,51.142-55.598,81.439
                                      C6.939,189.191,0,222.277,0,256s6.939,66.809,20.625,98.338c13.149,30.297,31.855,57.697,55.598,81.439
                                      c23.742,23.742,51.142,42.448,81.439,55.598C189.191,505.061,222.277,512,256,512s66.809-6.939,98.338-20.625
                                      c30.297-13.15,57.697-31.856,81.439-55.598s42.448-51.142,55.598-81.439C505.061,322.809,512,289.723,512,256
                                      C512,222.277,505.061,189.191,491.375,157.662z M256,492C128.075,492,20,383.925,20,256S128.075,20,256,20s236,108.075,236,236
                                      S383.925,492,256,492z"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M451.975,173.804c-10.87-25.256-26.363-48.044-46.049-67.729c-19.686-19.686-42.473-35.179-67.729-46.049
                                      C311.948,48.728,284.293,43,256,43c-38.462,0-78.555,13.134-115.945,37.981c-4.6,3.057-5.851,9.264-2.794,13.863
                                      c3.057,4.6,9.264,5.85,13.863,2.794C185.224,74.978,221.489,63,256,63c104.617,0,193,88.383,193,193s-88.383,193-193,193
                                      S63,360.617,63,256c0-34.504,11.975-70.771,34.629-104.877c3.056-4.601,1.804-10.807-2.796-13.863
                                      c-4.602-3.056-10.807-1.803-13.863,2.797C56.13,177.454,43,217.546,43,256c0,28.293,5.728,55.948,17.025,82.196
                                      c10.87,25.256,26.363,48.044,46.049,67.729c19.686,19.687,42.473,35.179,67.73,46.05C200.052,463.272,227.707,469,256,469
                                      c28.293,0,55.948-5.728,82.196-17.025c25.256-10.87,48.044-26.363,67.729-46.049c19.686-19.686,35.179-42.473,46.049-67.729
                                      C463.272,311.948,469,284.293,469,256C469,227.707,463.272,200.052,451.975,173.804z"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M115,105c-5.52,0-10,4.48-10,10s4.48,10,10,10s10-4.48,10-10S120.52,105,115,105z"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M374.281,177.719C366.724,170.162,356.681,166,346,166c-10.681,0-20.724,4.162-28.281,11.719L226,269.438l-31.719-31.719
                                      C186.724,230.162,176.681,226,166,226c-10.681,0-20.724,4.162-28.278,11.716C130.163,245.269,126,255.313,126,266
                                      s4.163,20.731,11.719,28.281l60,60C205.276,361.838,215.32,366,226,366s20.724-4.162,28.281-11.719l119.997-119.997
                                      C381.837,226.731,386,216.687,386,206S381.837,185.269,374.281,177.719z M360.139,220.139l-120,120
                                      C236.359,343.918,231.338,346,226,346s-10.359-2.082-14.139-5.861l-60.003-60.003C148.081,276.361,146,271.341,146,266
                                      s2.081-10.361,5.861-14.139c3.78-3.779,8.801-5.861,14.139-5.861s10.359,2.082,14.139,5.861L226,297.722l105.861-105.861
                                      c3.78-3.779,8.801-5.861,14.139-5.861s10.359,2.082,14.142,5.864C363.919,195.639,366,200.659,366,206
                                      S363.919,216.361,360.139,220.139z"/>
                            </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                    </svg>
                    <div class="title">PAY-AS-YOU-GO MVP</div>
                    <div class="text">You're In Control When To Start or Stop The MVP Project.</div>
                    <div class="info">$45 - $20 per hour or fix fee per month.</div>
                </div>
                <div class="col-md-4 text-center word-box mb-0" data-aos="fade-up">
                    <svg id="Layer_3" height="512" viewBox="0 0 64 64" width="512" xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" fill="#fff">
                        <path d="m27.707 8.293a1 1 0 0 0 -1.707.707v2.019a26 26 0 1 0 27 25.981 1 1 0 0 0 -1-1h-6a1 1 0 0 0 -1 1 18 18 0 1 1 -19-17.973v1.973a1 1 0 0 0 1.707.707l6-6a1 1 0 0 0 0-1.414zm.293 10.293v-.586a1 1 0 0 0 -1-1 20 20 0 1 0 19.975 21h4a24 24 0 1 1 -23.975-25 1 1 0 0 0 1-1v-.586l3.586 3.586z"/>
                        <path d="m39.313 28.515-2.828-2.828a1 1 0 0 0 -1.261-.125l-1.42.946a11.88 11.88 0 0 0 -2.49-1.034l-.334-1.674a1 1 0 0 0 -.98-.8h-4a1 1 0 0 0 -.98.8l-.334 1.67a11.88 11.88 0 0 0 -2.49 1.034l-1.42-.946a1 1 0 0 0 -1.261.125l-2.828 2.828a1 1 0 0 0 -.125 1.261l.946 1.42a11.88 11.88 0 0 0 -1.034 2.49l-1.67.334a1 1 0 0 0 -.804.984v4a1 1 0 0 0 .8.98l1.67.334a11.858 11.858 0 0 0 1.034 2.49l-.946 1.42a1 1 0 0 0 .125 1.261l2.828 2.828a1 1 0 0 0 1.261.125l1.42-.946a11.9 11.9 0 0 0 2.49 1.034l.334 1.67a1 1 0 0 0 .984.804h4a1 1 0 0 0 .98-.8l.334-1.67a11.9 11.9 0 0 0 2.49-1.034l1.42.946a1 1 0 0 0 1.261-.125l2.828-2.828a1 1 0 0 0 .125-1.261l-.946-1.42a11.858 11.858 0 0 0 1.034-2.49l1.67-.334a1 1 0 0 0 .804-.984v-4a1 1 0 0 0 -.8-.98l-1.67-.334a11.88 11.88 0 0 0 -1.034-2.49l.946-1.42a1 1 0 0 0 -.129-1.261zm-.794 7.008 1.481.3v2.362l-1.481.3a1 1 0 0 0 -.779.757 9.921 9.921 0 0 1 -1.275 3.07 1 1 0 0 0 .015 1.087l.84 1.259-1.669 1.669-1.26-.84a1 1 0 0 0 -1.087-.014 9.941 9.941 0 0 1 -3.07 1.275 1 1 0 0 0 -.757.779l-.297 1.473h-2.36l-.3-1.481a1 1 0 0 0 -.757-.779 9.941 9.941 0 0 1 -3.07-1.275 1 1 0 0 0 -1.087.014l-1.26.84-1.666-1.669.84-1.259a1 1 0 0 0 .015-1.087 9.921 9.921 0 0 1 -1.275-3.07 1 1 0 0 0 -.779-.757l-1.481-.296v-2.362l1.481-.3a1 1 0 0 0 .779-.757 9.907 9.907 0 0 1 1.275-3.07 1 1 0 0 0 -.015-1.087l-.84-1.26 1.669-1.669 1.26.84a1 1 0 0 0 1.087.015 9.9 9.9 0 0 1 3.07-1.275 1 1 0 0 0 .757-.779l.297-1.477h2.36l.3 1.481a1 1 0 0 0 .757.779 9.9 9.9 0 0 1 3.07 1.275 1 1 0 0 0 1.087-.015l1.26-.84 1.669 1.669-.84 1.26a1 1 0 0 0 -.015 1.087 9.907 9.907 0 0 1 1.275 3.07 1 1 0 0 0 .776.757z"/>
                        <path d="m28 30a7 7 0 1 0 7 7 7.008 7.008 0 0 0 -7-7zm0 12a5 5 0 1 1 5-5 5.006 5.006 0 0 1 -5 5z"/>
                        <path d="m62 1h-24a1 1 0 0 0 -1 1v8a1 1 0 0 0 1 1h1v2h-1a1 1 0 0 0 -1 1v8a1 1 0 0 0 1 1h1v3a1 1 0 0 0 1 1h20a1 1 0 0 0 1-1v-3h1a1 1 0 0 0 1-1v-8a1 1 0 0 0 -1-1h-1v-2h1a1 1 0 0 0 1-1v-8a1 1 0 0 0 -1-1zm-3 24h-18v-2h18zm2-4h-22v-6h22zm-2-8h-18v-2h18zm2-4h-22v-6h22z"/>
                        <path d="m41 5h2v2h-2z"/>
                        <path d="m45 5h2v2h-2z"/>
                        <path d="m41 17h2v2h-2z"/>
                        <path d="m45 17h2v2h-2z"/>
                        <path d="m49 5h10v2h-10z"/>
                        <path d="m49 17h10v2h-10z"/>
                    </svg>
                    <div class="title">SOFTWARE DEVELOPMENT</div>
                    <div class="text">Outsource services.</div>
                    <div class="info">$45 - $20 per hour or fix fee per month.</div>
                </div>
            </div>
        </div>
        <svg class="curve-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="418 834.3 1301 91.8" style="enable-background:new 418 834.3 1301 91.8;" xml:space="preserve" fill="#ccc">
            <path class="curve" d="M418,862.1c0,0,257.2-65.4,543.3,4.3c286.1,69.7,743.7,19.3,757.7-24.6v84.3H418V862.1z"></path>
        </svg>
    </div>
    <div class="contact-sec">
        <div class="container">
            <h2 data-name="Contact us">Contact us</h2>
            <div class="row">
                <div class="col-lg-6">
                    <?php echo do_shortcode( '[contact-form-7 id="'.get_field( 'contact_shortcode' ).'" title="'.get_field( 'contact_name' ).'"]' ); ?>
                    <?php /* echo do_shortcode('[contact-form-7 id="28" title="Contact form 1"]');*/ ?>
                </div>
                <div class="col-lg-6" id="map">
                    <iframe src="https://maps.google.com/maps?q=&t=&z=13&ie=UTF8&iwloc=&output=embed" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

//function wp_home_hook() {
//    include_once(get_template_directory() . '/js/home.js.php');
//}
//add_action('wp_footer', 'wp_home_hook');
get_footer();

