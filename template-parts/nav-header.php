  <?php
  // wp_nav_menu(array('menu' => 'menu_primary', 'container' => 'ul', 'container_class' => '','menu_class' => '', 'menu_id' => '')); 
  ?>
  <header>
    <!-- inicio Cabecalho -->
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <div class="container">

        <a href="#" class="navbar-brand">
          <img src="<?= get_template_directory_uri() ?>/img/logo_ok.png" width="180">
        </a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-principal">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="" class="nav-link">
                <h3>Home</h3>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <h3>Mercados</h3>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <h3>Regulamentações</h3>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <h3>Sobre nós</h3>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <h3>Contato</h3>
              </a>
            </li>
          </ul>
        </div>

      </div>
    </nav>
  </header>