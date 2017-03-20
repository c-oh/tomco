<?php
/**
 * The template for displaying all pages.
 *
 * @package Tomco_Theme
 */
get_header(); ?>
    
    <div class= "carousel">   
    
    
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/graphics/logo.jpg">
    
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

    <div class= "contact-banner">
        <h4 class= "banner-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris  eget eros malesuada lacus cursus blandit eget a est. Mauris eget lorem ipsum.</h4>
        <a class= "banner-link" href= "/about" > About us <a>
    </div>

       <div class="information-counter">
        <h4 class="counter-title"> We can offer:</h4>
        <div class= "counter-container"> 
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
    </div>

    
    

    <div class= "product-preview">
        <h1 class= "product-preview-title"> Products we carry</h1>
        <div class= "product-container">

        <a href=# class= "grid-link">    
        <div class="product-grid household">
            <h6> household</h6>
            <a> learn more</a>
        </div>
        </a>

        <a href=# class= "grid-link">
         <div class="product-grid furniture">
             <h6>furniture</h6>
            <p> learn more</a>
        </div>
        </a>

        <a href=# class= "grid-link">
  <div class="product-grid home-decor">
             <h6>home-decor</h6>
            <a> learn more</a>
        </div>
        </a>

        <a href=# class= "grid-link">
          <div class="product-grid seasonal">
             <h6>seasonal</h6>
            <a>learn more</a>
        </div>
        </a>
        <a href=# class= "grid-link">
          <div class="product-grid floral">
             <h6>floral</h6>
            <a> learn more</a>
        </div>
        </a>

        <a href=# class= "grid-link">
           <div class="product-grid paper">
             <h6>paper</h6>
            <a href=> learn more</a>
        </div>
        </a>
        </div>
        <a> view all products</a>
    </div>
   

<?php get_footer();?>
        
     