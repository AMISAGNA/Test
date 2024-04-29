

<?php

//Database credentials
define('DB_HOST', 'localhost');
define('DB_NAME', 'boom');
define('DB_USER', 'root');
define('DB_PASSEWORD', '');

try{

    $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASSEWORD);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   

} catch(PDOException $e){
    die('Erreur: '.$e->getMessage());
}

