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
                    <img class="bg-img" src="<?= get_template_directory_uri() ?>/img/fundo.png">
                </div>
            </div>
        </div>
    </section>
    <!--/fim seção home -->

    <section class="d-flex bg-light">
        <!--home -->
        <div class="container align-self-center pt-5 pb-5">
            <!--container -->
            <div class="row">
                <!--row -->
                <div class="col-md-12 text-center">

                    <div id="carousel-greencandle" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <!--Inner -->

                            <div class="carousel-item active">
                                <h1 class="title">Invista Com Segurança</h1>
                                <h2>Nos Maiores Mercados do Mundo</h2>
                                <div class="circle bg-success">
                                    <img src="<?= get_template_directory_uri() ?>/img/nasdaq.png" alt="">
                                </div>
                            </div>

                            <!-- <div class="carousel-item">
                                <h1 class="title">Invista Com Segurança</h1>
                                <h2>Nos Maiores Mercados do Mundo</h2>

                            </div> -->

                        </div>
                        <!--/Inner -->

                        <!-- Controles -->
                        <a href="#carousel-greencandle" class="carousel-control-prev" data-slide="prev">
                            <i class="fas fa-angle-left fa-3x"></i>
                        </a>

                        <a href="#carousel-greencandle" class="carousel-control-next" data-slide="next">
                            <i class="fas fa-angle-right fa-3x"></i>
                        </a>

                    </div>

                </div>
            </div>
            <!--/row -->
        </div>
        <!--/container -->
    </section>

    <section class="d-flex">
        <div class="container align-self-center pt-5 pb-5">
            <div class="row justify-content-between">
                <div class="col-md-12 text-center pb-5">
                    <h1 class="title">Somos Uma Empresa Regulamentada:</h1>
                </div>

                <div class="col-md-5 d-flex justify-content-between">
                    <div class="box bg-success">
                        <div class="box-logo bg-light text-center">
                            <h6 class="pt-3">LOGO</h6>
                        </div>
                        <div class="box-content">
                            <p class="text-white" style="text-align: justify;">Lorem ipsum dolor sit, amet consectetur
                                adipisicing elit. At repellat, aspernatur nobis
                                quae
                                adipisci ipsum, error dolorem maxime nam necessitatibus eos! Maiores explicabo
                                doloribus,
                                eligendi incidunt vero dicta et qui!Lorem ipsum dolor sit, amet consectetur adipisicing
                                elit. At repellat, aspernatur nobis
                                quae
                                adipisci ipsum, error dolorem maxime nam necessitatibus eos! Maiores explicabo
                                doloribus,
                                eligendi incidunt vero dicta et qui!Lorem ipsum dolor sit, amet consectetur adipisicing
                                elit. At repellat, aspernatur nobis
                                quae
                                adipisci ipsum, error dolorem maxime nam necessitatibus eos! Maiores explicabo
                                doloribus,
                                eligendi incidunt vero dicta et qui!</p>

                        </div>
                    </div>
                </div>

                <div class="col-md-5 d-flex justify-content-between">
                    <div class="box bg-success">
                        <div class="box-logo bg-light text-center">
                            <h6 class="pt-3">LOGO</h6>
                        </div>
                        <div class="box-content">
                            <p class="text-white" style="text-align: justify;">Lorem ipsum dolor sit, amet consectetur
                                adipisicing elit. At repellat, aspernatur nobis
                                quae
                                adipisci ipsum, error dolorem maxime nam necessitatibus eos! Maiores explicabo
                                doloribus,
                                eligendi incidunt vero dicta et qui!Lorem ipsum dolor sit, amet consectetur adipisicing
                                elit. At repellat, aspernatur nobis
                                quae
                                adipisci ipsum, error dolorem maxime nam necessitatibus eos! Maiores explicabo
                                doloribus,
                                eligendi incidunt vero dicta et qui!Lorem ipsum dolor sit, amet consectetur adipisicing
                                elit. At repellat, aspernatur nobis
                                quae
                                adipisci ipsum, error dolorem maxime nam necessitatibus eos! Maiores explicabo
                                doloribus,
                                eligendi incidunt vero dicta et qui!</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="d-flex bg-light">
        <div class="container align-self-center pt-5 pb-5">
            <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="align-self-center">
                        <h1 class="title text-success" style="text-align: justify;">O Que Dizem Nossos Clientes</h1>
                    </div>
                </div>

                <div class="col-md-6">
                    <div id="carousel-clients" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <!--Inner -->

                            <div class="carousel-item active">
                                <div class="box-carrousel bg-success">
                                    <div class="box-content pt-5">
                                        <p class="text-white" style="text-align: justify;">Lorem ipsum dolor sit, amet
                                            consectetur
                                            adipisicing elit. At repellat, aspernatur nobis
                                            quae
                                            adipisci ipsum, error dolorem maxime nam necessitatibus eos! Maiores
                                            explicabo
                                            doloribus</p>
                                    </div>

                                    <div class="client-photo-div">
                                        <img src="" class="client-photo" alt="">
                                        <span class="text-white client-name-size">Yan Matos</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--/Inner -->

                        <!-- Controles -->
                        <a href="#carousel-clients" class="carousel-control-prev" data-slide="prev">
                            <i class="fas fa-angle-left fa-3x"></i>
                        </a>

                        <a href="#carousel-clients" class="carousel-control-next" data-slide="next">
                            <i class="fas fa-angle-right fa-3x"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="d-flex">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-md-6" style="border-right: 1px solid green;">
                    <h1 class="title text-right">Alavancagem: 1:1000</h1>
                    <p style="text-align: justify;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis
                        nemo eligendi id delectus
                        quidem, ipsum eaque quaerat, suscipit ipsam assumenda voluptate dicta itaque? Beatae culpa id
                        molestiae enim ipsa quos.</p>
                </div>
            </div>

            <div class="row justify-content-end">
                <div class="col-md-6" style="border-left: 1px solid green;">
                    <h1 class="title">Saques Rápidos</h1>
                    <p style="text-align: justify;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis
                        nemo eligendi id delectus
                        quidem, ipsum eaque quaerat, suscipit ipsam assumenda voluptate dicta itaque? Beatae culpa id
                        molestiae enim ipsa quos.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="d-flex bg-light">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-md-6" style="border-right: 1px solid green;">
                    <h1 class="title text-right">Suporte 24h</h1>
                    <p style="text-align: justify;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis
                        nemo eligendi id delectus
                        quidem, ipsum eaque quaerat, suscipit ipsam assumenda voluptate dicta itaque? Beatae culpa id
                        molestiae enim ipsa quos.</p>
                </div>
            </div>

            <div class="row justify-content-end">
                <div class="col-md-6" style="border-left: 1px solid green;">
                    <h1 class="title">Depósito Mínimo $100</h1>
                    <p style="text-align: justify;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis
                        nemo eligendi id delectus
                        quidem, ipsum eaque quaerat, suscipit ipsam assumenda voluptate dicta itaque? Beatae culpa id
                        molestiae enim ipsa quos.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="d-flex pb-5">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-md-12 text-center pb-5">
                    <h1 class="title">Mais de 1.000 Ativos de Negociação</h1>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col-md-2 btn btn-lg btn-dark">
                    Forex
                </div>
                <div class="col-md-2 btn btn-lg btn-dark">
                    Metais e Energia
                </div>
                <div class="col-md-2 btn btn-lg btn-dark">
                    Ações
                </div>
                <div class="col-md-2 btn btn-lg btn-dark">
                    Índices
                </div>
                <div class="col-md-2 btn btn-lg btn-dark">
                    Criptomoedas
                </div>
            </div>

            <div class="row mt-5 justify-content-between" style="height: 100px;">
                <div class="col-md-2 btn btn-lg btn-dark">
                    <img src="" class="little-circle" alt="">
                    <h6 class="font-weight-bold pt-3">EUROUSD</h6>
                    <p>Euro vs Dólar</p>
                </div>
                <div class="col-md-2 btn btn-lg btn-dark">
                    <img src="" class="little-circle" alt="">
                    <h6 class="font-weight-bold pt-3">EUROUSD</h6>
                    <p>Euro vs Dólar</p>
                </div>
                <div class="col-md-2 btn btn-lg btn-dark">
                    <img src="" class="little-circle" alt="">
                    <h6 class="font-weight-bold pt-3">EUROUSD</h6>
                    <p>Euro vs Dólar</p>
                </div>
                <div class="col-md-2 btn btn-lg btn-dark">
                    <img src="" class="little-circle" alt="">
                    <h6 class="font-weight-bold pt-3">EUROUSD</h6>
                    <p>Euro vs Dólar</p>
                </div>
                <div class="col-md-2 btn btn-lg btn-dark">
                    <img src="" class="little-circle" alt="">
                    <h6 class="font-weight-bold pt-3">EUROUSD</h6>
                    <p>Euro vs Dólar</p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-dark" style="height: 150px;">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-12 pt-3 text-center text-white">
                    <input type="text" class="input-size" placeholder="USD(USD)">
                    <a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                    <input type="text" class="input-size" placeholder="Bitcoin(BTC)">
                    <input type="text" class="input-size" placeholder="Quantidade (USD)">
                </div>
            </div>
        </div>
    </div>

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