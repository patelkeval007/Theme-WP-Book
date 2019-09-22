<?php
function wp_book_customize_register($wp_customize)
{
    //All our sections, settings, and controls will be added here
    $wp_customize->add_panel('wp_book_panel', array(
        'title' => 'Book Theme Panel',
        'description' => 'This is a customizer for theme.',
        'priority' => 10,
    ));

    //For Logo
    $wp_customize->add_section('wp_book_section_logo', array(
        'title'      => 'Logo',
        'description' => 'This is a customizer for change logo.',
        'priority'   => 10,
        'panel' => 'wp_book_panel'
    ));
    $wp_customize->add_setting('wp_book_logo');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'wp_book_logo', array(
        'label'    => 'Upload Logo',
        'section'  => 'wp_book_section_logo',
        'settings' => 'wp_book_logo',
    )));

    //For Color
    // $wp_customize->add_section('wp_book_section_color', array(
    //     'title'      => 'Color',
    //     'description' => 'This is a customizer for change color.',
    //     'priority'   => 20,
    //     'panel' => 'wp_book_panel'
    // ));
    // $wp_customize->add_setting('wp_book_color', array(
    //     'default'   => '#000000',
    //     'transport' => 'refresh',
    // ));
    // $wp_customize->add_control(
    //     new WP_Customize_Color_Control(
    //         $wp_customize,
    //         'wp_book_color',
    //         array(
    //             'label' => 'Background Color',
    //             'section' => 'wp_book_section_color',
    //             'settings' => 'wp_book_color'
    //         )
    //     )
    // );
}
