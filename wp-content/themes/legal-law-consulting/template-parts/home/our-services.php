<?php
/**
 * Template part for displaying services section
 *
 * @package Legal Law Consulting
 * @subpackage legal_law_consulting
 */

?>

<div id="services" class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8 align-self-center">
        <?php if( get_theme_mod('legal_law_consulting_services_title') != ''){ ?>
          <h3><i class="fas fa-balance-scale mr-3"></i><?php echo esc_html(get_theme_mod('legal_law_consulting_services_title','')); ?></h3>
        <?php }?>
        <?php if( get_theme_mod('legal_law_consulting_services_text') != ''){ ?>
          <p class="mb-0"><?php echo esc_html(get_theme_mod('legal_law_consulting_services_text','')); ?></p>
        <?php }?>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 align-self-center">
        <?php if( get_theme_mod('legal_law_consulting_services_btn_text') != '' || get_theme_mod('legal_law_consulting_services_btn_url') != ''){ ?>
          <div class="book-tkt-btn text-center text-md-right">
            <a class="register-btn" href="<?php echo esc_url(get_theme_mod('legal_law_consulting_services_btn_url','')); ?>"><?php echo esc_html(get_theme_mod('legal_law_consulting_services_btn_text','')); ?></a>
          </div>
        <?php }?>
      </div>
    </div>
    <div class="row mt-5">
      <?php 
        $post_category = get_theme_mod('legal_law_consulting_services_section_category');
        if($post_category){
          $page_query = new WP_Query(array( 'category_name' => esc_html( $post_category ,'legal-law-consulting')));?>
          <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="box mb-4">
                <?php if(has_post_thumbnail()) { ?><?php the_post_thumbnail(); ?><?php } ?>
                <div class="box-content">
                  <h3 class="title"><i class="fas fa-balance-scale mr-3"></i><?php the_title(); ?></h3>
                  <p class="post"><?php $excerpt = get_the_excerpt(); echo esc_html( lawyer_hub_string_limit_words( $excerpt, '20')); ?></p>
                  <a href="<?php the_permalink(); ?>"><?php esc_html_e('Read More','legal-law-consulting'); ?></a>
                </div>
              </div>
            </div>
          <?php endwhile;
          wp_reset_postdata();
        }
      ?>
    </div>
  </div>
</div>