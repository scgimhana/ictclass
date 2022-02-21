<?php
/**
* Template Name: Blogs
 */
get_header();
?>
<div id="mainwrapper" class="blogs-mods">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="background:  linear-gradient(#000000 0.5%, rgba(173, 225, 250, 0.7) 0.51%, rgba(97,202,219, 0.7) 52.97%),url('<?php echo get_field('top_background'); ?>') center/cover no-repeat;">
                <div class="carousel-caption">
                    <div class="container position-relative d-flex align-items-center h-100">
                        <a href="<?php echo get_home_url(); ?>" class="logo-sec d-none d-lg-flex">
                            <img src="<?php echo get_field('logo_image'); ?>" alt="logo"/>
                        </a>
                        <h1>
                            <?php echo get_field('top_heading'); ?>
                            <div class="link-sec">
                                <a href="<?php echo get_home_url(); ?>">Home</a>
                                <a href="<?php echo get_home_url(); ?>/documentations">Packages</a>
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
    <div class="blogs-sec">
        <div class="container">
            <h2 class="d-none d-lg-block" data-name="<?php echo get_field('blogs_title'); ?>"><?php echo get_field('blogs_title'); ?></h2>
            <?php echo get_field('blogs_text'); ?>
            <div class="row">
             <?php
              $args = array( 
                'posts_per_page' => 6,
                'post_status' => 'publish',
                'post_type' => 'blogs', );
                $blogs = get_posts( $args );
                foreach ( $blogs as $blog ) : setup_postdata( $blog ); ?>
                    <div class="col-md-8">
                        <a href="<?php the_permalink( $blog->ID); ?>" class="card blog">
                            <div class="title">
                            <h3 class="blue"><?php echo get_the_title( $blog->ID ); ?></h3>
                                <h4 class="text-left mb-0"><?php the_field ('blog_author', $blog->ID); ?></h4>
                                <div class="date"><?php echo get_the_date("d/m/Y", $blog->ID ); ?></div>
                            </div>
                            <div class="content">
                                <?php echo get_the_excerpt($blog->ID); ?>
                            </div>
                        </a>
                    </div>
                 <?php endforeach; 
                wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();

