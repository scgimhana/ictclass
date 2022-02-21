<?php
if (!defined('ABSPATH'))
    exit; // Exit if accessed directly

    
//Theme customization options begin

class Seneview_Customize {

    public static function register($wp_customize) {

        $wp_customize->add_section('seneview_footer_section', array(
            'title' => __('Footer Area', 'seneview_theme'),
            'priority' => 130,
        ));

        $wp_customize->add_section('seneview_social_icons', array(
            'title' => __('Social Icon Links', 'seneview_theme'),
            'priority' => 150,
        ));

        $wp_customize->add_setting('copyright_text', array('default' => '&copy; Seneview Technologies'));
        $wp_customize->add_control('copyright_text', array(
            'label' => __('Copyright Text', 'seneview_theme'),
            'section' => 'seneview_footer_section',
            'settings' => 'copyright_text',
            'type' => 'text',
                )
        );

        $wp_customize->add_setting('email_link', array('default' => 'support@seneview.com'));
        $wp_customize->add_control('email_link', array(
            'label' => __('Email', 'seneview_theme'),
            'section' => 'seneview_footer_section',
            'settings' => 'email_link',
            'type' => 'text',
                )
        );

        $wp_customize->add_setting('contact_number', array('default' => '(94) 11 454-5676'));
        $wp_customize->add_control('contact_number', array(
            'label' => __('Contact Number', 'seneview_theme'),
            'section' => 'seneview_footer_section',
            'settings' => 'contact_number',
            'type' => 'text',
                )
        );

        $wp_customize->add_setting('telegram_url', array('default' => '#telegram'));
        $wp_customize->add_control('telegram_url', array(
            'label' => __('Telegram URL', 'seneview_theme'),
            'section' => 'seneview_social_icons',
            'settings' => 'telegram_url',
            'type' => 'text'));

        $wp_customize->add_setting('facebook_url', array('default' => '#facebook'));
        $wp_customize->add_control('facebook_url', array(
            'label' => __('Facebook URL', 'seneview_theme'),
            'section' => 'seneview_social_icons',
            'settings' => 'facebook_url',
            'type' => 'text'));

        $wp_customize->add_setting('twitter_url', array('default' => '#twitter'));
        $wp_customize->add_control('twitter_url', array(
            'label' => __('Twitter URL', 'seneview_theme'),
            'section' => 'seneview_social_icons',
            'settings' => 'twitter_url',
            'type' => 'text'));
    }

}

add_action('customize_register', array('Seneview_Customize', 'register'));
?>