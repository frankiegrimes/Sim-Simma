<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sim Simma</title>
    <link rel="stylesheet" href="wp-content/themes/simsimma/css/app.css">
    <link rel="stylesheet" href="wp-content/themes/simsimma/css/styles.css">
    <?php wp_head(); ?>
  </head>
  <body>
    
    <div class="title-bar" data-responsive-toggle="responsive-menu" data-hide-for="medium">
      <button class="menu-icon" type="button" data-toggle="responsive-menu"></button>
      <div class="title-bar-title">Menu</div>
    </div>

    <div class="top-bar" id="responsive-menu">
      <div class="top-bar-left">
        <ul class="menu">
          <li class="menu-text">
            <a href=" <?php echo get_bloginfo( 'wpurl' );?>">
           <img class="thumbnail" src="wp-content/themes/simsimma/assets/icons/logo.svg" alt="Sim Simma Logo">
         </a>
          </li>
        </ul>
      </div>
      <div class="top-bar-right">
        <ul class="menu">
             <li><a href="#0">About</a></li>
          <li><a href="index.php">News</a></li>
          <li><a href="#0">Music</a></li>
          <li><a href="#0">Events</a></li>
          <li><a href="#0">Shop</a></li>
        </ul>
      </div>
    </div>