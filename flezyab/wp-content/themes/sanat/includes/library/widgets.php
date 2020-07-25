<?php
///----footer widgets---
//About Us
class Bunch_About_us extends WP_Widget
{
	
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'Bunch_About_us', /* Name */esc_html__('Sanat About Us','sanat'), array( 'description' => esc_html__('Show the information about company', 'sanat' )) );
	}

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		
		echo wp_kses_post($before_widget);
		
		$footer_logo = ( $instance['footer_logo'] ) ? ( $instance['footer_logo'] ) : get_template_directory_uri() . '/images/footer-logo.png';
		?>
            <div class="logo-widget">
                <div class="logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($footer_logo); ?>" alt="<?php esc_attr_e( 'Footer Logo', 'sanat' ); ?>" /></a>
                </div>
                <div class="text"><?php echo wp_kses_post($instance['content']); ?></div>
                <div class="footer-about-address">
                    <ul>
                    <?php if ( $instance['phone'] ) :  ?>
						<li>
							<div class="icon-box dtc">
								<i class="flaticon-telephone"></i>
							</div>
							<div class="content dtc">
								<h3><?php echo wp_kses_post( $instance['phone'] );  ?></h3>
							</div>
						</li>
					<?php endif; ?>
					<?php if ( $instance['email'] ) :  ?> 
						
						<li>
							<div class="icon-box dtc">
								<i class="flaticon-interface"></i>
							</div>
							<div class="content dtc">
								<h3><?php echo wp_kses_post( $instance['email'] ); ?></h3>
							</div>
						</li>
						
					<?php endif; ?>
					</ul>
				</div>
            </div>
            
		<?php
		
		echo wp_kses_post($after_widget);
	}
	
	
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;

		$instance['footer_logo'] = strip_tags($new_instance['footer_logo']);
		$instance['content'] = $new_instance['content'];
		$instance['phone'] = $new_instance['phone'];
		$instance['email'] = $new_instance['email'];

		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$footer_logo = ($instance) ? esc_attr($instance['footer_logo']) : '';
		$content = ($instance) ? esc_attr($instance['content']) : '';
		$phone = ($instance) ? esc_attr($instance['phone']) : '';
		$email = ($instance) ? esc_attr($instance['email']) : '';
		?>
        
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('footer_logo')); ?>"><?php esc_html_e('Footer Logo Url:', 'sanat'); ?></label>
            <input placeholder="<?php esc_attr_e( 'Footer Logo', 'sanat' ); ?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('footer_logo')); ?>" name="<?php echo esc_attr($this->get_field_name('footer_logo')); ?>" type="text" value="<?php echo esc_attr($footer_logo); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('content')); ?>"><?php esc_html_e('Content:', 'sanat'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('content')); ?>" name="<?php echo esc_attr($this->get_field_name('content')); ?>" ><?php echo wp_kses_post($content); ?></textarea>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('phone')); ?>"><?php esc_html_e('Phone Number: ', 'sanat'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('phone')); ?>" name="<?php echo esc_attr($this->get_field_name('phone')); ?>" type="text" value="<?php echo esc_attr( $phone ); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('email')); ?>"><?php esc_html_e('Email ID: ', 'sanat'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('email')); ?>" name="<?php echo esc_attr($this->get_field_name('email')); ?>" type="text" value="<?php echo esc_attr( $email ); ?>" />
        </p>
                
		<?php 
	}
	
}

//Footer Services
class Bunch_services extends WP_Widget
{
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'Bunch_services', /* Name */esc_html__('Sanat Footer Services','sanat'), array( 'description' => esc_html__('Show the Footer Services', 'sanat' )) );
	}
 
	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		echo wp_kses_post($before_widget); ?>
		
        <!--Blog Category Widget-->
        <div class="links-widget">
            <?php echo wp_kses_post($before_title.$title.$after_title); ?>
            <ul class="footer-lists">
                <?php 
                    $args = array('post_type' => 'bunch_services', 'showposts'=>$instance['number']);
                    if( $instance['cat'] ) $args['tax_query'] = array(array('taxonomy' => 'services_category','field' => 'id','terms' => (array)$instance['cat']));
                    $this->posts($args);
				?>
            </ul>
        </div>
		
        <?php echo wp_kses_post($after_widget);
	}
 
 
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['number'] = $new_instance['number'];
		$instance['cat'] = $new_instance['cat'];
		
		return $instance;
	}
	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ( $instance ) ? esc_attr($instance['title']) : esc_html__('Services', 'sanat');
		$number = ( $instance ) ? esc_attr($instance['number']) : 6;
		$cat = ( $instance ) ? esc_attr($instance['cat']) : '';?>
		
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title: ', 'sanat'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e('Number of posts: ', 'sanat'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr( $number ); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('cat')); ?>"><?php esc_html_e('Category', 'sanat'); ?></label>
            <?php wp_dropdown_categories( array('show_option_all'=>esc_html__('All Categories', 'sanat'), 'selected'=>$cat, 'taxonomy' => 'services_category', 'class'=>'widefat', 'name'=>$this->get_field_name('cat')) ); ?>
        </p>
            
		<?php 
	}
	
	function posts($args)
	{
		$query = new WP_Query($args);
		if( $query->have_posts() ):?>
        
           	<!-- Title -->
            <?php while( $query->have_posts() ): $query->the_post(); 
				global $post ; 
				$service_meta = _WSH()->get_meta();
			?>
            <li><a href="<?php echo esc_url(get_the_permalink(get_the_id())); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
                
        <?php endif;
		wp_reset_postdata();
    }
}

