<?php
  global $nkp_client_info;
?>

<section class="contact-footer">
  <div class="grid-container">
    <h2>Contact Us</h2>
    <?php echo do_shortcode('[contact-form-7 id="131" title="Footer Form"]'); ?>
  </div>
</section>

<footer>
  <div class="grid-container">
    <div class="grid-50 tablet-50">
      <div class="logo">
          <a href="/" title="<?php echo $nkp_client_info->get_primary_practice_name(); ?>, <?php echo $nkp_client_info->get_primary_practice_doctors(); ?>, <?php echo $nkp_client_info->get_primary_practice_city(); ?>, <?php echo $nkp_client_info->get_primary_practice_state(); ?>">
              <img class="img-resp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Ingram-logo.svg" width="422" alt="<?php echo $nkp_client_info->get_primary_practice_name(); ?>, <?php echo $nkp_client_info->get_primary_practice_doctors(); ?>, <?php echo $nkp_client_info->get_primary_practice_city(); ?>, <?php echo $nkp_client_info->get_primary_practice_state(); ?>">
          </a>
      </div>
      <ul class="social">
        <li><a href="<?php echo $nkp_client_info->get_facebook_page(); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="<?php echo $nkp_client_info->get_instagram_page(); ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
        <li><a href="<?php echo $nkp_client_info->get_youtube_channel(); ?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
      </ul>
      <div class="telephone">
        <a href="tel:<?php echo $nkp_client_info->get_primary_practice_phone(); ?>"><?php echo $nkp_client_info->get_primary_practice_phone(); ?></a>
      </div>
      <div class="copyright">
        Copyright © <?php echo(date('Y')); ?> <?php echo $nkp_client_info->get_primary_practice_name(); ?>. All Rights Reserved
      </div>
    </div>
    <div class="grid-50 tablet-50">
      <div class="map">
        <a href="">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/map.jpg" alt="" class="img-resp">
        </a>
      </div>
      <a href="http://www.nkpmedical.com" target="_blank">Website Design & SEO by NKP Medical</a>
      <div><a href="/sitemap/">Sitemap</a> | <a href="/hipaa-privacy-policy/">HIPAA Privacy Policy</a> | <a href="/privacy-policy/">Privacy Policy</a> | <a href="/terms-of-use/">Terms & Conditions</a></div>
      <address>
        <?php echo $nkp_client_info->get_primary_practice_address(); ?>, <?php echo $nkp_client_info->get_primary_practice_state(); ?> <?php echo $nkp_client_info->get_primary_practice_postal(); ?>
      </address>
    </div>
  </div>
</footer>
