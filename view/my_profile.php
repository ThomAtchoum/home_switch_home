<html>
    <body>
<?php

$DB = new PDO('mysql:host=127.0.0.1;dbname=APP-MVC', 'root', '');

$req = $DB->prepare('SELECT login, description, rating, picture FROM user WHERE id=:id');
$req->execute(array('id'=>$_GET['id']));

echo '<ul>';
while ($donnees = $req->fetch())
{
	echo '<li>' . $donnees['login'] . $donnees['description'] . $donnees['rating'] . $donnees['picture'] .'</li>';
}
echo '</ul>';

$req->closeCursor();

?>
    </body>
</html>
        