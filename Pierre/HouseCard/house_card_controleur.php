    <?php
        if(isset($_GET['id']))
            {
                include 'house_card_modele.php';
                include 'house_card_vue.php';
            }
        else
            {
                echo"Page non disponible";
            }
    ?>  