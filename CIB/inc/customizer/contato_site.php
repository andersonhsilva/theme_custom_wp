<?php

// customizer das redes sociais
function wptema_contato($wp_customize){
  $add_section = 'contato_site';
  $wp_customize->add_section( $add_section, array(
    'title' => 'Contato',
    'priority' => 32,
  ));

  $var_setting = 'endereco_completo';
  $wp_customize->add_setting( $var_setting, array(
    'default' => 'Rua Eca de Queiroz nº 78 - Salgado - Caruaru / PE',
    'capability' => 'edit_theme_options',
  ));
  $wp_customize->add_control( $var_setting, array(
    'label'      => 'Endereço Completo',
    'type'   => 'text', // text, checkbox, radio, select, textarea, dropdown-pages, email, url, number, hidden, date
    'section'    => $add_section,
    'settings'   => $var_setting,
  ));

  $var_setting = 'fone_1';
  $wp_customize->add_setting( $var_setting, array(
    'default' => '+55 81 3721-7402',
    'capability' => 'edit_theme_options',
  ));
  $wp_customize->add_control( $var_setting, array(
    'label'      => 'Fone 1',
    'type'   => 'text', // text, checkbox, radio, select, textarea, dropdown-pages, email, url, number, hidden, date
    'section'    => $add_section,
    'settings'   => $var_setting,
  ));

  $var_setting = 'fone_2';
  $wp_customize->add_setting( $var_setting, array(
    'default' => '+55 81 9.8131-1529',
    'capability' => 'edit_theme_options',
  ));
  $wp_customize->add_control( $var_setting, array(
    'label'      => 'Fone 2',
    'type'   => 'text', // text, checkbox, radio, select, textarea, dropdown-pages, email, url, number, hidden, date
    'section'    => $add_section,
    'settings'   => $var_setting,
  ));

  $var_setting = 'email';
  $wp_customize->add_setting( $var_setting, array(
    'default' => 'secretaria@colegioireneborges.com.br',
    'capability' => 'edit_theme_options',
  ));
  $wp_customize->add_control( $var_setting, array(
    'label'      => 'E-mail',
    'type'   => 'email', // text, checkbox, radio, select, textarea, dropdown-pages, email, url, number, hidden, date
    'section'    => $add_section,
    'settings'   => $var_setting,
  ));

  $var_setting = 'exibir_rodape';
  $wp_customize->add_setting( $var_setting, array(
    'default' => true,
    'capability' => 'edit_theme_options',
  ));
  $wp_customize->add_control( $var_setting, array(
    'label'      => 'Exibir no Rodapé',
    'type'   => 'checkbox', // text, checkbox, radio, select, textarea, dropdown-pages, email, url, number, hidden, date
    'section'    => $add_section,
    'settings'   => $var_setting,
  ));

}
add_action('customize_register', 'wptema_contato');
