<?php
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {

	// Text Domain.
	$boldgrid_framework_configs['theme_name'] = 'boldgrid-resolve';

	// Enable Sticky Footer.
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;

	// Enable typography controls.
	$boldgrid_framework_configs['customizer-options']['typography']['enabled'] = true;

	// Enable attribution links.
	$boldgrid_framework_configs['temp']['attribution_links'] = true;

	// Enable template wrapper.
	$boldgrid_framework_configs['boldgrid-parent-theme'] = true;

	// Specify the parent theme's name.
	$boldgrid_framework_configs['parent-theme-name'] = 'prime';

	// Select the header template to use.
	$boldgrid_framework_configs['template']['header'] = 'generic';

	// Select the footer template to use.
	$boldgrid_framework_configs['template']['footer'] = 'generic';

	// Assign Locations for Generic Header.
	$boldgrid_framework_configs['template']['locations']['header'] = array(
		'1' => array( '[menu]secondary' ),
		'14' => array( '[action]boldgrid_primary_navigation' ),
		'15' => array( '[menu]social' ),
		'5' => array( '[widget]boldgrid-widget-2' ),
	);

	// Assign Locations for Generic Header.
	$boldgrid_framework_configs['template']['locations']['footer'] = array(
		'1' => array( '[menu]social' ),
		'5' => array( '[menu]footer_center' ),
		'8' => array( '[widget]boldgrid-widget-3' ),
		'11' => array( '[action]boldgrid_display_attribution_links' ),
	);

	// Set the Call To Action Widget to be on Home Page Only.
	$boldgrid_framework_configs['template']['call-to-action'] = 'home-only';

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

	// Typography Headings
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_family'] = 'Yanone Kaffeesatz';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_size'] = 20;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_text_transform'] = 'uppercase';

	// Typography Alternate Headings
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_family'] = 'Yanone Kaffeesatz';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_size'] = 20;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_text_transform'] = 'uppercase';

	// Typography Navigation
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_family'] = 'Yanone Kaffeesatz';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_size'] = 18;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_text_transform'] = 'uppercase';

	// Typography Body
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_family'] = 'Fira Mono';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_line_height'] = 175;

	// Menu Locations
	$boldgrid_framework_configs['menu']['locations']['secondary'] = "Above Header";
	$boldgrid_framework_configs['menu']['locations']['tertiary'] = "Below Header";
	$boldgrid_framework_configs['menu']['locations']['social'] = "Social Media Menu";

	// Icons
	$boldgrid_framework_configs['social-icons']['size'] = 'normal';

	// Background
	$boldgrid_framework_configs['customizer-options']['background']['defaults']['background_attachment'] = 'parallax';

	/**
	 * Widgets
	 */
	$widget_markup['call-to-action'] = <<<HTML
		<div class="container">
			<div class="row call-to-action-wrapper">
				<div class="col-md-12">
					<div class="call-to-action">
						<h2 class="h4 slogan">INSIGHT. CULTURE. PASSION.</h2>
						<a class="button-primary" href="about-us">OUR STORY</a>
					</div>
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
	$controls['logo_font_size']['default'] = 100;
	$controls['logo_margin_top']['default'] = 15;
	$controls['logo_margin_bottom']['default'] = 25;
	$controls['logo_line_height']['default'] = 100;
	$controls['logo_letter_spacing']['default'] = 15;

	// Controls above will override framework defaults
	return $controls;
}
add_filter( 'kirki/fields', 'filter_logo_controls' );
