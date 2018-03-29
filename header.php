<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php wp_title( '|', true, 'right' ); ?></title>
	
	
	
	
    
    <!-- =================================================
                 ***CSS Files***
    ================================================== -->
    
    <!-- ================ Font-awsome Css ============== -->
    <link rel="shortcut icon" type="<?php echo get_template_directory_uri(); ?>/images/png" href="images/home/fevicon.png">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head(); ?> 
</head>

<body <?php body_class(); ?> >
    <div id="home" class="home_page">
    
<!-- ======================================================
            1.*Header area start
======================================================== -->
<header class="header_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <div class="logo">
                    <a href="<?php bloginfo('home');?>"><img src="<?php global $aanamintseo; echo $aanamintseo['logo-uploader']['url']; ?>" height="<?php echo $aanamintseo['logo-uploader']['height'];?>" alt="seo"></a>
                </div>
            </div> <!-- col-sm-2 end -->                    
            <div class="col-sm-10">
                <div class="mainmenu">
                    <nav>
					
					<?php wp_nav_menu(array(
						'theme_location'=> 'main_menu',
						'menu_id'=> 'nav',
						'fallback_cb'=> 'aanaminternseo_theme_default_menu',
					));?>
					
					
                    </nav>
                </div><!-- mainmenu end -->     
            </div> <!-- col-sm-10 end -->    
        </div> <!-- row end -->
    </div> <!-- container end -->
    <section class="header_top_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <div class="header_top_social_icon">
                    <a href="#"><i class="fa fa-facebook"></i></a>    
                    <a href="#"><i class="fa fa-twitter"></i></a>    
                    <a href="#"><i class="fa fa-skype"></i></a>    
                    <a href="#"><i class="fa fa-linkedin"></i></a>    
                    <a href="#"><i class="fa fa-pinterest"></i></a>    
                </div>
            </div><!-- col-sm-8 end -->
            <div class="col-sm-6 col-xs-12">
                <div class="header_right_contact">
                    <a href="" class="header_top_padding_left"><i class="fa fa-phone"></i><?php global $aanamintseo; echo $aanamintseo['htphone'] ?></a>
                    <a href=""><i class="fa fa-envelope"></i><?php global $aanamintseo; echo $aanamintseo['htemail'] ?></a>
                </div>
            </div>
        </div><!-- row end -->
    </div><!-- container end -->
    </section><!-- header_top end -->
    </header><!-- header end -->