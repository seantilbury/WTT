<?php
/**
 * Template Name: Home page with intro
 * Description: Same as the default homepage but with introductory text.
 */
 get_header(); ?>

    <div id="content" class="clearfix">
        
        <div id="main" class="clearfix" role="main">

            <?php while ( have_posts() ) : the_post(); ?>
               <div id="intro-text">
                  <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'surfarama' ) ); ?>
               </div><!-- .entry-content -->
			<?php endwhile; // end of the loop. ?>


			<?php
				if ( get_query_var('paged') ) {
                        $paged = get_query_var('paged');
                } elseif ( get_query_var('page') ) {
                        $paged = get_query_var('page');
                } else {
                        $paged = 1;
                }
				$temp = $wp_query;
				$wp_query= null;
				$wp_query = new WP_Query();
				$wp_query->query( array(
					'cat' => -0,
					'paged' => $paged
				
				));
			?>

			<?php if ( $wp_query->have_posts() ) : ?>
				<div id="grid-wrap" class="clearfix">
                <?php $surfarama_counter = 1; ?>
				<?php /* Start the Loop */ ?>
				<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                	<?php
						$itm_class = '';
							if ( $surfarama_counter == 1 && $paged == 1 ) {
								if ( is_sticky() ) {
									$itm_class = 'featured';
								} else {
									$itm_class = 'latest';
								}
							}
						?>
					<div class="grid-box <?php echo $itm_class; ?>">
					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>
                    </div>
                    <?php $surfarama_counter++; ?>
				<?php endwhile; ?>
                
                </div>
                
				
                
               <?php wp_reset_query(); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'surfarama' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content post_content">
						<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'surfarama' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>
	
        </div> <!-- end #main -->

        <?php get_sidebar('home'); ?>

    </div> <!-- end #content -->
        
<?php get_footer(); ?>