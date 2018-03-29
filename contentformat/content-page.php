                 <article>
                    <div class="blog_post_thumb">
                        <?php the_post_thumbnail();?>
                    </div>
                    <div class="blog_post_title">
                        <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                        <h4>By <?php the_author(); ?> at <?php the_time ('d F Y I g:i a');?></h4>
                    </div>
                    <div class="blog_post_text">
                        <p><?php the_content();?></p>
                    </div>
                </article>