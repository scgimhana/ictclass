<?php
/**
 * The template for displaying all single posts
 *
 *
 */
get_header();
?>
<div class="container">
    <div class="single-wrap">
        <div class="row">
            <div class="col-sm-12">
                <?php get_search_form(); ?>
                <div class="wrap">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main" role="main">

                            <?php
                            /* Start the Loop */
                            while (have_posts()) : the_post();

                                get_template_part('template-parts/post/content', get_post_format());

                                // If comments are open or we have at least one comment, load up the comment template.
                                if (comments_open() || get_comments_number()) :
                                    comments_template();
                                endif;

                                the_post_navigation(array(
                                    'prev_text' => '<span class="screen-reader-text">' . __('Previous Post') . '</span><span aria-hidden="true" class="nav-subtitle">' . __('Previous') . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . '</span>%title</span>',
                                    'next_text' => '<span class="screen-reader-text">' . __('Next Post') . '</span><span aria-hidden="true" class="nav-subtitle">' . __('Next') . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . '</span></span>',
                                ));

                            endwhile; // End of the loop.
                            ?>

                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div><!-- .wrap -->
            </div>
        </div>

        <?php get_footer(); ?>
    </div>
</div>
