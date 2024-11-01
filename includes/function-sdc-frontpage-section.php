<?php

function sdc_check_section_image($background_image){
        if(!empty($background_image)){
            return "background-image: url('$background_image');";
        }
}

function sdc_check_section_color($background_color){
        if(!empty($background_color)){
            return "background-color:$background_color;";
        }
}

/**
* Switches Two Column Content Class
*/
function sdc_section_header_class_switcher($value){
    switch ($value){
       case 1:
           return 'col-md-12';
           break;
       case 2:
           return 'col-md-3 section-title--left';
           break;
       default:
           return 'col-md-3 col-md-push-9 section-title--right';
           break;
    }
}

/**
* Switches Two Column Content Class
*/
function sdc_section_content_class_switcher($value){
    switch ($value){
       case 1:
           return 'col-md-12';
           break;
       case 2:
           return 'col-md-9 section-content--right';
           break;
       default:
           return 'col-md-9 col-md-pull-3 section-content--left';
           break;
    }
}

function sdc_front_block_layout_one(){

	$sdc_feature_block_title_one 			= get_theme_mod('sdc_feature_block_title_one');
	$sdc_feature_block_image_one 			= get_theme_mod('sdc_feature_block_image_one');
	$sdc_feature_block_content_one 			= get_theme_mod('sdc_feature_block_content_one');
	$sdc_feature_block_title_two 			= get_theme_mod('sdc_feature_block_title_two');
	$sdc_feature_block_image_two 			= get_theme_mod('sdc_feature_block_image_two');
	$sdc_feature_block_content_two 			= get_theme_mod('sdc_feature_block_content_two');
	$sdc_feature_block_title_three 			= get_theme_mod('sdc_feature_block_title_three');
	$sdc_feature_block_image_three 			= get_theme_mod('sdc_feature_block_image_three');
	$sdc_feature_block_content_three 		= get_theme_mod('sdc_feature_block_content_three');
	$sdc_feature_block_title_four 			= get_theme_mod('sdc_feature_block_title_four');
	$sdc_feature_block_image_four 			= get_theme_mod('sdc_feature_block_image_four');
	$sdc_feature_block_content_four 		= get_theme_mod('sdc_feature_block_content_four');
	$sdc_feature_block_row 					= get_theme_mod('sdc_feature_block_row','col-sm-3');

	if ($sdc_feature_block_title_one or $sdc_feature_block_image_one or $sdc_feature_block_content_one ): ?>

<div class="<?php echo esc_attr($sdc_feature_block_row );?>">
<div class="feature-block__inner text-center">
	<?php
	// Block Image
	if (!empty($sdc_feature_block_image_one)): ?>
		<img src="<?php echo esc_url($sdc_feature_block_image_one);?>" >
	<?php endif; ?>

	<div class="feature-block__content">

	<?php
	// Block Title
	if(!empty($sdc_feature_block_title_one)):?>
		<h3 class="block-title"><?php echo do_shortcode(wp_kses_post($sdc_feature_block_title_one));?></h3>
	<?php endif;?>

	<?php
	// Block Content
	if (!empty($sdc_feature_block_content_one )): ?>
		<p><?php echo do_shortcode(wp_kses_post($sdc_feature_block_content_one)); ?></p>
	<?php endif; ?>
	</div>
</div>
</div>

<?php endif;?>


<?php
/*--------------------------------------------------------------
## Block Two
--------------------------------------------------------------*/

if ($sdc_feature_block_image_two or $sdc_feature_block_title_two or $sdc_feature_block_content_two ): ?>

<div class="<?php echo esc_attr($sdc_feature_block_row );?>">
<div class="feature-block__inner text-center">

	<?php
	// Block Image
	if (!empty($sdc_feature_block_image_two)): ?>
		<img src="<?php echo esc_url($sdc_feature_block_image_two);?>">
	<?php endif; ?>

	<div class="feature-block__content">
	<?php
	// Block Title
	if(!empty($sdc_feature_block_title_two)):?>
		<h3 class="block-title"><?php echo do_shortcode(wp_kses_post($sdc_feature_block_title_two));?></h3>
	<?php endif;?>

	<?php
	// Block Content
	if (!empty($sdc_feature_block_content_two)): ?>
		<p><?php echo do_shortcode(wp_kses_post($sdc_feature_block_content_two)); ?></p>
	<?php endif; ?>
	</div>
</div>
</div>

<?php endif;?>


<?php
/*--------------------------------------------------------------
## Block Three
--------------------------------------------------------------*/

if ($sdc_feature_block_image_three or $sdc_feature_block_title_three or $sdc_feature_block_content_three ): ?>

<div class="<?php echo esc_attr($sdc_feature_block_row );?>">
<div class="feature-block__inner text-center">
	<?php
	// Block Image
	if (!empty($sdc_feature_block_image_three)): ?>
		<img src="<?php echo esc_url($sdc_feature_block_image_three);?>">
	<?php endif; ?>

	<div class="feature-block__content">

	<?php
	// Block Title
	if(!empty($sdc_feature_block_title_three)):?>
		<h3 class="block-title"><?php echo do_shortcode(wp_kses_post($sdc_feature_block_title_three));?></h3>
	<?php endif;?>

	<?php
	// Block Content
	if (!empty($sdc_feature_block_content_three )): ?>
		<p><?php echo do_shortcode(wp_kses_post($sdc_feature_block_content_three)); ?></p>
	<?php endif; ?>
	</div>
</div>
</div>
<?php endif;?>


<?php
/*--------------------------------------------------------------
## Block Four
--------------------------------------------------------------*/

if ($sdc_feature_block_image_four or $sdc_feature_block_title_four or $sdc_feature_block_content_four ): ?>

<div class="<?php echo esc_attr($sdc_feature_block_row );?>">
<div class="feature-block__inner text-center">
	<?php
	// Block Image
	if (!empty($sdc_feature_block_image_four)): ?>
		<img src="<?php echo esc_url($sdc_feature_block_image_four);?>">
	<?php endif; ?>

	<div class="feature-block__content">

	<?php
	// Block Title
	if(!empty($sdc_feature_block_title_four)):?>
		<h3 class="block-title"><?php echo do_shortcode(wp_kses_post($sdc_feature_block_title_four));?></h3>
	<?php endif;?>

	<?php
	// Block Content
	if (!empty($sdc_feature_block_content_four )): ?>
		<p><?php echo do_shortcode(wp_kses_post($sdc_feature_block_content_four)); ?></p>
	<?php endif; ?>
	</div>
</div>
</div>
<?php endif;

}


