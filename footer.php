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


<footer class="mt-4 mb-4">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <p>
          <a href="">Home</a>
          <a href="">Recursos</a>
          <a href="">Benefícios</a>
          <a href="">Preços</a>
        </p>
      </div>
      <div class="col-md-4 d-flex justify-content-end">
        <a href="" class="btn btn-outline-dark">
          <i class="fab fa-facebook"></i>
        </a>
        <a href="" class="btn btn-outline-dark ml-2">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="btn btn-outline-dark ml-2">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="btn btn-outline-dark ml-2">
          <i class="fab fa-youtube"></i>
        </a>
      </div>
    </div>
  </div>
</footer>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!-- my script -->
<script src="<?= get_template_directory_uri() ?>/js/my_scripts.js"></script>

<?php wp_footer(); ?>
</body>

</html>