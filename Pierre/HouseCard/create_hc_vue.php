<!DOCTYPE html>
<html>
    <head>
        <title>Nouvelle maison</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../HouseCard/css_create_hc.css" />
    </head>
    
    <body>
        <section class='MiddlePage'>
                    <section class="RightCol">
                        <article class='title'> <!--Insert the title-->
                            <input type="text" name="title" placeholder="titre de la maison" />
                        </article>
			<article class="PhotosButtons"> <!--Insert the photos-->
				<aside class="PhotosMM"> 
					<p>
                                            <input type="file" name="pic1"/>
                                            <input type="file" name="pic2"/>
                                            <input type="file" name="pic3"/>
                                            <input type="file" name="pic4"/>
                                            <input type="file" name="pic5"/>
                                            <input type="file" name="pic6"/>
                                            <input type="file" name="pic7"/>                                            
					</p>
				</aside>
			</article>
                        
		
			<article class="DescriptionMM"> <!--Mettre ici la description de la maison-->
                            <p class="txt">
                                <textarea placeholder="Description de votre bien"></textarea>
                            </p>
			</article>
                        <article class='Hinformation'>
                        <div class='txt'>
                            <h3>Localisation :</h3>
                                <!--Region-->
                                <label for="Region">Région :</label>
                                <select name="Region" id="Region"> <!--champ de régions du bon coin muhahaha -->
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
                                 </select><br/>
                                
                                <!--Town-->
                                <label for="Town"> Ville : </label>
                                <input type="text" name="town" id="town"/><br/>
                                
                                <!--ZipCode-->
                                <label for='ZipCode'>Code Postal :</label>
                                <input type='number' name='ZipCode' id='ZipCode' /><br/>
                                
                                <!--address-->
                                <label for='Address'> Adresse :</label>
                                <input type='text' name='Address' id='Address'/>
                            
                            <h3>Informations sur le logement</h3>
                                <!--Type-->
                                <label> Type de logement :</label>
                                <select id="house_type" name="house_type"> <!-- champs des types de logements simplifiées: partenaires-europréens.fr-->
                                        <option value="00">Choisissez votre type de logement</option>
                                        <option value="01" title="Maison">Maison / Villa</option>
                                        <option value="02" title="Appartement">Appartement</option>
                                        <option value="03" title="Immeuble">Immeuble</option>                                                            
                                        <option value="04" title="Chalet">Chalet</option>
                                        <option value="05" title="Fermette">Fermette</option>
                                        <option value="06" title="Moulin">Moulin</option>
                                        <option value="07" title="Loft">Loft</option>
                                        <option value="08" title="Mobil-Home">Mobil-Home</option>
                                        <option value="09" title="Château">Château</option>
                                        <option value="10" title="Chambres d’Hôtes">Gîtes/Chambres d’Hôtes</option>
                                </select><br/>
                                
                                <!--Capacity-->
                                <label>Capacité :</label>
                                <input type="number" name="Capacity" id="Capacity" />
                                <br/>
                                
                                <!--BRnb-->
                                <label>Nombre de chambre :</label>
                                <input type="number" name="BRnb" id="BRnb" />
                                <br/>
                                
                                <!--Facilities-->
                                <label>Aménagements :</label>
                                    <input type="checkbox"/> <label> cour </label>
                                        <input type="checkbox"/> <label> jardin</label>
                                        <input type="checkbox"/> <label> garage/ parking</label>
                                        <input type="checkbox"/> <label> piscine </label>
                                        <input type="checkbox"/> <label> accès handicapé</label>
                        </div>
                        </article>
                    </section>
                    
		
                    <section class="LeftCol">
			<article class="RapProf"> <!--Rappel du profil du membre-->
			<?php   include '../ProfileReminder/profile_reminder_controleur.php'; ?>
			</article>
			
                    </section>      
                    </section>
    </body>
</html>