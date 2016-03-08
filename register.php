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

    <style type="text/css">
      #commentForm { width: 500px; }
      #commentForm label { width: 250px; }
      #commentForm label.error, #commentForm input.submit { margin-left: 253px; }
    </style>

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
        <h2>Nýskrá</h2>
        <h3>Stofna aðgang</h3>
    </div>

    <div class="login-form">

      <form class="pure-form pure-g" method="post" action="register-input.php">

        <fieldset>

            <div class="form-padding pure-u-1-3">
                <div class="form-input">
                  <p>Fornafn*</p>
                  <input name="fornafn" type="text" placeholder="Fornafn" required>
                </div>
            </div>

            <div class="form-padding pure-u-1-3">
                <div class="form-input">
                  <p>Eftirnafn*</p>
                  <input name="eftirnafn" type="text" placeholder="Eftirnafn">
                </div>
            </div>

            <div class="form-padding pure-u-1-3">
                <div class="form-input">
                  <p>Sími</p>
                  <input name="simi" type="text" placeholder="Sími">
                </div>
            </div>

            <hr>

            <div class="form-padding pure-u-1-2">
                <div class="form-input">
                  <p>Netfang*</p>
                  <input name="email" type="email" placeholder="Netfang">
                </div>
            </div>

            <div class="form-padding form-info pure-u-1-2">
                <h3>Notendanafn</h3>
                <p>Verður notað sem notendanafn</p>
            </div>
            
            <div class="form-padding pure-u-1-2">
                <div class="form-input">
                  <p>Lykilorð*</p>
                  <input name="lykilord" type="password" placeholder="Lykilorð">
                </div>
            </div>

            <div class="form-padding pure-u-1-2">
                <div class="form-input">
                  <p>Staðfesta lykilorð*</p>
                  <input name="lykilordMatch" type="password" placeholder="Endurtaktu lykilorð">
                </div>
            </div>

            <hr>

            <div class="form-padding pure-u-1-2">
                <div class="form-input">
                  <p>Veldu Spurningu</p>
                  <select id="state" name="spurning">
                    <option>Nafnið á fyrsta gæludýrinu</option>
                    <option>Uppáhalds kennari</option>
                    <option>Hvar fæddist mamma þín</option>
                  </select>

                  <p>Svar</p>
                    <input name="svarSpurning" type="text" placeholder="Lykilorð">
                  
                </div>
            </div>

            <div class="form-padding form-info pure-u-1-2">
                <h3>Spurning</h3>
                <p>Ef að þú gleymir lykilorðinu þá sendum við þér email með þessari spurningu.</p>
            </div>

            <div class="form-input pure-u-1">
            <ul>
              <li><button type="submit" class="form-submit">Nýskrá</button></li>
            </ul>
              

            </div>
            
        </fieldset>

      </form>

    </div>

    

    <footer>
      <?php require'scripts/footer.php' ?>
    </footer>

  </body>