function sdc_front_block_layout_two(){

	$sdc_feature_block_title_one 			= get_theme_mod('sdc_feature_block_title_one');
	$sdc_feature_block_image_one 			= get_theme_mod('sdc_feature_block_image_one');
	$sdc_feature_block_content_one 			= get_theme_mod('sdc_feature_block_content_one');
	$sdc_feature_block_title_two 			= get_theme_mod('sdc_feature_block_title_two');
	$sdc_feature_block_image_two 			= get_theme_mod('sdc_feature_block_image_two');
	$sdc_feature_block_content_two 			= get_theme_mod('sdc_feature_block_content_two');
	$sdc_feature_block_title_three 			= get_theme_mod('sdc_feature_block_title_three');
	$sdc_feature_block_image_three 			= get_theme_mod('sdc_feature_block_image_three');
	$sdc_feature_block_content_three 		= get_theme_mod('sdc_feature_block_content_three');
	$sdc_feature_block_title_four 			= get_theme_mod('sdc_feature_block_title_four');
	$sdc_feature_block_image_four 			= get_theme_mod('sdc_feature_block_image_four');
	$sdc_feature_block_content_four 		= get_theme_mod('sdc_feature_block_content_four');
	$sdc_feature_block_row 					= get_theme_mod('sdc_feature_block_row','col-sm-3');

if ($sdc_feature_block_title_one or $sdc_feature_block_image_one or $sdc_feature_block_content_one ): ?>

<div class="feature-block <?php echo esc_attr($sdc_feature_block_row );?>">
<div class="feature-block__inner text-center">

	<?php if (!empty($sdc_feature_block_image_one)): ?>
		<img src="<?php echo $sdc_feature_block_image_one;?>">
	<?php endif; ?>

	<?php if(!empty($sdc_feature_block_title_one)): ?>
		  <h3 class="block-title">
		  <?php echo do_shortcode(wp_kses_post($sdc_feature_block_title_one));?>
		  </h3>
	<?php endif;?>

	<div class="feature-block__content--l2 animated flipInY">

		<?php if (!empty($sdc_feature_block_content_one)): ?>
			<p>
				<?php echo do_shortcode(wp_kses_post($sdc_feature_block_content_one)); ?>
			</p>
		<?php endif; ?>
	</div>
</div>
</div>
<?php endif;?>

<?php
/* Block Two */

if ($sdc_feature_block_image_two or $sdc_feature_block_title_two or $sdc_feature_block_content_two ): ?>

<div class="feature-block <?php echo esc_attr($sdc_feature_block_row );?>">
<div class="feature-block__inner text-center">

	<?php if (!empty($sdc_feature_block_image_two)): ?>
		<img src="<?php echo esc_url($sdc_feature_block_image_two);?>" >
	<?php endif; ?>

	<?php if(!empty($sdc_feature_block_title_two)):?>
		  <h3 class="block-title"><?php echo do_shortcode(wp_kses_post($sdc_feature_block_title_two));?></h3>
	<?php endif;?>

	<div class="feature-block__content--l2 animated flipInY">

		<?php if (!empty($sdc_feature_block_content_two)): ?>
			<p><?php echo do_shortcode(wp_kses_post($sdc_feature_block_content_two)); ?></p>
		<?php endif; ?>
	</div>
</div>
</div>
<?php endif;?>

<?php
/* Block Three */
if ($sdc_feature_block_image_three or $sdc_feature_block_title_three or $sdc_feature_block_content_three ): ?>

<div class="feature-block <?php echo esc_attr($sdc_feature_block_row );?>">
<div class="feature-block__inner text-center">

	<?php if (!empty($sdc_feature_block_image_three)): ?>
		<img src="<?php echo esc_url($sdc_feature_block_image_three);?>" >
	<?php endif; ?>

	<?php if(!empty($sdc_feature_block_title_three)):?>
		  <h3 class="block-title"><?php echo do_shortcode(wp_kses_post($sdc_feature_block_title_three));?></h3>
	<?php endif;?>

	<div class="feature-block__content--l2 animated flipInY">
		<?php if (!empty($sdc_feature_block_content_three)): ?>
			<p><?php echo do_shortcode(wp_kses_post($sdc_feature_block_content_three)); ?></p>
		<?php endif; ?>
	</div>

</div>
</div>
<?php endif;?>


<?php
/* Block Four */
if ($sdc_feature_block_image_four or $sdc_feature_block_title_four or $sdc_feature_block_content_four ): ?>

<div class="feature-block <?php echo esc_attr($sdc_feature_block_row );?>">
<div class="feature-block__inner text-center">

	<?php if (!empty($sdc_feature_block_image_four)): ?>
		<img src="<?php echo esc_url($sdc_feature_block_image_four);?>" >
	<?php endif; ?>

	<?php if(!empty($sdc_feature_block_title_four)):?>
		  <h3 class="block-title"><?php echo do_shortcode(wp_kses_post($sdc_feature_block_title_four));?></h3>
	<?php endif;?>

	<div class="feature-block__content--l2 animated flipInY">
		<?php if (!empty($sdc_feature_block_content_four)): ?>
			<p><?php echo do_shortcode(wp_kses_post($sdc_feature_block_content_four)); ?></p>
		<?php endif; ?>
	</div>

</div>
</div>
<?php endif;

}


