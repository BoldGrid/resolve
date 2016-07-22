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

	// Content sets containers in this theme.
	$boldgrid_framework_configs['template']['pages']['page_home.php']['entry-content'] = '';

	// Assign Locations for Generic Header.
	$boldgrid_framework_configs['template']['locations']['header'] = array(
		'1' => array( '[menu]secondary' ),
		'14' => array( '[action]boldgrid_primary_navigation' ),
		'15' => array( '[menu]social' ),
		'5' => array( '[widget]boldgrid-widget-2' ),
		'8' => array( '[action]boldgrid_site_title_line', '[action]boldgrid_site_identity' ),
		'11' => array( '[widget]boldgrid-widget-1', '[menu]tertiary' ),
		'13' => array( '[action]home_spacer' ),
	);

	// Assign Locations for Generic Header.
	$boldgrid_framework_configs['template']['locations']['footer'] = array(
		'1' => array( '[widget]boldgrid-widget-3' ),
		'5' => array( '[menu]footer_center' ),
		'8' => array( '[action]boldgrid_display_attribution_links' ),
	);

	/**
	 * Customizer Configs
	 */
	$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;
	$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array(
		array(
			'default' => true,
			'format' => 'palette-primary',
			'colors' => array(
				'#ffffff',
				'#121012',
				'#18161a',
				'#84777d',
				'#121012',
			),
		),
		array(
			'format' => 'palette-primary',
			'colors' => array(
				'#ffffff',
				'#1a2533',
				'#131c26',
				'#4e6f96',
				'#1a2533',
			),
		),
		array(
			'format' => 'palette-primary',
			'colors' => array(
				'#e0e0e0',
				'#ffffff',
				'#666666',
				'#1a1a1a',
				'#ffffff',
			),
		),
		array(
			'format' => 'palette-primary',
			'colors' => array(
				'#758c00',
				'#758c00',
				'#662946',
				'#ffffff',
				'#993d59',
			),
		),
		array(
			'format' => 'palette-primary',
			'colors' => array(
				'#ffff00',
				'#ffff00',
				'#0072a3',
				'#10435e',
				'#00bbef',
			),
		),
	);

	// Override Options per Subcategory.
	switch ( $boldgrid_framework_configs['inspiration']['subcategory_key'] ) {
		case 'Design':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			break;
		case 'Fitness':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			break;
		case 'Consulting':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			break;
		case 'General':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			break;
		// Default Behavior.
		default:
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][0]['default'] = true;
			break;
	}

	// Text Contrast Colors.
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#ffffff';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#121012';

	// Typography Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_family'] = 'Yanone Kaffeesatz';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_size'] = 20;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_text_transform'] = 'uppercase';

	// Typography Alternate Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_family'] = 'Yanone Kaffeesatz';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_size'] = 20;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_text_transform'] = 'uppercase';

	// Typography Navigation.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_family'] = 'Yanone Kaffeesatz';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_size'] = 18;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_text_transform'] = 'uppercase';

	// Typography Body.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_family'] = 'Fira Mono';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_line_height'] = 175;

	// Typography Tagline Classes.
	$boldgrid_framework_configs['template']['tagline-classes'] = 'h5 alt-font';

	// Typography Relationships.
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.entry-header h1'] = array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 2.4,
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.p-button-primary a, .p-button-secondary a, .call-to-action a.button-primary, .form-submit a, .ninja-forms-all-fields-wrap input.btn'] = array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 0.85,
	);

	// Icons.
	$boldgrid_framework_configs['social-icons']['size'] = 'normal';

	// Background.
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

	// Widget 1.
	$boldgrid_framework_configs['widget']['widget_instances']['boldgrid-widget-1'][] = array(
		'title' => 'Call To Action',
		'text' => $widget_markup['call-to-action'],
		'type' => 'visual',
		'filter' => 1,
		'label' => 'black-studio-tinymce',
	);

	// Name Widget Areas.
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Below Site Title';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Above Site Title';

	// Menu Locations.
	$boldgrid_framework_configs['menu']['locations']['secondary'] = 'Above Header';
	$boldgrid_framework_configs['menu']['locations']['tertiary'] = 'Below Header';
	$boldgrid_framework_configs['menu']['locations']['social'] = 'Social Media Menu';

	return $boldgrid_framework_configs;
}

// These configs will be merged with the defaults.
add_filter( 'boldgrid_theme_framework_config', 'boldgrid_theme_framework_config' );

/**
 * Site Title & Logo Controls
 */
function boldgrid_filter_logo_controls( $controls ) {
	$controls['logo_font_family']['default'] = 'Yanone Kaffeesatz';
	$controls['logo_font_size']['default'] = 100;
	$controls['logo_margin_top']['default'] = 15;
	$controls['logo_margin_bottom']['default'] = 25;
	$controls['logo_line_height']['default'] = 100;
	$controls['logo_letter_spacing']['default'] = 15;

	return $controls;
}
add_filter( 'kirki/fields', 'boldgrid_filter_logo_controls' );

/**
 * Adds spacer markup to the home page.
 */
function boldgrid_home_spacer() {
	if ( is_page_template( 'page_home.php' ) ) : ?>
		<div class="row mod-space-home">
	<?php endif; ?>
			<div class="background-clear"></div>
			<div class="background-accent"></div>
	<?php if ( is_page_template( 'page_home.php' ) ) : ?>
		</div>
	<?php endif; ?>
<?php }
add_action( 'home_spacer', 'boldgrid_home_spacer' );

/**
 * Adds line above site title.
 */
function boldgrid_site_title_line() { ?>
	<div class="row">
		<div class="col-xs-5 col-md-3">
			<div class="line-lg"></div>
		</div>
	</div>
<?php }
add_action( 'boldgrid_site_title_line', 'boldgrid_site_title_line' );
/**
 * Adds line above page titles.
 */
function boldgrid_page_title_line() {
	if ( ! is_page_template( 'page_home' ) ) { ?>
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-sm-3 col-xs-3">
				<div class="line-sm"></div>
			</div>
		</div>
	</div>
	<?php }
}
add_action( 'before_entry_title', 'boldgrid_page_title_line' );
