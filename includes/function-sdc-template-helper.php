<?php
/**
 * SDC template functions.
 *
 * @package Storefront_Design_Customizer
 */

if ( ! function_exists( 'sdc_post_archive_column_classes' ) ) {
  /**
   * SDC post archive column class
   *
   * @since  1.0.0
   */
  function sdc_post_archive_column_classes( $classes ) {

      $sdc_column_post_archive = get_theme_mod('sdc_column_post_archive', 1);
      $sdc_woo_shop_product_layout = get_theme_mod('sdc_woo_shop_product_layout', 1);
      $sdc_woo_listing_product_column = get_theme_mod('sdc_woo_listing_product_column', 3);

      // Full Column
      if ( absint($sdc_column_post_archive) === 1 && is_archive() && !is_woocommerce() ){
          $classes[] = 'col-md-12';
      }

      // Full Column
      if ( absint($sdc_column_post_archive) === 2 && is_archive() && !is_woocommerce() ){
          $classes[] = 'col-md-6';
      }

      // Full Column
      if ( absint($sdc_column_post_archive) === 3 && is_archive() && !is_woocommerce() ){
          $classes[] = 'col-md-4';
      }

      // Full Column
      if ( absint($sdc_column_post_archive) === 4 && is_archive() && !is_woocommerce() ){
          $classes[] = 'col-md-3';
      }

      // Woo Single Layout 1
      if ( absint($sdc_woo_shop_product_layout) === 2 && is_archive() && is_woocommerce() or absint($sdc_woo_shop_product_layout) === 2 && is_front_page() ){
          $classes[] = 'woo-pd--one';
      }

      // Woo Shop Column
      if ( absint($sdc_woo_listing_product_column) === 1 && is_archive() && is_woocommerce() ){
          $classes[] = 'one-per-row';
      }

      // Woo Shop Column
      if ( absint($sdc_woo_listing_product_column) === 2 && is_archive() && is_woocommerce() ){
          $classes[] = 'two-per-row';
      }

      // Woo Shop Column
      if ( absint($sdc_woo_listing_product_column) === 3 && is_archive() && is_woocommerce() ){
          $classes[] = 'three-per-row';
      }

      // Woo Shop Column
      if ( absint($sdc_woo_listing_product_column) === 4 && is_archive() && is_woocommerce() ){
          $classes[] = 'four-per-row';
      }

      return $classes;
  }
}


if ( ! function_exists( 'sdc_body_classes' ) ) {
  /**
   * SDC body class
   *
   * @since  1.0.0
   */
    function sdc_body_classes( $classes ) {

      $sdc_blog_customizer_single_layout = get_theme_mod('sdc_blog_customizer_single_layout', 1);
      $sdc_woo_single_product_layout = get_theme_mod('sdc_woo_single_product_layout', 1);

      // Single Post Layout 1 Selected
      if ( absint($sdc_blog_customizer_single_layout) === 1 && is_single() ){
          $classes[] = 'single--one';
      }

      // Single Post Layout 2 Selected
      if ( absint($sdc_blog_customizer_single_layout) === 2 && is_single() ){
          $classes[] = 'single--two';
      }

      // Single Post Layout 3 Selected
      if ( absint($sdc_blog_customizer_single_layout) === 3 && is_single() ){
          $classes[] = 'single--three';
      }

      // Single Post Layout 4 Selected
      if ( absint($sdc_blog_customizer_single_layout) === 4 && is_single() ){
          $classes[] = 'single--four';
      }

      // Single Post Layout 4 Selected
      if ( absint($sdc_blog_customizer_single_layout) === 5 && is_single() ){
          $classes[] = 'single--five';
      }
      if(is_woocommerce_active()){
        // Single Product Layout 1 Selected
        if ( absint($sdc_woo_single_product_layout) === 1 && is_product() ){
            $classes[] = 'woo-single--one';
        }

        // Single Product Layout 1 Selected
        if ( absint($sdc_woo_single_product_layout) === 2 && is_product() ){
            $classes[] = 'woo-single--two';
        }
      }


      return $classes;
    }
}


/*--------------------------------------------------------------
## Storefront Customization - Header
--------------------------------------------------------------*/

if ( ! function_exists( 'remove_sdc_header_search' ) ):
  function remove_sdc_header_search() {
    $sdc_header_display_search = get_theme_mod('sdc_header_display_search', true);
    if ($sdc_header_display_search == false){
      remove_action( 'storefront_header', 'storefront_product_search', 40 );
    }
  }
endif;

