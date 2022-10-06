<footer class="footer-area">
  <div class="footer-top pt-130 background_footer">
    <div class="container">
      <div class="row" id="widget-rodape">

        <?php if (is_active_sidebar('widget-1')){ ?>
          <div class="d-none d-md-block col-lg-3 col-md-6">
            <div class="footer-widget mb-40">
              <?php dynamic_sidebar('widget-1'); ?>
            </div>
          </div>
        <?php } ?>

        <?php if (is_active_sidebar('widget-2')){ ?>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="footer-widget mb-40">
              <?php dynamic_sidebar('widget-2'); ?>
            </div>
          </div>
        <?php } ?>

        <?php if (is_active_sidebar('widget-3')){ ?>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="footer-widget mb-40">
              <?php dynamic_sidebar('widget-3'); ?>
            </div>
          </div>
        <?php } ?>

        <?php if (get_theme_mod('exibir_rodape')) { ?>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="footer-widget mb-40">
              <div class="footer-title">
                <h4>Contato</h4>
              </div>
              <div class="footer-about">
                <p><?= get_theme_mod('endereco_completo'); ?></p>
                <div class="f-contact-info">
                  <div class="single-f-contact-info">
                    <i title="E-mail" class="fas fa-envelope-open-text"></i>
                    <span><a href="mailto:<?= get_theme_mod('email'); ?>"><?= get_theme_mod('email'); ?></a></span>
                  </div>
                  <div class="single-f-contact-info">
                    <i title="Contato" class="fa fa-phone"></i>
                    <span><?= get_theme_mod('fone_1'); ?></span>
                  </div>
                  <div class="single-f-contact-info">
                    <i title="Contato" class="fa fa-phone"></i>
                    <span><?= get_theme_mod('fone_2'); ?></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>

      </div>
    </div>
  </div>

  <div class="footer-bottom pt-15 pb-15 background_lin_rodape">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12">
          <div class="copyright">
            <p><?= get_theme_mod('footer_copyright'); ?> Desenvolvedor: <a target="new" href="http://www.maximum.eti.br">Maximum Tecnologia</a></p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="footer-menu-social">
            <?php get_template_part('template-parts/nav', 'rodape'); ?>
            <?php get_template_part('template-parts/redes', 'sociais'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- jQuery JS -->
<script src="<?=get_template_directory_uri()?>/assets/js/vendor/jquery-1.12.4.min.js"></script>
<!-- Popper JS -->
<script src="<?=get_template_directory_uri()?>/assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?=get_template_directory_uri()?>/assets/js/bootstrap.min.js"></script>
<!-- Plugins JS -->
<script src="<?=get_template_directory_uri()?>/assets/js/plugins.js"></script>
<!-- Ajax Mail -->
<script src="<?=get_template_directory_uri()?>/assets/js/ajax-mail.js"></script>
<!-- Main JS -->
<script src="<?=get_template_directory_uri()?>/assets/js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>
