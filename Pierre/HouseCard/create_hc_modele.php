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
    $insh=$bdd->prepare("INSERT INTO house('title,description,town,address,zipcode,type,id_area') VALUES(:title,:desc,:town,:address,:zip,:type,:area)");
        $insh->execute(array('title'=>$_POST['title'],'desc'=>$_POST['description'],'town'=>$_POST['town'],'address'=>$_POST['address'],'zip'=>$_POST['zipcode'],'type'=>$_POST['type'],'area'=>$_POST['area']));
?>
