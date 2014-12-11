

<ul>
    <?php
while ($donnees = $req->fetch())
{
	echo '<li>' . $donnees['login'] . $donnees['description'] . $donnees['rating'] . $donnees['picture'] .'</li>';
}
?>
</ul>
<?php
$req->closeCursor();
?>

    