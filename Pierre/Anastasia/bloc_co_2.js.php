<script>

if(isset($_POST) AND $_POST['login']!="" AND $_POST['password']!="")
    {
        extract($_POST);
        while($resPass=$askPass->fetch())
            {
                if($_POST['password']!=$resPass['password']) 
                    {
                        echo '<p>Mauvais login / password. Merci de recommencer</p>';
                    }
                else 
                    {
                        $_SESSION['login'] = $login;
                        $blocConnexion = 3;
                    }
            }
    }
else 
    {
        echo '<p>Vous avez oublié de remplir un champ.</p>';
        $blocConnexion=2;
}
</script>