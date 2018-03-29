<?php 


class aanamintern_latest_post extends WP_Widget {


	public function __construct(){

		parent::__construct('aanaminternseo-latest-post', 'Aanaminternseo Latest Posts', array(
			'description' => 'Custom Latest Post Widget by Aanaminternseo Theme'
		));

	}


	public function widget($oneee, $twooo){ ?>

		<?php echo $oneee['before_widget']; ?>
		      <?php echo $oneee['before_title']; ?>Latest Posts<?php echo $oneee['after_title']; ?>
		     

		     <?php 
		     	$posts = new WP_Query(array(
		     		'post_type' => 'post',
		     		'posts_per_page' => $twooo['kotogula']
		     	));
		     ?>
		      <ul class="nav">

				<?php while($posts->have_posts()): $posts->the_post(); ?>
		        	<li>
		        		<a href="#"><?php the_title(); ?><i class="ti-arrow-right"></i>
							<?php if( $twooo['date'] == 'show' ) : ?>
		        				<span><?php the_time('d M, Y'); ?></span>
							<?php endif; ?>
		        		</a>
		        	</li>
		        <?php endwhile; ?>

		      </ul>
			
		      
		    
		    
		<?php echo $oneee['after_widget']; ?>

	<?php }


	public function form($showargg){ ?>

		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">Title: </label>
			<input type="text" id="<?php echo $this->get_field_id('title'); ?>" class="widefat" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $showargg['title']; ?>">
		</p>

		<p><label for="<?php echo $this->get_field_id('kotogula'); ?>">Number of posts to show:</label>
		<input class="tiny-text" id="<?php echo $this->get_field_id('kotogula'); ?>" name="<?php echo $this->get_field_name('kotogula'); ?>" step="1" min="1" value="<?php echo $showargg['kotogula']; ?>" size="3" type="number"></p>

		<?php 

			if($showargg['date'] == 'show'){
				$show = "checked='checked'";
			}else {
				$hide = "checked='checked'";
			}

		?>
		<p>
			<input type="radio" value="show" id="<?php echo $this->get_field_id('dateshow'); ?>" name="<?php echo $this->get_field_name('date'); ?>" 


				<?php if(isset($show)){echo $show;} ?>

				>
			<label for="<?php echo $this->get_field_id('dateshow'); ?>">Show Date</label>
		</p>
		<p>
			<input type="radio" value="hide" id="<?php echo $this->get_field_id('datehide'); ?>" name="<?php echo $this->get_field_name('date'); ?>" <?php if(isset($hide)){echo $hide;} ?>>
			<label for="<?php echo $this->get_field_id('datehide'); ?>">Hide Date</label>
		</p>



	<?php }



}


add_action('widgets_init', 'latest_post_widget');


function latest_post_widget(){
	register_widget('aanamintern_latest_post');
}