function front_blog_post_layout_one(){
	$sdc_front_column_post_archive = get_theme_mod('sdc_front_column_post_archive', 'col-md-12');
?>
<article id="post-<?php the_ID(); ?>" class="<?php echo $sdc_front_column_post_archive;?>" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
<div class="row">
<div class="blog__post">

	<div class="col-md-8 layout-golden--one__left">
		<?php echo storefront_post_thumbnail();?>
    </div> <!-- layout left end -->

    <div class="col-md-4 layout-golden--one__right">
	    <div class="blog__post__right">
	    	<div class="blog-post__meta">

		    	<meta itemprop="author" content="<?php the_author_link(); ?>">
	    	</div>
		    <header class="entry-header">
				<?php the_title( sprintf( '<h3 itemprop="headline" class="entry-title"><a href="%s" class="element-title element-title--post" rel="bookmark" itemprop="name">',
				esc_url( get_permalink() ) ), '</a></h3>' ); ?>
			</header><!-- .entry-header -->
		    <div class="blog__post__excerpt" itemprop="description">
		       <?php
					the_excerpt();
				?>
		    </div><!-- .blog__post__excerpt -->
	    </div><!-- Blog Post right end -->
    </div><!-- layout right end -->
</div>
</div>
</article><!-- #post-## -->
<?php }

