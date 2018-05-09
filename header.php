<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ) ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
  <nav id="header" class="navbar navbar-expand-md navbar-light bg-light fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.svg" alt="<?php bloginfo( 'name' ) ?>"></a>
      <button class="navbar-toggler border-0 p-0" type="button" data-toggle="collapse" data-target="#indhiraNav" aria-controls="indhiraNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="indhiraNav">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', 'menu_id' => '', 'menu_class' => 'navbar-nav ml-auto', 'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback', 'walker' => new WP_Bootstrap_Navwalker() ) ); ?>
      </div>
    </div>
  </nav>
  <main>
