<?php

	$lawyer_hub_tp_theme_css = "";

	$lawyer_hub_theme_lay = get_theme_mod( 'lawyer_hub_tp_body_layout_settings','Full');
    if($lawyer_hub_theme_lay == 'Container'){
		$lawyer_hub_tp_theme_css .='body{';
			$lawyer_hub_tp_theme_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$lawyer_hub_tp_theme_css .='}';
		$lawyer_hub_tp_theme_css .='.page-template-front-page .menubar{';
			$lawyer_hub_tp_theme_css .='position: static;';
		$lawyer_hub_tp_theme_css .='}';
		$lawyer_hub_tp_theme_css .='.scrolled{';
			$lawyer_hub_tp_theme_css .='width: auto; left:0; right:0;';
		$lawyer_hub_tp_theme_css .='}';
	}else if($lawyer_hub_theme_lay == 'Container Fluid'){
		$lawyer_hub_tp_theme_css .='body{';
			$lawyer_hub_tp_theme_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$lawyer_hub_tp_theme_css .='}';
		$lawyer_hub_tp_theme_css .='.page-template-front-page .menubar{';
			$lawyer_hub_tp_theme_css .='width: 99%';
		$lawyer_hub_tp_theme_css .='}';		
		$lawyer_hub_tp_theme_css .='.scrolled{';
			$lawyer_hub_tp_theme_css .='width: auto; left:0; right:0;';
		$lawyer_hub_tp_theme_css .='}';
	}else if($lawyer_hub_theme_lay == 'Full'){
		$lawyer_hub_tp_theme_css .='body{';
			$lawyer_hub_tp_theme_css .='max-width: 100%;';
		$lawyer_hub_tp_theme_css .='}';
	}

    $lawyer_hub_scroll_position = get_theme_mod( 'lawyer_hub_scroll_top_position','Right');
    if($lawyer_hub_scroll_position == 'Right'){
        $lawyer_hub_tp_theme_css .='#return-to-top{';
            $lawyer_hub_tp_theme_css .='right: 20px;';
        $lawyer_hub_tp_theme_css .='}';
    }else if($lawyer_hub_scroll_position == 'Left'){
        $lawyer_hub_tp_theme_css .='#return-to-top{';
            $lawyer_hub_tp_theme_css .='left: 20px;';
        $lawyer_hub_tp_theme_css .='}';
    }else if($lawyer_hub_scroll_position == 'Center'){
        $lawyer_hub_tp_theme_css .='#return-to-top{';
            $lawyer_hub_tp_theme_css .='right: 50%;left: 50%;';
        $lawyer_hub_tp_theme_css .='}';
    }