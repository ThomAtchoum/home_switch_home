<?php
include "../modele/search_co_bloc.php"
?>
<?php
if(isset($_POST) AND $_POST['login']!="" AND $_POST['password']!="")
    {
        extract($_POST);
        while($resPass=$askPass->fetch() AND $resLogin=$askLogin->fetch())
            {
                if($resLogin==$_POST['login'])
                    {
                        if($_POST['password']!=$resPass['password']) 
                            {
                            ?>
                                <div class="WrongPass">Echec de connexion : login ou mot de passe incorrect.</div>
                            <?php
                                global $blocConnexion;
                                $blocConnexion=2;
                            }
                        else 
                            {
                                $_SESSION['login'] = $login;
                            }
                    }
                elseif($resPass="" OR $resPass=NULL)
                    {
                    ?>
                        <div class="WrongPass">Echec de connexion : login ou mot de passe incorrect.</div>
                    <?php
                        global $blocConnexion;
                        $blocConnexion=2;
                    }
            }
    }          
 else 
    {
        ?> <div class="NoLogPass">Veuillez remplir les champs correctment</div> <?php
        global $blocConnexion;
        $blocConnexion=2;
    }
