<footer id="colophon" role="contentinfo">

<div class="footer-widget-area">		
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Widgets") ) : ?><?php endif; ?>
</div>
<div class="secondary-footer-widget-area">		
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Secondary Footer Widgets") ) : ?><?php endif; ?>
</div>
<div id="site-generator">

			<?php echo __('&copy; ', 'surfarama') . esc_attr( get_bloginfo( 'name', 'display' ) );  ?>
            <?php if ( is_front_page() && ! is_paged() ) : ?>
            <?php echo date("Y"); ?>
            <?php endif; ?>
            
		</div>
	</footer><!-- #colophon -->
</div><!-- #container -->

<?php wp_footer(); ?>


</body>
</html>