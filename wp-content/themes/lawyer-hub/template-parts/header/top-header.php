<?php 
/*
* Display contact details
*/
?>

<div class="top-header py-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 align-self-center">
        <?php if( get_theme_mod( 'lawyer_hub_location_text' ) != '') { ?>
          <p class="mb-0"><i class="fas fa-map-marker-alt mr-2"></i><?php echo esc_html( get_theme_mod('lawyer_hub_location_text','')); ?></p>
        <?php } ?>
      </div>
      <div class="col-lg-4 col-md-4 align-self-center text-md-right text-center">
        <?php if( get_theme_mod( 'lawyer_hub_phone_number_text' ) != '') { ?>
          <p class="mb-0 phone-info"><i class="fas fa-phone mr-2"></i><?php echo esc_html( get_theme_mod('lawyer_hub_phone_number_text','')); ?></p>
        <?php } ?>
      </div>
    </div>
  </div>
</div>