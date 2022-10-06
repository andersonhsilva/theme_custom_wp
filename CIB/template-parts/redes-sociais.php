<div class="footer-social">
  <ul>
    <?php if (get_theme_mod('facebook_link')) { ?>
      <li><a class="facebook" target="new" title="Facebook" href="<?= get_theme_mod('facebook_link'); ?>"><i class="fab fa-facebook-f"></i></a></li>
    <?php } ?>
    <?php if (get_theme_mod('youtube_link')) { ?>
      <li><a class="youtube" target="new" title="YouTube" href="<?= get_theme_mod('youtube_link'); ?>"><i class="fab fa-youtube"></i></a></li>
    <?php } ?>
    <?php if (get_theme_mod('twitter_link')) { ?>
      <li><a class="twitter" target="new" title="Twitter" href="<?= get_theme_mod('twitter_link'); ?>"><i class="fab fa-twitter"></i></a></li>
    <?php } ?>
    <?php if (get_theme_mod('google_link')) { ?>
      <li><a class="google-plus" target="new" title="Google+" href="<?= get_theme_mod('google_link'); ?>"><i class="fab fa-google-plus-g"></i></a></li>
    <?php } ?>
    <?php if (get_theme_mod('instagra_link')) { ?>
      <li><a class="icone_instagram" target="new" title="Instagram" href="<?= get_theme_mod('instagra_link'); ?>"><i class="fab fa-instagram"></i></a></li>
    <?php } ?>
  </ul>
</div>