function front_blog_post_layout_two(){
	$sdc_front_column_post_archive = get_theme_mod('sdc_front_column_post_archive', 'col-md-12');
?>
<article id="post-<?php the_ID(); ?>" class="<?php echo $sdc_front_column_post_archive;?> blog__post--lb-2" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
<div class="row flexify--center">
	<header class="col-md-4 col-sm-4 entry-header entry-header--lb-2">
		<?php
			the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark" itemprop="name">', esc_url( get_permalink() ) ), '</a></h3>' );
			sdc_published_on();
		?>
	</header><!-- .entry-header -->
	<div class="col-md-4 col-sm-4 excerpt--lb-2" itemprop="description">

		<?php the_excerpt( sprintf(
			/* translators: %s: Name of current post. */
			wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'storefront-design-customizer' ),
				array( 'span' => array( 'class' => array() ) ) ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		) );
		?>
	</div>
	<div class="col-md-4 col-sm-4 featured-image--lb-2">
		<?php echo storefront_post_thumbnail();?>
	</div>
</div>
</article><!-- #post-## -->
<?php }



/*--------------------------------------------------------------
## Feature Blocks
--------------------------------------------------------------*/

function sdc_front_feature_blocks(){

	$sdc_feature_blocks_title 				= get_theme_mod('sdc_feature_blocks_title');
	$sdc_feature_block_title_one 			= get_theme_mod('sdc_feature_block_title_one');
	$sdc_feature_block_image_one 			= get_theme_mod('sdc_feature_block_image_one');
	$sdc_feature_block_content_one 			= get_theme_mod('sdc_feature_block_content_one');
	$sdc_feature_block_title_two 			= get_theme_mod('sdc_feature_block_title_two');
	$sdc_feature_block_image_two 			= get_theme_mod('sdc_feature_block_image_two');
	$sdc_feature_block_content_two 			= get_theme_mod('sdc_feature_block_content_two');
	$sdc_feature_block_title_three 			= get_theme_mod('sdc_feature_block_title_three');
	$sdc_feature_block_image_three 			= get_theme_mod('sdc_feature_block_image_three');
	$sdc_feature_block_content_three 		= get_theme_mod('sdc_feature_block_content_three');
	$sdc_feature_block_title_four 			= get_theme_mod('sdc_feature_block_title_four');
	$sdc_feature_block_image_four 			= get_theme_mod('sdc_feature_block_image_four');
	$sdc_feature_block_content_four 		= get_theme_mod('sdc_feature_block_content_four');
	$sdc_feature_block_row 					= get_theme_mod('sdc_feature_block_row', 'col-sm-3');
	$sdc_feature_block_layout 				= get_theme_mod('sdc_feature_block_layout', 1);
?>


<section class="front-feature-blocks">
<div class="canvas--front">

		<div class="front-section__title">
			<h2 class="section-title">
				<?php echo $sdc_feature_blocks_title;?>
			</h2>
		</div>

	<div class="row">
<?php

		if ( absint($sdc_feature_block_layout) === 1 ){
			sdc_front_block_layout_one();
		}else{
			sdc_front_block_layout_two();
		}

?>
	</div>
	</div>
	</section>

	<?php
}