//Latest Posts 
class Bunch_Latest_Posts extends WP_Widget
{
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'Bunch_Latest_Posts', /* Name */esc_html__('Sanat Latest Posts','sanat'), array( 'description' => esc_html__('Show the Latest Posts', 'sanat' )) );
	}
 

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		echo wp_kses_post($before_widget); ?>
		
        <!-- Latest News -->
        <div class="news-widget">
            <?php echo wp_kses_post($before_title.$title.$after_title); ?>
            <div class="widget-content">
                <?php $query_string = 'posts_per_page='.$instance['number'];
					if( $instance['cat'] ) $query_string .= '&cat='.$instance['cat'];
					$this->posts($query_string);
				?>
            </div>
        </div>
        
		<?php echo wp_kses_post($after_widget);
	}
 
 
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['number'] = $new_instance['number'];
		$instance['cat'] = $new_instance['cat'];
		
		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ( $instance ) ? esc_attr($instance['title']) : esc_html__('Latest Posts', 'sanat');
		$number = ( $instance ) ? esc_attr($instance['number']) : 2;
		$cat = ( $instance ) ? esc_attr($instance['cat']) : '';?>
			
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title: ', 'sanat'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e('No. of Posts:', 'sanat'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr( $number ); ?>" />
        </p>
       
    	<p>
            <label for="<?php echo esc_attr($this->get_field_id('cat')); ?>"><?php esc_html_e('Category', 'sanat'); ?></label>
            <?php wp_dropdown_categories( array('show_option_all'=>esc_html__('All Categories', 'sanat'), 'selected'=>$cat, 'class'=>'widefat', 'name'=>$this->get_field_name('cat')) ); ?>
        </p>
            
		<?php 
	}
	
	function posts($query_string)
	{
		$query = new WP_Query($query_string);
		if( $query->have_posts() ):?>
        
           	<!-- Title -->
			<?php while( $query->have_posts() ): $query->the_post(); ?>
            <article class="post">
                <figure class="post-thumb"><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_post_thumbnail('sanat_90x90'); ?></a></figure>
                <div class="text"><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php echo wp_trim_words( get_the_title(), 6, '...' );?></a></div>
                <ul class="post-info">
                    <li><span class="icon fa fa-calendar"></span><?php echo get_the_date(''); ?></li>
                    <li><span class="icon fa fa-comment-o"></span><?php comments_number( wp_kses_post(__('0' , 'sanat')), wp_kses_post(__('1' , 'sanat')), wp_kses_post(__('%' , 'sanat'))); ?></li>
                </ul>
            </article>
            <?php endwhile; ?>
            
        <?php endif;
		wp_reset_postdata();
    }
}

