<?php

/**
 * Add customizer to customize theme contents.
 */


/**
 * Add panel,section,controls for custom settings.
 *
 * @param mixed $wp_customize Object to add panels, sections, settings and controls.
 *
 * @return void.
 */
function wp_book_customize_register($wp_customize)
{
    // All our sections, settings, and controls will be added here.
    $wp_customize->add_panel(
        'wp_book_panel',
        [
            'title'       => 'Book Theme Panel',
            'description' => 'This is a customizer for theme.',
            'priority'    => 10,
        ]
    );

    // For Logo.
    $wp_customize->add_section(
        'wp_book_section_logo',
        [
            'title'       => 'Logo',
            'description' => 'This is a customizer for change logo.',
            'priority'    => 10,
            'panel'       => 'wp_book_panel',
        ]
    );
    $wp_customize->add_setting('wp_book_logo');
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'wp_book_logo',
            [
                'label'    => 'Upload Logo',
                'section'  => 'wp_book_section_logo',
                'settings' => 'wp_book_logo',
            ]
        )
    );

}//end wp_book_customize_register()
