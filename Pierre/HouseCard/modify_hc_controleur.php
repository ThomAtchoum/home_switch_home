    <?php
        if(isset($_GET['id']))
            {
                include 'house_card_modele.php';
                include 'modify_hc_vue.php';
            }
        else
            {
                echo"Page non disponible";
            }
    ?>  