
        
<?php

$DB = new PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');

$pseudo = $_POST["pseudo"];
$pass = $_POST["pass"];
$mail = $_POST["mail"];

$req = $DB->prepare('INSERT INTO user(login,password,mail) VALUES(:pseudo,:pass,:mail)');
$req->execute(array(
    'pseudo' => $pseudo,
    'pass' => $pass,
    'mail' => $mail,
   ));

?>
    
