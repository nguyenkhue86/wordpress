<?php
 /**
  * Declare final param
  *@ THEME_URL = get direct of theme folder
  *@ CORE = get direct of core
  */
  define( 'THEME_URL', get_stylesheet_directory() );
  define( 'CORE', THEME_URL . "/core" );

  /**
   * Import file /core/init.php
   */
  require_once( CORE . "/init.php" );

  /**
   * Setup max-width content
   */
  if(!isset($content_width)){
      $content_width = 620;
  }

  /**
   * Declare function
   */
  if(!function_exists('happy_hour_theme_setup')) {
        function happy_hour_theme_setup() {

            /** Setup Textdomain */
            $language_folder = THEME_URL . '/languages';
            load_theme_textdomain('happyhour', $language_folder);

            /**Automatic add link RSS to <head> */
            add_theme_support('automatic-feed-links');

            /** Add Post Thumbnails */
            add_theme_support('post-thumbnails');

            /** Add theme Format */
            add_theme_support('post-formats', array(
                'image',
                'video',
                'gallery',
                'quote',
                'link'
            ));

            /**Them title-tags */
            add_theme_support('title-tags');

            /** add custom background */
            $default_background = array(
                'default-color' => '#e8e8e8'
            );
            add_theme_support('custom-background', $default_background);

            /**Add Menu Location */
            register_nav_menu('primary-menu', __('Primary Menu','happyhour'));

            /**Create Sidebar */
            $sidebar= array (
                'name' => __('Main Sidebar','happyhour'),
                'id'   => 'main_sidebar',
                'description' => __('Default Sidebar','happyhour'),
                'class' => 'main-sidebar',
                'before_title' => '<h3 class="widgettitle">',
                'after_title'  => '</h3>'
            );
            register_sidebar($sidebar);
        }
        add_action('init', 'happy_hour_theme_setup');
  }

  /**----------------------------- TENOLATE FUNCTIONS */
  if(!function_exists('happy_hour_header')){
      function happy_hour_header(){?>
        <div class="sitename">
        <?php 
        if( is_home() ){
            printf(
                '<h1> 
                    <a href="%1$s" title="%2$s"> %3$s </a> 
                </h1>',
                get_bloginfo('url'),
                get_bloginfo('description'),
                get_bloginfo('sitename')
            );
        } else {
            printf(
                '<h3> 
                    <a href="%1$s" title="%2$s"> %3$s </a> 
                </h3>',
                get_bloginfo('url'),
                get_bloginfo('description'),
                get_bloginfo('sitename')
            );
        }?>
        </div>
        <div class="site-description"><?php bloginfo('description'); ?></div>
        <?php
      }
  }

  /**------------------------------- Setup Menu */
  if( !function_exists( 'happy_hour_menu' )) {
      function happy_hour_menu($menu){
          $menu = array(
              'theme_location' => $menu,
              'container' => 'nav',
              'container_class' => $menu
          );
          wp_nav_menu($menu);
      }
  }

  /** Create Pagination */
  if( !function_exists( 'happy_hour_pagination' ) ){
      function happy_hour_pagination(){
          if ( $GLOBALS['wp_query']->max_num_pages<2 ){
              return '';
          }?>
          <nav class="pagination" role="navigation">
                <?php if ( get_next_posts_link() ): ?>
                    <div class="prev">
                        <?php next_post_link( __('Older Posts','happyhour')); ?>
                    </div>
                <?php endif; ?>
                <?php if ( get_previous_posts_link() ): ?>
                    <div class="next">
                        <?php previoust_posts_link( __('Newest Posts','happyhour') ); ?>
                    </div>
                <?php endif; ?>
          </nav><?php
      }
  }

  /**Function display Thumbnail */
  if( !function_exists('happy_hour_thumbnail') ){
      function happy_hour_thumbnail($size){
        if(!is_single() && has_post_thumbnail() && !post_password_required() || has_post_format('image')): ?>
        <figure class="post-thumbnail">
            <?php the_post_thumbnail($size); ?>
        </figure>
      <?php endif;
      }
  }