<?php
// Configurações da pagina
$name_page = 'layout_home_galeria_fotos';
$id_query_002 = get_cat_id($name_page); // nome da categoria ou subcategoria

// query dos indicadores do fullbanner
$featured_query_002 = new WP_Query(array(
  'post_type' => 'post',
  'category__in' => array($id_query_002), // id da categoria a ser exibida
));
if ($featured_query_002->have_posts()){ // se tiver content
  ?>

  <div class="gallery-image pt-125 pb-130 bg-img-position bg-img bg-galeria">
    <div class="container">
      <div class="admission-title text-center">
        <h2>Galeria de Fotos</h2>
      </div>
      <div class="admission-tab-list nav pt-80 pb-60">

        <?php
        // lista as categorias da galeria de fotos
        $subcategorias = get_categories(array( 'parent' => $id_query_002 ));
        foreach ($subcategorias as $subcategoria) {
          ?>
          <a class="active" href="index.php/category/<?= $name_page ?>/<?= $subcategoria->slug ?>">
            <h4><?= $subcategoria->name ?></h4>
          </a>
        <?php } ?>
      </div>

      <div class="tab-content jump">
        <div class="tab-pane active">
          <div class="course-slider-active-2 nav-style-1 owl-carousel">

            <?php
            $i_query_002 = 0;
            while($featured_query_002->have_posts()){
              $featured_query_002->the_post();
              ?>
              <div class="course-categorie-bundle">
                <div class="single-course mb-30">
                  <div class="course-img">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title() ?>">
                      <?php the_post_thumbnail('medium', array('class' => 'img-fluid img-border-cib')); // parametros -> thumbnail | medium | large | full | array(275, 275) ?>
                    </a>
                  </div>
                </div>
              </div>
              <?php
              $i_query_002++;
            }
            ?>

          </div>
        </div>
        <div class="view-all text-center mt-20" style="position:relative; z-index:10">
          <a class="default-btn btn-cib-dois" href="index.php/category/<?= $name_page ?>">Visualizar Todas</a>
        </div>
      </div>
    </div>
  </div>

  <?php
  wp_reset_postdata(); // limpa os dados do laço wp para evitar conflito em algum outro que venha a ser usado
}
?>
