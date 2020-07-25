<!--News Block Three-->
<div class="news-block-three">
    <div class="inner-box">
        <?php if(has_post_thumbnail()): ?>
            <div class="image">
                <?php the_post_thumbnail('sanat_1170x400'); ?>
            </div>
        <?php endif; ?>
        <div class="lower-content">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <ul class="post-meta">
                <li><span class="icon fa fa-comments-o"></span><?php comments_number( wp_kses_post(__('0 Comments' , 'sanat')), wp_kses_post(__('1 Comment' , 'sanat')), wp_kses_post(__('% Comments' , 'sanat'))); ?></li>
                <li><span class="icon fa fa-user"></span><?php the_author(); ?></li>
                <li><span class="icon fa fa-calendar"></span><?php echo get_the_date(''); ?></li>
            </ul>
            <div class="text"><?php the_excerpt();?></div>
            <a href="<?php echo esc_url(get_the_permalink(get_the_id())); ?>" class="theme-btn btn-style-three"><?php esc_html_e('Read More', 'sanat'); ?></a>
        </div>
    </div>
</div>