<?php
/*
Template Name: Pagina Home
*/
?>
<?php get_header(); ?>
<?php get_template_part('template-parts/page', 'header'); ?>
<?php get_template_part('template-parts/page', 'carousel'); ?>

<div class="container">
  <?php
  // configurações de busca na query
  $query_page_home = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 100, // limite de posts
    'category__in' => array(get_cat_id('content_home')), // nome da categoria ou subcategoria
  ));
  if ($query_page_home->have_posts()) { // se tiver content
    $i_query_page_home = 0;
    while ($query_page_home->have_posts()) {
      $query_page_home->the_post(); ?>

      <div class="text-success">

        <h2><?= sobre_nome_span(get_the_title()); ?></h2>
        <p><?php the_excerpt(); ?></p>

      </div>

      <div class="mt-5 mb-5">
        <?php the_content(); ?>
      </div>
  <?php $i_query_page_home++;
    }
    wp_reset_postdata(); // para limpar os dados do laço wp
  }
  ?>
</div>

<?php get_footer(); ?>