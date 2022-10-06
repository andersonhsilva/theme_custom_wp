<?php
// Configurações da pagina
$id_query_003 = get_cat_id('layout_home_mapa_newslatter'); // nome da categoria ou subcategoria
$limite_registros_query_003 = 1;

// query dos indicadores do fullbanner
$featured_query_003 = new WP_Query(array(
  'post_type' => 'post',
  'posts_per_page' => $limite_registros_query_003, // limite de posts
  'category__in' => array($id_query_003), // id da categoria a ser exibida
));
if ($featured_query_003->have_posts()){ // se tiver content
  $i_query_003 = 0;
  while($featured_query_003->have_posts()){
    $featured_query_003->the_post(); ?>

<div class="choose-us-area pt-50 pb-50">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="row">
          <div class="col">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="choose-newsletter text-center ml-40">
          <h3><?= get_the_title(); ?></h3>
          <p><?php the_excerpt(); // resumo do post ?></p>
          <form class="contato" action="" method="post">
            <input name="name" placeholder="E-mail" type="text">
            <textarea name="message" placeholder="Mensagem"></textarea>
            <button class="default-btn" type="submit">Enviar Formulário</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $i_query_003++;
}
wp_reset_postdata(); // limpa os dados do laço wp para evitar conflito em algum outro que venha a ser usado
}
?>
