<!DOCTYPE html>
<head>
    <title>Ajout d'une maison</title>
    <meta charset='utf-8'/>
</head>
<form method= "post" action="new_residence_formular.php" name="new_residence_formular" id="new_residence_formular">
			
				<h2> Localisation </h2>
					<p> <!-- Region choice-->
						<label for="region">Région :</label>
							<select name="region" id="region">
                                                                <option value="00">Choisissez votre région</option>
								<option value="01" >Alsace</option>
								<option value="02" >Aquitaine</option>
								<option value="03" >Auvergne</option>
								<option value="04" >Basse-Normandie</option>
								<option value="05" >Bourgogne</option>
								<option value="06" >Bretagne</option>
								<option value="07" >Centre</option>
								<option value="08" >Champagne-Ardenne</option>
								<option value="09" >Corse</option>
				 				<option value="10" >Franche-Comté</option>
								<option value="11" >Haute-Normandie</option>
								<option value="12" >Ile-de-France</option>
								<option value="13" >Languedoc-Roussillon</option>
								<option value="14" >Limousin</option>
								<option value="15" >Lorraine</option>
								<option value="16" >Midi-Pyrénées</option>
								<option value="17" >Nord-Pas-de-Calais</option>
								<option value="18" >Pays de la Loire</option>
								<option value="19" >Picardie</option>
								<option value="20" >Poitou-Charentes</option>
								<option value="21" >Provence-Alpes-Côte d'Azur</option>
								<option value="22" >Rhône-Alpes</option>
								<option value="23" >Guadeloupe</option>
								<option value="24" >Martinique</option>
								<option value="25" >Guyane</option>
								<option value="26" >Réunion</option>
							 </select>
					</p> 
					<p> <!-- zipcode choice-->
						<label for="zipcode"> Code postal :</label>
						<input type = "number" name= "zipcode" id="code_postal"/> 
					</p>
                                        
                                        <p> 
                                            <label for="town">Ville :</label>
                                            <input type="text" name="town" id="town"/>
                                        </p>
					
					<p> <!-- address-->
						<label for="address"> adresse :</label>
						<input type="text" name="address" id="address" placeholder="28 Boulevard de Pétaouchnoc" size ="100"/>
					</p>
				<h2> Informations sur le logement </h2>
					<p> <!-- type de logement-->
						<label for= "house_type"> Type de logement</label>
							<select id="house_type" name="house_type"> <!-- champs des types de logements simplifiées: partenaires-europréens.fr-->
								<option value="00">Choisissez votre type de logement</option>
								<option value="01" title="Maison / Villa">Maison / Villa</option>
								<option value="02" title="Appartement">Appartement</option>
								<option value="03" title="Immeuble">Immeuble</option>                                                            
								<option value="04" title="Chalet">Chalet</option>
								<option value="05" title="Fermette">Fermette</option>
								<option value="06" title="Moulin">Moulin</option>
								<option value="07" title="Loft">Loft</option>
								<option value="08" title="Mobil-Home">Mobil-Home</option>
								<option value="09" title="Château">Château</option>
								<option value="10" title="Gîtes/Chambres d’Hôtes">Gîtes/Chambres d’Hôtes</option>
							</select>
					</p>
					
					<p> <!-- bedroom count-->	
						<label for="bedroom_count"> Nombre de chambre </label>
						<input type="number" name="bedroom_count" id="bedroom_count"/>
					</p>
					
					<p> <!-- capacité de logement-->
						<label for="house_capacity"> Capacité de logement</label>
						<input type="number" name="house_capacity" id="house_capacity"/>
					</p>

					<p> Aménagements:
							<input type="checkbox" id='court' /> <label> cour </label>
							<input type="checkbox" id='garden' /> <label> jardin</label>
							<input type="checkbox" id='parking' /><label> garage/ parking</label>
							<input type="checkbox" id='pool' /> <label> piscine </label>
							<input type="checkbox" id='disabled' /> <label> accès handicapé</label>
							<input type="checkbox" id='smoker' /> <label> fumeurs </label>
					</p>

				<h2> Description de votre résidence</h2>
					<p> <!-- titre de la résidence-->
							<label for="residence_name">Titre </label> 
							<input type="text" name="residence_name" id="residence_name"/> </br>
						c'est ce titre qui apparaitra dans les résultats de recherche, soyez donc aussi précis et concis que possible </br>
						taille maximum : 200 caractères
					</p>
					
					<p><!-- description de la résidence-->
						<label for="residence_description">description de votre résidence (1 000 caractères maximum)</label> 
						<textarea name="residence_description" id="residence_description"></textarea> 
					</p>
					<p> <!-- key words-->
						<label for="key-words">résumez cette description en quelques mots clés (10 mots maximum)</label>
						<textarea name="key-words" id="key-words"></textarea> 
					</p>
					<p> <!-- photos-->
						<label for='main_photo'>photo principale (une seule photo) </label>
                                                <input type='file'  id='main_photo' multiple/>
						
					</p>
					<p>
						<label>photos secondaires (de 2 à 10 photos)</label> <br>
                                        </p>