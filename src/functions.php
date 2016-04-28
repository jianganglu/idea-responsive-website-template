<?php
// 登录用户浏览站点时不显示工具栏
add_filter( 'show_admin_bar', '__return_false' );

if( !function_exists( 'idea_setup' ) ) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   *
   * @since idea 1.0
   */
  function idea_setup() {
    //~ 载入本地化语言文件
    load_theme_textdomain( 'idea', get_template_directory() . '/languages' );
  }
endif;

add_action( 'after_setup_theme', 'idea_setup' );

?>