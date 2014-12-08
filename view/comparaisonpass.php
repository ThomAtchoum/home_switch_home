<html>
    <body>
        <meta charset="utf-8" />
<?php

$pass = $_POST["pass"];
$repass = $_POST["repass"];

if ($pass != $repass ){
    include('formulairehtml.php');
    echo '*Les mots de passe ne correspondent pas';
}
?>
    </body>
</html>    

