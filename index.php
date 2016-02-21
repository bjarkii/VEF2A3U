<?php  
  include './scripts/title.php'; 
?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>VEFA3 <?php echo "- {$title}"; ?></title>
    <meta charset="utf-8">
    <!-- FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,700' rel='stylesheet' type='text/css'>
    <!-- PURE CSS -->
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
    <!--<![endif]-->
    <!-- STYLESHEET -->
    <link rel="stylesheet" type="text/css" href="styles.css">

  </head>

  <body>
    <?php 
      include './scripts/slider.php';
     ?>

    <header class="pure-g">
      <?php require'scripts/menu.php' ?>
    </header>

    <div class="header-bottom">
      <?php require'scripts/sub-menu.php' ?>
    </div>



    <div class="slider" style="background-image: url(<?php print_r($slider_picture[rand(0, 3)])?>)">
        <div class="slider-title">
          <h1>Titill</h1>
          <h3>Einhverjar upplýsingar</h3>
        </div>
    </div>

    <div class="content pure-g">
      <div class="feed pure-u-2-3">
          <h1>Content</h1>
      </div>

      <div class="sidebar pure-u-1-3">
        <div class="sidebar-content">
            <h3>Sidebar</h3>
        </div>
      </div>
      
    </div>

    <footer>
      <?php require'scripts/footer.php' ?>
    </footer>

  </body>