<?php
/**
 * Template Name: Home Default Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
		<?php $night_queen_parallax_hero_text = esc_html(get_theme_mod('night-queen_parallax_hero_text'));?>				
		<?php $night_queen_parallax_hero_small_text = esc_html(get_theme_mod('night-queen_parallax_hero_small_text'));?>
		<?php $night_queen_parallax_hero_img = esc_attr(get_theme_mod('night-queen_parallax_hero_img'));?>				
		<?php $night_queen_aboutus_big_text = esc_html(get_theme_mod('night-queen_aboutus_big_text'));?>				
		<?php $night_queen_aboutus_small_text = esc_html(get_theme_mod('night-queen_aboutus_small_text'));?>				
		<?php $night_queen_gallery_header_text = esc_html(get_theme_mod('night-queen_gallery_header_text'));?>				
		<?php $night_queen_gallery_tab_name = esc_html(get_theme_mod('night-queen_gallery_tab_name'));?>				
		<?php $night_queen_video_gallery_tab_name = esc_html(get_theme_mod('night-queen_video_gallery_tab_name'));?>
		<?php $night_queen_photo_gallery_first_image = esc_attr(get_theme_mod('night-queen_photo_gallery_first_image'));?>
		<?php $night_queen_photo_gallery_second_image = esc_attr(get_theme_mod('night-queen_photo_gallery_second_image'));?>
		<?php $night_queen_photo_gallery_third_image = esc_attr(get_theme_mod('night-queen_photo_gallery_third_image'));?>
		<?php $night_queen_photo_gallery_fourth_image = esc_attr(get_theme_mod('night-queen_photo_gallery_fourth_image'));?>
		<?php $night_queen_photo_gallery_fifth_image = esc_attr(get_theme_mod('night-queen_photo_gallery_fifth_image'));?>
		<?php $night_queen_photo_gallery_sixth_image = esc_attr(get_theme_mod('night-queen_photo_gallery_sixth_image'));?>
		<?php $night_queen_photo_gallery_first_image_popup = esc_attr(get_theme_mod('night-queen_photo_gallery_first_image_popup'));?>
		<?php $night_queen_photo_gallery_second_image_popup = esc_attr(get_theme_mod('night-queen_photo_gallery_second_image_popup'));?>
		<?php $night_queen_photo_gallery_third_image_popup = esc_attr(get_theme_mod('night-queen_photo_gallery_third_image_popup'));?>
		<?php $night_queen_photo_gallery_fourth_image_popup = esc_attr(get_theme_mod('night-queen_photo_gallery_fourth_image_popup'));?>
		<?php $night_queen_photo_gallery_fifth_image_popup = esc_attr(get_theme_mod('night-queen_photo_gallery_fifth_image_popup'));?>
		<?php $night_queen_photo_gallery_sixth_image_popup = esc_attr(get_theme_mod('night-queen_photo_gallery_sixth_image_popup'));?>
									

		

		
		
		

        <main>
            <!-- Slider Area Section Start -->
            <section id="home" class="slider-area">
                <div class="overlay"></div>
                <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $night_queen_parallax_hero_img; ?>">
                    <div class="slider-active">
                        <div class="single-slider">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-8 offset-xl-2">
                                        <div class="slider-text text-center" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
                                            <?php if($night_queen_parallax_hero_text) { ?>
											<h1><?php echo $night_queen_parallax_hero_text; ?></h1>
											<?php } ?>
											<?php if($night_queen_parallax_hero_small_text) { ?>
                                            <h5><?php echo $night_queen_parallax_hero_small_text; ?></h5>
											<?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Slider Area Section End -->
            <!-- About Us Area Section Start -->
            <section id="about-us" class="about-us-area pt-80 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-7">
                            <div class="about-us-text" data-aos="flip-right" data-aos-easing="linear" data-aos-duration="500">
                                <h1><?php echo $night_queen_aboutus_big_text; ?></h1>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5">
                            <div class="about-us-text-normal" data-aos="flip-left" data-aos-easing="linear" data-aos-duration="500">
                                <p>
								<?php echo $night_queen_aboutus_small_text; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Us Area Section End -->
            
			<!-- Gallery Area Section Start -->
            <section id="gallery" class="gallery-area pt-50 pb-100">
                <div class="container" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="500">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8 offset-lg-2 offset-xl-3">
                            <div class="gallery-area-header text-center">
                                <h1>Gallery</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="gallery-content text-center">
                                <ul class="nav gallery-nav" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="photo-tab" data-toggle="tab" href="#photo" role="tab" aria-controls="photo" aria-selected="true">Photo Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="video-tab" data-toggle="tab" href="#video" role="tab" aria-controls="video" aria-selected="false">Video Gallery</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active gallery-tab" id="photo" role="tabpanel" aria-labelledby="photo-tab">
                                        <div class="container">
                                            <div class="row grid">
											<?php
 
												$args = array(
													'post_type' => 'night_queen_photo',
													'posts_per_page' => 10
													);
												
												$query = new WP_Query( $args );
												
												if ( $query->have_posts() ) {
												
													while ( $query->have_posts() ) {
												
														$query->the_post(); 
												   ?>
												<?php $gallery_image = esc_attr(get_post_meta( get_the_ID(), 'my-image-for-post', true));?>
												<?php $gallery_image_2 = esc_attr(get_post_meta( get_the_ID(), 'my-image-for-post-2', true));?>
												
                                                
												<?php $_night_queen_photo_column = esc_html(get_post_meta( get_the_ID(), '_night_queen_photo_column', true));?>
												<?php if( $_night_queen_photo_column === '4') { ?>
												
												<div class="col-xl-4 col-lg-4 grid-item">
                                                    <div class="image-item">
													<?php the_title();?>
                                                        <a class="image-popup" href="<?php echo $gallery_image_2;?>"><img class="img-fluid" src="<?php echo $gallery_image;?>" alt="" /></a>
                                                    </div>
                                                </div>
												
												<?php } elseif ( $_night_queen_photo_column === '8') { ?>
												<div class="col-xl-8 col-lg-8 grid-item">
                                                    <div class="image-item">
                                                        <a class="image-popup" href="<?php echo $gallery_image_2;?>"><img class="img-fluid" src="<?php echo $gallery_image;?>" alt="" /></a>
                                                    </div>
                                                </div>
												<?php } elseif ( $_night_queen_photo_column === '12') { ?>
												<div class="col-xl-12 col-lg-12 grid-item">
                                                    <div class="image-item">
                                                        <a class="image-popup" href="<?php echo $gallery_image_2;?>"><img class="img-fluid" src="<?php echo $gallery_image;?>" alt="" /></a>
                                                    </div>
                                                </div>
												<?php } ?>
												
												 <?php
													}
										
													}
													
													wp_reset_postdata();
													
												?>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade gallery-tab" id="video" role="tabpanel" aria-labelledby="video-tab">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-4">
                                                    <div class="image-item">
                                                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/blog/one.jpg" alt="" />
                                                        <a class="video-button btn" href="https://www.youtube.com/watch?v=t4H_Zoh7G5A"><i class="fa fa-play" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-4">
                                                    <div class="image-item">
                                                        <img class="img-fluid" src="img/blog/two.jpg" alt="" />
                                                        <a class="video-button btn" href="https://www.youtube.com/watch?v=t4H_Zoh7G5A"><i class="fa fa-play" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-4">
                                                    <div class="image-item">
                                                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/blog/one.jpg" alt="" />
                                                        <a class="video-button btn" href="https://www.youtube.com/watch?v=t4H_Zoh7G5A"><i class="fa fa-play" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-4">
                                                    <div class="image-item">
                                                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/blog/two.jpg" alt="" />
                                                        <a class="video-button btn" href="https://www.youtube.com/watch?v=t4H_Zoh7G5A"><i class="fa fa-play" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-4">
                                                    <div class="image-item">
                                                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/blog/one.jpg" alt="" />
                                                        <a class="video-button btn" href="https://www.youtube.com/watch?v=t4H_Zoh7G5A"><i class="fa fa-play" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-4">
                                                    <div class="image-item">
                                                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/blog/two.jpg" alt="" />
                                                        <a class="video-button btn" href="https://www.youtube.com/watch?v=t4H_Zoh7G5A"><i class="fa fa-play" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Gallery Area Section End -->
            <!-- Service Area Section Start -->
            <section id="service" class="service-area pt-80 pb-50" data-background="<?php echo get_template_directory_uri(); ?>/img/service/Services_bg-4.jpg">
                <div class="container" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="500">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8 offset-lg-2 offset-xl-3">
                            <div class="service-area-header text-center">
                                <h1>Our Service</h1>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="service-content text-center">
                                <ul class="nav service-nav" id="serviceTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="individual-tab" data-toggle="tab" href="#individual" role="tab" aria-controls="individual" aria-selected="true">Idividual Offer</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="group-tab" data-toggle="tab" href="#group" role="tab" aria-controls="group" aria-selected="false">Group & Bachelor Party</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="drinks-tab" data-toggle="tab" href="#drinks" role="tab" aria-controls="drinks" aria-selected="false">Drinks</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="additional-tab" data-toggle="tab" href="#additional" role="tab" aria-controls="additional" aria-selected="false">Additional Offer</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="food-tab" data-toggle="tab" href="#food" role="tab" aria-controls="food" aria-selected="false">Food</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="serviceTabContent">
                                    <div class="tab-pane fade show active" id="individual" role="tabpanel" aria-labelledby="individual-tab">
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-xl-4">
                                                    <div class="package-offer">
                                                        <h3>VIP Drink Offer</h3>
                                                        <ul>
                                                            <li>Free Entrance</li>
                                                            <li>VIP table with attendance</li>
                                                            <li>60$ bill or 3 choosen drinks</li>
                                                        </ul>
                                                        <h5>70$ + 15% VAT</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="package-offer">
                                                        <h3>One drink set – up to 5 people</h3>
                                                        <ul>
                                                            <li>Free Entrance</li>
                                                            <li>Access to the VIP zone</li>
                                                            <li>1 bottle of choosen drinks</li>
                                                        </ul>
                                                        <h5>100$ + 15% VAT</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="package-offer">
                                                        <h3>One drink set – up to 5 people</h3>
                                                        <ul>
                                                            <li>Free Entrance</li>
                                                            <li>Access to the VIP zone</li>
                                                            <li>1 bottle of choosen drinks</li>
                                                        </ul>
                                                        <h5>120$ + 15% VAT</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="group" role="tabpanel" aria-labelledby="group-tab">
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-xl-6">
                                                    <div class="package-offer">
                                                        <h3>4 people or more</h3>
                                                        <ul>
                                                            <li>Free Entrance</li>
                                                            <li>Welcome drinks (vodka, whiskey or beer)</li>
                                                            <li>Private dance in VIP room with a chosen dancer</li>
                                                        </ul>
                                                        <h5>70$ + 15% VAT</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="package-offer">
                                                        <h3>5 people or more</h3>
                                                        <ul>
                                                            <li>Free Entrance</li>
                                                            <li>Welcome drinks (vodka, whiskey or beer)</li>
                                                            <li>Private dance in VIP room with a chosen dancer</li>
                                                            <li>Bottle of vodka or whiskey (0,7L) and juice (1L)</li>
                                                            <li>Snacks</li>
                                                        </ul>
                                                        <h5>50$ / person + 15% VAT</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="package-offer">
                                                        <h3>5 people or more</h3>
                                                        <ul>
                                                            <li>Free Entrance</li>
                                                            <li>Welcome drinks (vodka, whiskey or beer)</li>
                                                            <li>Private dance in VIP room with a chosen dancer</li>
                                                            <li>Bottle of vodka or whiskey (0,7L) and juice (1L)</li>
                                                            <li>Snacks</li>
                                                        </ul>
                                                        <h5>50$ / person + 15% VAT</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="package-offer">
                                                        <h3>Exceptional offer for groups</h3>
                                                        <ul>
                                                            <li>Free Entrance</li>
                                                            <li>Private VIP space</li>
                                                            <li>4 bottles of chosen drinks</li>
                                                            <li>Free soft drinks</li>
                                                            <li>Private dance in VIP room with a chosen dancer</li>
                                                            <li>Special show for a group on stage with two dancers</li>
                                                        </ul>
                                                        <h5>500$ + 15% VAT</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="drinks" role="tabpanel" aria-labelledby="drinks-tab">
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-xl-4">
                                                    <div class="package-offer">
                                                        <h3>Vodka</h3>
                                                        <ul>
                                                            <li>Grey Goose (+flavour)</li>
                                                            <li>Belvedere</li>
                                                            <li>Ketel One</li>
                                                            <li>Absolut</li>
                                                            <li>Stolichnaya (+flavour)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="package-offer">
                                                        <h3>SCOTCH, WHISKEY, and BOURBON</h3>
                                                        <ul>
                                                            <li>Johnnie Walker Black Label</li>
                                                            <li>Jack Daniel’s</li>
                                                            <li>Maker’s Mark</li>
                                                            <li>Crown Royal</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="package-offer">
                                                        <h3>TAQUILA</h3>
                                                        <ul>
                                                            <li>Corzo</li>
                                                            <li>Avión</li>
                                                            <li>Patrón</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="package-offer">
                                                        <h3>Gin</h3>
                                                        <ul>
                                                            <li>Bombay Sapphire</li>
                                                            <li>Tangueray</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="package-offer">
                                                        <h3>Rum</h3>
                                                        <ul>
                                                            <li>Captain Morgan</li>
                                                            <li>Bacardi</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="additional" role="tabpanel" aria-labelledby="additional-tab">
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-xl-4">
                                                    <div class="package-offer">
                                                        <h3>WHISKY + Cigar offer</h3>
                                                        <ul>
                                                            <li>Free Entrance</li>
                                                            <li>Two different malt whiskeys (Irish, Scotch, Bourbon) and cigar</li>
                                                        </ul>
                                                        <h5>100 $</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="package-offer">
                                                        <h3>Red Bull SET</h3>
                                                        <ul>
                                                            <li>Absolut 0.7 + 5x Red Bull</li>
                                                        </ul>
                                                        <h5>70 $ + 15 % service</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="package-offer">
                                                        <h3>Shisha / hookah</h3>
                                                        <ul>
                                                            <li>Free Entrance</li>
                                                            <li>Chosen flavour tabacco</li>
                                                        </ul>
                                                        <h5>30 $</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="package-offer">
                                                        <h3>Offer for COUPLES</h3>
                                                        <ul>
                                                            <li>Free Entrance</li>
                                                            <li>A bottle of champagne with ice and strawberries</li>
                                                            <li>Table for two in VIP zone</li>
                                                            <li>FVIP attendance</li>
                                                        </ul>
                                                        <h5>150 $ + 15 % service</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="package-offer">
                                                        <h3>Open bar offer WITHOUT limits for 5 hours</h3>
                                                        <ul>
                                                            <li>Free Entrance</li>
                                                            <li>Vodka / Whiskey / Gin / Tequila / Wine / Beer / Soft Drinks</li>
                                                        </ul>
                                                        <h5>300 $ + 15 % service</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="food" role="tabpanel" aria-labelledby="food-tab">
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-xl-4">
                                                    <div class="package-offer">
                                                        <h3>WHISKY + Cigar offer</h3>
                                                        <ul>
                                                            <li>Free Entrance</li>
                                                            <li>Two different malt whiskeys (Irish, Scotch, Bourbon) and cigar</li>
                                                        </ul>
                                                        <h5>100 $</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="package-offer">
                                                        <h3>Red Bull SET</h3>
                                                        <ul>
                                                            <li>Absolut 0.7 + 5x Red Bull</li>
                                                        </ul>
                                                        <h5>70 $ + 15 % service</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="package-offer">
                                                        <h3>Shisha / hookah</h3>
                                                        <ul>
                                                            <li>Free Entrance</li>
                                                            <li>Chosen flavour tabacco</li>
                                                        </ul>
                                                        <h5>30 $</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="package-offer">
                                                        <h3>Offer for COUPLES</h3>
                                                        <ul>
                                                            <li>Free Entrance</li>
                                                            <li>A bottle of champagne with ice and strawberries</li>
                                                            <li>Table for two in VIP zone</li>
                                                            <li>FVIP attendance</li>
                                                        </ul>
                                                        <h5>150 $ + 15 % service</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="package-offer">
                                                        <h3>Open bar offer WITHOUT limits for 5 hours</h3>
                                                        <ul>
                                                            <li>Free Entrance</li>
                                                            <li>Vodka / Whiskey / Gin / Tequila / Wine / Beer / Soft Drinks</li>
                                                        </ul>
                                                        <h5>300 $ + 15 % service</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Service Area Section End  -->
            <!-- Event Area Section Start -->
            <section id="event" class="event-area pt-80 pb-50">
                <div class="container" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8 offset-lg-2 offset-xl-3">
                            <div class="event-area-header text-center">
                                <h1>News & Events</h1>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="event-single">
                                <div class="event-single-border">
                                    <div class="event-img img-hover-zoom--slowmo img-hover-zoom">
                                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/blog/one.jpg" alt="" />
                                    </div>
                                    <div class="event-post-text">
                                        <div class="event-meta">
                                            <ul>
                                                <li class="f-right"><i class="fa fa-calendar" aria-hidden="true"></i> 25 Jul 2020</li>
                                                <li><i class="fa fa-user" aria-hidden="true"></i> Admin</li>
                                            </ul>
                                        </div>
                                        <div class="event-heading">
                                            <a href="single-event-siderbar.html"><h1>Lorem ipsum dolor sit amet dolor consectetur adipiscing.</h1></a>
                                        </div>
                                        <div class="event-text">
                                            <div id="event-countdown"></div>
                                        </div>
                                        <div class="event-meta">
                                            <ul>
                                                <li class="f-right"><a href="single-event-siderbar.html">Read More</a></li>
                                                <li>
                                                    <a href="single-event-siderbar.html"><i class="fa fa-heart" aria-hidden="true"></i> 5</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="event-single">
                                <div class="event-single-border">
                                    <div class="event-img img-hover-zoom--slowmo img-hover-zoom">
                                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/blog/two.jpg" alt="" />
                                    </div>
                                    <div class="event-post-text">
                                        <div class="event-meta">
                                            <ul>
                                                <li class="f-right"><i class="fa fa-calendar" aria-hidden="true"></i> 25 Jul 2020</li>
                                                <li><i class="fa fa-user" aria-hidden="true"></i> Admin</li>
                                            </ul>
                                        </div>
                                       <div class="event-heading">
                                            <a href="single-event.html"><h1>Lorem ipsum dolor sit amet dolor consectetur adipiscing.</h1></a>
                                        </div>
                                        <div class="event-text">
                                            <p>
                                                Sed ut perspiciatis unde omnis iste natus error sit atis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                                                quia consequuntur magni dolores eos qui.
                                            </p>
                                        </div>
                                        <div class="event-meta">
                                            <ul>
                                                <li class="f-right"><a href="single-event.html">Read More</a></li>
                                                <li>
                                                    <a href="single-event.html"><i class="fa fa-heart" aria-hidden="true"></i> 5</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Event Area Section End -->
            <!-- Reservation Area Section Start -->
            <section id="reservation" class="reservation-area pt-80 pb-50">
                <div class="container" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="500">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8 offset-lg-2 offset-xl-3">
                            <div class="reservation-area-header text-center">
                                <h1>Reservation</h1>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti qu dolores et quas molestias</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 text-center">
                            <div class="reservation-form">
                                <form autocomplete="off">
                                    <div class="form-row">
                                        <div class="col-xl-4 col-lg-4 mb-3 form-field">
                                            <input type="text" class="form-control" id="validationServer02" placeholder="First name" value="" required />
                                        </div>
                                        <div class="col-xl-4 col-lg-4 mb-3 form-field">
                                            <input type="email" class="form-control" id="validationServer05" placeholder="Your E-mail" value="" required />
                                        </div>
                                        <div class="col-xl-4 col-lg-4 mb-3 form-field">
                                            <input type="tel" class="form-control" id="validationServer03" placeholder="Phone Number" value="" required />
                                        </div>
                                        <div class="col-xl-4 col-lg-4 mb-3 form-field">
                                            <input type="text" class="form-control" id="validationServer04" placeholder="Event" value="" required />
                                        </div>
                                        <div class="col-xl-4 col-lg-4 mb-3 form-field">
                                            <input type="text" class="form-control" id="date" placeholder="Date" value="" />
                                        </div>
                                        <div class="col-xl-4 col-lg-4 mb-3 form-field">
                                            <input type="text" class="form-control" id="validationServer06" placeholder="Number of people" value="" />
                                        </div>
                                        <div class="col-xl-12 col-lg-12 mb-3 form-field">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Do you have any special instruction for us? Write here..."></textarea>
                                        </div>
                                    </div>

                                    <button class="btn" type="submit">Book now!</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Reservation Area Section End -->
        </main>
<?php get_footer(); ?>
