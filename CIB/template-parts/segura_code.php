<?php if (get_theme_mod('exibir_rodape')) { ?>
  <div class="col">
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

<?php if (is_active_sidebar('widget-1')){ ?>
  <div class="col">
    <div class="footer-widget mb-40">
      <?php dynamic_sidebar('widget-1'); ?>
    </div>
  </div>
<?php } ?>

<?php if (is_active_sidebar('widget-2')){ ?>
  <div class="col">
    <div class="footer-widget mb-40">
      <?php dynamic_sidebar('widget-2'); ?>
    </div>
  </div>
<?php } ?>

<?php if (is_active_sidebar('widget-3')){  ?>
  <div class="col">
    <div class="footer-widget negative-mrg-30 mb-40">
      <?php dynamic_sidebar('widget-3'); ?>
    </div>
  </div>
<?php } ?>

<?php if (is_active_sidebar('widget-4')){ ?>
  <div class="col">
    <div class="footer-widget mb-40">
      <?php dynamic_sidebar('widget-4'); ?>
    </div>
  </div>
<?php } ?>