if ( ! function_exists( 'remove_sdc_header_cart' ) ):
  function remove_sdc_header_cart() {
    $sdc_header_display_cart = get_theme_mod('sdc_header_display_cart', true);
    if ($sdc_header_display_cart == false){
      remove_action( 'storefront_header', 'storefront_header_cart', 60 );
    }
  }
endif;


/*--------------------------------------------------------------
## Storefront Customization - Footer
--------------------------------------------------------------*/

if ( ! function_exists( 'sdc_apply_footer_copyright' ) ):
  function sdc_apply_footer_copyright(){
    remove_action( 'storefront_footer', 'storefront_credit', 20 );
    add_action( 'storefront_footer',  'sdc_custom_storefront_credit',20 );
  }
endif;

if ( ! function_exists( 'sdc_custom_storefront_credit' ) ):
  function sdc_custom_storefront_credit() {

      $new_footer_text = get_theme_mod( 'sdc_footer_customizer_footer_text' );

      ?>
      <div class="site-info">
        <?php echo do_shortcode( $new_footer_text ); ?>
        <span class="footer_copyright_text"><?php echo esc_html( apply_filters( 'storefront_copyright_text', $content = '&copy; ' . get_bloginfo( 'name' ) . ' ' . date( 'Y' ) ) ); ?></span>
      </div><!-- .site-info -->
      <?php
  }
endif;


/*--------------------------------------------------------------
## Meta Information Template Tags
--------------------------------------------------------------*/

/**
* Prints Post published date
*/
if ( ! function_exists( 'sdc_published_on' ) ):
  function sdc_published_on() { ?>
      <span class="post-meta__time">
        <span itemprop="datePublished"><time datetime="<?php echo get_the_date(get_option('date_format')); ?>" pubdate><?php echo get_the_date(get_option('date_format'));?></time></span>
        <meta itemprop="dateModified" content="<?php the_modified_time(get_option('date_format'));?>">
      </span>
  <?php }
endif;

/**
* Prints HTML with meta information for the Tags
*/
if ( ! function_exists( 'sdc_post_tag' ) ):
function sdc_post_tag() {
    // Hide category and tag text for pages.
    if ( 'post' === get_post_type() ) {
        /* translators: used between list items, there is a space after the comma */
        $tags_list = get_the_tag_list( '', esc_html__( '', 'storefront-design-customizer' ) );
        if ( $tags_list ) {
            printf( '<span class="post-meta__tag__item" rel="category tag">' . esc_html__( '%1$s', 'storefront-design-customizer' ) . '</span>', $tags_list ); // WPCS: XSS OK.
        }
    }
}
endif;

/**
* Prints HTML with meta information for the Author Image
*/
if ( ! function_exists( 'display_post_author_post_archive' ) ):
  function display_post_author_post_archive(){
      global $post;
      $author_id=$post->post_author;
      $sdc_post_archive_display_author  = get_theme_mod('sdc_post_archive_display_author', true);

      if ($sdc_post_archive_display_author == true):  ?>
      <div class="blog__post__author-box">
        <?php echo get_avatar($author_id, '65');?>
        <?php sdc_post_author();?>
      </div>
     <?php endif;
  }
endif;


/**
* Prints HTML with meta information for the Author
*/
if ( ! function_exists( 'sdc_display_post_author' ) ):
function sdc_display_post_author(){
    global $post;
    $author_id=$post->post_author;?>

    <div class="single__post__author-box" itemprop="author" itemscope itemtype="http://schema.org/Person">
      <?php echo get_avatar($author_id, '65');?>
      <span class="vcard author author_name" itemprop="name" >
        <span class="fn">
          <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ));?>" class="post-meta__author__link" itemprop="url">
            <?php the_author(); ?>
          </a>
        </span>
      </span>
      <span class="author_description" itemprop="description"><?php echo nl2br(get_the_author_meta('description')); ?></span>
    </div>
   <?php
}
endif;

/**
* Prints HTML with meta information for the Post Category
*/
if ( ! function_exists( 'sdc_category' ) ):
  function sdc_category() {
      if ( 'post' === get_post_type() ) {
      /* translators: used between list items, there is a space after the comma */
      $categories_list = get_the_category_list( esc_html__( ' ', 'storefront-design-customizer' ) );
          if ( $categories_list ) {
              printf( '<span class="post-meta__category category" rel="tag">' . esc_html__( '%1$s', 'storefront-design-customizer' ) . '</span>', $categories_list ); // WPCS: XSS OK.
          }
      }
  }
endif;


