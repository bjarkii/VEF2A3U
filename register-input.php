<?php

		$captcha;

          if(isset($_POST['fornafn'])){
          $fornafn=$_POST['fornafn'];}

          if(isset($_POST['eftirnafn'])){
          $eftirnafn=$_POST['eftirnafn'];}

          if(isset($_POST['simi'])){
          $simi=$_POST['simi'];}

          if(isset($_POST['email'])){
          $email=$_POST['email'];}

          if(isset($_POST['lykilord'])){
          $lykilord=$_POST['lykilord'];}

          if(isset($_POST['spurning'])){
          $spurning=$_POST['spurning'];}

          if(isset($_POST['svarSpurning'])){
          $svarspurning=$_POST['svarSpurning'];}


          	// CAPTCHA

          if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
          echo '<h2>Please check the the captcha form.</h2>';
          exit;
        }
        $secretKey = "6LeC0hgTAAAAAMnbyRGY3awwPHusFYF6DHrEVJsT";
        $ip = $_SERVER['REMOTE_ADDR'];
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
        $responseKeys = json_decode($response,true);
        if(intval($responseKeys["success"]) !== 1) {
          echo '<h2>You are spammer ! Get the @$%K out</h2>';
        } else {
          echo '<h2>Thanks for posting comment.</h2>';
        }

        	// VALUE

        	echo "$fornafn<br>";

        	echo "$eftirnafn<br>";

        	echo "$simi<br>";

        	echo "$email<br>";

        	echo "$lykilord<br>";

        	echo "$spurning<br>";

        	echo "$svarspurning<br>";

        	?>
