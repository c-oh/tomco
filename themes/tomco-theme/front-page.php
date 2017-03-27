<?php
/**
 * The template for displaying all pages.
 *
 * @package Tomco_Theme
 */
get_header(); ?>
    
 <div class= "product-preview" id="contact">
        <div class= "title-container">    
    <h3 class="product-description">products we <span class"smaller-text">carry</span> </h3> 
    </div>
        <div class= "product-container">

            <a href=/household class="product-link household">
        <div class="product-grid ">
            <h6> household</h6>
        </div>
        </a>
        
           <a href=/household class="product-link home-decor">
        <div class="product-grid ">
            <h6> home decor</h6>
        </div>
        </a>
        
           <a href=/household class="product-link furniture">
        <div class="product-grid ">
            <h6> furniture</h6>
        </div>
        </a>
        
           <a href=/household class="product-link seasonal">
        <div class="product-grid ">
            <h6> seasonal</h6>
        </div>
        </a>

           <a href=/household class="product-link garden">
        <div class="product-grid ">
            <h6> garden</h6>
        </div>
        </a>
        
           <a href=/household class="product-link paper">
        <div class="product-grid">
            <h6> paper</h6>
        </div>
        </a>
    </div>
   
</div>

<div class= "skillsets">
        <div class= "square"> 
            <div class="skillset-container"> 
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/graphics/badge.png" class="skill-img">
                <h5 class="skillset-title"><?php echo CFS()->get( 'skillset1' ) ?></h5>
                <p class="skillset-description"><?php echo CFS()->get( 'description1' ) ?></p>
            </div>
        </div>
        <div class= "square"> 
            <div class="skillset-container"> 
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/graphics/hand.png" class="skill-img">
                <h5 class="skillset-title"><?php echo CFS()->get( 'skillset2' ) ?></h5>
                <p class="skillset-description"><?php echo CFS()->get( 'description2' ) ?></p>
            </div>
        </div>
        <div class= "square"> 
           <div class="skillset-container"> 
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/graphics/shipping.png" class="skill-img">
                <h5 class="skillset-title"><?php echo CFS()->get( 'skillset4' ) ?></h5>
                <p class="skillset-description"><?php echo CFS()->get( 'description4' ) ?></p>
        </div>
        </div>
    </div>

    <div class= "about-banner">   
    <h3 class="title-container">About  <span class"smaller-text">us</span></h3> 
      <p class= "about-summary"> <?php echo CFS()->get( 'about_us' ) ?> </p>
      <p class="readmore-button"> read more</p>
      <p class= "about-desc"> Established in 1986, Creative Tomco is a company that offers wide range of products with exceptional service. With head office in Hong Kong and a branch office in Shenzhen, this allows us to establish and maintain strong and convenient relationships with our product partners scattered throughout China.</p>

    </div>

       <div class="information-counter">
         <div class= "title-container">    
    <h3 class="skill-description">We can <span class"smaller-text">offer</span></h3> 
    </div>
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

    
    

   
<div class="contact-section">
 <div class= "title-container">    
    <h3 class="skill-description">contact  <span class"smaller-text">creative tomco</span></h3> 
    </div>
    <p class="address"> <i class="fa fa-map-marker" aria-hidden="true"></i> 601 Po Lung Centre, 11 Wang Chiu Road, Kowloon Bay, Hong Kong</p>
    <p class="phone"> <i class="fa fa-phone" aria-hidden="true"></i> +852 2755 0971</p>
    <p class= "email"> <i class="fa fa-envelope" aria-hidden="true"></i> tomco@tomco.hk</p>
    <?php echo do_shortcode( '[contact-form-7 id="46" title="Contact form 1"]' ); ?>
</div>
<?php get_footer();?>
        
     