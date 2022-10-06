<?php

// arquivos de customizer do tema
require get_template_directory().'/inc/customizer/copyright.php';
require get_template_directory().'/inc/customizer/redes_sociais.php';
require get_template_directory().'/inc/customizer/contato_site.php';

//  função que inicia os script e folha de estilo do tema wp
function load_scripts(){

  // função do wp que adiciona script ao tema
  wp_enqueue_script('scripts', get_template_directory_uri().'/js/my_scripts.js', array(), '1.0.0', true);

  // função wp que carrega a folha de estilo ao tema
  wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.4.1/css/all.css', array(), '5.4.1', 'all');

  // tema personalizado
  wp_enqueue_style('animate', get_template_directory_uri().'/css/animate.css', array(), '3.7.0', 'all');
  wp_enqueue_style('meu_tema', get_template_directory_uri().'/css/meu_tema.css', array(), '1.1.0', 'all');

}
add_action('wp_enqueue_scripts', 'load_scripts'); // chamada da função

// confução de configuração do tema
function temawp_config(){

  // registrando nossos menus para o tema wp
  register_nav_menus(
    array(
      'menu_primary' => 'Menu primário para o topo da página',
      'menu_secondary' => 'Menu para o rodapé da página',
    )
  );

  // adiciona o suporte a cabeçalho do tema no wp
  add_theme_support('custom-header', array('width'=> 1920, 'height' => 300, ));

  // adiciona o suporte a imagens destacadas
  add_theme_support('post-thumbnails');

  // adiciona o suporte a formato dos posts
  add_theme_support('post-formats', array('video', 'image'));

  // adiciona o titulo do tema
  add_theme_support('title-tag');

  // adiciona a logo do tema
  add_theme_support('custom-logo', []); // array('width' => 360, 'height' => 113)

  add_theme_support('menus');

}
add_action('after_setup_theme', 'temawp_config'); // chamada da função

function temawp_sidebars(){

  register_sidebar(array(
    'name' => 'Rodapé 1',
    'id' => 'widget-1',
    'description' => 'widget usado no rodape do site',
    'before_widget' => '<div class="footer-about footer-list subscribe-style mb-5"><ul>',
    'after_widget' => '</ul></div>',
    'before_title' => '<div class="footer-title"><h4>',
    'after_title' => '</h4></div>',
  ));
  register_sidebar(array(
    'name' => 'Rodapé 2',
    'id' => 'widget-2',
    'description' => 'widget usado no rodape do site',
    'before_widget' => '<div class="footer-about footer-list subscribe-style mb-5"><ul>',
    'after_widget' => '</ul></div>',
    'before_title' => '<div class="footer-title"><h4>',
    'after_title' => '</h4></div>',
  ));
  register_sidebar(array(
    'name' => 'Rodapé 3',
    'id' => 'widget-3',
    'description' => 'widget usado no rodape do site',
    'before_widget' => '<div class="footer-about footer-list subscribe-style mb-5"><ul>',
    'after_widget' => '</ul></div>',
    'before_title' => '<div class="footer-title"><h4>',
    'after_title' => '</h4></div>',
  ));
}
add_action('widgets_init', 'temawp_sidebars'); // chamada da função

function sobre_nome_span($nome_completo){
  $result = "";
  $nomes = explode(" ",$nome_completo);
  foreach ($nomes as $key => $nome) {
    if ($key % 2  != 0){
      $result .= $nome;
    } else {
      $result .= '<span>'.$nome.'</span>';
    }
    $result .= ' ';
  }
  return $result;
}

function calcula_dia_entre_duas_datas($data_inicial, $data_final){

  $object_data_inicial = DateTime::createFromFormat('d/m/Y', $data_inicial);
  $object_final = DateTime::createFromFormat('d/m/Y', $data_final);

  $diferenca = strtotime($object_final->format('Y-m-d')) - strtotime($object_data_inicial->format('Y-m-d'));
  $dias = floor($diferenca / (60 * 60 * 24));

  return $dias;
}

function custom_login_logo() { // remove a logo do wordpress do login de administracao do site
  $custom_logo_id = get_theme_mod( 'custom_logo' );
  $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
  echo '<style type="text/css">.login h1 a { display: none; !important; }</style>';
}
add_action('login_head', 'custom_login_logo');
