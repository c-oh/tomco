<?php
/**
 * The template for displaying all pages.
 *
 * @package Tomco_Theme
 */
get_header(); ?>
    
 <div class="fullscreen-video">
         <div class= "fullscreen-text">
    <h3 class= "title"> Creative Tomco</h3>
    <h4> Your gateway to <br>  worldwide trading</h4>
    <a class= "text-button" id="explore-button">  explore</a>
    </div>
    <img src= "<?php echo get_stylesheet_directory_uri(); ?>/resources/graphics/phone-bg.jpg" class= "fullscreen-img">
    <video loop muted autoplay poster="<?php echo get_stylesheet_directory_uri(); ?>/resources/graphics/phone-bg.jpg" class="video-bg">
        <source src="<?php echo get_stylesheet_directory_uri(); ?>/resources/graphics/vid_bg.mp4" type="video/mp4">
    </video>
</div>


 <div class= "product-preview" id="products-preview">
        <div class= "title-header">    
    <h3 class="product-description">products we <span class"smaller-text">carry</span> </h3> 
    </div>
        <div class= "product-container">

            <a href=/household class="product-link household">
        <div class="product-grid">
            <h6> household</h6>
        </div>
        </a>
        
           <a href=/household class="product-link home-decor">
        <div class="product-grid">
            <h6> home decor</h6>
        </div>
        </a>
        
           <a href=/household class="product-link furniture">
        <div class="product-grid">
            <h6> furniture</h6>
        </div>
        </a>
        
           <a href=/household class="product-link seasonal">
        <div class="product-grid">
            <h6> seasonal</h6>
        </div>
        </a>

           <a href=/household class="product-link garden">
        <div class="product-grid">
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
    <div class= "skillsets-container"> 
        <div class= "square sq1"> 
            <div class="skillset-container"> 
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/graphics/badge.png" class="skill-img">
                <h5 class="skillset-title"><?php echo CFS()->get( 'skillset1' ) ?></h5>
                <p class="skillset-description"><?php echo CFS()->get( 'description1' ) ?></p>
            </div>
        </div>
        <div class= "square sq2"> 
            <div class="skillset-container"> 
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/graphics/hand.png" class="skill-img">
                <h5 class="skillset-title"><?php echo CFS()->get( 'skillset2' ) ?></h5>
                <p class="skillset-description"><?php echo CFS()->get( 'description2' ) ?></p>
            </div>
        </div>
        <div class= "square sq3"> 
           <div class="skillset-container"> 
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/graphics/shipping.png" class="skill-img">
                <h5 class="skillset-title"><?php echo CFS()->get( 'skillset4' ) ?></h5>
                <p class="skillset-description"><?php echo CFS()->get( 'description4' ) ?></p>
        </div>
        </div>
        </div>
    </div>

 <div class= "about-banner">   
    <h3 class="title-header">About  <span class"smaller-text">us</span></h3> 
      <p class= "about-p1"> <?php echo CFS()->get( 'about_us' ) ?> </p>
      <h6 class="readmore-button"> read more</h6>
      <p class= "about-readmore"> Established in 1986, Creative Tomco is a company that offers wide range of products with exceptional service. With head office in Hong Kong and a branch office in Shenzhen, this allows us to establish and maintain strong and convenient relationships with our product partners scattered throughout China.</p>

    </div>

<div class="information-counter">
         <div class= "title-header">    
    <h3 class="skill-description">We can <span class"smaller-text">offer</span></h3> 
    </div>
        <div class= "counter-container"> 
        <div class="counter">
           <h2 class="count"> 31</span>
            <h5 class="count-description">years of experience</h5>
        </div>
         <div class="counter">
            <h2 class= "count">250</h2>
            <h5 class="count-description">companies to chose from</h5>
        </div>
         <div class="counter">
            <h2 class= "count">32</h2>
            <h5 class="count-description">shipping ports worldwide</h5>
        </div>
        </div>
    </div>

    
    
<div class="journal">
                <?php
   $args = array( 'numberposts' => '4', 'order' => 'DESC','post_status' => 'publish'  );
   $recent_posts = get_posts( $args ); // returns an array of posts ?>
                    <?php foreach ( $recent_posts as $post ) : setup_postdata( $post ); ?>
                    <div class="post-list-info">
                        <div class= "img-container">
                        <?php the_post_thumbnail('category-thumb'); ?>
                        </div>
                        <div class="info-area">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class='title'>
                                <?php the_title();?> </a>

                            <p class= "date"> <?php the_date(); ?> </p>
                            <h6 class= "content"><?php the_excerpt();?> </h6>
                            <a href="<?php the_permalink(); ?>" class='read-entry-btn'> Read More</a>
                        </div>
                    </div>
                    <?php endforeach; wp_reset_postdata(); ?>
        </div>
   
<div class="contact-section">
    <div class= "contact-container"> 
 <div class= "title-header">    
    <h3 class="skill-description">contact  <span class"smaller-text">creative tomco</span></h3> 
    </div>
    <p class="address"> <i class="fa fa-map-marker" aria-hidden="true"></i> Unit 601 - Po Lung Centre, 11 Wang Chiu Road, Kowloon Bay, Hong Kong</p>
    <p class="phone"> <i class="fa fa-phone" aria-hidden="true"></i> +852 2755 0971</p>
    <p class= "email"> <i class="fa fa-envelope" aria-hidden="true"></i> tomco@tomco.hk</p>
    <?php echo do_shortcode( '[contact-form-7 id="46" title="Contact form 1"]' ); ?>
</div>

<div id "map-section"> 
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.757862129452!2d114.20686286414804!3d22.324995497641407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3404013354eaabe1%3A0x4ef179fd625aef54!2sPo+Lung+Centre%2C+11+Wang+Chiu+Rd%2C+Kowloon+Bay%2C+Hong+Kong!5e0!3m2!1sen!2sca!4v1490783393503"  width="600" height="700" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

</div>

<?php get_footer();?>
        
     