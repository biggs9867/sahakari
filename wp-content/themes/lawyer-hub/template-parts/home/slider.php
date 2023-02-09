<?php
/**
 * Template part for displaying slider section
 *
 * @package Lawyer Hub
 * @subpackage lawyer_hub
 */

?>

<?php if( get_theme_mod( 'lawyer_hub_slider_arrows') != '') { ?>

<section id="slider">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
    <?php $lawyer_hub_slide_pages = array();
      for ( $lawyer_hub_count = 1; $lawyer_hub_count <= 3; $lawyer_hub_count++ ) {
        $lawyer_hub_mod = intval( get_theme_mod( 'lawyer_hub_slider_page' . $lawyer_hub_count ));
        if ( 'page-none-selected' != $lawyer_hub_mod ) {
          $lawyer_hub_slide_pages[] = $lawyer_hub_mod;
        }
      }
      if( !empty($lawyer_hub_slide_pages) ) :
        $lawyer_hub_args = array(
          'post_type' => 'page',
          'post__in' => $lawyer_hub_slide_pages,
          'orderby' => 'post__in'
        );
        $lawyer_hub_query = new WP_Query( $lawyer_hub_args );
        if ( $lawyer_hub_query->have_posts() ) :
          $lawyer_hub_i = 1;
    ?>
    <div class="carousel-inner" role="listbox">
      <?php  while ( $lawyer_hub_query->have_posts() ) : $lawyer_hub_query->the_post(); ?>
        <div <?php if($lawyer_hub_i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
          <img src="<?php esc_url(the_post_thumbnail_url('full')); ?>"/>
          <div class="carousel-caption">
            <div class="inner_carousel">
              <h2><?php the_title(); ?></h2>
              <p><?php $excerpt = get_the_excerpt(); echo esc_html( lawyer_hub_string_limit_words( $excerpt, esc_attr(get_theme_mod('lawyer_hub_excerpt_count','35')))); ?></p>
              <div class="more-btn">
                <a href="<?php the_permalink(); ?>"><?php esc_html_e('READ MORE','lawyer-hub'); ?></a>
              </div>
            </div>
          </div>
        </div>
      <?php $lawyer_hub_i++; endwhile;
      wp_reset_postdata();?>
    </div>
    <?php else : ?>
        <div class="no-postfound"></div>
      <?php endif;
    endif;?>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
    </a>
  </div>
  <div class="clearfix"></div>
</section> 

<?php } ?>