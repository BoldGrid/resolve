<?php 
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {
	/**
	 * General Configs
	 */
	$boldgrid_framework_configs['theme_name'] = 'boldgrid-resolve'; // Text domain
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;
	$boldgrid_framework_configs['temp']['attribution_links'] = true;

	/**
	 * Customizer Configs
	 */
	$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;
	$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array (
		array (
			'default' => true,
			'format' => 'palette-primary',
			'colors' => array(
				'#ffffff',
				'#121012',
				'#18161a',
				'#84777d',
				'#121012',
			) 
		),
		array (
			'format' => 'palette-primary',
			'colors' => array(
				'#ffffff',
				'#1a2533',
				'#131c26',
				'#4e6f96',
				'#1a2533',
			) 
		),
		array (
			'format' => 'palette-primary',
			'colors' => array(
				'#e0e0e0',
				'#ffffff',
				'#666666',
				'#1a1a1a',
				'#ffffff',
			) 
		),
		array (
			'format' => 'palette-primary',
			'colors' => array(
				'#758c00',
				'#758c00',
				'#662946',
				'#ffffff',
				'#993d59',
			) 
		),
		array (
			'format' => 'palette-primary',
			'colors' => array(
				'#ffff00',
				'#ffff00',
				'#0072a3',
				'#10435e',
				'#00bbef',
			) 
		),
	);

	// Get Subcategory ID from the Database
	$boldgrid_install_options = get_option( 'boldgrid_install_options', array() );
	$subcategory_id = null;
	if ( !empty( $boldgrid_install_options['subcategory_id'] ) ) {
		$subcategory_id = $boldgrid_install_options['subcategory_id'];
	}

	// Override Options per Subcategory
	switch ( $subcategory_id ) {
		case 11: //<-- Design
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			break;
		case 15: //<-- Fitness
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			break;
		case 21: //<-- Consulting
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			break;
		case 32: //<-- General
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			break;

		// Default Behavior
		default:
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][0]['default'] = true;
			break;
	}

	// Text Contrast Colors
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#ffffff';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#121012';

	// Fonts & Icons
	$boldgrid_framework_configs['font']['types'] = array ( 'Yanone+Kaffeesatz:300,400|Fira+Mono:400,700' );
	$boldgrid_framework_configs['social-icons']['size'] = 'large';

	// Menu Locations
	$boldgrid_framework_configs['menu']['locations']['secondary'] = "Above Header";
	$boldgrid_framework_configs['menu']['locations']['tertiary'] = "Below Header";
	$boldgrid_framework_configs['menu']['locations']['social'] = "Social Media Menu";
	
	// Background
	$boldgrid_framework_configs['customizer-options']['background']['defaults']['background_attachment'] = 'parallax';

	/**
	 * Widgets
	 */
	$widget_markup['call-to-action'] = <<<HTML
		<div class="row call-to-action-wrapper">
			<div class="col-md-12">
				<div class="call-to-action">
					<h2 class="slogan">MUSIC. CULTURE. PASSION.</h2>
					<a class="button-primary" href="about-us">OUR STORY</a>
				</div>
			</div>
		</div>

HTML;

	// Widget 1
	$boldgrid_framework_configs['widget']['widget_instances']['boldgrid-widget-1'][] = array (
		'title' => 'Call To Action',
		'text' => $widget_markup['call-to-action'],
		'type' => 'visual',
		'filter' => 1,
		'label' => 'black-studio-tinymce'
	);

	// Name Widget Areas
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Below Site Title';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Above Site Title';

	// Configs above will override framework defaults
	return $boldgrid_framework_configs;
}

// These configs will be merged with the defaults
add_filter( 'boldgrid_theme_framework_config', 'boldgrid_theme_framework_config' );

/**
 * Site Title & Logo Controls
 */
function filter_logo_controls( $controls ) {
	$controls['logo_font_family']['default'] = 'Yanone Kaffeesatz';
	$controls['logo_font_size']['default'] = 97;
	$controls['logo_margin_top']['default'] = 15;
	$controls['logo_margin_bottom']['default'] = 25;
	$controls['logo_line_height']['default'] = 100;
	$controls['logo_letter_spacing']['default'] = 15;

	// Controls above will override framework defaults
	return $controls;
}
add_filter( 'kirki/fields', 'filter_logo_controls' );
