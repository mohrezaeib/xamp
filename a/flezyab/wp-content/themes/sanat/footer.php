<?php $options = get_option('sanat'.'_theme_options');
	$copyright = sanat_set( $options, 'copyright' );
    $copyright = ( $copyright ) ? $copyright : '&copy; Copyright 2018. All Rights Reserved. Designed by Expert_Themes';
?>
	
	<div class="clearfix"></div>
	
	<!--Main Footer-->
    <footer class="main-footer">
    	
		<?php if ( is_active_sidebar( 'footer-sidebar' ) ) : ?>
			<?php if(!(sanat_set($options, 'hide_upper_footer'))):?>
        		<div class="auto-container">
        	
                    <!--Widgets Section-->
                    <div class="widgets-section">
                        <div class="row clearfix">
                            <?php dynamic_sidebar( 'footer-sidebar' ); ?> 
                        </div>
                    </div>
                
        		</div>
        	<?php endif;?>
        <?php endif; ?>
        
        <?php if(!(sanat_set($options, 'hide_bottom_footer'))):?>
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="copyright"><?php echo wp_kses_post( $copyright );?></div>
                </div>
            </div>
        <?php endif;?>
    </footer>
    <!--End Main Footer-->
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-arrow-up"></span></div>
<?php wp_footer(); ?>
</body>
</html>