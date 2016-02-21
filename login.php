<?php  
  include './scripts/title.php'; 
?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>VEFA3 <?php echo "- {$title}"; ?></title>
    <meta charset="utf-8">

    <!-- GOOGLE CAPTCHA -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

      <!-- VALIDATION -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.0/jquery.validate.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.0/additional-methods.js"></script>
    <script src="scripts/validate.js"></script>

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

    <div class="login-title">
        <h2>Skráðu þig inn</h2>
    </div>

    <div class="login-form">

      <form class="pure-form pure-g" method="post" action="register-input.php" id="login">

        <fieldset>

            <div class="form-padding pure-u-1-2">
                <div class="form-input">
                  <p>Notendanafn</p>
                  <input type="email" placeholder="Netfang" name="notendanafn">
                </div>
            </div>
            
            <div class="form-padding pure-u-1-2">
                <div class="form-input">
                  <p>Lykilorð</p>
                  <input type="password" placeholder="Lykilorð" name="lykilord">
                </div>
            </div>

            <div class="form-input pure-u-1-2 form-padding">

              <ul>
                <li><button type="submit" class="form-submit">Skrá inn  &rarr;</button></li>
                <li><a class="form-submit" href="register.php">Nýskrá &uarr;</a></li>
              </ul>

            </div>


            
  
        </fieldset>

      </form>
    </div>
    

    <footer>
      <?php require'scripts/footer.php' ?>
    </footer>

  </body>