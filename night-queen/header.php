<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Night_Queen
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
		<?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
        <header>
            <!-- Header Area Section Start -->
            <section id="header-sticky" class="header-area transparent-header">
                <div class="container d-none d-lg-block">
                    <div class="row menu-area">
                        <div class="col-xl-5 col-lg-5">
                            <div class="main-menu f-right">
                                <nav>
                                    <?php wp_nav_menu( array('theme_location' => 'logo-left-menu') ) ?>
                                </nav>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2">
						<?php if(has_custom_logo( )) {?>
                        
                    
                            <div class="logo">
                                <?php the_custom_logo(); ?>
                            </div> 
							<?php } else { ?>
							<div class="text-logo text-center">
                                <a href="<?php echo esc_url(home_url( '/' )); ?>"><?php esc_html(bloginfo( 'name' )); ?></a>
                            </div>
							<?php } ?>
                        </div>
                        <div class="col-xl-5 col-lg-5">
                            <div class="main-menu f-left">
                                <nav>
                                    <?php wp_nav_menu( array('theme_location' => 'logo-right-menu') ) ?>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-logo-area d-lg-none d-block fix pt-50 pb-30">
                    <div class="container">
                        <div class="row">
                            <div class="mobile-logo text-center">
								<?php if(has_custom_logo( )) {
									the_custom_logo();
								} else { ?>								
								<a href="<?php echo esc_url(home_url( '/' )); ?>"><?php esc_html(bloginfo( 'name' )); ?></a>
								<?php } ?>
                                <h3><?php esc_html(bloginfo( 'description' )); ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu-area d-lg-none d-block fix">
                    <div class="container">
                        <div class="row">
                            <div class="mobile-menu">
                                <nav id="mobile-menu-active">
                                   <?php wp_nav_menu( array('theme_location' => 'mobile-menu') ) ?>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Header Area Section End -->
        </header>

