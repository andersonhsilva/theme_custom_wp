<?php get_header(); ?>
<?php get_template_part('template-parts/topo', 'pagina'); ?>

<div class="breadcrumb-bottom">
  <div class="container">
    <ul>
      <li><a href="#"> </a> <span class="text-dark"><i class="fa fa-angle-double-right text-dark"></i><?php the_title(); ?></span></li>
    </ul>
  </div>
</div>
<main>
  <div class="container">
    <?php
    if (have_posts()){
      while (have_posts()){
        the_post();
        ?>
        <div class="row mt-5 mb-5">
          <div class="col">
            <?php the_content(); ?>
          </div>
        </div>
        <?php
      }
      wp_reset_postdata(); // limpa os dados do laço wp para evitar conflito em algum outro que venha a ser usado
    }
    ?>
  </div>
</main>

<?php get_footer(); ?>
