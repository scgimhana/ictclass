<?php
get_header();
?>
<div id="mainwrapper" class="blogs-mods">
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
                                <a href="<?php echo get_home_url(); ?>/all-blogs">Blogs</a>
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
        <div class="row mt-3">
            <div class="col-md-12 blog-content">
                <h3 class="blog-title"><?php the_field('blog_name'); ?></h3>
                <h4 class="text-left mb-0"><?php the_field ('blog_author'); ?></h4>
                <div class="date mb-4"><?php echo get_the_date("d/m/Y"); ?></div>
                <div class="info-text"><?php the_field('blog_text'); ?></div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();

