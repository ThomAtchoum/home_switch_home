<!DOCTYPE html>
<head><title>House Card</title></head>
<body>
    <?php
        try 
            {
                $bdd = new PDO ("mysql:host=localhost;dbname=home_switch_home","root","",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            } 
        catch (Exception $ex) 
            {
                die ('Erreur:'.$ex ->getMessage());
            }
    ?>
    
    <!--Get the house title-->
    <?php
        $askAtitle=$bdd->prepare('SELECT H.title FROM house H, ad A WHERE H.id=A.id_house AND A.id=:idad');
            $askAtitle->execute(array('idad'=>$_GET['id']));
    ?>
    
    <!--Get the house description-->
    <?php
        $askAdesc=$bdd->prepare('SELECT H.description FROM house H, ad A WHERE A.id_house=H.id AND A.id=:idad');
            $askAdesc->execute(array('idad'=>$_GET['id']));
    ?>
    
    <!--Get the begining date-->
    <?php
        $askDateB=$bdd->prepare('SELECT A.date_begin FROM ad A WHERE A.id=:idad');
            $askDateB->execute(array('idad'=>$_GET['id']))
    ?>
    
    <!--Get the end date-->
    <?php
        $askDateE=$bdd->prepare('SELECT A.date_end FROM ad A WHERE A.id=:idad');
            $askDateE->execute(array('idad'=>$_GET['id']));
    ?>
    
    <!--Get the house rate-->
    <?php
        $askHrate=$bdd->prepare('SELECT H.rating FROM house H, ad A WHERE H.id=A.id_house AND A.id=:idad');
            $askHrate->execute(array('idad'=>$_GET['id']));
    ?>
    
    <!--Get the house pic-->
    <?php
        $askHpic=$bdd->prepare('SELECT H.pictures FROM house H, ad A WHERE A.id_house=H.id AND A.id=:idad');
            $askHpic->execute(array('idad'=>$_GET['id']));
    ?>
</body>