/*--------------------------------------------------------------
## Frontpage Blogposts
--------------------------------------------------------------*/

function sdc_front_blog_posts(){
$sdc_blogposts_background_color	= sanitize_hex_color(get_theme_mod('sdc_blogposts_background_color', '#f6f6f6'));
$sdc_blogposts_background_image = esc_url(get_theme_mod('sdc_blogposts_background_image'));
$sdc_home_blogposts_layout = get_theme_mod('sdc_home_blogposts_layout', 1);
$sdc_front_post_category_selector = get_theme_mod('sdc_front_post_category_selector');
$sdc_blog_front_post_per_page_select = get_theme_mod('sdc_blog_front_post_per_page_select', 6);
$sdc_home_blogposts_description = get_theme_mod('sdc_home_blogposts_description');
$sdc_home_blogposts_title = get_theme_mod('sdc_home_blogposts_title');
$sdc_front_column_post_archive = get_theme_mod('sdc_front_column_post_archive', 'col-md-12');
?>



<section class="front-blog" style="<?php echo sdc_check_section_image($sdc_blogposts_background_image),sdc_check_section_color($sdc_blogposts_background_color);?>">
<div class="canvas--front">

	<div class="front-section__title">
	    <?php
	    	if(!empty($sdc_home_blogposts_title )):?>
		    	<h2 class="element-title element-title--main">
					<?php echo do_shortcode(wp_kses_post($sdc_home_blogposts_title));?>
				</h2>
		<?php endif;?>

	    <?php
	    	if(!empty($sdc_home_blogposts_description )):?>
	    		<p class="element-title--sub">
					<?php echo do_shortcode(wp_kses_post($sdc_home_blogposts_description));?>
				</p>
		<?php endif; ?>
	</div>

	<div class="posts__grid">
	<div class="row">
		<?php

			$post_cat_id = absint( $sdc_front_post_category_selector );
			$args = array(
				'post_type' 		=> 'post',
				'posts_per_page' 	=> absint($sdc_blog_front_post_per_page_select),
				'orderby' 			=> 'date',
				'order' 			=> 'DESC',
				'cat'				=> $post_cat_id,
				);

			if(has_filter('sdc_front_blog_post_args')) {
				$args = apply_filters('sdc_front_blog_post_args', $args);
			}

			$loop = new WP_Query( $args );
			if ( $loop->have_posts() ) {
				while ( $loop->have_posts() ) : $loop->the_post();

					if ( absint($sdc_home_blogposts_layout) === 1 ){
						front_blog_post_layout_one();
					}else{
						front_blog_post_layout_two();
					}
				endwhile;
			}
			wp_reset_postdata();
		?>
	</div>
	</div>

</section><!-- Front Blog ends -->

<?php
}





// Frontpage Category
function home_storefront_product_category_title( $args ) {
	$storefront_front_product_cat_back_title = get_theme_mod('storefront_front_product_cat_back_title');
	$args['title'] = $storefront_front_product_cat_back_title;
	return $args;
}


