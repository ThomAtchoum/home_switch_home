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
    if(isset($_POST['title']) AND $_POST['title']!=NULL AND $_POST['title']!=""
        AND isset($_POST['description']) AND $_POST['description']!=NULL AND $_POST['description']!=""
        AND isset($_POST['town']) AND $_POST['town']!=NULL AND $_POST['town']!=""
        AND isset($_POST['region']) AND $_POST['region']!=NULL AND $_POST['region']!="")
    {
        $askIdArea=$bdd->prepare('SELECT id FROM area WHERE name=:nameArea');
            $askIdArea->execute(array('nameArea'=>$_POST['region']));
        
        while($resIdArea=$askIdArea->fetch())
        {
            $idArea=$resIdArea['id'];
        }

        $addH=$bdd->prepare("INSERT INTO house(id_user,title,description,location_detail,id_area) VALUES(:idUser,:title,:desc,:town,:idArea)");
            $addH->execute(array('idUser'=>$_SESSION['userId'],'title'=>$_POST['title'],'desc'=>$_POST['description'],'town'=>$_POST['town'],'idArea'=>$idArea));
    }
    else
    {
        echo"Vous n'avez pas complété les champs correctement";
        ?>
<input type="button" onclick="self.location.href='../controler/content.php?page=createHouse'" value="Retour"/>
        <?php
    }
?>
