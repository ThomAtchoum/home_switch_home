
<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="../view/hsh_style.css" />
		<title>HSH - Home Switch Home</title>
</head>



    <?php $DB = new PDO('mysql:host=localhost;dbname=app info g1a', 'root', '');;
        if (!$DB) {
            printf("Ã‰chec de la connexion : %s\n", mysqli_connect_error());
            exit();
        }
     ?>
        