//Subscribe Us
class Bunch_Subscribe_Us extends WP_Widget
{
	
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'Bunch_Subscribe_Us', /* Name */esc_html__('Sanat Subscribe Us','sanat'), array( 'description' => esc_html__('Show the Subscribe Us Form', 'sanat' )) );
	}

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		echo wp_kses_post($before_widget);?>
      		
			<div class="subscribe-widget">
                <?php echo wp_kses_post($before_title.$title.$after_title); ?>
                <div class="widget-content">
                    <div class="text"><?php echo wp_kses_post($instance['content']); ?></div>
                    <div class="subscribe-form">
                        <form method="get" action="http://feedburner.google.com/fb/a/mailverify" accept-charset="utf-8">
                            <div class="form-group">
                                <input type="hidden" id="uri2" name="uri" value="<?php echo wp_kses_post($instance['id']); ?>">
                                <input type="email" name="email" value="" placeholder="<?php esc_attr_e('Email Address', 'sanat'); ?>" required>
                                <button type="submit" class="theme-btn"><span class="fa fa-send"></span></button>
                            </div>
                        </form>
                    </div>
                    <?php if( $instance['show'] ): ?>
                    <ul class="social-icon-two">
                        <li class="follow"><?php esc_html_e('Follow us :', 'sanat'); ?></li>
                        <?php echo wp_kses_post(sanat_get_social_icons()); ?>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
            
		<?php
		
		echo wp_kses_post($after_widget);
	}
	
	
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;

		$instance['title'] = strip_tags($new_instance['title']);
		$instance['content'] = $new_instance['content'];
		$instance['id'] = $new_instance['id'];
		$instance['show'] = $new_instance['show'];

		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ($instance) ? esc_attr($instance['title']) : 'Subscribe Us';
		$content = ($instance) ? esc_attr($instance['content']) : '';
		$id = ($instance) ? esc_attr($instance['id']) : '';
		$show = ( $instance ) ? esc_attr($instance['show']) : '';?>
        
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'sanat'); ?></label>
            <input placeholder="<?php esc_attr_e('Subscribe Us', 'sanat');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('id')); ?>"><?php esc_html_e('FeedBurner ID:', 'sanat'); ?></label>
            <input placeholder="<?php esc_attr_e('themeforest', 'sanat');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('id')); ?>" name="<?php echo esc_attr($this->get_field_name('id')); ?>" type="text" value="<?php echo esc_attr($id); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('content')); ?>"><?php esc_html_e('Content:', 'sanat'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('content')); ?>" name="<?php echo esc_attr($this->get_field_name('content')); ?>" ><?php echo wp_kses_post($content); ?></textarea>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('show')); ?>"><?php esc_html_e('Show Social Icons:', 'sanat'); ?></label>
			<?php $selected = ( $show ) ? ' checked="checked"' : ''; ?>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('show')); ?>"<?php echo esc_attr($selected); ?> name="<?php echo esc_attr($this->get_field_name('show')); ?>" type="checkbox" value="true" />
        </p>        
                
		<?php 
	}
	
}


///----Dynamic Sidebar widgets---
//Recent Services
class Bunch_services_sidebar extends WP_Widget
{
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'Bunch_services_sidebar', /* Name */esc_html__('Sanat Services','sanat'), array( 'description' => esc_html__('Show the Services Sidebar', 'sanat' )) );
	}
 
	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		
		echo wp_kses_post($before_widget); ?>
		
        <!--Blog Category Widget-->
        <div class="sidebar-blog-category">
            <ul class="blog-cat">
                <?php 
                    $args = array('post_type' => 'bunch_services', 'showposts'=>$instance['number']);
                    if( $instance['cat'] ) $args['tax_query'] = array(array('taxonomy' => 'services_category','field' => 'id','terms' => (array)$instance['cat']));
                    $this->posts($args);
				?>
            </ul>
        </div>
		
        <?php echo wp_kses_post($after_widget);
	}
 
 
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['number'] = $new_instance['number'];
		$instance['cat'] = $new_instance['cat'];
		
		return $instance;
	}
	/** @see WP_Widget::form */
	function form($instance)
	{
		$number = ( $instance ) ? esc_attr($instance['number']) : 6;
		$cat = ( $instance ) ? esc_attr($instance['cat']) : '';?>
		
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e('Number of posts: ', 'sanat'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr( $number ); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('cat')); ?>"><?php esc_html_e('Category', 'sanat'); ?></label>
            <?php wp_dropdown_categories( array('show_option_all'=>esc_html__('All Categories', 'sanat'), 'selected'=>$cat, 'taxonomy' => 'services_category', 'class'=>'widefat', 'name'=>$this->get_field_name('cat')) ); ?>
        </p>
            
		<?php 
	}
	
	function posts($args)
	{
		$query = new WP_Query($args);
		if( $query->have_posts() ):?>
        
           	<!-- Title -->
            <?php $curr_post = get_the_id(); while( $query->have_posts() ): $query->the_post();
				global $post;
				$post_name = $post->ID;
			?>
            <li class="<?php if($post_name == $curr_post) echo 'active'; ?>"><a href="<?php echo esc_url(get_the_permalink(get_the_id())); ?>"><?php the_title(); ?></a></li>
            <?php  endwhile; ?>
                
        <?php endif;
		wp_reset_postdata();
    }
}

