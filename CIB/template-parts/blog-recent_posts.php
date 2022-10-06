<?php
// Configurações da pagina
$id_query_004 = get_cat_id('layout_home_recent_post'); // nome da categoria ou subcategoria
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

    <div class="blog-event-area pt-130 pb-115">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="section-title-3 mb-45 mrg-bottom-small">
              <h2>Our <span>Blog</span></h2>
              <p>Hempor incididunt ut labore et dolore mm, <br> itation ullamco laboris nisi ut aliquip. </p>
            </div>
            <div class="blog-active">
              <div class="single-blog">
                <div class="blog-img">
                  <a href="blog-details.html"><img src="<?=get_template_directory_uri()?>/assets/img/blog/blog-1.jpg" alt=""></a>
                </div>
                <div class="blog-content-wrap">
                  <span>Education</span>
                  <div class="blog-content">
                    <h4><a href="blog-details.html">Testing is a great thing.</a></h4>
                    <p>doloremque laudan tium, totam ersps uns iste natus</p>
                    <div class="blog-meta">
                      <ul>
                        <li><a href="#"><i class="fa fa-user"></i> Adrin Azra</a></li>
                        <li><a href="#"><i class="fa fa-comments-o"></i> 22</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="blog-date">
                    <a href="#"><i class="fa fa-calendar-o"></i> Jun, 24th 2018</a>
                  </div>
                </div>
              </div>
              <div class="single-blog">
                <div class="blog-img">
                  <a href="blog-details.html"><img src="<?=get_template_directory_uri()?>/assets/img/blog/blog-2.jpg" alt=""></a>
                </div>
                <div class="blog-content-wrap">
                  <span>Education</span>
                  <div class="blog-content">
                    <h4><a href="blog-details.html">Learn English in ease.</a></h4>
                    <p>doloremque laudan tium, totam ersps uns iste natus</p>
                    <div class="blog-meta">
                      <ul>
                        <li><a href="#"><i class="fa fa-user"></i> Tayeb Jon</a></li>
                        <li><a href="#"><i class="fa fa-comments-o"></i> 12</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="blog-date">
                    <a href="#"><i class="fa fa-calendar-o"></i> Feb, 10th 2017</a>
                  </div>
                </div>
              </div>
              <div class="single-blog">
                <div class="blog-img">
                  <a href="blog-details.html"><img src="<?=get_template_directory_uri()?>/assets/img/blog/blog-3.jpg" alt=""></a>
                </div>
                <div class="blog-content-wrap">
                  <span>Education</span>
                  <div class="blog-content">
                    <h4><a href="blog-details.html">In publishing and graphic.</a></h4>
                    <p>doloremque laudan tium, totam ersps uns iste natus</p>
                    <div class="blog-meta">
                      <ul>
                        <li><a href="#"><i class="fa fa-user"></i> Md Tamim</a></li>
                        <li><a href="#"><i class="fa fa-comments-o"></i> 20</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="blog-date">
                    <a href="#"><i class="fa fa-calendar-o"></i> Oct, 26th 2017</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="section-title-3 mb-45 ml-70">
              <h2><span>Up Coming</span> Event</h2>
              <p>Hempor incididunt ut labore et dolore mm, <br> itation ullamco laboris nisi ut aliquip. </p>
            </div>
            <div class="event-active-2 ml-70">
              <div class="single-event single-event-2">
                <div class="event-img">
                  <a href="event-details.html"><img src="<?=get_template_directory_uri()?>/assets/img/event/event-4.jpg" alt=""></a>
                  <div class="event-date-wrap">
                    <span class="event-date">1st</span>
                    <span>Dec</span>
                  </div>
                </div>
                <div class="event-content">
                  <h3><a href="event-details.html">Aempor incididunt ut labore ejam.</a></h3>
                  <p>Pvolupttem accusantium doloremque laudantium, totam erspiciatis unde omnis iste natus error .</p>
                  <div class="event-meta-wrap">
                    <div class="event-meta">
                      <i class="fa fa-location-arrow"></i>
                      <span>Mascot Plaza ,Uttara</span>
                    </div>
                    <div class="event-meta">
                      <i class="fa fa-clock-o"></i>
                      <span>10:30 am</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="single-event single-event-2">
                <div class="event-img">
                  <a href="event-details.html"><img src="<?=get_template_directory_uri()?>/assets/img/event/event-4.jpg" alt=""></a>
                  <div class="event-date-wrap">
                    <span class="event-date">1st</span>
                    <span>Dec</span>
                  </div>
                </div>
                <div class="event-content">
                  <h3><a href="event-details.html">Social Sciences & Education.</a></h3>
                  <p>Pvolupttem accusantium doloremque laudantium, totam erspiciatis unde omnis iste natus error .</p>
                  <div class="event-meta-wrap">
                    <div class="event-meta">
                      <i class="fa fa-location-arrow"></i>
                      <span>Shuvastu ,Badda</span>
                    </div>
                    <div class="event-meta">
                      <i class="fa fa-clock-o"></i>
                      <span>10:30 am</span>
                    </div>
                  </div>
                </div>
              </div>
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
