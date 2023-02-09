<?php
/**
 * Displays footer site info
 *
 * @package Lawyer Hub
 * @subpackage lawyer_hub
 */

?>
<div class="site-info">
    <div class="container">
      <p><?php lawyer_hub_credit(); ?> <?php echo esc_html(get_theme_mod('lawyer_hub_footer_text',__(' By Themespride','lawyer-hub'))); ?></p>
    </div>
</div>
