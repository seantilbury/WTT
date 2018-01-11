<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php wp_title('|', true, 'left'); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="container">
	<div id="search-box-wrap">
        <div id="search-box">
           <div id="close-x"><?php _e( 'x', 'surfarama' ); ?></div>
           <?php get_search_form(); ?>
        </div>
    </div>

	<header id="branding" role="banner">
      <div id="inner-header" class="clearfix">
		<div id="site-heading">
        	<?php if ( get_theme_mod( 'surfarama_logo' ) ) : ?>
            <div id="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="http://world-track.co.uk/wp-content/themes/World-Track-Travel/images/ctclogo2.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></a></div>
            <?php else : ?>
			<div id="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
            <?php endif; ?>
		</div>
        
        <div id="social-media" class="clearfix">
            
        	<?php if ( get_theme_mod( 'surfarama_facebook' ) ) : ?>
            <a href="https://www.facebook.com/CorporateTravel" class="social-fb" title="https://www.facebook.com/CorporateTravel"><?php _e('Facebook', 'surfarama') ?></a>
            <?php endif; ?>
            
            <?php if ( get_theme_mod( 'surfarama_twitter' ) ) : ?>
            <a href="https://twitter.com/adrian_desouza" class="social-tw" title="https://twitter.com/adrian_desouza"><?php _e('Twitter', 'surfarama') ?></a>
            <?php endif; ?>
            
            <?php if ( get_theme_mod( 'surfarama_pinterest' ) ) : ?>
            <a href="<?php echo esc_url( get_theme_mod( 'surfarama_pinterest' ) ); ?>" class="social-pi" title="<?php echo esc_url( get_theme_mod( 'surfarama_pinterest' ) ); ?>"><?php _e('Pinterest', 'surfarama') ?></a>
            <?php endif; ?>
            
            <?php if ( get_theme_mod( 'surfarama_linkedin' ) ) : ?>
            <a href="<?php echo esc_url( get_theme_mod( 'surfarama_linkedin' ) ); ?>" class="social-li" title="<?php echo esc_url( get_theme_mod( 'surfarama_linkedin' ) ); ?>"><?php _e('Linkedin', 'surfarama') ?></a>
            <?php endif; ?>
            
            <?php if ( get_theme_mod( 'surfarama_youtube' ) ) : ?>
            <a href="<?php echo esc_url( get_theme_mod( 'surfarama_youtube' ) ); ?>" class="social-yt" title="<?php echo esc_url( get_theme_mod( 'surfarama_youtube' ) ); ?>"><?php _e('Youtube', 'surfarama') ?></a>
            <?php endif; ?>
            
            <?php if ( get_theme_mod( 'surfarama_tumblr' ) ) : ?>
            <a href="<?php echo esc_url( get_theme_mod( 'surfarama_tumblr' ) ); ?>" class="social-tu" title="<?php echo esc_url( get_theme_mod( 'surfarama_tumblr' ) ); ?>"><?php _e('Tumblr', 'surfarama') ?></a>
            <?php endif; ?>
            
            <?php if ( get_theme_mod( 'surfarama_instagram' ) ) : ?>
            <a href="<?php echo esc_url( get_theme_mod( 'surfarama_instagram' ) ); ?>" class="social-in" title="<?php echo esc_url( get_theme_mod( 'surfarama_instagram' ) ); ?>"><?php _e('Instagram', 'surfarama') ?></a>
            <?php endif; ?>
            
            <?php if ( get_theme_mod( 'surfarama_flickr' ) ) : ?>
            <a href="<?php echo esc_url( get_theme_mod( 'surfarama_flickr' ) ); ?>" class="social-fl" title="<?php echo esc_url( get_theme_mod( 'surfarama_flickr' ) ); ?>"><?php _e('Instagram', 'surfarama') ?></a>
            <?php endif; ?>
            
            <?php if ( get_theme_mod( 'surfarama_vimeo' ) ) : ?>
            <a href="<?php echo esc_url( get_theme_mod( 'surfarama_vimeo' ) ); ?>" class="social-vi" title="<?php echo esc_url( get_theme_mod( 'surfarama_vimeo' ) ); ?>"><?php _e('Vimeo', 'surfarama') ?></a>
            <?php endif; ?>
            
            <?php if ( get_theme_mod( 'surfarama_yelp' ) ) : ?>
            <a href="<?php echo esc_url( get_theme_mod( 'surfarama_yelp' ) ); ?>" class="social-ye" title="<?php echo esc_url( get_theme_mod( 'surfarama_yelp' ) ); ?>"><?php _e('Yelp', 'surfarama') ?></a>
            <?php endif; ?>
            
            <?php if ( get_theme_mod( 'surfarama_rss' ) ) : ?>
            <a href="<?php echo esc_url( get_theme_mod( 'surfarama_rss' ) ); ?>" class="social-rs" title="<?php echo esc_url( get_theme_mod( 'surfarama_rss' ) ); ?>"><?php _e('RSS', 'surfarama') ?></a>
            <?php endif; ?>
            
            <?php if ( get_theme_mod( 'surfarama_email' ) ) : ?>
            <a href="mailto:info@corporatetravelconcierge.com" class="social-em" title="info@corporatetravelconcierge.com"><?php _e('Email', 'surfarama') ?></a>
            <?php endif; ?>
            
            <div id="search-icon"></div>
            
         </div>
		
      </div>
      
     <!-- #access -->
      
	</header><!-- #branding -->