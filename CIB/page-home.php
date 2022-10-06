<?php
/*
Template Name: Pagina Home
*/
?>
<?php get_header(); ?>
<?php get_template_part('template-parts/topo', 'pagina'); ?>
<?php get_template_part('template-parts/slider', 'area'); ?>
<div class="container">
  <?php
  // configurações de busca na query
  $query1 = new WP_Query(array(
    'post_type' => 'post',
    // 'posts_per_page' => 1, // limite de posts
    'category__in' => array(get_cat_id('layout_home_conteudo_topo')), // nome da categoria ou subcategoria
  ));
  if ($query1->have_posts()){ // se tiver content
    $i_query_home1 = 0;
    while($query1->have_posts()){
      $query1->the_post(); ?>
      <div class="section-title-3 section-shape-hm2-1 text-center mt-5 mb-50">
        <h2><?= sobre_nome_span(get_the_title()); ?></h2>
        <p><?php the_excerpt(); ?></p>
      </div>
      <div class="mt-5 mb-5">
        <?php the_content(); ?>
      </div>
      <?php $i_query_home1++;
    }
    wp_reset_postdata(); // para limpar os dados do laço wp
  }
  ?>
</div>
<?php get_template_part('template-parts/galeria', 'fotos'); ?>
<div class="container">
  <?php
  // configurações de busca na query
  $query2 = new WP_Query(array(
    'post_type' => 'post',
    // 'posts_per_page' => 1, // limite de posts
    'category__in' => array(get_cat_id('layout_home_conteudo_corpo')), // nome da categoria ou subcategoria
  ));
  if ($query2->have_posts()){ // se tiver content
    $y = 0;
    while($query2->have_posts()){ $query2->the_post(); ?>
      <div class="section-title-3 section-shape-hm2-1 text-center mt-5 mb-50">
        <h2><?= sobre_nome_span(get_the_title()); ?></h2>
        <p><?php the_excerpt(); ?></p>
      </div>
      <div class="mt-5 mb-5">
        <?php the_content(); ?>
      </div>
      <?php $y++;
    }
    wp_reset_postdata(); // para limpar os dados do laço wp
  }
  ?>
</div>
<?php get_template_part('template-parts/contador', 'feriados'); ?>
<?php get_footer(); ?>