function home_storefront_product_category_description(){
	$storefront_front_product_cat_back_des = get_theme_mod('storefront_front_product_cat_back_des');?>
	<p class="element-title--sub"><?php echo $storefront_front_product_cat_back_des;?></p>
<?php }



function home_storefront_product_category_align_title_open(){
	$storefront_frontpage_product_cat_pos = get_theme_mod('storefront_frontpage_product_cat_pos', 1);?>

  <div class="row">
  <div class="<?php echo sdc_section_header_class_switcher($storefront_frontpage_product_cat_pos);?>">
  <div class="row">
  <div class="front-section__title">

<?php }

function home_storefront_product_category_align_title_close(){?>

	</div>
	</div>
	</div>
<?php }


function home_storefront_product_category_align_content_open(){
	$storefront_frontpage_product_cat_pos = get_theme_mod('storefront_frontpage_product_cat_pos', 1);?>

  <div class="product__categories <?php echo sdc_section_content_class_switcher($storefront_frontpage_product_cat_pos);?>">
  <div class="row">
<?php }

function home_storefront_product_category_align_content_close(){?>

	</div>
	</div>
	</div>
<?php }



// Frontpage Recent
function home_storefront_product_recent_title( $args ) {
	$storefront_front_product_recent_back_title = get_theme_mod('storefront_front_product_recent_back_title');
	$args['title'] = $storefront_front_product_recent_back_title;
	return $args;
}


function home_storefront_product_recent_description(){
	$storefront_front_product_recent_back_des = get_theme_mod('storefront_front_product_recent_back_des');?>
	<p class="element-title--sub"><?php echo $storefront_front_product_recent_back_des;?></p>
<?php }



function home_storefront_product_recent_align_title_open(){
	$storefront_frontpage_product_recent_pos = get_theme_mod('storefront_frontpage_product_recent_pos', 1);?>

  <div class="row">
  <div class="<?php echo sdc_section_header_class_switcher($storefront_frontpage_product_recent_pos);?>">
  <div class="row">
  <div class="front-section__title">

<?php }

function home_storefront_product_recent_align_title_close(){?>

	</div>
	</div>
	</div>
<?php }


function home_storefront_product_recent_align_content_open(){
	$storefront_frontpage_product_recent_pos = get_theme_mod('storefront_frontpage_product_recent_pos', 1);?>

  <div class="products__recent <?php echo sdc_section_content_class_switcher($storefront_frontpage_product_recent_pos);?>">
  <div class="row">
<?php }

function home_storefront_product_recent_align_content_close(){?>

	</div>
	</div>
	</div>
<?php }



// Frontpage Featured Products
function home_storefront_product_featured_title( $args ) {
	$storefront_front_product_featured_back_title = get_theme_mod('storefront_front_product_featured_back_title');
	$args['title'] = $storefront_front_product_featured_back_title;
	return $args;
}


function home_storefront_product_featured_description(){
	$storefront_front_product_featured_back_des = get_theme_mod('storefront_front_product_featured_back_des');?>
	<p class="element-title--sub"><?php echo $storefront_front_product_featured_back_des;?></p>
<?php }



function home_storefront_product_featured_align_title_open(){
	$storefront_frontpage_product_featured_pos = get_theme_mod('storefront_frontpage_product_featured_pos', 1);?>

  <div class="row">
  <div class="<?php echo sdc_section_header_class_switcher($storefront_frontpage_product_featured_pos);?>">
  <div class="row">
  <div class="front-section__title">

<?php }

function home_storefront_product_featured_align_title_close(){?>

	</div>
	</div>
	</div>
<?php }


function home_storefront_product_featured_align_content_open(){
	$storefront_frontpage_product_featured_pos = get_theme_mod('storefront_frontpage_product_featured_pos', 1);?>

  <div class="products__featured <?php echo sdc_section_content_class_switcher($storefront_frontpage_product_featured_pos);?>">
  <div class="row">
<?php }

