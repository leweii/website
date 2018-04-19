<?php $current_options = wp_parse_args(get_option('busiprof_theme_options', array()), theme_setup_data()); ?>
<!-- Footer Section -->
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

                <div class="col-md-2">
                    <p>
                        <a href="http://www.miitbeian.gov.cn/" target="_blank">闽ICP备18008699号</a>
                    </p>
                </div>

                <div class="col-md-7">
                    <p>
                        版权所有：厦门本物载体软件技术有限公司
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyrights -->

</footer>
<!-- /End of Footer Section -->

<!--Scroll To Top-->
<a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>
<!--/End of Scroll To Top-->
<?php wp_footer(); ?>
</body>
</html>