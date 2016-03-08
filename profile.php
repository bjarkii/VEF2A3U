<?php      
  use classes\Upload;
  include './scripts/title.php'; 

    if (isset($_POST['upload'])) {
   // define the path to the upload folder
   $destination = $_SERVER['DOCUMENT_ROOT'] . "/2t/3003952369/vsha/userImg/";
   require_once 'classes/Upload.php';

   try {
      $loader = new Upload($destination);
      $loader->upload(); // Duplicate, false
      $result = $loader->getMessages();
       } 

    catch (Exception $e) {
      echo $e->getMessage();
      }
    }
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

    <div class="login-title">
        <h2>Velkominn, Nafn</h2>
    </div>

    <div class="upload-file">

      <?php
          if (isset($result)) {
          echo '<ul>';
          foreach ($result as $message) {
          echo "<li>$message</li>";
          }
           echo '</ul>';
          }
      ?>

      <form action="" method="post" enctype="multipart/form-data">
        <p>
            <label for="image">Upload image:</label>
            <!-- Við þurfum að vísa í superglobal array $_FILES til að nálgast skráarupplýsingar og skrá -->
            <input type="file" name="image[]" id="image" multiple>
        </p>
        <p>
            <input type="submit" name="upload" id="upload" value="Upload">
        </p>
    </form>
    </div>
    

    <form method="post" action="">
      <select name="pix" id="pix">
      <option value="">Select an image</option>
      <?php
        $files = new FilesystemIterator('userImg');
        $images = new RegexIterator($files, '/\.(?:jpg|png|gif)$/i');
        foreach ($images as $image) {
        $filename = $image->getFilename();
      ?>
        <option value="<?= $filename; ?>"><?= $filename; ?></option>
      <?php } ?>
    </select>
    </form>
    

    <footer>
      <?php require'scripts/footer.php' ?>
    </footer>

  </body>