/**
* Prints HTML with meta information for the current post-date/time and author.
*/
if ( ! function_exists( 'sdc_post_author' ) ):
  function sdc_post_author() { ?>
    <p class="post-meta__author" itemprop="author" itemscope itemtype="http://schema.org/Person">
    <span class="vcard author author_name" itemprop="name" >
    <span class="fn">
      <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ));?>" class="post-meta__author__link" itemprop="url">
      <?php the_author(); ?>
      </a>
    </span>
    </span>
    </p>
  <?php
  }
endif;

/**
* Change Excerpt length
*/
if ( ! function_exists( 'sdc_excerpt_length' ) ):
function sdc_excerpt_length( $length ) {
  $sdc_post_archive_excepth_length = get_theme_mod('sdc_post_archive_excepth_length',20);
  return $sdc_post_archive_excepth_length;
}
endif;



/*--------------------------------------------------------------
## Post Archive / Blog Post Layout
--------------------------------------------------------------*/
/**
* Layout One
*/
if ( ! function_exists( 'post_archive_layout_one' ) ):
  function post_archive_layout_one(){

    $sdc_post_archive_display_excerpt = get_theme_mod('sdc_post_archive_display_excerpt', true);
  ?>

  <div class="col-md-12">
  <div class="row">
  <div class="blog__post">
    <div class="col-md-8 layout-golden--one__left">
      <?php echo storefront_post_thumbnail();?>
      </div>

      <div class="col-md-4 layout-golden--one__right">
        <div class="blog__post__right">
          <div class="blog-post__meta">
            <?php storefront_posted_on();?>
            <meta itemprop="author" content="<?php the_author_link(); ?>">
          </div>
          <header class="entry-header">
          <?php the_title( sprintf( '<h2 class="alpha entry-title"><a href="%s" class="element-title element-title--post" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
        </header>
        <?php
        if ($sdc_post_archive_display_excerpt == true): ?>
          <div class="blog__post__excerpt" itemprop="description">
             <?php the_excerpt();?>
          </div>
        <?php endif; ?>
          <?php do_action( 'sdc_post_after_header' );?>
        </div>
      </div>
  </div>
  </div>
  </div>
  <?php
  }
endif;

/**
* Layout Two
*/
if ( ! function_exists( 'post_archive_layout_two' ) ):
  function post_archive_layout_two(){

    $sdc_post_archive_display_excerpt = get_theme_mod('sdc_post_archive_display_excerpt', true);
  ?>

  <div class="col-md-12 blog__post--lb-2">
  <div class="row flexify--center">

    <header class="col-md-4 col-sm-4 entry-header entry-header--lb-2">
        <?php the_title( sprintf( '<h2 class="alpha entry-title"><a href="%s" class="element-title element-title--post" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
        <?php do_action( 'sdc_post_after_header' );?>
    </header>

    <div class="col-md-4 col-sm-4 excerpt--lb-2" itemprop="description">

      <?php
        if ($sdc_post_archive_display_excerpt == true):
          the_excerpt( sprintf(
            /* translators: %s: Name of current post. */
            wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'storefront-design-customizer' ),
              array( 'span' => array( 'class' => array() ) ) ),
            the_title( '<span class="screen-reader-text">"', '"</span>', false )
          ) );
      endif;
      ?>
    </div>
    <div class="col-md-4 col-sm-4 featured-image--lb-2">
      <?php echo storefront_post_thumbnail();?>
    </div>

  </div>
  </div>

  <?php
  }
endif;


/*--------------------------------------------------------------
## Single Post Layout
--------------------------------------------------------------*/

function sdc_single_post_layout_one(){

  $sdc_post_customizer_display_cat = get_theme_mod('sdc_post_customizer_display_cat', true);
  $sdc_post_customizer_display_tag = get_theme_mod('sdc_post_customizer_display_tag', true);
  $sdc_post_customizer_display_date = get_theme_mod('sdc_post_customizer_display_date', true);
  $sdc_post_customizer_display_author = get_theme_mod('sdc_post_customizer_display_author', true);
?>

<?php storefront_post_thumbnail();?>
<div class="s__post--one">

  <?php if($sdc_post_customizer_display_cat == true):?>
      <div class="single post-meta">
          <?php sdc_category(); ?>
      </div>
  <?php endif;?>

  <header class="single-post__header">
    <?php the_title( '<h1 class="element-title single-post__title">', '</h1>' );?>
  </header>

  <div class="single post-meta">
    <?php
        if($sdc_post_customizer_display_author == true):
          sdc_post_author();
        endif;

        if($sdc_post_customizer_display_date == true):
          sdc_published_on();
        endif;
    ?>
  </div>

  <div class="single-post__body">
    <?php the_content(); ?>
  </div>
  <?php if($sdc_post_customizer_display_tag == true):?>
    <footer>
      <?php sdc_post_tag();?>
    </footer><!-- .entry-footer -->
  <?php endif;?>
</div>

<?php }


function sdc_single_post_layout_two(){

  $sdc_post_customizer_display_cat = get_theme_mod('sdc_post_customizer_display_cat', true);
  $sdc_post_customizer_display_tag = get_theme_mod('sdc_post_customizer_display_tag', true);
  $sdc_post_customizer_display_date = get_theme_mod('sdc_post_customizer_display_date', true);
  $sdc_post_customizer_display_author = get_theme_mod('sdc_post_customizer_display_author', true);
?>


<div class="row s__post--two">

<div class="col-md-12 s__post--two__top">
<div class="row">
  <div class="col-md-5">

    <?php if($sdc_post_customizer_display_cat == true):?>
      <div class="single post-meta">
        <?php sdc_category();?>
      </div>
    <?php endif;?>

    <header class="single-post__header"><?php the_title( '<h1 class="element-title single-post__title">', '</h1>' );?></header>

    <?php
      if($sdc_post_customizer_display_author == true):
          sdc_display_post_author();
      endif;
    ?>

    <?php
      if($sdc_post_customizer_display_date == true):
          sdc_published_on();
      endif;
    ?>

  </div>
  <div class="col-md-7"><?php storefront_post_thumbnail();?></div>
</div>
</div>

<div class="col-md-12 s__post--two__content_area">
  <div class="single-post__body">
    <?php the_content(); ?>

    <?php if($sdc_post_customizer_display_tag == true):?>
      <footer><div class="single post-meta"><?php sdc_post_tag();?></div></footer>
    <?php endif;?>

  </div>


  </div>
</div>

<?php }


function sdc_single_post_layout_three(){

  $sdc_post_customizer_display_cat = get_theme_mod('sdc_post_customizer_display_cat', true);
  $sdc_post_customizer_display_tag = get_theme_mod('sdc_post_customizer_display_tag', true);
  $sdc_post_customizer_display_date = get_theme_mod('sdc_post_customizer_display_date', true);
  $sdc_post_customizer_display_author = get_theme_mod('sdc_post_customizer_display_author', true);

?>

<div class="s__post--three">

<header class="single-post__header">
<div class="row s__post--three__top">
    <div class="s__post--three__head col-md-6">

      <?php if($sdc_post_customizer_display_cat == true):?>
        <div class="s__post--three__meta"><?php sdc_category();?></div>
      <?php endif;?>

      <div class="s__post--three__title"><?php the_title( '<h1 class="element-title single-post__title">', '</h1>' );?></div>

      <?php if($sdc_post_customizer_display_author == true):?>
        <div class="s__post--three__author"><?php the_author(); ?></div>
      <?php endif;?>

      <?php if($sdc_post_customizer_display_date == true):?>
        <div class="s__post--three__date"><?php sdc_published_on();?></div>
      <?php endif;?>

    </div>
    <div class="s__post--three__excerpt col-md-6"><?php the_excerpt();?></div>
    <div class="s__post--three__image col-md-12"><?php storefront_post_thumbnail();?></div>
</div>
</header>

<div class="s__post--three__content_area">
  <div class="s__post--three__body">
    <?php the_content(); ?>

    <?php if($sdc_post_customizer_display_tag == true):?>
      <footer><div class="single post-meta"><?php sdc_post_tag();?></div></footer>
    <?php endif;?>

  </div>

</div>

</div>

<?php }


function sdc_single_post_layout_four(){

  $sdc_post_customizer_display_cat = get_theme_mod('sdc_post_customizer_display_cat', true);
  $sdc_post_customizer_display_tag = get_theme_mod('sdc_post_customizer_display_tag', true);
  $sdc_post_customizer_display_date = get_theme_mod('sdc_post_customizer_display_date', true);
  $sdc_post_customizer_display_author = get_theme_mod('sdc_post_customizer_display_author', true);
?>

<div class="s__post--four">
  <div class="s__post--four__image"><?php storefront_post_thumbnail();?></div>
  <div class="s__post--four__header">
    <?php if($sdc_post_customizer_display_cat == true):?>
      <div class="s__post--four__cat"><?php sdc_category();?></div>
    <?php endif;?>
    <div class="s__post--four__title"><?php the_title( '<h1 class="element-title single-post__title">', '</h1>' );?></div>
    <?php if($sdc_post_customizer_display_author == true):?>
      <div class="s__post--four__author"><?php the_author(); ?></div>
    <?php endif;?>
    <?php if($sdc_post_customizer_display_date == true):?>
      <div class="s__post--four__date"><?php sdc_published_on();?></div>
    <?php endif;?>
  </div>
  <div class="s__post--four__body">
    <?php the_content(); ?>
    <?php if($sdc_post_customizer_display_tag == true):?>
      <footer><div class="single post-meta"><?php sdc_post_tag();?></div></footer>
    <?php endif;?>
  </div>
</div>

<?php }

function sdc_single_post_layout_five(){

  $sdc_post_customizer_display_cat = get_theme_mod('sdc_post_customizer_display_cat', true);
  $sdc_post_customizer_display_tag = get_theme_mod('sdc_post_customizer_display_tag', true);
  $sdc_post_customizer_display_date = get_theme_mod('sdc_post_customizer_display_date', true);
  $sdc_post_customizer_display_author = get_theme_mod('sdc_post_customizer_display_author', true);
?>

<div class="s__post--five">

<header class="single-post__header">
<div class="row s__post--five__top">
    <div class="s__post--five__image col-md-6"><?php storefront_post_thumbnail();?></div>
    <div class="s__post--five__head col-md-6 flexify--center">
    <div class="s__post--five__head--content">
      <?php woocommerce_breadcrumb();?>

      <?php if($sdc_post_customizer_display_cat == true):?>
        <div class="s__post--five__meta"><?php sdc_category();?></div>
      <?php endif;?>

      <div class="s__post--five__title"><?php the_title( '<h1 class="element-title single-post__title">', '</h1>' );?></div>

      <?php if($sdc_post_customizer_display_author == true):?>
        <div class="s__post--five__author"><?php the_author(); ?></div>
      <?php endif;?>

      <?php if($sdc_post_customizer_display_date == true):?>
        <div class="s__post--five__date"><?php sdc_published_on();?></div>
      <?php endif;?>

      <div class="s__post--five__excerpt"><?php the_excerpt();?></div>
    </div>
    </div>
</div>
</header>

<div class="s__post--five__content_area">
  <div class="s__post--five__body">
    <?php the_content(); ?>
    <?php if($sdc_post_customizer_display_tag == true):?>
      <footer><div class="single post-meta"><?php sdc_post_tag();?></div></footer>
    <?php endif;?>
  </div>
</div>
</div>

<?php }


function remove_sdc_single_comment(){
  remove_action( 'storefront_single_post_bottom', 'storefront_display_comments', 20 );
}

function remove_sdc_single_post_navigation(){
  remove_action( 'storefront_single_post_bottom', 'storefront_post_nav', 10 );
}

function apply_sdc_single_layout_one(){
  remove_action( 'storefront_single_post',         'storefront_post_header',          10 );
  remove_action( 'storefront_single_post',         'storefront_post_meta',            20 );
  remove_action( 'storefront_single_post',         'storefront_post_content',         30 );
  add_action( 'storefront_single_post',           'sdc_single_post_layout_one',     10 );
}

function apply_sdc_single_layout_two(){
  remove_action( 'storefront_single_post',         'storefront_post_header',          10 );
  remove_action( 'storefront_single_post',         'storefront_post_meta',            20 );
  remove_action( 'storefront_single_post',         'storefront_post_content',         30 );
  add_action( 'storefront_single_post',         'sdc_single_post_layout_two',         10 );
}

function apply_sdc_single_layout_three(){
  remove_action( 'storefront_single_post',         'storefront_post_header',          10 );
  remove_action( 'storefront_single_post',         'storefront_post_meta',            20 );
  remove_action( 'storefront_single_post',         'storefront_post_content',         30 );
  add_action( 'storefront_single_post',         'sdc_single_post_layout_three',       10 );
}

function apply_post_archive_layout_one() {
  add_action( 'storefront_loop_post', 'post_archive_layout_one',            10 );
  remove_action( 'storefront_loop_post', 'storefront_post_header',          10 );
  remove_action( 'storefront_loop_post', 'storefront_post_meta',            20 );
  remove_action( 'storefront_loop_post', 'storefront_post_content',         30 );
}

function apply_post_archive_layout_two() {
  add_action( 'storefront_loop_post', 'post_archive_layout_two',            10 );
  remove_action( 'storefront_loop_post', 'storefront_post_header',          10 );
  remove_action( 'storefront_loop_post', 'storefront_post_meta',            20 );
  remove_action( 'storefront_loop_post', 'storefront_post_content',         30 );
}

function sdc_remove_woo_single_rating(){
  remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating',            10 );
}

function sdc_remove_woo_single_excerpt(){
  remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt',             20 );
}

function sdc_remove_woo_single_price(){
  remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price',             10 );
}

function sdc_remove_woo_single_add_to_cart(){
  remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart',             30 );
}

function sdc_remove_woo_single_cat_meta(){
  remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta',            40 );
}

function sdc_remove_woo_single_tabs(){
  remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs',            10 );
}

function sdc_remove_woo_single_upsell(){
  remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display',            15 );
}

function sdc_remove_woo_single_related(){
  remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products',             20 );
}




function sdc_customizer_head_styles() {

  $sdc_post_archive_heading_color                 = sanitize_hex_color(get_theme_mod('sdc_post_archive_heading_color','#484c51'));
  $sdc_post_archive_card_color                    = sanitize_hex_color(get_theme_mod('sdc_post_archive_card_color','#ffffff'));
  $sdc_woo_single_data_tab_color                  = sanitize_hex_color(get_theme_mod('sdc_woo_single_data_tab_color','#eeeeee'));
  $sdc_woo_single_product_title_color             = sanitize_hex_color(get_theme_mod('sdc_woo_single_product_title_color','#484c51'));
  $sdc_woo_single_product_desc_color              = sanitize_hex_color(get_theme_mod('sdc_woo_single_product_desc_color','#484c51'));
  $sdc_woo_listing_star_color                     = sanitize_hex_color(get_theme_mod('sdc_woo_listing_star_color','#FFEB3B'));
  $sdc_footer_customizer_widget_header_color      = sanitize_hex_color(get_theme_mod('sdc_footer_customizer_widget_header_color','#484c51'));
  $sdc_footer_customizer_widget_text_color        = sanitize_hex_color(get_theme_mod('sdc_footer_customizer_widget_text_color','#484c51'));
  $sdc_footer_customizer_widget_link_color        = sanitize_hex_color(get_theme_mod('sdc_footer_customizer_widget_link_color','#484c51'));
  $sdc_footer_customizer_widget_card_color        = sanitize_hex_color(get_theme_mod('sdc_footer_customizer_widget_card_color','#ffffff'));
  $sdc_customizer_primary_menu_hover_color        = sanitize_hex_color(get_theme_mod('sdc_customizer_primary_menu_hover_color','#484c51'));
  $sdc_customizer_primary_menu_active_color       = sanitize_hex_color(get_theme_mod('sdc_customizer_primary_menu_active_color','#484c51'));
  $sdc_customizer_primary_menu_drop_backcolor     = sanitize_hex_color(get_theme_mod('sdc_customizer_primary_menu_drop_backcolor','#484c51'));
  $sdc_customizer_primary_menu_drop_color         = sanitize_hex_color(get_theme_mod('sdc_customizer_primary_menu_drop_color','#484c51'));
  $sdc_customizer_primary_menu_holder_color       = sanitize_hex_color(get_theme_mod('sdc_customizer_primary_menu_holder_color','#ffffff'));
  $sdc_woo_listing_product_title_color            = sanitize_hex_color(get_theme_mod('sdc_woo_listing_product_title_color','#484c51'));
  $sdc_customizer_secondary_menu_hover_color      = sanitize_hex_color(get_theme_mod('sdc_customizer_secondary_menu_hover_color','#484c51'));
  $sdc_customizer_secondary_menu_active_color     = sanitize_hex_color(get_theme_mod('sdc_customizer_secondary_menu_active_color','#484c51'));
  $sdc_customizer_secondary_menu_drop_backcolor   = sanitize_hex_color(get_theme_mod('sdc_customizer_secondary_menu_drop_backcolor','#484c51'));
  $sdc_customizer_secondary_menu_drop_color       = sanitize_hex_color(get_theme_mod('sdc_customizer_secondary_menu_drop_color','#484c51'));
  $sdc_woo_listing_sale_badge_color               = sanitize_hex_color(get_theme_mod('sdc_woo_listing_sale_badge_color','#ffffff'));
  $sdc_woo_listing_sale_badge_background_color    = sanitize_hex_color(get_theme_mod('sdc_woo_listing_sale_badge_background_color','#f6f6f6'));
  $sdc_woo_listing_add_cart_color                 = sanitize_hex_color(get_theme_mod('sdc_woo_listing_add_cart_color','#FFEB3B'));
  $sdc_woo_listing_add_cart_text_color            = sanitize_hex_color(get_theme_mod('sdc_woo_listing_add_cart_text_color','#000000'));
  $sdc_front_woo_category_card_background_color   = sanitize_hex_color(get_theme_mod('sdc_front_woo_category_card_background_color','#f6f6f6'));
  $front_woo_featured_product_card_color          = sanitize_hex_color(get_theme_mod('front_woo_featured_product_card_color','#ffffff'));
  $sdc_front_blogposts_card_color                 = sanitize_hex_color(get_theme_mod('sdc_front_blogposts_card_color','#ffffff'));
  $sdc_body_font_size                             = esc_attr(get_theme_mod('sdc_body_font_size','16px'));
  $sdc_menu_font_size                             = esc_attr(get_theme_mod('sdc_menu_font_size','18px'));
  $sdc_customizer_primary_menu_font_size          = esc_attr(get_theme_mod('sdc_customizer_primary_menu_font_size','16px'));
  $sdc_customizer_secondary_menu_font_size        = esc_attr(get_theme_mod('sdc_customizer_secondary_menu_font_size','16px'));
  $font_preset                                    = esc_attr(get_theme_mod('sdc_preset_font', 'sinssp'));
  $font_preset_title                              = sdc_font_preset_title($font_preset);
  $font_preset_body                               = sdc_font_preset_body($font_preset);
  $sdc_body_weight                                = get_theme_mod('sdc_body_weight','normal');
  $sdc_title_weight                               = get_theme_mod('sdc_title_weight','bold');
  $sdc_woo_listing_product_content_alignment      = get_theme_mod('sdc_woo_listing_product_content_alignment', 'left');
  $sdc_woo_cat_section_content_width              = get_theme_mod('sdc_woo_cat_section_content_width', false);
  $sdc_block_section_content_width                = get_theme_mod('sdc_block_section_content_width', false);
  $sdc_post_section_content_width                 = get_theme_mod('sdc_post_section_content_width', false);
  $sdc_customizer_homepage_width                  = get_theme_mod('sdc_customizer_homepage_width', 100);
  $sdc_customizer_homepage_content_width          = get_theme_mod('sdc_customizer_homepage_content_width', 1200);
  $sdc_customizer_header_width                    = get_theme_mod('sdc_customizer_header_width', 1200);
  $sdc_post_archive_content_width                 = get_theme_mod('sdc_post_archive_content_width', 1200);
  $sdc_customizer_single_post_width               = get_theme_mod('sdc_customizer_single_post_width', 1200);
  $sdc_customizer_footer_width                    = get_theme_mod('sdc_customizer_footer_width', 1200);

?>

  <style type="text/css">
  body,button,input,select,textarea{font-family: <?php echo $font_preset_body;?>; font-size:<?php echo $sdc_body_font_size;?>; font-weight:<?php echo $sdc_body_weight;?>;}
  h1,h2,h3,h4,h5,h6{font-family: <?php echo $font_preset_title; ?>; font-weight:<?php echo $sdc_title_weight;?>;}
  .main-navigation ul li a{font-size:<?php echo $sdc_menu_font_size;?>;}
  .element-title--post{color:<?php echo $sdc_post_archive_heading_color;?>;}
  .layout-golden--one__right,.blog__post--lb-2,.blog-post__thumbnail--l4,.post-item--l4 .blog__post__bottom,.blog__post--l5{background-color:<?php echo $sdc_post_archive_card_color;?>;}
  .product_title, .category_title,.woocommerce-loop-category__title,.woocommerce-loop-product__title,.related.products h2,.wc-tabs li a,.up-sells h2 {font-family: <?php echo $font_preset_title; ?>;}
  .woocommerce-tabs ul.tabs li.active,.woocommerce-tabs .panel{background-color:<?php echo $sdc_woo_single_data_tab_color;?>;}
  .product_title.entry-title,.woocommerce-tabs .panel h2:first-of-type{color:<?php echo $sdc_woo_single_product_title_color;?>;}
  .woocommerce-Tabs-panel,.woocommerce-product-details__short-description{color:<?php echo $sdc_woo_single_product_desc_color;?>;}
  .storefront-full-width-content .woocommerce-products-header,.term-description,.woocommerce-products-header__title,.woocommerce-breadcrumb{text-align:<?php echo $sdc_woo_listing_product_content_alignment;?> !important; float:none !important;}
  .star-rating span:before,p.stars a:hover:after,p.stars a:after,.star-rating span:before{color:<?php echo $sdc_woo_listing_star_color;?>;}
  .footer-widgets .widget-title {color:<?php echo $sdc_footer_customizer_widget_header_color?>;}
  .footer-widgets .widget{color:<?php echo $sdc_footer_customizer_widget_text_color?>; background-color:<?php echo $sdc_footer_customizer_widget_card_color?>;}
  .footer-widgets .widget a{color:<?php echo $sdc_footer_customizer_widget_link_color?> !important;}
  .secondary-navigation ul li a,.secondary-navigation ul li > a{font-size: <?php echo $sdc_customizer_secondary_menu_font_size;?>;}
  .secondary-navigation ul.menu a:hover{color:<?php echo $sdc_customizer_secondary_menu_hover_color;?>;}
  .site-header .secondary-navigation ul.menu li.current-menu-item > a{color:<?php echo $sdc_customizer_secondary_menu_active_color;?>;}
  .secondary-navigation ul.menu ul.sub-menu{background-color:<?php echo $sdc_customizer_secondary_menu_drop_backcolor;?>;}
  .secondary-navigation ul.menu ul.sub-menu a{color:<?php echo $sdc_customizer_secondary_menu_drop_color;?>;}
  .site-header-cart li,.main-navigation ul li a,.main-navigation ul li > a{font-size: <?php echo $sdc_customizer_primary_menu_font_size;?> !important;}
  .site-header-cart li a:hover,.main-navigation ul li a:hover,.main-navigation ul li:hover > a{color:<?php echo $sdc_customizer_primary_menu_hover_color;?>;}
  .site-header .primary-navigation ul.menu li.current-menu-item > a{color:<?php echo $sdc_customizer_primary_menu_active_color;?>;}
  .main-navigation ul.menu ul.sub-menu{background-color:<?php echo $sdc_customizer_primary_menu_drop_backcolor;?>;}
  .main-navigation ul.menu ul.sub-menu a{color:<?php echo $sdc_customizer_primary_menu_drop_color;?>;}
  .main-navigation{background-color:<?php echo $sdc_customizer_primary_menu_holder_color;?>;}
  .site-header .col-full{max-width:<?php echo $sdc_customizer_header_width?>px !important;}
  .page-template-template-homepage .col-full{max-width:<?php echo $sdc_customizer_homepage_width?>%;}
  .page-template-template-homepage .canvas--front{max-width:<?php echo $sdc_customizer_homepage_content_width?>px;}
  .archive .site-content .col-full{max-width:<?php echo $sdc_post_archive_content_width?>px;}
  .single-post .site-content .col-full{max-width:<?php echo $sdc_customizer_single_post_width?>px;}
  .site-footer .col-full{max-width:<?php echo $sdc_customizer_footer_width?>px;}
  .woocommerce span.onsale,.product .onsale{color:<?php echo $sdc_woo_listing_sale_badge_color;?>;background-color:<?php echo $sdc_woo_listing_sale_badge_background_color;?>;}
  .cart .single_add_to_cart_button,.add_to_cart_button,.added_to_cart{background-color: <?php echo $sdc_woo_listing_add_cart_color;?>;color: <?php echo $sdc_woo_listing_add_cart_text_color;?>;}
  .front-product-category__card__inner,.front-product-category__card__inner--l2,.front-product-category__card__inner--l3,.front-product-category__card__inner--l5{background-color:<?php echo $sdc_front_woo_category_card_background_color;?>; }
  .front-blog .layout-golden--one__right,.front-blog .blog__post--lb-2,.front-blog .blog-post__thumbnail--l4,.front-blog .post-item--l4 .blog__post__bottom,.front-blog .blog__post--l5 {background-color:<?php echo $sdc_front_blogposts_card_color;?>;}

    <?php if($sdc_woo_cat_section_content_width == true): ?>
            .front-product-category .canvas--front{ max-width: 100%; padding-left: 2em; padding-right: 2em;}
    <?php endif;?>

    <?php if($sdc_block_section_content_width == true){?>
      .front-feature-blocks .canvas--front{max-width: 100%; padding-left: 2em; padding-right: 2em;
      }
    <?php } ?>

    <?php if($sdc_post_section_content_width == true){?>
      .front-blog .canvas--front{max-width: 100%; padding-left: 2em; padding-right: 2em;}
    <?php } ?>

   <?php if(!empty($sdc_footer_customizer_background_image)){?>
      .site-footer{ background-image:url("<?php echo $sdc_footer_customizer_background_image;?>"); background-repeat: no-repeat; background-position: center;}
    <?php } ?>

  </style>
<?php
}