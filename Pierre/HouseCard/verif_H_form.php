<script>
    function Verifform($_POST['region'],$_POST['description'],$_POST['town'],$_POST['address'],$_POST['zipcode'],$_POST['type'],$_POST['capacity'],$_POST['brnb'],$_POST['title'])
        {
            if(!isset($_POST['region']) 
                        OR isset($_POST['title']) 
                        OR !isset($_POST['description']) 
                        /*Ajouter ici la photo*/
                        OR !isset($_POST['town']) 
                        OR !isset($_POST['address'])
                        OR !isset($_POST['zipcode'])
                        OR !isset($_POST['type'])
                        OR !isset($_POST['capacity'])
                        OR !isset($_POST['brnb']));
                {
                    echo"Vous n'avez pas rempli tous les champs demandés"; 
                }
            else
                {
                    
                }
        }
</script>   