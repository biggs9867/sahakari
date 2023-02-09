<?php
/*
* Display Theme menus
*/
?>
<?php
$lawyer_hub_sticky = get_theme_mod('lawyer_hub_sticky');
    $data_sticky = "false";
    if ($lawyer_hub_sticky) {
    $data_sticky = "true";
    }
    global $wp_customize;
 ?>

<div class="innermenuboxupper <?php if( is_user_logged_in() && !isset( $wp_customize ) ){ echo "login-user";} ?>" data-sticky="<?php echo esc_attr($data_sticky); ?>">
	<div class="container">
		<div class="innermenubox">
			<div class="row">
				<div class="col-lg-9 col-md-5 col-sm-5 col-3 align-self-center">
					<?php if(has_nav_menu('primary-menu')){ ?>
							<div class="toggle-nav mobile-menu">
							<button onclick="lawyer_hub_menu_open_nav()" class="responsivetoggle"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Button','legal-law-consulting'); ?></span></button>
							</div>
					<?php }?>
					<div id="mySidenav" class="nav sidenav">
						<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'legal-law-consulting' ); ?>">
					      	<?php if(has_nav_menu('primary-menu')){
					          	wp_nav_menu( array(
					                'theme_location' => 'primary-menu',
					                'container_class' => 'main-menu clearfix' ,
					                'menu_class' => 'clearfix',
					                'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
					                'fallback_cb' => 'wp_page_menu',
					          	) );
					      	} ?>
								<a href="javascript:void(0)" class="closebtn mobile-menu" onclick="lawyer_hub_menu_close_nav()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Button','legal-law-consulting'); ?></span></a>
						</nav>
					</div>
				</div>
				<div class="col-lg-3 col-md-7 col-sm-7 col-9 align-self-center text-right">
			        <?php if( get_theme_mod( 'lawyer_hub_phone_number_text' ) != '') { ?>
		          		<p class="mb-0 phone-info"><i class="fas fa-phone mr-2"></i><?php echo esc_html( get_theme_mod('lawyer_hub_phone_number_text','')); ?></p>
			        <?php } ?>
		      	</div>
			</div>
		</div>
	</div>
</div>
