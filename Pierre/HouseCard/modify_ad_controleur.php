<?php
    if(isset($_GET['id']))
        {
            include "ad_card_modele.php";
            include "modify_ac_vue.php";
        }
    else
        {
            echo"Page indisponible";
        }
?>