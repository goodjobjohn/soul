<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php html_schema(); ?> <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>

        <?php /**
         * updated with non-blocking order
         * see here: https://csswizardry.com/2018/11/css-and-network-performance/
         * 
         * In short, place any js here that doesn't need to act on css before any css to
         * speed up page loads.
         */
        ?>

        <?php // drop Google Analytics here ?>
        <?php // end analytics ?>

        <?php // See everything you need to know about the <head> here: https://github.com/joshbuchea/HEAD ?>
        <meta charset='<?php bloginfo( 'charset' ); ?>'>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <?php // favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
        <link rel="icon" href="<?php echo get_theme_file_uri(); ?>/favicon.png">
        <!--[if IE]>
            <link rel="shortcut icon" href="<?php echo get_theme_file_uri(); ?>/favicon.ico">
        <![endif]-->

        <!-- Apple Touch Icon -->
        <link rel="apple-touch-icon" href="<?php echo get_theme_file_uri(); ?>/library/images/apple-touch-icon.png">

        <!-- Safari Pinned Tab Icon -->
        <link rel="mask-icon" href="<?php echo get_theme_file_uri(); ?>/library/images/icon.svg" color="#0088cc">

        <?php // updated pingback. Thanks @HardeepAsrani https://github.com/HardeepAsrani ?>
        <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
            <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php endif; ?>

        <?php // put font scripts like Typekit/Adobe Fonts here ?>
        <?php // end fonts ?>

        <?php // wordpress head functions ?>
        <?php wp_head(); ?>
        <?php // end of wordpress head ?>

    </head>

	<body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">

        <?php // remove grid classes below if you aren't using CSS Grid (but you should) ?>
		<!-- <div id="container" class="grid grid-aside"> -->

			<header id="header" class="header" role="banner" itemscope itemtype="https://schema.org/WPHeader">

                <div id="inner-header" class="wrap">

                    <?php // updated with proper markup and wrapping div for organization ?>
                    <div id="bloginfo" itemscope itemtype="https://schema.org/Organization">

                        <?php if (has_custom_logo()) { ?>

                            <div id="logo" itemprop="logo">
                                <a href="<?php echo home_url(); ?>" rel="nofollow" itemprop="url" title="<?php bloginfo('name'); ?>"><?php the_custom_logo(); ?></a>
                            </div>

                            <div id="site-title" class="site-title" itemprop="name">
                                <a href="<?php echo home_url(); ?>" rel="nofollow" itemprop="url" title="<?php bloginfo('name'); ?>">
                                    <?php bloginfo('name'); ?>
                                </a>
                            </div>
                            
                        <?php } else { ?>

                            <div id="logo" itemprop="logo">
                                <a href="<?php echo home_url(); ?>" rel="nofollow" itemprop="url" title="<?php bloginfo('name'); ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="svg-logo lazyloaded" width="200" height="14" viewBox="0 0 200 14" fill="none"><path d="M2 9.5C2.8 10.6 3.9 11.2 5.5 11.2 6.9 11.2 7.7 10.6 7.7 9.9 7.7 9.4 7.4 9 6.9 8.8 6.6 8.6 6.1 8.4 5.8 8.3 5.4 8.1 4.6 7.9 4.2 7.7 2 7 0.9 5.8 0.9 3.9 0.9 2.8 1.3 1.8 2.2 1.2 3.1 0.5 4.2 0.1 5.5 0.1 7.5 0.1 9 0.8 10.1 2.3L8.1 3.8C7.5 3.1 6.7 2.7 5.6 2.7 4.6 2.7 3.9 3.2 3.9 3.8 3.9 4.2 4.1 4.5 4.4 4.8 4.7 4.9 4.9 5 5.1 5.1L6.1 5.4C6.6 5.6 7 5.7 7.3 5.8 9.8 6.8 10.9 7.9 10.9 9.8 10.9 12.2 9.1 13.8 5.7 13.8 2.8 13.8 0.9 12.7 0 10.9L2 9.5Z" class="a"/><path d="M30.4 0.3H33.5V8C33.5 10.2 34.4 11.2 36.3 11.2 38.2 11.2 39.1 10.2 39.1 8V0.3H42.2V8.3C42.2 10.1 41.6 11.5 40.5 12.5 39.4 13.4 38 13.9 36.3 13.9 34.5 13.9 33.2 13.4 32.1 12.5 31 11.5 30.4 10.1 30.4 8.3V0.3Z" class="a"/><path d="M48.4 13.6V0.3H51.5V11H56.9V13.6H48.4Z" class="a"/><path d="M84.7 2.6L82.6 4.3C81.6 3.3 80.5 2.8 79 2.8 77.8 2.8 76.7 3.2 75.9 4 75 4.7 74.6 5.8 74.6 7 74.6 8.1 75 9.2 75.8 10 76.7 10.7 77.7 11.1 78.9 11.1 80.4 11.1 81.6 10.6 82.5 9.6L84.6 11.3C83.2 12.9 81.2 13.8 78.9 13.8 76.8 13.8 75.1 13.2 73.6 11.8 72.2 10.5 71.4 8.9 71.4 6.9 71.4 4.9 72.2 3.3 73.6 1.9 75.1 0.6 76.8 0 78.9 0 81.3 0.1 83.2 1.1 84.7 2.6Z" class="a"/><path d="M90 13.6V0.3H93.1V5.3H99.1V0.3H102.2V13.6H99.1V8H93.1V13.7H90V13.6Z" class="a"/><path d="M107.5 13.6L113.3 0.3H116L121.8 13.6H118.5L117.6 11.4H111.7L110.8 13.6H107.5ZM112.6 9.1H116.7L114.7 4.3 112.6 9.1Z" class="a"/><path d="M127 13.6V0.3H132.8C134.1 0.3 135.2 0.8 136.2 1.6 137.1 2.4 137.5 3.5 137.5 4.7 137.5 6.4 136.6 7.9 135.1 8.5L138.5 13.6H135L132.1 9.2H132 130V13.6H127ZM130 6.6H132.4C133.6 6.6 134.4 5.9 134.4 4.7 134.4 3.7 133.7 3 132.7 3H130V6.6H130Z" class="a"/><path d="M145.9 13.6V3H142.1V0.3H152.7V3H149V13.6H145.9Z" class="a"/><path d="M157.9 13.6V0.3H167.4V3H161V5.5H167.1V8.1H161V11H167.6V13.6H157.9Z" class="a"/><path d="M173.5 13.6V0.3H179.3C180.6 0.3 181.7 0.8 182.7 1.6 183.6 2.4 184 3.5 184 4.7 184 6.4 183.1 7.9 181.6 8.5L185 13.6H181.5L178.6 9.2H178.5 176.5V13.6H173.5ZM176.5 6.6H178.9C180.1 6.6 180.9 5.9 180.9 4.7 180.9 3.7 180.2 3 179.2 3H176.5V6.6H176.5Z" class="a"/><path d="M191.2 9.5C191.9 10.6 193.1 11.2 194.7 11.2 196.1 11.2 196.8 10.6 196.8 9.9 196.8 9.4 196.5 9 196.1 8.8 195.8 8.6 195.3 8.4 194.9 8.3 194.5 8.1 193.7 7.9 193.4 7.7 191.2 7 190 5.8 190 3.9 190 2.8 190.5 1.8 191.3 1.2 192.2 0.5 193.3 0.1 194.6 0.1 196.6 0.1 198.2 0.8 199.3 2.3L197.2 3.8C196.6 3.1 195.8 2.7 194.8 2.7 193.7 2.7 193.1 3.2 193.1 3.8 193.1 4.2 193.2 4.5 193.6 4.8 193.8 4.9 194 5 194.2 5.1L195.3 5.4C195.7 5.6 196.1 5.7 196.4 5.8 199 6.8 200 7.9 200 9.8 200 12.2 198.3 13.8 194.8 13.8 192 13.8 190 12.7 189.1 10.9L191.2 9.5Z" class="a"/><path d="M23.8 12.5H17.5V13.9H23.8V12.5Z" class="a"/><path d="M20.7 0.4C17.5 0.4 14.9 2.8 14.9 5.7 14.9 8.6 17.5 11 20.7 11 23.9 11 26.5 8.6 26.5 5.7 26.5 2.8 23.9 0.4 20.7 0.4ZM23.5 5.7C23.5 7.2 22.2 8.4 20.7 8.4 19.1 8.4 17.9 7.2 17.9 5.7 17.9 4.2 19.2 3 20.7 3 22.2 3 23.5 4.2 23.5 5.7Z" class="a"/></svg>
                                </a>
                            </div>

                        <?php } ?>
                        
                    </div>

                    <nav class="header-nav primary-menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement" aria-label="<?php _e( 'Primary Menu ', 'platetheme' ); ?>">

                        <?php // added primary menu marker for accessibility ?>
                        <h2 class="screen-reader-text"><?php _e( 'Primary Menu', 'platetheme' ); ?></h2>

                        <?php // see all default args here: https://developer.wordpress.org/reference/functions/wp_nav_menu/ ?>

                        <?php wp_nav_menu( array(

                            'container' => false,                          // remove nav container
                            'container_class' => 'menu',                   // class of container (should you choose to use it)
                            'menu' => __( 'The Main Menu', 'platetheme' ), // nav name
                            'menu_class' => 'nav top-nav main-menu desktop',       // adding custom nav class
                            'theme_location' => 'main-nav',                // where it's located in the theme

                            )
                        ); ?>

                        <div id="menuToggle">
                            
                            <input type="checkbox" />
                            <span class="top"></span>
                            <span class="bottom"></span>
                            
                            <?php wp_nav_menu( array(

                                'container' => false,                          // remove nav container
                                'container_class' => 'menu',                   // class of container (should you choose to use it)
                                'menu' => __( 'The Main Menu', 'platetheme' ), // nav name
                                'menu_class' => 'nav top-nav main-menu mobile',       // adding custom nav class
                                'theme_location' => 'main-nav',                // where it's located in the theme

                                )
                            ); ?>
                        </div>
                        
                    </nav>

                </div>

            </header>
