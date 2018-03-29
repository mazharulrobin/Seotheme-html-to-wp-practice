<?php 

/*
Template Name: Welcome Template
*/

get_header();?>
<!-- ==================================================
        2.*Hero area start
=================================================== -->
<section class="hero_area">
    <div class="hero_slider">
	
	
	<?php 
	global $post;
	$args=array('posts_per_page'=>3, 'post_type'=>'slide');
	$myposts=get_posts($args);
	foreach($myposts as $post) : setup_postdata($post); ?>
	
	<?php 
	    $slide_bg = wp_get_attachment_image_src( get_post_thumbnail_id ( $post->ID ), 'slide-bg' );
		$slide_link=get_post_meta($post->ID, 'slide_link',true);
	?>
	
	
	        <div class="hero_slider_bg" style="background-image:url(<?php echo $slide_bg[0]; ?>)">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                       <div class="hero_table">
                           <div class="hero_table_cell">
                                <div class="slider_text">
                                    <h2><?php the_title(); ?></h2>
                                    <p> <?php the_excerpt(); ?> </p>
                                    <div class="slider_btn">
									<?php if($slide_link) : ?>
                                        <a href="<?php echo $slide_link; ?>" class="slider_btn_one">Read more</a>
									<?php endif; ?>	
                                    </div>
                                </div>
                           </div>
                       </div>
                    </div><!-- col-xs-12 end -->
                </div>
            </div>
        </div><!-- item two end -->  
	
	
	<?php endforeach; ?>
	

    </div>
</section>
<!-- HeroSlider area end -->

<!-- ==================================================
        3.*Service_area start
=================================================== -->



<section id="service" class="service_area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section_title wow">
                    <h2>our <span>service</span></h2>
                    <p>lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam.</p>
                </div>
            </div>
        </div><!-- row end --> 
        <div class="row">
		
		
		
		
		        	<?php 
						global $post;
						$argss=array('posts_per_page'=>5, 'post_type'=>'Services');
						$myposts=get_posts($argss);
						foreach($myposts as $post) : setup_postdata($post); ?>
						
						<?php 
							$Service_img = wp_get_attachment_image_src( get_post_thumbnail_id ( $post->ID ), 'service-img' );
							$singleservice_link=get_post_meta($post->ID, 'singleservice_link',true);
	                ?>
		
                <div class="col-sm-4">
                    <div class="single_service">
                        <?php the_post_thumbnail('service-img');?>
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php echo $singleservice_link; ?>">Read more</a>
                    </div>
                </div>
				
				<?php endforeach; ?>	
				
        </div><!-- row end --> 
    </div>
</section>
<!-- Service_area end -->


<!-- ==================================================
        .5*Business_area start
=================================================== -->
<section id="business" class="business_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="business_text">
                    <h3>Grow your Business!</h3>
                    <p>Place your Business at the top of search Engines and Expand.</p>
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


<!-- ==================================================
        .9*solutions_area start
=================================================== -->
<section id="latest_news" class="latest_news_area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section_title">
                    <h2>LATEST <span>NEWS</span></h2>
                    <p>lorem ipsum dolor sit amet, consectetuer  adipiscing elit, sed diam.</p>
                </div>
            </div>
        </div><!--row end-->
        <div class="row">
		
		<?php 
			$post_contents= new WP_Query(array(
				'post_type' => 'post',
				'posts_per_page' => 3
			));
		
		?>
		
		<?php while($post_contents -> have_posts()) : $post_contents ->  the_post(); ?>
		
		
            <div class="col-sm-4">
                <article class="single_post">
                    <div class="post_thumb">
                        <?php the_post_thumbnail();?>
                    </div>
                    <div class="post_title">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                        <h4>By <?php the_author(); ?> At <?php the_time ('d F Y I g:i a');?></h4>
                    </div>
                    <div class="post_text">
                        <?php echo wp_trim_words(get_the_content(), 30, ''); ?>
                        <a href="<?php the_permalink();?>">Read more</a>
                    </div>
                </article>
            </div>
			
	    <?php endwhile; ?>
			
        
    </div><!-- end content -->
		
		
		
		
		
		
		
		
        </div><!-- row end -->
    </div><!-- container end -->
</section> 

<?php get_footer();?>