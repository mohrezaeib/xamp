<!--Faq Section-->
<section class="faq-section">
    <div class="auto-container">
        
        <!--Product Tabs-->
        <div class="prod-tabs tabs-box">
            <div class="row clearfix">
                <!--Column-->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <!--Tab Btns-->
                    <ul class="tab-btns tab-buttons clearfix">
                        <?php foreach( $atts['faq_tab'] as $key => $item ):?>
                        <li data-tab="#prod-market<?php echo esc_attr($key);?>" class="tab-btn <?php if($key == 1) echo 'active-btn';?>"><span><?php echo wp_kses_post($item->list_title);?></span></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <!--Column-->
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <!--Tabs Container-->
                    <div class="tabs-content">
                    	<?php foreach( $atts['faq_tab'] as $keys => $item ):
							$count = 0;
							$nums = $item->num;
							$sorts = $item->sort;
							$orders = $item->order;
							$cats = $item->cat;
							$query_args = array('post_type' => 'bunch_faqs' , 'showposts' => $nums , 'order_by' => $sorts , 'order' => $orders);
							if( $cats ) $query_args['faqs_category'] = $cats;
							$query = new WP_Query($query_args) ;
						?>
                        <!--Tab -->
                        <div class="tab <?php if($keys == 1) echo 'active-tab';?>" id="prod-market<?php echo esc_attr($keys);?>">
                            <div class="content">
                            	
                                <!--Accordian Box-->
                                <ul class="accordion-box">
                                    
                                    <?php while($query->have_posts()): $query->the_post();
										global $post; 
										$faq_meta = _WSH()->get_meta();
									?>
                                    <!--Block-->
                                    <li class="accordion block <?php if($count == 0) echo 'active-block';?>">
                                        <div class="acc-btn <?php if($count == 0) echo 'active';?>"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div><?php the_title();?></div>
                                        <div class="acc-content <?php if($count == 0) echo 'current';?>">
                                            <div class="content">
                                                <div class="text"><?php echo sanat_trim(get_the_content(), $item->text_limit);?></div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php $count++; endwhile;?>
                                </ul>
                            
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!--End Faq Section-->