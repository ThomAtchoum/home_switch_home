<form methode= "post" action="new_residence_formular.php" name="new_residence_formular" id="new_residence_formular">
			
				<h2> Localisation </h2>
					<p> <!-- choix du pays-->
						<label for="country"> Pays</label> <!-- france préselectionnée ,hiden en CSS pour l'instant --> 
						<select id="country" name="country" > <!-- champs des pays partenaires-europréens.fr-->
                                <option value="Afghanistan" >Afghanistan</option>
								<option value="Afrique du Sud" >Afrique du Sud</option>
								<option value="Albanie" >Albanie</option>
								<option value="Algerie" >Algerie</option>
								<option value="Allemagne" >Allemagne</option>
								<option value="Andorre" >Andorre</option>
								<option value="Angola" >Angola</option>
								<option value="Anguilla" >Anguilla</option>
								<option value="Antarctique" >Antarctique</option>
								<option value="Antigua-et-Barbuda" >Antigua-et-Barbuda</option>
								<option value="Arabie Saoudite" >Arabie Saoudite</option>
								<option value="Argentine" >Argentine</option>
								<option value="Armenie" >Armenie</option>
								<option value="Aruba" >Aruba</option>
								<option value="Australie" >Australie</option>
								<option value="Autriche" >Autriche</option>
								<option value="Azerbaïdjan" >Azerbaïdjan</option>
								<option value="Bahamas" >Bahamas</option>
								<option value="Bahreïn" >Bahreïn</option>
								<option value="Bangladesh" >Bangladesh</option>
								<option value="Barbade" >Barbade</option>
								<option value="Belgique" >Belgique</option>
								<option value="Bélize" >Bélize</option>
								<option value="Bénin" >Bénin</option>
								<option value="Bermudes" >Bermudes</option>
								<option value="Bhoutan" >Bhoutan</option>
								<option value="Biélorussie" >Biélorussie</option>
								<option value="Birmanie" >Birmanie</option>
								<option value="Bolivie" >Bolivie</option>
								<option value="Bosnie-Herzégovine" >Bosnie-Herzégovine</option>
								<option value="Botswana" >Botswana</option>
								<option value="Bouvet (île)" >Bouvet (île)</option>
								<option value="Brésil" >Brésil</option>
								<option value="Brunéi Darussalam" >Brunéi Darussalam</option>
								<option value="Bulgarie" >Bulgarie</option>
								<option value="Burkina Faso" >Burkina Faso</option>
								<option value="Burundi" >Burundi</option>
								<option value="Caïmans (îles)" >Caïmans (îles)</option>
								<option value="Cambodge" >Cambodge</option>
								<option value="Cameroun" >Cameroun</option>
								<option value="Canada" >Canada</option>
								<option value="Cap-Vert" >Cap-Vert</option>
								<option value="Chili" >Chili</option>
								<option value="Chine" >Chine</option>
								<option value="Christmas (îles)" >Christmas (îles)</option>
								<option value="Chypre" >Chypre</option>
								<option value="Cocos (îles)" >Cocos (îles)</option>
								<option value="Colombie" >Colombie</option>
								<option value="Comores" >Comores</option>
								<option value="Congo" >Congo</option>
								<option value="Cook (îles)" >Cook (îles)</option>
								<option value="Corée du Nord" >Corée du Nord</option>
								<option value="Corée du Sud" >Corée du Sud</option>
								<option value="Costa Rica" >Costa Rica</option>
								<option value="Cote d'Ivoire" >Cote d'Ivoire</option>
								<option value="Croatie" >Croatie</option>
								<option value="Cuba" >Cuba</option>
								<option value="Danemark" >Danemark</option>
								<option value="Djibouti" >Djibouti</option>
								<option value="Dominique" >Dominique</option>
								<option value="Egypte" >Egypte</option>
								<option value="Emirats arabes unis" >Emirats arabes unis</option>
								<option value="Equateur" >Equateur</option>
								<option value="Erythrée" >Erythrée</option>
								<option value="Espagne" >Espagne</option>
								<option value="Estonie" >Estonie</option>
								<option value="Etats Unis" >Etats Unis</option>
								<option value="Ethiopie" >Ethiopie</option>
								<option value="Falkland (îles Malouines)" >Falkland (îles Malouines)</option>
								<option value="Féroé (îles)" >Féroé (îles)</option>
								<option value="Fiji" >Fiji</option>
								<option value="Finlande" >Finlande</option>
								<option value="France"  selected="selected" >France</option>
								<option value="Gabon" >Gabon</option>
								<option value="Gambie" >Gambie</option>
								<option value="Géorgie" >Géorgie</option>
								<option value="Géorgie du Sud et les îles Sandwich du Sud" >Géorgie du Sud et les îles Sandwich du Sud</option>
								<option value="Ghana" >Ghana</option>
								<option value="Gibraltar" >Gibraltar</option>
								<option value="Global PG" >Global PG</option>
								<option value="Global SL" >Global SL</option>
								<option value="Grèce" >Grèce</option>
								<option value="Grenade" >Grenade</option>
								<option value="Groenland" >Groenland</option>
								<option value="Guadeloupe" >Guadeloupe</option>
								<option value="Guam" >Guam</option>
								<option value="Guatémala" >Guatémala</option>
								<option value="Guernsey C.I." >Guernsey C.I.</option>
								<option value="Guinée" >Guinée</option>
								<option value="Guinée équatoriale" >Guinée équatoriale</option>
								<option value="Guinée-Bissau" >Guinée-Bissau</option>
								<option value="Guyana" >Guyana</option>
								<option value="Guyane française" >Guyane française</option>
								<option value="Haïti" >Haïti</option>
								<option value="Heard et McDonald (îles)" >Heard et McDonald (îles)</option>
								<option value="Honduras" >Honduras</option>
								<option value="Hong Kong" >Hong Kong</option>
								<option value="Hongrie" >Hongrie</option>
								<option value="Îles Vierges américaines" >Îles Vierges américaines</option>
								<option value="Îles Vierges britanniques" >Îles Vierges britanniques</option>
								<option value="Îles mineures éloignées des États-Unis" >Îles mineures éloignées des États-Unis</option>
								<option value="Inde" >Inde</option>
								<option value="Indonesie" >Indonesie</option>
								<option value="Iran" >Iran</option>
								<option value="Iraq" >Iraq</option>
								<option value="Irlande" >Irlande</option>
								<option value="Islande" >Islande</option>
								<option value="Isle of Man" >Isle of Man</option>
								<option value="Israël" >Israël</option>
								<option value="Italie" >Italie</option>
								<option value="Jamaïque" >Jamaïque</option>
								<option value="Japon" >Japon</option>
								<option value="Jersey" >Jersey</option>
								<option value="Jordanie" >Jordanie</option>
								<option value="Kazakhstan" >Kazakhstan</option>
								<option value="Kenya" >Kenya</option>
								<option value="Kirghizistan" >Kirghizistan</option>
								<option value="Kiribati" >Kiribati</option>
								<option value="Koweït" >Koweït</option>
								<option value="Laos" >Laos</option>
								<option value="Lesotho" >Lesotho</option>
								<option value="Lettonie" >Lettonie</option>
								<option value="Liban" >Liban</option>
								<option value="Liberia" >Liberia</option>
								<option value="Libye" >Libye</option>
								<option value="Liechtenstein" >Liechtenstein</option>
								<option value="Lithuanie" >Lithuanie</option>
								<option value="Luxembourg" >Luxembourg</option>
								<option value="Macédoine" >Macédoine</option>
								<option value="Macédoine(Ancienne République yougoslave de)" >Macédoine(Ancienne République yougoslave de)</option>
								<option value="Madagascar" >Madagascar</option>
								<option value="Malaisie" >Malaisie</option>
								<option value="Malawi" >Malawi</option>
								<option value="Maldives" >Maldives</option>
								<option value="Mali" >Mali</option>
								<option value="Malte" >Malte</option>
								<option value="Mariannes(îles)" >Mariannes(îles)</option>
								<option value="Maroc" >Maroc</option>
								<option value="Marshall (îles)" >Marshall (îles)</option>
								<option value="Martinique" >Martinique</option>
								<option value="Maurice" >Maurice</option>
								<option value="Mauritanie" >Mauritanie</option>
								<option value="Mayotte" >Mayotte</option>
								<option value="Mexique" >Mexique</option>
								<option value="Micronésie" >Micronésie</option>
								<option value="Moldavie" >Moldavie</option>
								<option value="Monaco" >Monaco</option>
								<option value="Mongolie" >Mongolie</option>
								<option value="Monténegro" >Monténegro</option>
								<option value="Montserrat" >Montserrat</option>
								<option value="Mozambique" >Mozambique</option>
								<option value="Namibie" >Namibie</option>
								<option value="Nauru" >Nauru</option>
								<option value="Népal" >Népal</option>
								<option value="Nicaragua" >Nicaragua</option>
								<option value="Niger" >Niger</option>
								<option value="Nigeria" >Nigeria</option>
								<option value="Niué" >Niué</option>
								<option value="Norfolk Island" >Norfolk Island</option>
								<option value="Norvège" >Norvège</option>
								<option value="Nouvelle-Calédonie" >Nouvelle-Calédonie</option>
								<option value="Nouvelle-Zélande" >Nouvelle-Zélande</option>
								<option value="Oman" >Oman</option>
								<option value="Other" >Other</option>
								<option value="Ouganda" >Ouganda</option>
								<option value="Ouzbékistan" >Ouzbékistan</option>
								<option value="Pakistan" >Pakistan</option>
								<option value="Palaos" >Palaos</option>
								<option value="Palestine" >Palestine</option>
								<option value="Panama" >Panama</option>
								<option value="Papouasie-Nouvelle-Guinée" >Papouasie-Nouvelle-Guinée</option>
								<option value="Paraguay" >Paraguay</option>
								<option value="Pays-Bas" >Pays-Bas</option>
								<option value="Pays-Bas Antilles" >Pays-Bas Antilles</option>
								<option value="Perou" >Perou</option>
								<option value="Philippines" >Philippines</option>
								<option value="Pitcairn" >Pitcairn</option>
								<option value="Pologne" >Pologne</option>
								<option value="Polynésie française" >Polynésie française</option>
								<option value="Porto Rico" >Porto Rico</option>
								<option value="Portugal" >Portugal</option>
								<option value="Qatar" >Qatar</option>
								<option value="Regional PG Apac" >Regional PG Apac</option>
								<option value="République Tchèque" >République Tchèque</option>
								<option value="République centrafricaine" >République centrafricaine</option>
								<option value="République démocratique du Congo" >République démocratique du Congo</option>
								<option value="République dominicaine" >République dominicaine</option>
								<option value="Réunion" >Réunion</option>
								<option value="Roumanie" >Roumanie</option>
								<option value="Royaume-Uni" >Royaume-Uni</option>
								<option value="Russie" >Russie</option>
								<option value="Rwanda" >Rwanda</option>
								<option value="Sahara" >Sahara</option>
								<option value="Saint Barthélemy" >Saint Barthélemy</option>
								<option value="Saint Hélène" >Saint Hélène</option>
								<option value="Saint Martin (FR)" >Saint Martin (FR)</option>
								<option value="Saint Martin (NL)" >Saint Martin (NL)</option>
								<option value="Saint-Christophe-et-Niévès" >Saint-Christophe-et-Niévès</option>
								<option value="Saint-Marin" >Saint-Marin</option>
								<option value="Saint-Pierre-et-Miquelon" >Saint-Pierre-et-Miquelon</option>
								<option value="Saint-Vincent-et-les-Grenadines" >Saint-Vincent-et-les-Grenadines</option>
								<option value="Sainte-Lucie" >Sainte-Lucie</option>
								<option value="Salomon(îles)" >Salomon(îles)</option>
								<option value="Salvador" >Salvador</option>
								<option value="Samoa" >Samoa</option>
								<option value="Samoa occidentales" >Samoa occidentales</option>
								<option value="Sao Tome and Principe" >Sao Tome and Principe</option>
								<option value="Sénégal" >Sénégal</option>
								<option value="Serbie" >Serbie</option>
								<option value="Serbie et Monténegro" >Serbie et Monténegro</option>
								<option value="Seychelles" >Seychelles</option>
								<option value="Sierra Leone" >Sierra Leone</option>
								<option value="Singapour" >Singapour</option>
								<option value="Slovaquie" >Slovaquie</option>
								<option value="Slovénie" >Slovénie</option>
								<option value="Somalie" >Somalie</option>
								<option value="Soudan" >Soudan</option>
								<option value="Sri Lanka" >Sri Lanka</option>
								<option value="Suède" >Suède</option>
								<option value="Suisse" >Suisse</option>
								<option value="Suriname" >Suriname</option>
								<option value="Svalbard et Jan Mayen" >Svalbard et Jan Mayen</option>
								<option value="Swaziland" >Swaziland</option>
								<option value="Syrie" >Syrie</option>
								<option value="Tadjikistan" >Tadjikistan</option>
								<option value="Taïwan" >Taïwan</option>
								<option value="Tanzanie" >Tanzanie</option>
								<option value="Tchad" >Tchad</option>
								<option value="Territoire britannique de l'océan Indien" >Territoire britannique de l'océan Indien</option>
								<option value="Territoires Français du sud" >Territoires Français du sud</option>
								<option value="Thaïlande" >Thaïlande</option>
								<option value="Timor oriental" >Timor oriental</option>
								<option value="Timor-Leste" >Timor-Leste</option>
								<option value="Togo" >Togo</option>
								<option value="Tokelau" >Tokelau</option>
								<option value="Tonga" >Tonga</option>
								<option value="Trinité-et-Tobago" >Trinité-et-Tobago</option>
								<option value="Tunisie" >Tunisie</option>
								<option value="Turkménistan" >Turkménistan</option>
								<option value="Turks et Caïques (îles)" >Turks et Caïques (îles)</option>
								<option value="Turquie" >Turquie</option>
								<option value="Tuvalu" >Tuvalu</option>
								<option value="Ukraine" >Ukraine</option>
								<option value="Uruguay" >Uruguay</option>
								<option value="Vanuatu" >Vanuatu</option>
								<option value="Vatican" >Vatican</option>
								<option value="Vénézuela" >Vénézuela</option>
								<option value="Viêt Nam" >Viêt Nam</option>
								<option value="Wallis-et-Futuna" >Wallis-et-Futuna</option>
								<option value="Yémen" >Yémen</option>
								<option value="Zambie" >Zambie</option>
								<option value="Zimbabwe" >Zimbabwe</option>
                            </select>
					</p>
					
					<p> <!-- choix de la région-->
						<label for="region">Région</label>
							<select name="region" id="region"> <!--champ de régions du bon coin muhahaha -->
								<option value="0">Choisissez votre région</option>
								<option value="1" >Alsace</option>
								<option value="2" >Aquitaine</option>
								<option value="3" >Auvergne</option>
								<option value="4" >Basse-Normandie</option>
								<option value="5" >Bourgogne</option>
								<option value="6" >Bretagne</option>
								<option value="7" >Centre</option>
								<option value="8" >Champagne-Ardenne</option>
								<option value="9" >Corse</option>
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
					<p> <!-- choix du code postal-->
						<label for="code_postal"> Code postal</label>
						<input type = "number" name= "code_postal" id="code_postal"/> 
					</p>
					
					<p> <!-- adresse voie et n° de voie-->
						<label for="voie_num_de_voie"> Voie et numéro de voie </label>
						<input type="text" name="voie_num_de_voie" id="voie_num_de_voie" placeholder="28 Boulevard de Pétaouchnoc" size ="100"/>
					</p>
					
					<h3> Informations complémentaires </h3>
						<p> <!-- étage-->
							<label for="floor"> numéro d'étage</label>		
							<input type="number" name="floor" id="floor"/>		
						</p>
				
				<h2> Informations sur le logement </h2>
					<p> <!-- type de logement-->
						<label for= "house_type"> Type de logement</label>
							<select id="house_type" name="house_type"> <!-- champs des types de logements simplifiées: partenaires-europréens.fr-->
								<option value="0">Choisissez votre type de logement</option>
								<option value="1" title="Maison / Villa">Maison / Villa</option>
								<option value="2" title="Appartement">Appartement</option>
								<option value="3" title="Immeuble">Immeuble</option>                                                            
								<option value="4" title="Chalet">Chalet</option>
								<option value="5" title="Fermette">Fermette</option>
								<option value="6" title="Moulin">Moulin</option>
								<option value="7" title="Loft">Loft</option>
								<option value="8" title="Mobil-Home">Mobil-Home</option>
								<option value="9" title="Château">Château</option>
								<option value="10" title="Gîtes/Chambres d’Hôtes">Gîtes/Chambres d’Hôtes</option>
							</select>
					</p>
					
					<p> <!-- surface habitable-->
						<label for="living_space"> Surface habitable </label>
						<input type="number" name="living_space" id="living_space"/> 
						m²
					</p>
						
					<p> <!-- surface du terrain-->	
						<label for="surface_area"> Surface du terrain</label>
						<input type="number" name="surface_area" id="surface_area"/> 
						m²
					</p>
						
					<p>	<!-- année de construction-->	
						<label for="construction_year">Année de construction</label>
						<input type="number" name="construction_year" id="construction_year"/>
					</p>
					
					<p> <!-- nombre de chambres-->	
						<label for="bedroom_number"> Nombre de chambre </label>
						<input type="number" name="bedroom_number" id="bedroom_number"/>
					</p>
					
					<p> <!-- capacité de logement-->
						<label for="housing_capacity"> Capacité de logement</label>
						<input type="number" name="housing_capacity" id="housing_capacity"/>
					</p>
						
					<h3> Options </h3>
					<p> Aménagement:
							<input type="checkbox"/> <label> cour </label>
							<input type="checkbox"/> <label> jardin</label>
							<input type="checkbox"/> <label> garage/ parking</label>
							<input type="checkbox"/> <label> piscine </label>
							<input type="checkbox"/> <label> accès handicapé</label>
							<input type="checkbox"/> <label> résidents fumeurs </label>
					</p>

				<h2> Votre résidence</h2>
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
						<label>photo principale (une seule photo) </label> </br>
						<img src="photo-annonce.png" alt="cliquez ici pour télécharger une image"/> 
					</p>
					<p>
						<label>photos secondaires (de 2 à 10 photos)</label> <br>
						<img src="photo-annonce.png" alt="cliquez ici pour télécharger une image"/> 
						<img src="photo-annonce.png" alt="cliquez ici pour télécharger une image"/> 
						<img src="photo-annonce.png" alt="cliquez ici pour télécharger une image"/> 
						<img src="photo-annonce.png" alt="cliquez ici pour télécharger une image"/> 
						<img src="photo-annonce.png" alt="cliquez ici pour télécharger une image"/> </br>
						<img src="photo-annonce.png" alt="cliquez ici pour télécharger une image"/> 
						<img src="photo-annonce.png" alt="cliquez ici pour télécharger une image"/> 
						<img src="photo-annonce.png" alt="cliquez ici pour télécharger une image"/> 
						<img src="photo-annonce.png" alt="cliquez ici pour télécharger une image"/> 
						<img src="photo-annonce.png" alt="cliquez ici pour télécharger une image"/> 
					</p>
				<h2> Créer une annonce liée à cette résidence</h2>
				<p>
					<input type="checkbox"/>
					<label>Je ne souhaite pas créer d'annonce liée à ma résidence pour le moment (il sera toujours possible de le faire ultérieurement)</label></br>
					En cochant cette case vous pouvez ignorer le questionnaire suivant et valider directement votre résidence
				</p>
				<h2> formulaire de création d'une annonce</h2>
			<h3>Date d'échange souhaitée </h3>
			date de début d'échange
			date de fin d'échange
			
			<p> Pour les contrainte et les services de grands thèmes vous sont proposés, 
			vous pouvez tous les personnaliser en remplissant la zone "commentaire".</p>
			
			Fumeur
			Animaux 
			Entretient 
			Sécurité 
			Voisinage 

			<h3>Contraintes imposées aux visiteurs</h3>
			
			<h3>Services à rendre durant votre absence</h3>
			
			Créer une autre annonce pour cette résidence
				
			</form>
		
		<p> VALIDER</p>
			
			

