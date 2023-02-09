<?php
/**
 * Template part for displaying about section
 *
 * @package Lawyer Hub
 * @subpackage lawyer_hub
 */

?>

<div class="container">
  <div id="about">
    <div class="row">
      <?php $lawyer_hub_about_page = array();
        $lawyer_hub_mod = absint( get_theme_mod( 'lawyer_hub_about_page' ));
        if ( 'page-none-selected' != $lawyer_hub_mod ) {
          $lawyer_hub_about_page[] = $lawyer_hub_mod;
        }
      if( !empty($lawyer_hub_about_page) ) :
        $lawyer_hub_args = array(
          'post_type' => 'page',
          'post__in' => $lawyer_hub_about_page,
          'orderby' => 'post__in'
        );
        $lawyer_hub_query = new WP_Query( $lawyer_hub_args );
        if ( $lawyer_hub_query->have_posts() ) :
          while ( $lawyer_hub_query->have_posts() ) : $lawyer_hub_query->the_post(); ?>
            <div class="col-lg-7 col-md-7 align-self-center">
              <?php if( get_theme_mod('lawyer_hub_about_title') != ''){ ?>
                <h3><i class="fas fa-balance-scale mr-3"></i><?php echo esc_html(get_theme_mod('lawyer_hub_about_title','')); ?></h3>
                <hr>
              <?php }?>
              <h4><?php the_title(); ?></h4>
              <p><?php the_excerpt(); ?></p>
              <div class="more-btn">
                <a href="<?php the_permalink(); ?>"><?php esc_html_e('READ MORE','lawyer-hub'); ?></a>
              </div>
            </div>
            <div class="col-lg-5 col-md-5 align-self-center">
              <?php the_post_thumbnail(); ?>
            </div>
          <?php endwhile; ?>
        <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
      endif;
      wp_reset_postdata()?>
      <div class="clearfix"></div> 
    </div>
  </div>
</div>