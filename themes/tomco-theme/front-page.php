<?php
/**
 * The template for displaying all pages.
 *
 * @package Tomco_Theme
 */
get_header(); ?>
    
    <div class= "carousel">   
    
    <?php echo do_shortcode( '[wp_flickity id="1"] ' ); ?>
    
    </div>

<div class= "skillsets">
    <div class= "title-container">    
    <h3 class="skill-description">we can </h3> 
    <h1 class="skill-span">provide</h1>
    </div>
    <div class="skillset-overview"> 
        <div class= "skillset1"> 
            <div class="square"></div>
            <div class="skillset-container"> 
                <h5 class="skillset-title"><?php echo CFS()->get( 'skillset1' ) ?></h5>
                <p class="skillset-description"><?php echo CFS()->get( 'description1' ) ?></p>
            </div>
        </div>
        <div class= "skillset2"> 
           <div class="square"></div>
            <div class="skillset-container"> 
                <h5 class="skillset-title"><?php echo CFS()->get( 'skillset2' ) ?></h5>
                <p class="skillset-description"><?php echo CFS()->get( 'description2' ) ?></p>
            </div>
        </div>
        <div class= "skillset3"> 
            <div class="square"></div>
            <div class="skillset-container"> 
                <h5 class="skillset-title"><?php echo CFS()->get( 'skillset3' ) ?></h5>
                <p class="skillset-description"><?php echo CFS()->get( 'description3' ) ?></p>
            </div>
        </div>
        <div class= "skillset4"> 
            <div class="square"></div>
           <div class="skillset-container"> 
                <h5 class="skillset-title"><?php echo CFS()->get( 'skillset4' ) ?></h5>
                <p class="skillset-description"><?php echo CFS()->get( 'description4' ) ?></p>
        </div>
        </div>
        </div>
    </div>

    <div class= "about-banner">
        <div class= "title-container">    
    <h3 class="skill-description">About </h3> 
    <h1 class="skill-span">Us</h1>
    </div>
      <?php echo CFS()->get( 'about_us' ) ?>
      <a class="banner-link" href= "/about"> read more</a>

    </div>

       <div class="information-counter">
         <div class= "title-container">    
    <h3 class="skill-description">We can </h3> 
    <h1 class="skill-span">Offer</h1>
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

    
    

    <div class= "product-preview" id="contact">
        <div class= "title-container">    
    <h3 class="skill-description">products we </h3> 
    <h1 class="skill-span">carry</h1>
    </div>
        <div class= "product-container">

            <a href=/household class="product-link">
        <div class="product-grid household">
            <h6> household</h6>
            <p> view more</p>
        </div>
        </a>
        
           <a href=/household class="product-link">
        <div class="product-grid home-decor">
            <h6> home decor</h6>
            <p> view more</p>
        </div>
        </a>
        
           <a href=/household class="product-link">
        <div class="product-grid furniture">
            <h6> furniture</h6>
            <p> view more</p>
        </div>
        </a>
        
           <a href=/household class="product-link">
        <div class="product-grid seasonal">
            <h6> seasonal</h6>
            <p> view more</p>
        </div>
        </a>

           <a href=/household class="product-link">
        <div class="product-grid garden">
            <h6> garden</h6>
            <p> view more</p>
        </div>
        </a>
        
           <a href=/household class="product-link">
        <div class="product-grid paper">
            <h6> paper</h6>
            <p> view more</p>
        </div>
        </a>
    </div>
   
</div>
<div class="contact-section">
 <div class= "title-container">    
    <h3 class="skill-description">contact </h3> 
    <h1 class="skill-span">creative tomco</h1>
    </div>
    <p class="address"> <i class="fa fa-map-marker" aria-hidden="true"></i> 601 Po Lung Centre, 11 Wang Chiu Road, Kowloon Bay, Hong Kong</p>
    <p class="phone"> <i class="fa fa-phone" aria-hidden="true"></i> +852 2755 0971</p>
    <p class= "email"> <i class="fa fa-envelope" aria-hidden="true"></i> tomco@tomco.hk</p>
</div>
<?php get_footer();?>
        
     