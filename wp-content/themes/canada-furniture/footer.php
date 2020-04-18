<?php
/**
 * @package Canada_furniture
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                </div>
                <div class="col-md-3">
                    <?php dynamic_sidebar( 'footer-2' ); ?>
                </div>
                <div class="col-md-3">
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                </div>
                <div class="col-md-3">
                    <?php dynamic_sidebar( 'footer-4' ); ?>
                </div>
            </div>
        </div>
		<div class="site-info">
			<?php dynamic_sidebar( 'footer-copyright' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
    <SCRIPT src="<?php echo get_bloginfo( 'template_directory' );?>/assets/javascript/custom.js"></SCRIPT>
	<script src="<?php echo get_bloginfo( 'template_directory' );?>/assets/javascript/jquery-ui.js"></script>
</body>
</html>
