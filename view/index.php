
<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="../view/hsh_style.css" />
		<title>HSH - Home Switch Home</title>
</head>



    <?php $connect = mysqli_connect("localhost", "root", "", "home_switch_home");
        if (!$connect) {
            printf("Ã‰chec de la connexion : %s\n", mysqli_connect_error());
            exit();
        }
     ?>
        
