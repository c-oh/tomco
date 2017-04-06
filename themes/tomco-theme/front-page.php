<?php
/**
 * The template for displaying all pages.
 *
 * @package Tomco_Theme
 */
get_header(); ?>

    <div class="headerimage">
        <div class="fullscreen-text">
            <h3 class="title"> Creative Tomco</h3>
            <h4 class= "subtitle"> Your gateway to <br> worldwide trading</h4>
            <a class="text-button" id="explore-button" href="#products-preview">  explore</a>
        </div>
    </div>
    <div id="backshape">
        <div class="wrapper product product-product">
            <div class="product-preview" id="products-preview">
                <div class="title-header">
                    <h3 class="description">Products </h3>
                    <p class="subtitle"> We are a full service trading company from the heart of Hong Kong. We strive to establish strong relationships
                        with our clients through our effective , dsjifasjod and aodifjads. </p>
                </div>
                <div class="products-selection product">
                    <h3 class="product-tag all"> all</h3>
                    <h3 class="product-tag paper"> paper</h3>
                    <h3 class="product-tag" id="seasonal"> seasonal </h3>
                    <h3 class="product-tag stuff"> stuff </h3>
                    <h3 class="product-tag garden"> garden</h3>
                    <h3 class="product-tag houseware"> houseware</h3>
                    <h3 class="product-tag" id="dishware"> dishware</h3>
                    <h3 class="product-tag phone">phone </h3>
                    <h3 class="product-tag" id="socks">socks </h3>
                </div>
                <div class="products-grid">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/graphics/paper.png" class="products-image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/graphics/seasonal.png" class="products-image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/graphics/garden.png" class="products-image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/graphics/houseware.png" class="products-image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/graphics/kitchen.png" class="products-image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/graphics/houseware.png" class="products-image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/graphics/floral.png" class="products-image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/graphics/kitchen.png" class="products-image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/graphics/garden.png" class="products-image">
                </div>
            </div>
        </div>
    </div>
    
<div id="backshape-about">
    <div class="about-banner product wrapper">
        <div class="title-header">
            <h3 class="description">About</h3>
        </div>
        <?php echo CFS()->get( 'about_us' ) ?>
        <h6 class="readmore-button"> read more</h6>
        <p class="about-readmore">
            <?php echo CFS()->get( 'about_us_more' ) ?> </p>
    </div>
    </div>

<div id="backshape-counter">
    <div class="information-counter product wrapper" id="counter">
        <div class="title-header">
            <h3 class="description">Facts</h3>
            <p class="subtitle"> Just a little more about who we are and what we do. </p>
        </div>
        <div class="information-container">
            <div class="counter">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/graphics/badge.png" class="skill-img">
                <div class="counter-text">
                    <h2 class="count counter-value" data-count="31"> 0</span>
                        <h5 class="count-description">years of experience</h5>
                </div>
            </div>

            <div class="counter">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/graphics/hand.png" class="skill-img">
                <div class="counter-text">
                    <h2 class="count counter-value" data-count="500">0</h2>
                    <h5 class="count-description"> and more products</h5>
                </div>
            </div>

            <div class="counter">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/graphics/shipping.png" class="skill-img">
                <div class="counter-text">
                    <h2 class="count counter-value" data-count="32">0</h2>
                    <h5 class="count-description">international ports</h5>
                </div>
            </div>
        </div>

    </div>
    </div>


<div id="backshape-contact">
    <div class="contact-section product wrapper" id="contact">
        <div class="contact-large-container">
            <div class="contact-container">
                <div class="title-header">
                    <h3 class="description">contact <span class "smaller-text">creative tomco</span></h3>
                </div>
                <div class="text-container">
                    <p class="container-address"> <i class="fa fa-map-marker" aria-hidden="true"></i> Unit 601 - Po Lung Centre, 11 Wang Chiu Road, Kowloon
                        Bay, Hong Kong</p>
                    <p class="container-phone"> <i class="fa fa-phone" aria-hidden="true"></i> +852 2755 0971</p>
                    <p class="container-email"> <i class="fa fa-envelope" aria-hidden="true"></i> tomco@tomco.hk</p>
                    <p class="container-email"> <i class="fa fa-fax" aria-hidden="true"></i></i> +852 2091 8990</p>
                    <?php echo do_shortcode( '[contact-form-7 id="46" title="Contact form 1"]' ); ?>
                </div>
            </div>

            <section id "map-section">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.757862129452!2d114.20686286414804!3d22.324995497641407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3404013354eaabe1%3A0x4ef179fd625aef54!2sPo+Lung+Centre%2C+11+Wang+Chiu+Rd%2C+Kowloon+Bay%2C+Hong+Kong!5e0!3m2!1sen!2sca!4v1490783393503"
                    width="300px" height="820px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </section>
        </div>
    </div>

    </div>

    
    <div class="footer">
        <div class="wrapper"></div>
    </div>

    <?php get_footer();?>