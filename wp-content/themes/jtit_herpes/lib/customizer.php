<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 21.12.2016
 * Time: 10:59
 */

function jtit_herpes_customize_register($wp_customize){

    /**
     * Copyright footer
     */
    $wp_customize->add_setting( 'footer_copyright' , array(
        'default'     => __('copyright'),
        'transport'   => 'postMessage',
//        'transport'   => 'refresh',
    ) );

    $wp_customize->add_section( 'footer_copyright' , array(
        'title'      => __( 'Copyright in footer', 'jtit_herpes' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_control(  'footer_copyright', array(
        'label'        => __( 'Header Color', 'jtit_herpes' ),
        'section'    => 'footer_copyright',
        'settings'   => 'footer_copyright',
        'type' => 'text'
    ));

    /**
     * Front page img
     */

    $wp_customize->add_setting( 'front_page_img' , array(
        'default'     => __(get_template_directory_uri().'/assets/doctor3.jpg'),
        'transport'   => 'postMessage',
//        'transport'   => 'refresh',
    ) );


    $wp_customize->add_section( 'front_page_img' , array(
        'title'      => __( 'Front page img', 'jtit_herpes' ),
        'priority'   => 30,
    ) );


    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'front_page_img',
            array(
                'label'      => __( 'front_page_img', 'jtit_herpes' ),
                'section'    => 'front_page_img',
                'settings'   => 'front_page_img',
                'context'    => 'your_setting_context',
            )
        )
    );

    /**
     * City
     */
    $wp_customize->add_setting( 'city' , array(
        'default'     => __('Los Angeles'),
        'transport'   => 'postMessage',
//        'transport'   => 'refresh',
    ) );

    $wp_customize->add_section( 'city' , array(
        'title'      => __( 'City', 'jtit_herpes' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_control(  'city', array(
        'label'        => __( 'City', 'jtit_herpes' ),
        'section'    => 'city',
        'settings'   => 'city',
        'type' => 'text'
    ));

    /**
     * Contacts
     */
    $wp_customize->add_setting( 'email' , array(
        'default'     => __('email@example'),
        'transport'   => 'postMessage',
//        'transport'   => 'refresh',
    ) );

    $wp_customize->add_setting( 'phone' , array(
        'default'     => __('055055005'),
        'transport'   => 'postMessage',
//        'transport'   => 'refresh',
    ) );

    $wp_customize->add_setting( 'address' , array(
        'default'     => __('Address'),
        'transport'   => 'postMessage',
//        'transport'   => 'refresh',
    ) );

    $wp_customize->add_section( 'contacts' , array(
        'title'      => __( 'Contacts', 'jtit_herpes' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_control(  'email', array(
        'label'        => __( 'Email', 'jtit_herpes' ),
        'section'    => 'contacts',
        'settings'   => 'email',
        'type' => 'text'
    ));

    $wp_customize->add_control(  'phone', array(
        'label'        => __( 'Phone', 'jtit_herpes' ),
        'section'    => 'contacts',
        'settings'   => 'phone',
        'type' => 'text'
    ));


    $wp_customize->add_control(  'address', array(
        'label'        => __( 'Address', 'jtit_herpes' ),
        'section'    => 'contacts',
        'settings'   => 'address',
        'type' => 'text'
    ));


    /**
     * left_top_info
     */
    $wp_customize->add_setting( 'left_top_info' , array(
        'default'     => __('Fast, Confidential & Secure STD Testing in Los Angeles - STDAwareLosAngeles.com'),
        'transport'   => 'postMessage',
//        'transport'   => 'refresh',
    ) );

    $wp_customize->add_section( 'left_top_info' , array(
        'title'      => __( 'Left top info', 'jtit_herpes' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_control(  'left_top_info', array(
        'label'        => __( 'Left top info', 'jtit_herpes' ),
        'section'    => 'left_top_info',
        'settings'   => 'left_top_info',
        'type' => 'text'
    ));


    /**
     * right_top_phone
     */
    $wp_customize->add_setting( 'right_top_phone' , array(
        'default'     => __('24/7 Support: (323) 503-4597'),
        'transport'   => 'postMessage',
//        'transport'   => 'refresh',
    ) );

    $wp_customize->add_section( 'right_top_phone' , array(
        'title'      => __( 'Support phone', 'jtit_herpes' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_control(  'right_top_phone', array(
        'label'        => __( 'Support phone', 'jtit_herpes' ),
        'section'    => 'right_top_phone',
        'settings'   => 'right_top_phone',
        'type' => 'text'
    ));
}