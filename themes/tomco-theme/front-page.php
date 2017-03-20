<?php
/**
 * The template for displaying all pages.
 *
 * @package Tomco_Theme
 */
get_header(); ?>
    
    <div class= "carousel">   
    
    
    testing
    
    </div>

    <div class="information-counter">
        <h4 class="counter-title"> We can offer:</h4>
        <div class="counter-1">
           <h2 class="count"> 31</span>
            <h5 class="count-description">years of experience</h5>
        </div>
         <div class="counter-2">
            <h2 class= "count">250</h2>
            <h5 class="count-description">companies to chose from</h5>
        </div>
         <div class="counter-3">
            <h2 class= "count">32</h2>
            <h5 class="count-description">shipping ports worldwide</h5>
        </div>
    </div>

    <div class= "contact-banner">
        <h4 class= "banner-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris  eget eros malesuada lacus cursus blandit eget a est. Mauris eget lorem ipsum.</h4>
        <a class= "banner-link" href= # > Contact us <a>
    </div>

    <div class= "skillset-overview">
        <div class= "skillset1"> 
            <img class="skillset-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/resources/graphics/pig.png">
            <div class="skillset-container"> 
                <h5 class="skillset-title">shipment consolidation</h5>
                <p class="skillset-description">Phasellus in facilisis ligula, a dictum tortor. Morbi et quam ut neque luctus eleifend.</p>
            </div>
        </div>
        <div class= "skillset2"> 
            <img class="skillset-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/resources/graphics/hand.png">
            <div class="skillset-container"> 
                <h5 class="skillset-title">reliable quality</h5>
                <p class="skillset-description">Phasellus in facilisis ligula, a dictum tortor. Morbi et quam ut neque luctus eleifend.</p>
            </div>
        </div>
        <div class= "skillset3"> 
            <img class="skillset-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/resources/graphics/security.png">
            <div class="skillset-container"> 
                <h5 class="skillset-title">efficient service</h5>
                <p class="skillset-description">Phasellus in facilisis ligula, a dictum tortor. Morbi et quam ut neque luctus eleifend.</p>
            </div>
        </div>
        <div class= "skillset4"> 
            <img class="skillset-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/resources/graphics/human.png">
           <div class="skillset-container"> 
                <h5 class="skillset-title">large networks</h5>
                <p class="skillset-description">Phasellus in facilisis ligula, a dictum tortor. Morbi et quam ut neque luctus eleifend.</p>
        </div>
        </div>
    </div>

    <div class= "product-preview">
        <h1 class= "product-preview-title"> Products we carry</h1>
    </div>
    <?php wp_footer(); ?>
        </body>
     