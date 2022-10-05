<footer>

  <?php
  /*
  if (is_active_sidebar('widget-1')) {
    dynamic_sidebar('widget-1');
  }

  if (get_theme_mod('exibir_rodape')) {

    echo get_theme_mod('endereco_completo');
    echo get_theme_mod('email');
    echo get_theme_mod('email');
    echo get_theme_mod('fone_1');
    echo get_theme_mod('fone_2');
    echo get_theme_mod('footer_copyright');

  }
  */
  ?>

  <?php get_template_part('template-parts/nav', 'footer'); ?>
  <?php get_template_part('template-parts/networks', 'social'); ?>

</footer>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- my script -->
<script src="<?= get_template_directory_uri() ?>/js/my_scripts.js"></script>

<?php wp_footer(); ?>
</body>

</html>