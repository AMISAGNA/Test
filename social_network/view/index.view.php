
<?php $title = "Accueil"; ?>
<?php include('include/constant.php'); ?>
<?php include('partials/_header.php'); ?>

<div class="main-containe">
<div class="container">
<div class="jumbotron">

<h1><?php echo WEBSITE_NAME;?>?</h1>
<p>
<?php

$to      = 'test@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
'Reply-To: webmaster@example.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
ini_set("SMTP", "localhost");
ini_set("smtp_port", "25");

mail($to, $subject, $message, $headers);

echo WEBSITE_NAME;
?> est le réseau social des développeurs ⌨.<br/>
Et qui dit développeurs, dit également code source! ✍ <br/>
Grâce à cette plateforme, vous avez la possibilité de tisser des luens 
d'amitiés avec d'autre développeurs, échanger des codes sources,
recevoir de l'aide si vous rencontrez des problèmes sur l'un de vos
projets et bien plus encore!<br/>
Alors n'hésitez plus et <a href="registre.php">rejoignez dès maintenant la communauté de Boom</a>! ☺
</p>
<a href="registre.php" class="btn btn-primary btn-lg">Créer un compte</a>
</div>

</div><!-- /.container -->

</div>

<?php include('partials/_footer.php'); ?>
