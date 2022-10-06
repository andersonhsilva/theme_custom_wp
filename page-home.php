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
            <div class="row pt-5">
                <div class="col-md-7 d-flex mt-3">
                    <!-- Textos da seção -->
                    <div class="align-self-center">
                        <h1 class="title">Investimentos internacionais seguros, transparentes e lucrativos.</h1>
                        <p class="description">
                            Conheça a FX Green Candle: um novo conceito de corretora. Criada para investidores que precisam tomar decisões de forma descomplicada e não tem tempo a perder.
                        </p>
                        <div class="d-flex justify-content-between">
                            <a href="" class="btn btn-lg btn-success description">
                                Abrir Conta
                            </a>
                            <a href="" class="btn btn-lg btn-outline-success description">
                                Fazer Login
                            </a>
                        </div>
                    </div>
                </div>
                <!--/fim textos da seção -->
                <div class="col-md-5 d-md-block mt-3">
                    <img class="bg-img" style="padding-right: 100px;" src="<?= get_template_directory_uri() ?>/img/fundo.png">
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