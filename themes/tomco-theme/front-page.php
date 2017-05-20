<?php
/**
 * The template for displaying all pages.
 *
 * @package Tomco_Theme
 */
get_header(); ?>

    <div class="headerimage">
        <div class="fullscreen-text">
            <h3 class="title"> Creative Tomco Limited</h3>
            <h4 class="subtitle"> Your gateway to <br> worldwide trading</h4>
        </div>
    </div>
    <div id="backshape" class= "home-products">
        <div class="wrapper product product-product">
            <div class="product-preview" id="products-preview">
                <div class="title-header">
                    <h3 class="description">Products </h3>
                    <p class="subtitle"> We are a full service trading company from the heart of Hong Kong. We strive to establish strong relationships
                        with our clients through our effective services and large selection of products. </p>
                </div>
                <div class="products-selection product">
                    <a href= "/floral" class="product-tag houseware"> floral</a>
                    <a href= "/furniture" class="product-tag paper"> furniture</a>
                    <a href= "/garden" class="product-tag" id="seasonal"> garden </a>
                    <a href= "/homedecor" class="product-tag stuff"> home decor </a>
                    <a href= "/houseware" class="product-tag garden"> houseware</a>
                    <a href= "/seasonal" class="product-tag" id="dishware"> seasonal</a>
                    <a href= "/kitchenware" class="product-tag phone">kitchenware</a>
                </div>
            </div>
        </div>
    </div>

    <div id="backshape-events">
        <div class="event-banner product wrapper">
            <div class="title-header">
                <h3 class="description">Events</h3>
                <p class="subtitle"> Visit us at our stand #23-24 at the Exhibition Hall! </p>
            </div>
            <div class= "event-text"> 
                <p class= "event-date"> (June 26 - 27, 2017)</p>
                <h1 id="demo"> </h1>
                <p class="event-readmore"> till the Charity Retail Conference Sponsorship & Exhibition 2017</p>
                <p class= "event-readmore"> East Midlands Conference Centre, Nottingham, UK <p>
            </div>
            <h3 class="description"></h3>
            <div class= "event-text"> 
            <p class="subtitle"> Visit us at booth #5B67 on </p>
                <p class= "event-date"> (February 4 - 8, 2018 )</p>
                <p class="event-readmore"> at the Spring Fair, NEC Birmingham, UK</p>
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
            </div>
            <div class="information-container">
                <div class="counter">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/graphics/badge.png" class="skill-img">
                    <div class="counter-text">
                        <h2 class="count counter-value" data-count="30"> 0</h2><span class= "plus">  + </span>
                            <h5 class="count-description"> years of experience</h5>
                    </div>
                </div>

                <div class="counter">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/graphics/hand.png" class="skill-img">
                    <div class="counter-text">
                        <h2 class="count counter-value" data-count="500">0</h2><span class= "plus">  + </span>
                        <h5 class="count-description"> product partners</h5>
                    </div>
                </div>

                <div class="counter">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/graphics/shipping.png" class="skill-img">
                    <div class="counter-text">
                        <h2 class="count counter-value" data-count="32">0</h2><span class= "plus">  + </span>
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
                        <h3 class="description">contact <span class "smaller-text">creative tomco Limited</span></h3>
                    </div>
                    <div class="text-container">
                        <p class="container-address"> <i class="fa fa-map-marker" aria-hidden="true"></i> Unit 601 - Po Lung Centre, 11 Wang Chiu Road,
                            Kowloon Bay, Hong Kong</p>
                            <div class= "numbers-container"> 
                        <p class="container-phone"> <i class="fa fa-phone" aria-hidden="true"></i> +852 2755 0971</p>
                         <p class="container-phone"> <i class="fa fa-phone" aria-hidden="true"></i> +852 2755 0972</p>
                        <p class="container-email"> <i class="fa fa-envelope" aria-hidden="true"></i> info@tomco.hk</p>
                        <p class="container-email"> <i class="fa fa-fax" aria-hidden="true"></i></i> +852 2795 0800</p>
                        </div>
                        <?php echo do_shortcode( '[contact-form-7 id="46" title="Contact form 1"]' ); ?>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <?php get_footer();?>