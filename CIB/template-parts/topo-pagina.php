<header class="header-area">
  <div class="header-top bg-img">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="header-contact">
            <ul>
              <?php if (get_theme_mod('fone_1')) { ?>
                <li class="d-none d-lg-block"><i title="Contato" class="fa fa-phone cores-icons"></i><?= get_theme_mod('fone_1'); ?></li>
              <?php } ?>
              <?php if (get_theme_mod('fone_2')) { ?>
                <li class="d-none d-lg-block"><i title="Contato" class="fa fa-phone cores-icons"></i><?= get_theme_mod('fone_2'); ?></li>
              <?php } ?>
              <?php if (get_theme_mod('fone_2')) { ?>
              <li><i title="E-mail" class="fas fa-envelope-open-text cores-icons"></i><a href="mailto:<?= get_theme_mod('email'); ?>"><?= get_theme_mod('email'); ?></a></li>
            <?php } ?>
            </ul>
          </div>
        </div>
        <div class="col col-lg-3">
          <div class="footer-menu-social">
            <div id="social_top">
              <?php get_template_part('template-parts/redes', 'sociais'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="header-bottom sticky-bar clearfix background_navbar">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-md-6 col-4">
          <div class="logo-marca">
            <a href="/">
              <?php the_custom_logo(); ?>
            </a>
          </div>
        </div>
        <div class="col-lg-10 col-md-6 col-8">
          <div class="menu-cart-wrap">
            <div class="main-menu">
              <nav>
                <?php get_template_part('template-parts/nav', 'topo'); ?>
              </nav>
            </div>
            <div class="cart-search-wrap">
              <div class="header-search">
                <button class="search-toggle">
                  <i class="fa fa-search"></i>
                </button>
                <div class="search-content">
                  <form action="<?= esc_url(home_url( '/' )); ?>">
                    <input type="search" placeholder="Pesquisar" value="<?= get_search_query(); ?>" name="s">
                    <button>
                      <i class="fa fa-search"></i>
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mobile-menu-area">
        <div class="mobile-menu">
          <?php get_template_part('template-parts/nav', 'mobile'); ?>
        </div>
      </div>
    </div>
  </div>
</header>
