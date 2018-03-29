<?php get_header();?>

<section id="single_service_page" class="single_service_page_area section_padding">
    <div class="container">
        <div class="row">
            
			<?php get_sidebar();?>
			
            <div class="col-sm-9 padding_left">
                <div class="single_blog_content">
				
				
				
				
                <?php while(have_posts()) : the_post();?>
					<?php get_template_part('contentformat/content', 'page');?>
				<?php endwhile; ?>
				
				
				
				
                </div>
                <div class="tag_share fix">
                    <div class="tags">
                        <p><span></span> <?php the_tags(); ?></p>
                    </div>
                </div>

				
				
				
				
				
            <div class="single_blog_comments">
               <h4>comments</h4>
				
				<?php comments_template(); ?>
				
            </div>
				
        </div>
    </div>
 </div>
</section>

<?php get_footer(); ?>