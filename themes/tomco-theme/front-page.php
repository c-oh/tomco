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
            <h4 class="subtitle"> Your gateway to <br> worldwide trading</h4>
        </div>
    </div>
    <div id="backshape" class= "home-products">
        <div class="wrapper product product-product">
            <div class="product-preview" id="products-preview">
                <div class="title-header">
                    <h3 class="description">Products </h3>
                    <p class="subtitle"> We are a full service trading company from the heart of Hong Kong. We strive to establish strong relationships
                        with our clients through our effective , dsjifasjod and aodifjads. </p>
                </div>
                <div class="products-selection product">
                    <a href= "/product_type/floral" class="product-tag houseware"> floral</a>
                    <a href= "/product_type/furniture" class="product-tag paper"> furniture</a>
                    <a href= "/product_type/garden" class="product-tag" id="seasonal"> garden </a>
                    <a href= "/product_type/homedecor" class="product-tag stuff"> home decor </a>
                    <a href= "/product_type/houseware" class="product-tag garden"> houseware</a>
                    <a href= "/product_type/seasonal" class="product-tag" id="dishware"> seasonal</a>
                    <a href= "/product_type/paper" class="product-tag phone">paper </a>
                </div>
            </div>
        </div>
    </div>

    <div id="backshape-events">
        <div class="event-banner product wrapper">
            <div class="title-header">
                <h3 class="description">Events</h3>
                <p class="subtitle"> Visit us at our booth at the latest event! </p>
            </div>
            <div class= "event-text"> 
                <p class= "event-date"> ( May 5th 2017 )</p>
                <h1 id="demo"> </h1>
                <p class="event-readmore"> till the Shenzhen Household Expo Show</p>
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
                        <p class="container-address"> <i class="fa fa-map-marker" aria-hidden="true"></i> Unit 601 - Po Lung Centre, 11 Wang Chiu Road,
                            Kowloon Bay, Hong Kong</p>
                            <div class= "numbers-container"> 
                        <p class="container-phone"> <i class="fa fa-phone" aria-hidden="true"></i> +852 2755 O971</p>
                         <p class="container-phone"> <i class="fa fa-phone" aria-hidden="true"></i> +852 2755 O972</p>
                        <p class="container-email"> <i class="fa fa-envelope" aria-hidden="true"></i> tomco@tomco.hk</p>
                        <p class="container-email"> <i class="fa fa-fax" aria-hidden="true"></i></i> +852 2091 899O</p>
                        </div>
                        <?php echo do_shortcode( '[contact-form-7 id="46" title="Contact form 1"]' ); ?>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="footer">
        <div class="wrapper"></div>
    </div>

    <?php get_footer();?>