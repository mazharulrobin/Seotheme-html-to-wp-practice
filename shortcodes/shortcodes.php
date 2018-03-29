<?php


//hero slider shortcode


function aanaminternseo_home_slider(){
	
	
	
	ob_start();?>
	
	<section class="hero_area">
    <div class="hero_slider">
	
	<?php 
	  $slider = new WP_Query(array(
		'post_type'=> 'slide',
		'posts_per_page'=> 3
	  ));
	  while($slider->have_posts()): $slider->the_post();
	
	?>
	
	
	
        <div class="hero_slider_bg" style="background-image:url(<?php the_post_thumbnail(); ?>)">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                       <div class="hero_table">
                           <div class="hero_table_cell">
                                <div class="slider_text">
                                    <h2><?php the_title();?></h2>
                                    <p><?php echo get_post_meta(get_the_id(), '_slider-subtitle',true ); ?></p>
                                    <div class="slider_btn">
                                        <a href="<?php the_permalink();?>" class="slider_btn_one">Read more</a>
                                    </div>
                                </div>
                           </div>
                       </div>
                    </div><!-- col-xs-12 end -->
                </div>
            </div>
        </div> <!-- item one end -->    
		
		<?php endwhile; ?>
        
    </div>
</section>
	
	
	<?php return ob_get_clean();
	
	
	
	
}

add_shortcode( 'home-slider', aanaminternseo_home_slider );



//solution shortcode


function aanaminternseo_home_solution($attr, $content = null){
	
	$attributes = extract ( shortcode_atts ( array (
	
		'title' => 'Best Solutions For Your Business',
	), $attr ) );
	
	
	
	ob_start();?>
	
	<section id="solution" class="solutions_area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <div class="solutions_text">
                    <h2><?php echo $title; ?></h2>
                    <p><?php echo do_shortcode($content); ?></p>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="solution_img">
                    <img src="images/home/bac3.jpg" alt="">
                </div>
            </div>
        </div><!-- row end -->
    </div><!-- container end -->
</section>
	
	
	<?php return ob_get_clean();
	
	
	
	
}

add_shortcode( 'home-solution', aanaminternseo_home_solution );






//aanaminternseo title shortcode


function aanaminternseo_title_shortcode($attr, $content = null){
	
	$attributes = extract ( shortcode_atts ( array (
	
		'title' => 'Grow your Business!',
		'subtitle' => 'Place your Business at the top of search Engines and Expand.'
	), $attr ) );
	
	ob_start();?>
	
	<section id="business" class="business_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="business_text">
                    <h3><?php echo $title; ?></h3>
                    <p><?php echo $subtitle; ?></p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="business_btn">
                    <a href="contact.html" class="effect1">Get Started</a>
                </div>
            </div>
        </div><!-- row end -->
    </div><!-- container end -->
</section>
	
	
	<?php return ob_get_clean();
	
	
	
	
}

add_shortcode( 'aiseo-title', aanaminternseo_title_shortcode );
