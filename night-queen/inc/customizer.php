<?php
/**
 * Night Queen Theme Customizer
 *
 * @package Night_Queen
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function night_queen_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'night_queen_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'night_queen_customize_partial_blogdescription',
			)
		);		
	}
		$wp_customize->selective_refresh->add_partial( 
				'night-queen_parallax_hero_text', 
				array(
					'selector' => '.slider-text h1', 
			)
		);
		$wp_customize->selective_refresh->add_partial( 
				'night-queen_parallax_hero_small_text', 
				array(
					'selector' => '.slider-text h5', 
			)
		);
		$wp_customize->selective_refresh->add_partial( 
					'night-queen_aboutus_big_text', 
					array(
						'selector' => '.about-us-text h1', 
			)
		);
		$wp_customize->selective_refresh->add_partial( 
				'night-queen_aboutus_small_text', 
				array(
					'selector' => '.about-us-text-normal p', 
			)
		);
		$wp_customize->selective_refresh->add_partial( 
			'night-queen_gallery_header_text', 
			array(
				'selector' => '.gallery-area-header h1', 
			)
		);
		$wp_customize->selective_refresh->add_partial( 
			'night-queen_gallery_tab_name', 
			array(
				'selector' => 'a#photo-tab', 
			)
		);
		$wp_customize->selective_refresh->add_partial( 
			'night-queen_video_gallery_tab_name', 
			array(
				'selector' => 'a#video-tab', 
			)
		);	
		$wp_customize->selective_refresh->add_partial( 
			'night-queen_photo_gallery_first_image', 
			array(
				'selector' => 'a.gallery-first', 
			)
		);
		$wp_customize->selective_refresh->add_partial( 
			'night-queen_photo_gallery_second_image', 
			array(
				'selector' => 'a.gallery-second', 
			)
		);
		$wp_customize->selective_refresh->add_partial( 
			'night-queen_photo_gallery_third_image', 
			array(
				'selector' => 'a.gallery-third', 
			)
		);
		$wp_customize->selective_refresh->add_partial( 
			'night-queen_photo_gallery_fourth_image', 
			array(
				'selector' => 'a.gallery-fourth', 
			)
		);
		$wp_customize->selective_refresh->add_partial( 
			'night-queen_photo_gallery_fifth_image', 
			array(
				'selector' => 'a.gallery-fifth', 
			)
		);
		$wp_customize->selective_refresh->add_partial( 
			'night-queen_photo_gallery_sixth_image', 
			array(
				'selector' => 'a.gallery-sixth', 
			)
		);		
/**
 * Customizer setting for parallax hero option.
 */
    $wp_customize->add_section('night-queen_parallax_hero_section', array(
        'title' => esc_html__( 'Parallax Hero Section', 'night-queen' ),
        'description' => esc_html__( 'You can change hero section options from here.', 'night-queen' )
    ));

    $wp_customize->add_setting('night-queen_parallax_hero_text', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('night-queen_parallax_hero_text', array(
        'type' => 'text',
        'label' => esc_html__( 'Hero Section Big Text', 'night-queen' ),
        'section' => 'night-queen_parallax_hero_section'
    ));
	$wp_customize->add_setting('night-queen_parallax_hero_small_text', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('night-queen_parallax_hero_small_text', array(
        'type' => 'text',
        'label' => esc_html__( 'Hero Section Slogan Text', 'night-queen' ),
        'section' => 'night-queen_parallax_hero_section'
    ));
	$wp_customize->add_setting('night-queen_parallax_hero_img', array(
        'transport'         => 'refresh',
        'height'         => 325,
		'sanitize_callback' => 'night_queen_sanitize_image',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'night-queen_parallax_hero_img_control', array(
        'label'             => esc_html__('Parallax Hero Section Background Image', 'night-queen'),
        'section'           => 'night-queen_parallax_hero_section',
        'settings'          => 'night-queen_parallax_hero_img'
	)));
/**
 * Customizer setting for about us option.
 */
    $wp_customize->add_section('night-queen_about_us_section', array(
        'title' => esc_html__( 'About Us Section', 'night-queen' ),
        'description' => esc_html__( 'You can change about section options from here.', 'night-queen' )
    ));

    $wp_customize->add_setting('night-queen_aboutus_big_text', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('night-queen_aboutus_big_text', array(
        'type' => 'text',
        'label' => esc_html__( 'About Us Section Big Text', 'night-queen' ),
        'section' => 'night-queen_about_us_section'
    ));
	$wp_customize->add_setting('night-queen_aboutus_small_text', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('night-queen_aboutus_small_text', array(
        'type' => 'textarea',
        'label' => esc_html__( 'About Us Section Small Text', 'night-queen' ),
        'section' => 'night-queen_about_us_section'
    ));
	
/**
 * Customizer setting for Gallery option.
 */
	$wp_customize->add_panel( 'panel_gallery_option', array(
        'priority'       => 150,
         'capability'     => 'edit_theme_options',
         'theme_supports' => '',
         'title'          => __('Gallery Section', 'night-queen'),
         'description'    => __('Several settings pertaining my theme', 'night-queen'),
         'priority'       => 23,
       ) );
    $wp_customize->add_section('night-queen_gallery_header', array(
        'title' => esc_html__( 'Gallery Section Header Text', 'night-queen' ),
        'description' => esc_html__( 'Make changes from here.', 'night-queen' ),
        'panel'  => 'panel_gallery_option',
    ));
	$wp_customize->add_section('night-queen_gallery_image', array(
        'title' => esc_html__( 'Image Gallery Tab', 'night-queen' ),
        'description' => esc_html__( 'Make changes from here.', 'night-queen' ),
        'panel'  => 'panel_gallery_option',
    ));
	$wp_customize->add_section('night-queen_gallery_video', array(
        'title' => esc_html__( 'Video Gallery Tab', 'night-queen' ),
        'description' => esc_html__( 'Make changes from here.', 'night-queen' ),
        'panel'  => 'panel_gallery_option',
    ));
	$wp_customize->add_setting('night-queen_gallery_header_text', array(
        'default' => 'Gallery',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('night-queen_gallery_header_text', array(
        'type' => 'text',
        'label' => esc_html__( 'Gallery Header Text', 'night-queen' ),
        'section' => 'night-queen_gallery_header'
    ));
	$wp_customize->add_setting('night-queen_gallery_tab_name', array(
        'default' => 'Photo Gallery',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('night-queen_gallery_tab_name', array(
        'type' => 'text',
        'label' => esc_html__( 'Tab Name', 'night-queen' ),
        'section' => 'night-queen_gallery_image'
    ));
	
	$wp_customize->add_setting('night-queen_photo_gallery_first_image', array(
        'transport'         => 'refresh',
        'height'         => 325,
		'sanitize_callback' => 'night_queen_sanitize_image',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'night-queen_photo_gallery_first_image_control', array(
        'label'             => esc_html__('Gallery First Image (Recommanded size 1604X594)', 'night-queen'),
        'section'           => 'night-queen_gallery_image',
        'settings'          => 'night-queen_photo_gallery_first_image'
	)));
	$wp_customize->add_setting('night-queen_photo_gallery_first_image_popup', array(
        'transport'         => 'refresh',
        'height'         => 325,
		'sanitize_callback' => 'night_queen_sanitize_image',

    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'night-queen_photo_gallery_first_image_popup_control', array(
        'label'             => esc_html__('Gallery First Popup Image Big Size (Recommanded squar size)', 'night-queen'),
        'section'           => 'night-queen_gallery_image',
        'settings'          => 'night-queen_photo_gallery_first_image_popup'
	)));
	$wp_customize->add_setting('night-queen_photo_gallery_second_image', array(
        'transport'         => 'refresh',
        'height'         => 325,
		'sanitize_callback' => 'night_queen_sanitize_image',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'night-queen_photo_gallery_second_image_control', array(
        'label'             => esc_html__('Gallery Second Image (Recommanded size 771X1250)', 'night-queen'),
        'section'           => 'night-queen_gallery_image',
        'settings'          => 'night-queen_photo_gallery_second_image'
	)));
	$wp_customize->add_setting('night-queen_photo_gallery_second_image_popup', array(
        'transport'         => 'refresh',
        'height'         => 325,
		'sanitize_callback' => 'night_queen_sanitize_image',

    ));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'night-queen_photo_gallery_second_image_popup_control', array(
        'label'             => esc_html__('Gallery Second Popup Image Big Size (Recommanded squar size)', 'night-queen'),
        'section'           => 'night-queen_gallery_image',
        'settings'          => 'night-queen_photo_gallery_second_image_popup'
	)));
	$wp_customize->add_setting('night-queen_photo_gallery_third_image', array(
        'transport'         => 'refresh',
        'height'         => 325,
		'sanitize_callback' => 'night_queen_sanitize_image',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'night-queen_photo_gallery_third_image_control', array(
        'label'             => esc_html__('Gallery Third Image (Recommanded size 771X592)', 'night-queen'),
        'section'           => 'night-queen_gallery_image',
        'settings'          => 'night-queen_photo_gallery_third_image'
	)));
	$wp_customize->add_setting('night-queen_photo_gallery_third_image_popup', array(
        'transport'         => 'refresh',
        'height'         => 325,
		'sanitize_callback' => 'night_queen_sanitize_image',

    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'night-queen_photo_gallery_third_image_popup_control', array(
        'label'             => esc_html__('Gallery Third Popup Image Big Size (Recommanded squar size)', 'night-queen'),
        'section'           => 'night-queen_gallery_image',
        'settings'          => 'night-queen_photo_gallery_third_image_popup'
	)));
	$wp_customize->add_setting('night-queen_photo_gallery_fourth_image', array(
        'transport'         => 'refresh',
        'height'         => 325,
		'sanitize_callback' => 'night_queen_sanitize_image',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'night-queen_photo_gallery_fourth_image_control', array(
        'label'             => esc_html__('Gallery fourth Image (Recommanded size 771X592)', 'night-queen'),
        'section'           => 'night-queen_gallery_image',
        'settings'          => 'night-queen_photo_gallery_fourth_image'
	)));
	$wp_customize->add_setting('night-queen_photo_gallery_fourth_image_popup', array(
        'transport'         => 'refresh',
        'height'         => 325,
		'sanitize_callback' => 'night_queen_sanitize_image',

    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'night-queen_photo_gallery_fourth_image_popup_control', array(
        'label'             => esc_html__('Gallery Fourth Popup Image Big Size (Recommanded squar size)', 'night-queen'),
        'section'           => 'night-queen_gallery_image',
        'settings'          => 'night-queen_photo_gallery_fourth_image_popup'
	)));
	$wp_customize->add_setting('night-queen_photo_gallery_fifth_image', array(
        'transport'         => 'refresh',
        'height'         => 325,
		'sanitize_callback' => 'night_queen_sanitize_image',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'night-queen_photo_gallery_fifth_image_control', array(
        'label'             => esc_html__('Gallery Fifth Image (Recommanded size 1604X594)', 'night-queen'),
        'section'           => 'night-queen_gallery_image',
        'settings'          => 'night-queen_photo_gallery_fifth_image'
	)));
	$wp_customize->add_setting('night-queen_photo_gallery_fifth_image_popup', array(
        'transport'         => 'refresh',
        'height'         => 325,
		'sanitize_callback' => 'night_queen_sanitize_image',

    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'night-queen_photo_gallery_fifth_image_popup_control', array(
        'label'             => esc_html__('Gallery Fifth Popup Image Big Size (Recommanded squar size)', 'night-queen'),
        'section'           => 'night-queen_gallery_image',
        'settings'          => 'night-queen_photo_gallery_fifth_image_popup'
	)));
	$wp_customize->add_setting('night-queen_photo_gallery_sixth_image', array(
        'transport'         => 'refresh',
        'height'         => 325,
		'sanitize_callback' => 'night_queen_sanitize_image',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'night-queen_photo_gallery_sixth_image_control', array(
        'label'             => esc_html__('Gallery Sixth Image (Recommanded size 771X592)', 'night-queen'),
        'section'           => 'night-queen_gallery_image',
        'settings'          => 'night-queen_photo_gallery_sixth_image'
	)));
	$wp_customize->add_setting('night-queen_photo_gallery_sixth_image_popup', array(
        'transport'         => 'refresh',
        'height'         => 325,
		'sanitize_callback' => 'night_queen_sanitize_image',

    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'night-queen_photo_gallery_sixth_image_popup_control', array(
        'label'             => esc_html__('Gallery Sixth Popup Image Big Size (Recommanded squar size)', 'night-queen'),
        'section'           => 'night-queen_gallery_image',
        'settings'          => 'night-queen_photo_gallery_sixth_image_popup'
	)));
	
	$wp_customize->add_setting('night-queen_video_gallery_tab_name', array(
        'default' => 'Video Gallery',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('night-queen_video_gallery_tab_name', array(
        'type' => 'text',
        'label' => esc_html__( 'Tab Name', 'night-queen' ),
        'section' => 'night-queen_gallery_video'
    ));
	
}
add_action( 'customize_register', 'night_queen_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function night_queen_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function night_queen_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function night_queen_customize_preview_js() {
	wp_enqueue_script( 'night-queen-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'night_queen_customize_preview_js' );
function night_queen_sanitize_image( $input, $setting ) {
	return esc_url_raw( night_queen_validate_image( $input, $setting->default ) );
}

/**
 * Validation: image
 * Control: text, WP_Customize_Image_Control
 *
 * @uses	wp_check_filetype()		https://developer.wordpress.org/reference/functions/wp_check_filetype/
 * @uses	in_array()				http://php.net/manual/en/function.in-array.php
 */
 
function night_queen_validate_image( $input, $default = '' ) {
	// Array of valid image file types
	// The array includes image mime types
	// that are included in wp_get_mime_types()
	$mimes = array(
		'jpg|jpeg|jpe' => 'image/jpeg',
		'gif'          => 'image/gif',
		'png'          => 'image/png',
		'bmp'          => 'image/bmp',
		'tif|tiff'     => 'image/tiff',
		'ico'          => 'image/x-icon'
	);
	// Return an array with file extension
	// and mime_type
	$file = wp_check_filetype( $input, $mimes );
	// If $input has a valid mime_type,
	// return it; otherwise, return
	// the default.
	return ( $file['ext'] ? $input : $default );
}