function home_storefront_product_featured_align_content_close(){?>

	</div>
	</div>
	</div>
<?php }



// Popular Featured Products
function home_storefront_product_popular_title( $args ) {
	$storefront_front_product_popular_back_title = get_theme_mod('storefront_front_product_popular_back_title');
	$args['title'] = $storefront_front_product_popular_back_title;
	return $args;
}


function home_storefront_product_popular_description(){
	$storefront_front_product_popular_back_des = get_theme_mod('storefront_front_product_popular_back_des');?>
	<p class="element-title--sub"><?php echo $storefront_front_product_popular_back_des;?></p>
<?php }



function home_storefront_product_popular_align_title_open(){
	$storefront_frontpage_product_popular_pos = get_theme_mod('storefront_frontpage_product_popular_pos', 1);?>

  <div class="row">
  <div class="<?php echo sdc_section_header_class_switcher($storefront_frontpage_product_popular_pos);?>">
  <div class="row">
  <div class="front-section__title">

<?php }

function home_storefront_product_popular_align_title_close(){?>

	</div>
	</div>
	</div>
<?php }


function home_storefront_product_popular_align_content_open(){
	$storefront_frontpage_product_popular_pos = get_theme_mod('storefront_frontpage_product_popular_pos', 1);?>

  <div class="products__popular <?php echo sdc_section_content_class_switcher($storefront_frontpage_product_popular_pos);?>">
  <div class="row">
<?php }

function home_storefront_product_popular_align_content_close(){?>

	</div>
	</div>
	</div>
<?php }

// On Sale Products
function home_storefront_product_sale_title( $args ) {
	$storefront_front_product_sale_back_title = get_theme_mod('storefront_front_product_sale_back_title');
	$args['title'] = $storefront_front_product_sale_back_title;
	return $args;
}


function home_storefront_product_sale_description(){
	$storefront_front_product_sale_back_des = get_theme_mod('storefront_front_product_sale_back_des');?>
	<p class="element-title--sub"><?php echo $storefront_front_product_sale_back_des;?></p>
<?php }



function home_storefront_product_sale_align_title_open(){
	$storefront_frontpage_product_sale_pos = get_theme_mod('storefront_frontpage_product_sale_pos', 1);?>

  <div class="row">
  <div class="<?php echo sdc_section_header_class_switcher($storefront_frontpage_product_sale_pos);?>">
  <div class="row">
  <div class="front-section__title">

<?php }

function home_storefront_product_sale_align_title_close(){?>

	</div>
	</div>
	</div>
<?php }


function home_storefront_product_sale_align_content_open(){
	$storefront_frontpage_product_sale_pos = get_theme_mod('storefront_frontpage_product_sale_pos', 1);?>

  <div class="products__sale <?php echo sdc_section_content_class_switcher($storefront_frontpage_product_sale_pos);?>">
  <div class="row">
<?php }

function home_storefront_product_sale_align_content_close(){?>

	</div>
	</div>
	</div>
<?php }


// Best Sellingd Products
function home_storefront_product_best_title( $args ) {
	$storefront_front_product_best_back_title = get_theme_mod('storefront_front_product_best_back_title');
	$args['title'] = $storefront_front_product_best_back_title;
	return $args;
}


function home_storefront_product_best_description(){
	$storefront_front_product_best_back_des = get_theme_mod('storefront_front_product_best_back_des');?>
	<p class="element-title--sub"><?php echo $storefront_front_product_best_back_des;?></p>
<?php }



function home_storefront_product_best_align_title_open(){
	$storefront_frontpage_product_best_pos = get_theme_mod('storefront_frontpage_product_best_pos', 1);?>

  <div class="row">
  <div class="<?php echo sdc_section_header_class_switcher($storefront_frontpage_product_best_pos);?>">
  <div class="row">
  <div class="front-section__title">

<?php }

