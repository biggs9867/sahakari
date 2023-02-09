<?php
/*
* Display Logo and nav
*/
?>


<div class="container">
  <div class="headerbox">
    <div class="row">
      <div class="col-lg-4 col-md-12 col-sm-12 align-self-center">
        <?php $lawyer_hub_logo_settings = get_theme_mod( 'lawyer_hub_logo_settings','Different Line');
        if($lawyer_hub_logo_settings == 'Different Line'){ ?>
          <div class="logo mb-md-0 text-center text-lg-left">
            <?php if( has_custom_logo() ) lawyer_hub_the_custom_logo(); ?>
            <?php if(get_theme_mod('lawyer_hub_site_title',true) != ''){ ?>
              <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php }?>
            <?php $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
              <?php if(get_theme_mod('lawyer_hub_site_tagline',true) != ''){ ?>
                <p class="site-description mb-0"><?php echo esc_html($description); ?></p>
              <?php }?>
            <?php endif; ?>
          </div>
        <?php }else if($lawyer_hub_logo_settings == 'Same Line'){ ?>
          <div class="logo logo-same-line mb-md-0 text-center text-lg-left">
            <div class="row">
              <div class="col-lg-5 col-md-5 align-self-md-center">
                <?php if( has_custom_logo() ) lawyer_hub_the_custom_logo(); ?>
              </div>
              <div class="col-lg-7 col-md-7 align-self-md-center">
                <?php if(get_theme_mod('lawyer_hub_site_title',true) != ''){ ?>
                  <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php }?>
                <?php $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) : ?>
                  <?php if(get_theme_mod('lawyer_hub_site_tagline',true) != ''){ ?>
                    <p class="site-description mb-0"><?php echo esc_html($description); ?></p>
                  <?php }?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php }?>
      </div>
      <div class="col-lg-4 col-md-5 col-sm-5 align-self-center">
        <?php if( get_theme_mod( 'lawyer_hub_email_text' ) != '' || get_theme_mod( 'lawyer_hub_email_address' ) != '') { ?>
          <div class="row email-info text-center text-md-left py-3 py-md-0">
            <div class="col-lg-2 col-md-2 col-sm-2 align-self-center">
              <i class="far fa-envelope"></i>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10 align-self-center">
              <h6 class="mb-0"><?php echo esc_html( get_theme_mod('lawyer_hub_email_text','')); ?></h6>
              <p class="mb-0"><?php echo esc_html( get_theme_mod('lawyer_hub_email_address','')); ?></p>
            </div>
          </div>
        <?php } ?>
      </div>
      <div class="col-lg-3 col-md-5 col-sm-5 col-9 align-self-center">
        <div class="book-tkt-btn text-center text-md-right">
          <?php if( get_theme_mod( 'lawyer_hub_button_link' ) != '' || get_theme_mod( 'lawyer_hub_button_text' ) != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'lawyer_hub_button_link','' ) ); ?>" class="register-btn"><?php echo esc_html( get_theme_mod( 'lawyer_hub_button_text','' ) ); ?></a>
          <?php } ?>
        </div>
      </div>
      <div class="search-box col-lg-1 col-md-2 col-sm-2 col-3 align-self-center text-center text-md-right">
        <?php if(get_theme_mod('lawyer_hub_search_icon','') != ''){ ?>
          <button class="search_btn"><i class="fas fa-search"></i></button>
        <?php }?>
      </div>
    </div>
    <div class="search_outer">
      <div class="search_inner">
        <?php get_search_form(); ?>
      </div>
    </div>
  </div>
</div>
