<?php
// Configurações da pagina
$id_query_001 = get_cat_id('layout_home_feriados'); // nome da categoria ou subcategoria
$limite_registros_query_001 = 1;

// query dos indicadores do fullbanner
$featured_query_001 = new WP_Query(array(
  'post_type' => 'post',
  'posts_per_page' => $limite_registros_query_001, // limite de posts
  'category__in' => array($id_query_001), // id da categoria a ser exibida
));
if ($featured_query_001->have_posts()){ // se tiver content
  $i_query_001 = 0;
  while($featured_query_001->have_posts()){
    $featured_query_001->the_post(); ?>

    <div class="fun-fact-area bg-img pt-50 pb-50" style="background-image:url(<?=get_template_directory_uri()?>/imgs/sections/background2.jpg);">
      <div class="container">
        <div class="section-title-3 section-shape-hm2-2 white-text text-center mb-50">
          <h2><?= sobre_nome_span(get_the_title()); ?></h2>
          <p><?php the_content(); // resumo do post ?></p>
        </div>
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
            <div class="single-count mb-30 count-one count-white">
              <div class="count-img">
                <img src="<?=get_template_directory_uri()?>/imgs/sections/icon2.png" alt="">
              </div>
              <div class="count-content animated bounce">
                <?php
                $feriado = '11/08';
                $qtd_dias = calcula_dia_entre_duas_datas(date('d/m/Y'), $feriado.'/'.date('Y'));
                ?>
                <h2 class="<?= $qtd_dias > 0 ? 'count' : '' ?> "><?= $qtd_dias < 0 ? $feriado : $qtd_dias ?></h2>
                <span>DIA DO<br/>ESTUDANTE</span>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
            <div class="single-count mb-30 count-two count-white">
              <div class="count-img">
                <img src="<?=get_template_directory_uri()?>/imgs/sections/icon1.png" alt="">
              </div>
              <div class="count-content animated bounce">
                <?php
                $feriado = '12/10';
                $qtd_dias = calcula_dia_entre_duas_datas(date('d/m/Y'), $feriado.'/'.date('Y'));
                ?>
                <h2 class="<?= $qtd_dias > 0 ? 'count' : '' ?> "><?= $qtd_dias < 0 ? $feriado : $qtd_dias ?></h2>
                <span>DIA DAS<br/>CRIANÇAS</span>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
            <div class="single-count mb-30 count-three count-white">
              <div class="count-img">
                <img src="<?=get_template_directory_uri()?>/imgs/sections/icon3.png" alt="">
              </div>
              <div class="count-content animated bounce">
                <?php
                $feriado = '15/10';
                $qtd_dias = calcula_dia_entre_duas_datas(date('d/m/Y'), $feriado.'/'.date('Y'));
                ?>
                <h2 class="<?= $qtd_dias > 0 ? 'count' : '' ?> "><?= $qtd_dias < 0 ? $feriado : $qtd_dias ?></h2>
                <span>DIA DO<br/>PROFESSOR</span>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
            <div class="single-count mb-30 count-four count-white">
              <div class="count-img">
                <img src="<?=get_template_directory_uri()?>/imgs/sections/icon4.png" alt="">
              </div>
              <div class="count-content animated bounce">
                <?php
                $feriado = '25/12/'.date('Y'); // natal
                $qtd_dias = calcula_dia_entre_duas_datas(date('d/m/Y'), $feriado);
                ?>
                <h2 class="<?= $qtd_dias > 0 ? 'count' : '' ?> "><?= $qtd_dias < 0 ? $feriado : $qtd_dias ?></h2>
                <span>NATAL</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php $i_query_001++;
  }
  wp_reset_postdata(); // limpa os dados do laço wp para evitar conflito em algum outro que venha a ser usado
}
?>
