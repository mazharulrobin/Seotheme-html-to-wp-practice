
<!-- ==================================================
        10.*Footer_area start
===================================================== -->
<footer class="footer">
    <div class="footer_top_area section_padding footer_top clearfix">
        <div class="container">
            <div class="row ">
			
			    <?php dynamic_sidebar('footer-left-widget'); ?>
                <!-- <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="widget widget_text">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home/footer_logo.png" alt="">
                        <p>Lorem ipsum dolor sit amet, consecte tuer adipscing elit, sed diam nonumm yes nibh esmod ticidunt ut laoreet do lore magna aliquam erat volutpat.</p>
                    </div>
                </div> -->
				
				
				<?php dynamic_sidebar('footer-center-widget'); ?>
                <!-- <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="widget footer_top_menu">
                        <h2>Service</h2>
                        <ul>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="">Seo Service</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="">Seo Service</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="">Email Marketing</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="">Web Developing</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="">Graphic Design</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="">web Design</a></li>
                        </ul>
                    </div>
                </div> -->
				
				<?php dynamic_sidebar('footer-right-widget'); ?>
                <!-- <div class="col-md-2 col-sm-6 col-xs-6">
                    <div class="widget footer_top_menu">
                        <h2>Quick Link</h2>
                        <ul>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="">about</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="">service</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="">blog</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="">pages</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="">contact</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="">FAQ</a></li>
                        </ul>
                    </div>
                </div>  -->
				
				
				
            </div><!-- row end -->
        </div><!-- container end -->
    </div><!-- Footer_Top_area end -->
    <div class="footer_bottom_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer_bottom text-center">
                        <p><?php global $aanamintseo; echo $aanamintseo['copyright'] ?></p>
                    </div>
                </div>
            </div><!-- row end -->
        </div><!-- container end -->
    </div><!-- Footer_bottom_area end -->
</footer>
<!-- Footer area end -->

    </div>
	<?php wp_footer(); ?> 
</body>
</html>