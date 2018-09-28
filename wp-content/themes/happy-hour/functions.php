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

  /**----------------------------- TEMPLATE FUNCTIONS */
  if(!function_exists('happy_hour_header')){
      function happy_hour_header(){?>
        <div class="site">
        <?php 
            printf(
                '<h1 class="site-name"> 
                    <a href="%1$s" title="%2$s"> %3$s </a> 
                </h1>',
                get_bloginfo('url'),
                get_bloginfo('description'),
                get_bloginfo('sitename')
            );
        ?>
            <div class="site-description"><?php bloginfo('description'); ?></div>
        </div>
        <?php
      }
  }
  require_once('wp_bootstrap_navwalker.php');
  /**------------------------------- Setup Menu */
  if( !function_exists( 'happy_hour_menu' )) {
      function happy_hour_menu($menu){
          $menu = array(
              'theme_location' => $menu,
              'container' => 'div',
              'container_class' => 'collapse navbar-collapse ',
              'container_id' => 'navbarSupportedContent',
              'menu_class' => 'navbar-nav mr-auto',
              'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
              'walker' => new wp_bootstrap_navwalker()
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

  /**Function display Header Post */
  if( !function_exists('happy_hour_entry_header') ){
    function happy_hour_entry_header(){
        if( is_single()): ?>
            <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a></h1>
        <?php else : ?>
            <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a></h2>
        <?php endif;
    }   
 }

 /**Function display Meta Post */
 if( !function_exists('happy_hour_entry_meta') ){
    function happy_hour_entry_meta(){
        if( !is_page()): ?>
            <div class="entry-meta">
                <?php 
                    printf( __('<span class="author">Posted by %1$s </span>','happyhour'),get_the_author()  );
                    printf( __('<span class="date-publisher"> at %1$s </span>','happyhour'),get_the_date() );
                    printf( __('<span class="category"> in %1$s </span>','happyhour'),get_the_category_list(',') );

                    if( comments_open() ):
                        echo '<span class="meta-reply">';
                            comments_popup_link(
                                __('Leave a comment','happyhour'),
                                __('One comment','happyhour'),
                                __('% commnent','happyhour'),
                                __('Read all comments','happyhour')
                            );
                        echo '</span>';
                    endif;
                ?>
            </div>
        <?php endif;
    }   
 }

 /**Function display Content Post */
 if( !function_exists('happy_hour_entry_content') ){
    function happy_hour_entry_content(){
        if( !is_single() && !is_page()): {
            the_excerpt();
        } else : {
            the_content();

            /** Div single */
            $link_pages = array(
                'before' => __('<p>Page: ','happyhour'),
                'after' => '</p>',
                'nextpageLink' => __('Next Page','happyhour'),
                'previouspageLink' => __('Previous Page','happyhour')
            );
            wp_link_pages($link_pages);
        }  
        endif;
    }   
 }

  /**Function replace Read mode */
 if( !function_exists('happy_hour_read_more') ) {
     function happy_hour_read_more(){
         return '<a class="read-more" href="'. get_permalink( get_the_ID() ). '">'.__('... [Read More]','happyhour').'</a>';
     }
 }
 add_filter('excerpt_more','happy_hour_read_more');

  /**Function display Tag */
  if( !function_exists('happy_hour_entry_tag') ) {
    function happy_hour_entry_tag(){
        if( has_tag() ):
            echo '<div class="entry-tag">';
            printf( __('Tagged in %1$s','happyhour'), get_the_tag_list('',','));
            echo '</div>';
        endif;
    }
}
/** Import file css */
    function happy_hour_style() { 
        wp_register_style('reset-style', get_template_directory_uri()."/reset.css", 'all');
        wp_enqueue_style('reset-style');
        wp_register_style('main-style', get_template_directory_uri()."/style.css", 'all');
        wp_enqueue_style('main-style');
    }
    add_action('wp_enqueue_scripts','happy_hour_style');

/** disable Adminbar */
add_filter('show_admin_bar','__return_false');
