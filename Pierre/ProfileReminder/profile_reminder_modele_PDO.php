<!DOCTYPE html>
    <head><title>Profile Reminder</title></head>
    <body>
        <?php   /*Accès à la bdd*/
            try 
                {
                    $bdd = new PDO ("mysql:host=localhost;dbname=home_switch_home","root","",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                } 
            catch (Exception $ex) 
                {
                    die ('Erreur:'.$ex ->getMessage());
                }
        ?>

        <?php   /*Récupération du login*/
            $idhouse=$_GET['id'];
            $askNP = $bdd->prepare('SELECT U.login FROM user U, house H WHERE U.id = H.id_user AND H.id=:idhouse');
                    $askNP->execute(array('idhouse'=>$idhouse));
            /*$askNP->closeCursor();*/
        ?>

        <?php   /*Récupération de la description*/
            $askDesc = $bdd->prepare('SELECT U.description FROM User U,House H WHERE U.id = H.id_user AND H.id=:idhouse');
                 $askDesc->execute(array('idhouse' => $idhouse));
           /*$askdesc->closeCursor()*/
        ?>
        
        <?php   /*Récupération photo de profil*/
            $askPic = $bdd->prepare('SELECT U.picture FROM User U, House H WHERE U.id=H.id_user AND H.id=:idhouse');
                    $askPic->execute(array('idhouse'=>$idhouse));
            /*$askpic->closeCursor()*/
        ?>
        
        <?php
            $askRate = $bdd->prepare('SELECT U.rating FROM User U, House H WHERE U.id=H.id_user AND H.id=:idhouse');
                    $askRate->execute(array('idhouse'=>$idhouse));
            /*$askrate->closeCursor()*/
        ?>
        
        
    </body>

