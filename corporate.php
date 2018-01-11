<?php
/**
 * Template Name: Corporate -  Full-width, no Widgets
 * Description: A full-width template custom header */
get_header('corp'); ?>

    <div id="content" class="clearfix full-width-content">
        
        <div id="main" class="clearfix" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>

			</div>
            
    
         
		</div>

<?php get_footer(); ?>