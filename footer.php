<?php $current_options = wp_parse_args(get_option('busiprof_theme_options', array()), theme_setup_data()); ?>
<!-- Footer Section -->
<<<<<<< HEAD
<footer class="footer-sidebar">	
	<!-- Footer Widgets -->	
	<div class="container">		
		<div class="row">		
			<?php if ( is_active_sidebar( 'footer-widget-area' ) )
					{ 
						dynamic_sidebar( 'footer-widget-area' );  
					} 
			?>
		</div>
	</div>
	<!-- /End of Footer Widgets -->	
	
	<!-- Copyrights -->	
	<div class="site-info">
		<div class="container">
			<div class="row">
				
				<div class="col-md-3">
					<p>
						<a href="http://www.miitbeian.gov.cn/" target="_blank">闽ICP备18008699</a>
					</p>
				</div>
				
				<div class="col-md-7">
				<?php 
				if( $current_options['footer_copyright_text'] != '' ) { ?>
				<?php echo $current_options['footer_copyright_text']; ?>
				<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Copyrights -->	
	
=======
<footer class="footer-sidebar">
    <!-- Footer Widgets -->
    <div class="container">
        <div class="row">
            <?php if (is_active_sidebar('footer-widget-area')) {
                dynamic_sidebar('footer-widget-area');
            }
            ?>
        </div>
    </div>
    <!-- /End of Footer Widgets -->

    <!-- Copyrights -->
    <div class="site-info">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <?php
                    if ($current_options['footer_copyright_text'] != '') { ?>
                        <?php echo $current_options['footer_copyright_text']; ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyrights -->

>>>>>>> 68c51090fb8c222bb89de4f0384f8c8fb3800c85
</footer>
<!-- /End of Footer Section -->

<!--Scroll To Top-->
<a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>
<!--/End of Scroll To Top-->
<?php wp_footer(); ?>
</body>
</html>