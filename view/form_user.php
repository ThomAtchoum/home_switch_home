<html>
	<header>
		<title>Formulaire d'inscription</title>
	</header>
	
	<body>
	  	
		<link rel="stylesheet" type="text/css" href="formulaireinscription.css" />
		
	<div id="formulaire" style="background-color: rgba(255, 255, 255, 0.7)">
		<meta charset="utf-8" />
		<h1>Formulaire d'inscription</h1>

		<fieldset>
		<legend>Vos coordonnées</legend>

		<form method="post" action="add_user.php">
			<p>
				<label>Nom</label> : <input type="text" name="nom" id="Nom" placeholder="Ex:Hasselhof" />
			</p>

			<p>
				<label>Prénom</label> : <input type="text" name="prenom" id="Prenom" placeholder="Ex:David" />
			</p>
		
		
		
			<p>
				<label>Date de naissance</label> : <input type="date" name="date" id="Date de Naissance" placeholder="JJ/MM/AAAA" />
			</p>
		

		
			<p>
				<label>Adresse e-mail*</label> : <input type="email" name="mail" id="Adresse e-mail" placeholder="Ex:dhasselhof@malibu.com" />
			</p>
		

		
			<p>
				<label for="telephone">Téléphone</label>
				<input type="tel" name="tel" id="tel" placeholder="Ex:0000000000" maxlength="10" />
			</p>
		
		</fieldset>

			<p>
				<label for="pseudo">Pseudo*</label>
				<input type="text" name="pseudo" id="pseudo" placeholder="Ex:Chabadou" maxlenght="12" />
			</p>
		

	<script src="formulaireinscription.js"></script>

        <form method="post" action="comparaisonpass.php">
			<p>
				<label for="pass">Mot de passe*</label>
				<input type="password" name="pass" id="pass" />
			</p>
		
		
		
			<p>
				<label for="repass">Répéter mot de passe*</label>
				<input type="password" name="repass" id="repass" />
			</p>
		
        </form>	
		
		
			<p>
				Sexe:<br />
				<input type="radio" name="homme" id="homme" /> <label for="homme">Homme</label><br />
				<input type="radio" name="femme" id="femme" /> <label for="femme">Femme</label><br />
				<input type="radio" name="autre" id="autre" /> <label for="autre">Autre</label><br />
			</p>
		

		
			<p>
				<label for="infos">Informations additionelles</label>
				<textarea name="infos" id="info" /></textarea>
			</p>
		
		
		<p>*Champs obligatoires</p>

		
			<input type="submit" name="valider" value="Valider" />
		
			<input type="reset" name="annuler" value="Annuler" />
		</form>
		</body>
		


</html>