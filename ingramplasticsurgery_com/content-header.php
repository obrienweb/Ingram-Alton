<?php
  global $nkp_client_info;
?>

<header class="header">
  <div class="grid-container">

    <div class="logo">
        <a href="/" title="<?php echo $nkp_client_info->get_primary_practice_name(); ?>, <?php echo $nkp_client_info->get_primary_practice_doctors(); ?>, <?php echo $nkp_client_info->get_primary_practice_city(); ?>, <?php echo $nkp_client_info->get_primary_practice_state(); ?>">
            <img class="img-resp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Ingram-logo-2.svg" width="260" alt="<?php echo $nkp_client_info->get_primary_practice_name(); ?>, <?php echo $nkp_client_info->get_primary_practice_doctors(); ?>, <?php echo $nkp_client_info->get_primary_practice_city(); ?>, <?php echo $nkp_client_info->get_primary_practice_state(); ?>">
        </a>
    </div>

    <?php wp_nav_menu( array( 'menu' => 'Main Navigation', 'container_class' => 'stellarnav') ); ?>

  </div>
</header>
