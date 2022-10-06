<?php
/*
Template Name: Pagina Home
*/
?>
<?php get_header(); ?>

<main>

<section class="d-flex">
        <!-- Início seção home -->
        <div class="container align-self-center pt-5 pb-5">
            <div class="row">
                <div class="col-md-6 d-flex">
                    <!-- Textos da seção -->
                    <div class="align-self-center">
                        <h1 class="title">Texto de apoio texto de apoio</h1>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur, est eu feugiat
                            ullamcorper, ante eros suscipit elit, volutpat auctor tellus diam in ipsum.
                        </p>
                        <div class="d-flex justify-content-between">
                            <a href="" class="btn btn-lg btn-success description">
                                Texto de apoio
                            </a>
                            <a href="" class="btn btn-lg btn-outline-success description">
                                Texto de apoio
                            </a>
                        </div>
                    </div>
                </div>
                <!--/fim textos da seção -->
                <div class="col-md-6 d-md-block">
                    <img class="bg-img" src="img/fundo.png">
                </div>
            </div>
        </div>
    </section>

<?php
  if (have_posts()) {
    while (have_posts()) {
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

</main>

<?php get_footer(); ?>