<?php

add_theme_support( 'post-formats', array( 'gallery', 'quote', 'video', 'aside', 'image', 'link' ) );

add_theme_support('post-thumbnails');
add_image_size('slider-bg', 1000, 668, true);

add_image_size('service-img', 51, 51, true);