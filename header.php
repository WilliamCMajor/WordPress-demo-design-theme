<?php
/*
* The header for our theme
* This is the template that displays all of the <head> section and everything up until your opening main
* container section (i.e. <div class="main-content">).
* @package design+code demo
* @since 1.0.0
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
 <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
 <?php wp_head(); ?>
 </head>
 <body <?php body_class(); ?> >
    <header>
      <div class="inner-container">
         <!-- Navigation -->
         <nav class="off-canvas-nav">
            <?php wp_nav_menu(
                  //in our menu we need to use an array as there is number of arguments we can use.    //the most important is theme_location.
               array(
                  'theme_location' => 'main-menu',
                  //'container_class' => 'main-nav', //class that is applied to the container
                  //'container_id' => 'main-nav', //id that is applied to the container.
                  'menu_class' => 'main-menu', //class used for the ul element which forms the menu. 'Default Menu'
                  'menu_id' => 'main-menu', //id used for the ul element which forms the menu. 'Default Menu'
                  'fallback_cb' => '' //if the menu doesn't exsist, a callback function will fire. Set to false for no fallback
               )
            );?>
         </nav>

         <!-- custom logo -->				   
               <?php if ( ! has_custom_logo() ) { ?>
                  <?php if ( is_front_page() && is_home() ) : ?>
                     <!-- if your page is set to front-page or blog display the site title (appearance > customize) -->
                     <a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>
                  <?php else : ?>
                        <!-- if your page is not set to front-page or blog display the site title (appearance > customize) -->
                        <a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>
                  <?php endif; ?>
                  <!-- //other wise display the custom logo. -->
               <?php } else {
                  the_custom_logo();
               }?>
            
            <div class="toggle-icon">
               <span></span>
               <span></span>
               <span></span>
            </div>
      </div> <!-- inner-container -->
      
    </header>
        <div id="content" class="site-content" >