//Our Brochures
class Bunch_Brochures extends WP_Widget
{
	
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'Bunch_Brochures', /* Name */esc_html__('Global Industry Our Brochures','sanat'), array( 'description' => esc_html__('Show the info Our Brochures', 'sanat' )) );
	}
	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		
		echo wp_kses_post($before_widget);?>
      		
            <!--Brochure-->
            <div class="brochure-widget">
                
                <div class="brochure-box">
                    <div class="inner">
                        <span class="icon fa fa-file-pdf-o"></span>
                        <div class="text"><?php esc_html_e('Download Brochures', 'sanat'); ?></div>
                    </div>
                    <a href="<?php echo esc_url($instance['pdf']); ?>" class="overlay-link"></a>
                </div>
                
                <div class="brochure-box">
                    <div class="inner">
                        <span class="icon fa fa-file-powerpoint-o"></span>
                        <div class="text"><?php esc_html_e('Company Presentation', 'sanat'); ?></div>
                    </div>
                    <a href="<?php echo esc_url($instance['word']); ?>" class="overlay-link"></a>
                </div>
                
            </div>
		<?php
		
		echo wp_kses_post($after_widget);
	}
	
	
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['pdf'] = $new_instance['pdf'];
		$instance['word'] = $new_instance['word'];
		return $instance;
	}
	/** @see WP_Widget::form */
	function form($instance)
	{
		$pdf = ( $instance ) ? esc_attr($instance['pdf']) : '#';
		$word = ($instance) ? esc_attr($instance['word']) : '#';
		?>
        
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('pdf')); ?>"><?php esc_html_e('PDF Link:', 'sanat'); ?></label>
            <input placeholder="<?php esc_attr_e('PDF link here', 'sanat');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('pdf')); ?>" name="<?php echo esc_attr($this->get_field_name('pdf')); ?>" type="text" value="<?php echo esc_attr($pdf); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('word')); ?>"><?php esc_html_e('Work Doc Link:', 'sanat'); ?></label>
            <input placeholder="<?php esc_attr_e('Word link here', 'sanat');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('word')); ?>" name="<?php echo esc_attr($this->get_field_name('word')); ?>" type="text" value="<?php echo esc_attr($word); ?>" />
        </p>
                
		<?php 
	}
	
}


///----Blog widgets---
//popular Post
class Bunch_popular_Post extends WP_Widget
{
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'Bunch_popular_Post', /* Name */esc_html__('Global Industry Popular Post','sanat'), array( 'description' => esc_html__('Show the Popular Post', 'sanat' )) );
	}
 

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		echo wp_kses_post($before_widget); ?>
		
        <!-- Popular Posts -->
        <div class="popular-posts">
            <?php echo wp_kses_post($before_title.$title.$after_title); ?>
            
			<?php $query_string = 'posts_per_page='.$instance['number'];
				if( $instance['cat'] ) $query_string .= '&cat='.$instance['cat'];
				$this->posts($query_string);
			?>
        </div>
        
		<?php echo wp_kses_post($after_widget);
	}
 
 
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['number'] = $new_instance['number'];
		$instance['cat'] = $new_instance['cat'];
		
		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ( $instance ) ? esc_attr($instance['title']) : esc_html__('Popular Post', 'sanat');
		$number = ( $instance ) ? esc_attr($instance['number']) : 3;
		$cat = ( $instance ) ? esc_attr($instance['cat']) : '';?>
			
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title: ', 'sanat'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e('No. of Posts:', 'sanat'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr( $number ); ?>" />
        </p>
       
    	<p>
            <label for="<?php echo esc_attr($this->get_field_id('cat')); ?>"><?php esc_html_e('Category', 'sanat'); ?></label>
            <?php wp_dropdown_categories( array('show_option_all'=>esc_html__('All Categories', 'sanat'), 'selected'=>$cat, 'class'=>'widefat', 'name'=>$this->get_field_name('cat')) ); ?>
        </p>
            
		<?php 
	}
	
	function posts($query_string)
	{
		$query = new WP_Query($query_string);
		if( $query->have_posts() ):?>
        
           	<!-- Title -->
			<?php while( $query->have_posts() ): $query->the_post(); ?>
            <article class="post">
                <figure class="post-thumb"><?php the_post_thumbnail('sanat_100x80', array('class' => 'img-responsive')); ?><a href="<?php echo esc_url(get_permalink(get_the_id()));?>" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
                <div class="text"><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php echo wp_trim_words( get_the_title(), 7, '...' );?></a></div>
                <div class="post-info"><?php echo get_the_date(''); ?></div>
            </article>
            <?php endwhile; ?>
            
        <?php endif;
		wp_reset_postdata();
    }
}


