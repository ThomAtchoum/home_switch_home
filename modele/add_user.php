<html>
    <body>
        <meta charset="utf-8" />
<?php

$DB = new PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');

$pseudo = $_POST["pseudo"];
$pass = $_POST["pass"];
$mail = $_POST["mail"];

$req = $DB->prepare('INSERT INTO testuser2(login,password,mail) VALUES(:pseudo,:pass,:mail)');
$req->execute(array(
    'pseudo' => $pseudo,
    'pass' => $pass,
    'mail' => $mail,
   ));
echo 'Le login, le mot de passe et le mail ont bien étés ajoutés !';
?>
    </body>
</html>
