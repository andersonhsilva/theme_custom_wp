<?php
// Configurações da pagina
$id_query_010 = get_cat_id('layout_home_fullbanner'); // nome da categoria ou subcategoria
$limite_registros_query_010 = 10;

// query dos indicadores do fullbanner
$featured_query_010 = new WP_Query(array(
  'post_type' => 'post',
  'posts_per_page' => $limite_registros_query_010, // limite de posts
  'category__in' => array($id_query_010), // id da categoria a ser exibida
));
if ($featured_query_010->have_posts()){ // se tiver content ?>

  <div class="slider-area" id="fullbanners">
    <div class="slider-active owl-carousel">

      <?php $i_query_010 = 0;
      while($featured_query_010->have_posts()){
        $featured_query_010->the_post(); ?>

        <div class="single-slider slider-height-2 bg-img align-items-center d-flex slider-overlay2-1 default-overlay" style="background-image:url(<?= wp_get_attachment_image_src(get_post_thumbnail_id(), 'large', null)[0]; // extrai a URL da imagem destacada ?>);">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <div class="slider-content slider-content-2 slider-animated-2 text-center">
                    <div class="body_content">
                      <?php the_content(); ?>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php $i_query_010++;
      } ?>

    </div>
  </div>

  <?php
  wp_reset_postdata(); // limpa os dados do laço wp para evitar conflito em algum outro que venha a ser usado
}
?>
