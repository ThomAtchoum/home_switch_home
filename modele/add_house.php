<?php
session_start();
    try
        {
            $bdd=new PDO ("mysql:host=localhost;dbname=home_switch_home","root","",array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        } 
    catch (Exception $ex) 
        {
            die('Erreur'.$ex->getMessage());
        }
?>

<?php
    $askIdArea=$bdd->prepare('SELECT id FROM area WHERE name=:nameArea');
        $askIdArea->execute(array('nameArea'=>$_POST['region']));
        
    while($resIdArea=$askIdArea->fetch())
    {
        $idArea=$resIdArea['id'];
    }

    $addH=$bdd->prepare("INSERT INTO house(id_user,title,description,location_detail,id_area) VALUES(:idUser,:title,:desc,:town,:idArea");
        $addH->execute(array('idUser'=>$_SESSION['userId'],'title'=>$_POST['title'],'desc'=>$_POST['description'],'town'=>$_POST['town'],'idArea'=>$idArea));
?>
