<?php
if (!defined('ABSPATH'))
    exit; // Exit if accessed directly  
/**
 * Custom built base theme by Visanduma Technologies (Private) Limited - Sri Lanka
 * 
 *
 * @package WordPress
 * @subpackage Visanduma_Base_Theme
 * @since 2015
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
    <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="UTF-8" />
        <meta name="keywords" content="visanduma, software development, Web development"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="This is an example of a meta description. This will often show up in search results.">
        <title>Visanduma R&amp;D &#8211; The Creative Solutions</title>
        <!--Favicon-->
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <!--fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:wght@600&family=Roboto&family=Shadows+Into+Light&family=Tajawal:wght@300&display=swap" rel="stylesheet">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <header class="header">
            <div class="header-wrapper">
                <div class="header-sec-1">
                    <div class="container">
                        <div class="header-text w-100"> 
                            <div class="header-text-left d-none d-lg-flex">
                                <span class="d-flex align-items-center">Call us - </span>
                                <a href="tel:+<?php echo get_theme_mod('contact_number', 'no-link-specified'); ?>">+<?php echo get_theme_mod('contact_number', 'no-link-specified'); ?></a>
                                <a href="mailto:<?php echo get_theme_mod('email_link', 'no-link-specified'); ?>"><?php echo get_theme_mod('email_link', 'no-link-specified'); ?></a>
                            </div>  
                            <a class="navbar-brand d-lg-none" href="{{ url('/') }}">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo-img.png" alt="logo"/>
                            </a>
                            <div class="header-text-right">
                                <a href="<?php echo get_theme_mod('telegram_url', 'no-link-specified'); ?>">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.494563 13.5001L6.94632 15.9081L9.44355 23.9392C9.60334 24.4535 10.2323 24.6437 10.6498 24.3023L14.2461 21.3706C14.6231 21.0634 15.16 21.0481 15.554 21.3341L22.0405 26.0434C22.4871 26.368 23.1198 26.1233 23.2318 25.5836L27.9835 2.72713C28.1057 2.13764 27.5265 1.64586 26.9652 1.86296L0.487003 12.0774C-0.166424 12.3294 -0.160731 13.2546 0.494563 13.5001ZM9.0411 14.6263L21.6502 6.8603C21.8769 6.72114 22.11 7.02756 21.9154 7.20806L11.5092 16.8811C11.1434 17.2216 10.9075 17.6773 10.8407 18.1718L10.4862 20.7988C10.4392 21.1495 9.94652 21.1844 9.84974 20.8449L8.48642 16.0546C8.33027 15.5082 8.55782 14.9246 9.0411 14.6263Z" fill="#fff"/>
                                    </svg>
                                </a>
                                <a href="<?php echo get_theme_mod('twitter_url', 'no-link-specified'); ?>">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.66 8.91732C27.8553 8.20277 28.7496 7.07764 29.176 5.75199C28.0529 6.41839 26.8241 6.88782 25.5427 7.13999C23.7661 5.26069 20.9514 4.80336 18.6712 6.02353C16.3911 7.2437 15.21 9.83931 15.788 12.36C11.1875 12.129 6.90131 9.95587 3.99602 6.38132C2.47981 8.99655 3.25462 12.3397 5.76669 14.0213C4.8583 13.9921 3.97006 13.7462 3.17602 13.304C3.17602 13.328 3.17602 13.352 3.17602 13.376C3.17655 16.1002 5.09652 18.4468 7.76669 18.9867C6.92411 19.2159 6.0403 19.2496 5.18269 19.0853C5.93362 21.415 8.08076 23.011 10.528 23.0587C8.50113 24.6495 5.99799 25.5122 3.42135 25.508C2.96465 25.5086 2.5083 25.4824 2.05469 25.4293C4.67121 27.1107 7.71651 28.0031 10.8267 28C15.1537 28.0297 19.3121 26.3239 22.3717 23.264C25.4313 20.2042 27.1368 16.0456 27.1067 11.7187C27.1067 11.4707 27.1009 11.224 27.0894 10.9787C28.21 10.1688 29.1771 9.16552 29.9454 8.01599C28.9014 8.47874 27.794 8.78255 26.66 8.91732Z" fill="#fff"/>
                                    </svg>
                                </a>
                                <a href="<?php echo get_theme_mod('facebook_url', 'no-link-specified'); ?>">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.66943 16.0027C2.67098 22.5619 7.44064 28.1467 13.9188 29.1747V19.856H10.5361V16.0027H13.9228V13.0693C13.7714 11.6794 14.2461 10.2941 15.2183 9.28926C16.1904 8.28438 17.5592 7.76403 18.9534 7.86935C19.9541 7.88551 20.9524 7.97464 21.9401 8.13602V11.4147H20.2548C19.6746 11.3387 19.0912 11.5303 18.6691 11.9356C18.247 12.3408 18.0318 12.9159 18.0841 13.4987V16.0027H21.7788L21.1881 19.8573H18.0841V29.1747C25.0901 28.0675 30.0029 21.6691 29.2634 14.6148C28.524 7.56051 22.3912 2.31992 15.3079 2.68959C8.22458 3.05925 2.67056 8.90976 2.66943 16.0027Z" fill="#fff"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>