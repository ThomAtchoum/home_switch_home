
<?php



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
    