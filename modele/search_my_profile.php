
<?php



$req = $DB->prepare('SELECT login, description, rating, picture FROM user WHERE id=:id');
$req->execute(array('id'=>$_GET['id']));

?>