function home_storefront_product_best_align_title_close(){?>

	</div>
	</div>
	</div>
<?php }


function home_storefront_product_best_align_content_open(){
	$storefront_frontpage_product_best_pos = get_theme_mod('storefront_frontpage_product_best_pos', 1);?>

  <div class="products__best <?php echo sdc_section_content_class_switcher($storefront_frontpage_product_best_pos);?>">
  <div class="row">
<?php }

function home_storefront_product_best_align_content_close(){?>

	</div>
	</div>
	</div>
<?php }

// Category Products
function home_storefront_category_per_row( $args ) {
	$storefront_front_product_cat_per_row = get_theme_mod('storefront_front_product_cat_per_row', 4);
	$args['columns'] = $storefront_front_product_cat_per_row;
	return $args;
}


// Category Products
function home_storefront_category_per_page( $args ) {
	$storefront_front_product_cat_per_page = get_theme_mod('storefront_front_product_cat_per_page', 4);
	$args['limit'] = $storefront_front_product_cat_per_page;
	return $args;
}

// Popular Featured Products
function home_storefront_popular_product_per_row( $args ) {
	$storefront_front_product_popular_per_row = get_theme_mod('storefront_front_product_popular_per_row', 4);
	$args['columns'] = $storefront_front_product_popular_per_row;
	return $args;
}


// Popular Featured Products
function home_storefront_popular_product_per_page( $args ) {
	$storefront_front_product_popular_per_page = get_theme_mod('storefront_front_product_popular_per_page', 4);
	$args['per_page'] = $storefront_front_product_popular_per_page;
	return $args;
}

// Popular Featured Products
function home_storefront_recent_product_per_row( $args ) {
	$storefront_front_product_recent_per_row = get_theme_mod('storefront_front_product_recent_per_row', 4);
	$args['columns'] = $storefront_front_product_recent_per_row;
	return $args;
}


// Popular Featured Products
function home_storefront_recent_product_per_page( $args ) {
	$storefront_front_product_recent_per_page = get_theme_mod('storefront_front_product_recent_per_page', 4);
	$args['per_page'] = $storefront_front_product_recent_per_page;
	return $args;
}


// Featured Featured Products
function home_storefront_featured_product_per_row( $args ) {
	$storefront_front_product_featured_per_row = get_theme_mod('storefront_front_product_featured_per_row', 4);
	$args['columns'] = $storefront_front_product_featured_per_row;
	return $args;
}


// Featured Featured Products
function home_storefront_featured_product_per_page( $args ) {
	$storefront_front_product_featured_per_page = get_theme_mod('storefront_front_product_featured_per_page', 4);
	$args['per_page'] = $storefront_front_product_featured_per_page;
	return $args;
}

// Sale  Products
function home_storefront_sale_product_per_row( $args ) {
	$storefront_front_product_sale_per_row = get_theme_mod('storefront_front_product_sale_per_row', 4);
	$args['columns'] = $storefront_front_product_sale_per_row;
	return $args;
}


//  Sale Products
function home_storefront_sale_product_per_page( $args ) {
	$storefront_front_product_sale_per_page = get_theme_mod('storefront_front_product_sale_per_page', 4);
	$args['per_page'] = $storefront_front_product_sale_per_page;
	return $args;
}

// Best Sale  Products
function home_storefront_best_product_per_row( $args ) {
	$storefront_front_product_best_per_row = get_theme_mod('storefront_front_product_best_per_row', 4);
	$args['columns'] = $storefront_front_product_best_per_row;
	return $args;
}


//  Best Sale Products
function home_storefront_best_product_per_page( $args ) {
	$storefront_front_product_best_per_page = get_theme_mod('storefront_front_product_best_per_page', 4);
	$args['per_page'] = $storefront_front_product_best_per_page;
	return $args;
}