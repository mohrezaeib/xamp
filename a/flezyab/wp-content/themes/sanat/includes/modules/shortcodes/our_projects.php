<?php 
$paged = get_query_var('paged');
$args = array('post_type' => 'bunch_projects', 'showposts'=>$num, 'orderby'=>$sort, 'order'=>$order, 'paged'=>$paged);
$terms_array = explode(",",$exclude_cats);
if($exclude_cats) $args['tax_query'] = array(array('taxonomy' => 'projects_category','field' => 'id','terms' => $terms_array,'operator' => 'NOT IN',));
$query = new WP_Query($args);

$t = $GLOBALS['_bunch_base'];

$data_filtration = '';
$data_posts = '';
?>

<?php if( $query->have_posts() ):

ob_start();?>

	<?php $count = 0; 
	$fliteration = array();?>
	<?php while( $query->have_posts() ): $query->the_post();
		global  $post;
		$meta = get_post_meta( get_the_id(), '_bunch_projects_meta', true );//printr($meta);
		$meta1 = _WSH()->get_meta();
		$post_terms = get_the_terms( get_the_id(), 'projects_category');// printr($post_terms); exit();
		foreach( (array)$post_terms as $pos_term ) $fliteration[$pos_term->term_id] = $pos_term;
		$temp_category = get_the_term_list(get_the_id(), 'projects_category', '', ', ');
	?>
		<?php $post_terms = wp_get_post_terms( get_the_id(), 'projects_category'); 
		$term_slug = '';
		if( $post_terms ) foreach( $post_terms as $p_term ) $term_slug .= $p_term->slug.' ';?>		
           
           <?php 
				$post_thumbnail_id = get_post_thumbnail_id($post->ID);
				$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
			?>
           
		    <!--Default Portfolio Item-->
            <div class="default-portfolio-item all masonry-item <?php echo esc_attr($term_slug); ?> <?php if(sanat_set($meta1, 'extra_width') == 'extra_width') echo 'big-column'; else echo 'small-column'?>">
                <div class="inner-box">
                    <figure class="image-box">
                    	<?php if(sanat_set($meta1, 'extra_width') == 'extra_width') 
								$image_size = 'sanat_762x300'; 
							  elseif(sanat_set($meta1, 'extra_height') == 'extra_height')
								$image_size = 'sanat_376x610'; 
							  else
								$image_size = 'sanat_376x300'; 
							  the_post_thumbnail($image_size);
						?>
                    </figure>
                    <!--Overlay Box-->
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <a href="<?php echo esc_url(get_the_permalink(get_the_id()));?>" class="link"><span class="fa fa-link"></span></a>
                                <a href="<?php echo esc_url($post_thumbnail_url); ?>" class="lightbox-image link" data-fancybox="images" data-caption="" title="<?php esc_attr_e('Image', 'sanat'); ?>"><span class="icon fa fa-search"></span></a>
                                <h3><a href="<?php echo esc_url(get_the_permalink(get_the_id()));?>"><?php the_title(); ?></a></h3>
                                <?php $term_list = wp_get_post_terms(get_the_id(), 'projects_category', array("fields" => "names")); ?>
								<div class="tags"><?php echo implode( ', ', (array)$term_list );?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
<?php endwhile;?>
  
<?php wp_reset_postdata();
$data_posts = ob_get_contents();
ob_end_clean();

endif ;
ob_start();?>	 

<?php $terms = get_terms(array('projects_category')); ?>

<!--Gallery Section-->
<section class="gallery-section">
    <div class="auto-container">
        <div class="sec-title centered">
            <h2><?php echo wp_kses_post($title); ?></h2>
            <div class="separater"></div>
        </div>
    </div>
    <!--Sortable Masonry-->
    <div class="sortable-masonry">
        <div class="auto-container">
            <!--Filter-->
            <div class="filters">
                
                <ul class="filter-tabs filter-btns clearfix">
                    <li class="active filter" data-role="button" data-filter=".all"><?php esc_attr_e('View All', 'sanat');?></li>
                    <?php foreach( $fliteration as $t ): ?>
                    <li class="filter" data-role="button" data-filter=".<?php echo esc_attr(sanat_set( $t, 'slug' )); ?>"><?php echo wp_kses_post(sanat_set( $t, 'name')); ?></li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
        <div class="items-container row clearfix">
            <?php echo wp_kses_post($data_posts); ?>
        </div>
    </div>
</section>
<!--End Gallery Section-->