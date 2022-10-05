<?php get_header(); ?>

<main>


<section id="home">
        <!-- Início seção home -->
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex">
                    <!-- Textos da seção -->
                    <div class="align-self-center">
                        <h1 class="display-2 title">Texto de apoio texto de apoio</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur, est eu feugiat
                            ullamcorper, ante eros suscipit elit, volutpat auctor tellus diam in ipsum.
                        </p>

                            <a href="" class="btn btn-lg btn-success">
                                Texto de apoio
                            </a>
                            <a href="" class="btn btn-lg btn-outline-success">
                                Texto de apoio
                            </a>

                    </div>
                </div>
                <!--/fim textos da seção -->
                <div class="col-md-6 d-none d-md-block">
                    <img class="fundo" src="<?= get_template_directory_uri() ?>/img/fundo.png">
                </div>
            </div>
        </div>
    </section>
    <!--/fim seção home -->

    <section class="caixa">
        <!--/Início seção saiba -->
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="align-self-center">
                        <h2>Saiba para onde vai o seu dinheiro</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur, est eu feugiat
                            ullamcorper, ante eros suscipit elit, volutpat auctor tellus diam in ipsum.
                        </p>
                        <a href="" class="btn btn-primary">Veja mais</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="<?= get_template_directory_uri() ?>/img/saiba.png" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!--/FIM seção saiba -->

    <section class="caixa">
        <!--/Início seção juros -->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?= get_template_directory_uri() ?>/img/juros.png" class="img-fluid">
                </div>
                <div class="col-md-6 d-flex">
                    <div class="align-self-center">
                        <h2>Pare de pagar juros e economize</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur, est eu feugiat
                            ullamcorper, ante eros suscipit elit, volutpat auctor tellus diam in ipsum.
                        </p>
                        <a href="" class="btn btn-primary">Veja mais</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/FIM seção juros -->

    <section class="caixa">
        <!--/Início seção recursos -->
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="<?= get_template_directory_uri() ?>/img/facil.png" class="img-fluid">
                    <h4>Fácil de usar</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur, est eu feugiat
                        ullamcorper, ante eros suscipit elit, volutpat auctor tellus diam in ipsum.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="<?= get_template_directory_uri() ?>/img/economize.png" class="img-fluid">
                    <h4>Economize seu tempo</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur, est eu feugiat
                        ullamcorper, ante eros suscipit elit, volutpat auctor tellus diam in ipsum.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="<?= get_template_directory_uri() ?>/img/suporte.png" class="img-fluid">
                    <h4>Suporte amigo</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur, est eu feugiat
                        ullamcorper, ante eros suscipit elit, volutpat auctor tellus diam in ipsum.
                    </p>
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