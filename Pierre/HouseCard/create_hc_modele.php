<?php
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
    