<?php get_header();?>
<body>
    <!-- preloader end-->
    <div id="about_page" class="about_page">
    
<!-- ======================================================
            1.*Header area start
======================================================== -->
<header class="header_area">
    <div class="container">
	   <div class="col-md-12">
	      <?php if(have_posts()) : ?> <?php while(have_posts()) : the_post(); ?>
		  
		  <h2><?php the_title();?></h2>
          <?php the_content();?>

       <?php endwhile;?>

       <?php else: ?>
         <h2>404 Not Found</h2>
       <?php endif; ?>		 
			
			
	   </div>
    </div> <!-- container end -->
    </header><!-- header end -->

<!--==================================================
    .*Team_area start
===================================================-->
        
 <?php get_footer();?>