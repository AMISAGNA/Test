
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Reseau social pour developpeur">
    <meta name="author" content="Sagna Aminata ">
    
    
    <title>

    <?php
    
       echo isset($title) 
       ? $title .' - '. WEBSITE_NAME 
        : 'WEBSITE_NAME, Simple Rapide Efficace!';
    
    
    ?>
    </title>

    <!-- STYLESHEET -->
    
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries-->
    <!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond.js@1.4.2/dest/respond.min.js"></script>
      <![endif]-->

  </head>

  <body>

  <?php include('partials/_nav.php'); ?>

  
  <?php include('partials/_flash.php'); ?>
  
