<html>
<head>

  <!-- favicon -->
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />

  <!-- general stylesheets -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style/single.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style/archives.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style/commision.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style/about.css">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display|Roboto"
      rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Caveat|Permanent+Marker"
      rel="stylesheet">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
  integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
  crossorigin="anonymous">

  <!-- Scripts -->
  <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/scripts/script.js" defer></script>

  <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


  <!-- optimization KEEP AT THE BOTTOM -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style/breakpoints.css">

</head>
<!-- Here starts the header -->
  <header>
    <div class="headerContentWrapper">
        <div class="blogHeader"> <h1> <?php echo get_bloginfo( 'name' ); ?> </h1>
        </div>

          <div class="navigationMenu">
            <?php wp_nav_menu( array('theme_location' => 'main_menu' ) ); ?>
          </div>
    </div>
    <div class="mainPhoto">
      <img  src="<?php echo get_template_directory_uri()?>/img/main-foto.jpg" alt="This was supposed to be my blog photo">
    </div>

  </header>
