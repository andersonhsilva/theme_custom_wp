<?php
// Configurações da pagina
$id_query_004 = get_cat_id('layout_home_sobre_nos'); // nome da categoria ou subcategoria
$limite_registros_query_004 = 1;

// query dos indicadores do fullbanner
$featured_query_004 = new WP_Query(array(
  'post_type' => 'post',
  'posts_per_page' => $limite_registros_query_004, // limite de posts
  'category__in' => array($id_query_004), // id da categoria a ser exibida
));
if ($featured_query_004->have_posts()){ // se tiver content
  $i_query_004 = 0;
  while($featured_query_004->have_posts()){
    $featured_query_004->the_post(); ?>

    <div class="about-us pt-130 pb-130">
      <div class="container">
        <div class="section-title-3 section-shape-hm2-1 text-center mb-100">
          <h2><?= sobre_nome_span(get_the_title()); ?></h2>
          <p><?php the_excerpt(); // resumo do post ?></p>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-7 col-md-12">
            <div class="about-img about-img-2 default-overlay mr-70">
              <?php the_post_thumbnail('medium', array('class' => 'img-fluid')); // parametros -> thumbnail | medium | large | full | array(275, 275) ?>
              <a class="video-btn video-popup" id="link_youtube" href="https://www.youtube.com">
                <img src="<?=get_template_directory_uri()?>/assets/img/icon-img/video.png" alt="">
              </a>
            </div>
          </div>
          <div class="col-lg-5 col-md-12">
            <div class="about-content-2 pr-70">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php $i_query_004++;
  }
  wp_reset_postdata(); // limpa os dados do laço wp para evitar conflito em algum outro que venha a ser usado
}
?>
<script type="text/javascript">
window.onload = function(){
  var oembed = $('div.about-us figure.wp-block-embed-youtube iframe').attr('src');
  var video = oembed.replace('embed/', 'watch?v=').replace('?feature=oembed', '');
  $('a#link_youtube').attr('href', video);
}
</script>
