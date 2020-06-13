<?php
/**
* Create Logo Setting and Upload Control
*/

function theme_customizer_settings($wp_customize) {

/* ---
 * Identidade do Site
 * Adição de campos customizáveis para a identidade do site
 */
//--Telefone no cabeçalho
	$wp_customize->add_setting('text_header_telephone', array(
		'default' => '(XX) XXXX-XXXX / XXXX-XXXX',
	));
	
	$wp_customize->add_control('text_header_telephone', array(
		'label'   => 'Telefone do Cabeçalho',
		'section' => 'title_tagline',
		'type'    => 'text',
	));

//--Endereço / Contato no Rodapé
	$wp_customize->add_setting('text_contact_footer', array(
		'default' => 'Contato no Rodapé',
	));
	
	$wp_customize->add_control('text_contact_footer', array(
		'label'   => 'Contato / Endereço no Rodapé',
		'section' => 'title_tagline',
		'type'    => 'textarea',
	));


/* ---
 * Textos p/ a Capa
 * Adição de campos customizáveis para a capa do tema
 */
		$wp_customize->add_section('cover_settings_section', array(
			'title'          => 'Textos p/ Capa'
		));


//--Citação em destaque
	$wp_customize->add_setting('text_cover_citation', array(
		'default'      => 'Texto de Citação',
	));

		$wp_customize->add_setting('author_cover_citation', array(
			'default'      => 'Nome do autor',
		));

	$wp_customize->add_control('text_cover_citation', array(
		'label'   => 'Texto de Citação',
		'section' => 'cover_settings_section',
		'type'    => 'textarea',
	));

		$wp_customize->add_control('author_cover_citation', array(
			'label'   => 'Autor da Citação',
			'section' => 'cover_settings_section',
			'type'    => 'text',
		));


//--Chamada de Contato
	$wp_customize->add_setting('text_contato_highlight', array(
		'default'      => 'Chamada p/ Contato',
	));

		$wp_customize->add_setting('details_contato_highlight', array(
			'default'      => 'Detalhes Contato',
		));

	$wp_customize->add_control('text_contato_highlight', array(
		'label'   => 'Chamada de Contato',
		'section' => 'cover_settings_section',
		'type'    => 'text',
	));

		$wp_customize->add_control('details_contato_highlight', array(
			'label'   => 'Detalhes Contato',
			'section' => 'cover_settings_section',
			'type'    => 'textarea',
		));


//--Newsletter
	$wp_customize->add_setting('text_newsletter', array(
		'default'      => 'Chamada p/ Newsletter',
	));

	$wp_customize->add_control('text_newsletter', array(
		'label'   => 'Chamada p/ Newsletter',
		'section' => 'cover_settings_section',
		'type'    => 'text',
	));


/* ---
 * Embed Google Maps
 * Adição de campos para o mapa
 */
		$wp_customize->add_section('map_settings_section', array(
			'title'          => 'Embed Google Maps'
		));

//--Embed Maps
	$wp_customize->add_setting('embed_map', array(
		'default'      => 'Código Embed',
	));

	$wp_customize->add_control('embed_map', array(
		'label'   => 'Código Embed Google Maps',
		'section' => 'map_settings_section',
		'type'    => 'textarea',
	));


/* ---
 * Remove opções de tema não utilizadas
 */
		$wp_customize->remove_section( 'static_front_page');
		$wp_customize->remove_section( 'custom_css');

}

add_action('customize_register', 'theme_customizer_settings');