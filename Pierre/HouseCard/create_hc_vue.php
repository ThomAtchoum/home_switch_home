<!DOCTYPE html>
<html>
    <head>
        <title>Nouvelle maison</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../HouseCard/css_create_hc.css" />
    </head>
    
    <body>
                <section class="RightCol">
                    <form action="create_hc_modele.php" method="post" id="create_house" enctype="multipart/form-data" onSubmit="">
                        <article class='title'> <!--Insert the title-->
                            <input type="text" name="title" placeholder="titre de la maison" onblur="verifform(this)"/>
                        </article>
			<article class="PhotosButtons"> <!--Insert the photos-->
				<aside class="PhotosMM"> 
					<p>     
                                            <input type='file' id="photo1" />                                    
					</p>
				</aside>
			</article>
                        
		
			<article class="DescriptionMM"> <!--Mettre ici la description de la maison-->
                            <p class="txt">
                                <textarea name="description" placeholder="Description de votre bien"></textarea>
                            </p>
			</article>
                        <article class='Hinformation'>
                        <div class='txt'>
                            <h3>Localisation :</h3>
                                <!--Region-->
                                <label for="region">Région :</label>
                                <select name="region" id="region"> <!--champ de régions du bon coin muhahaha -->
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
                                <label for="town"> Ville : </label>
                                <input type="text" name="town" id="town"/><br/>
                                
                                <!--ZipCode-->
                                <label for='zipcode'>Code Postal :</label>
                                <input type='number' name='zipcode' id='zipcode' /><br/>
                                
                                <!--address-->
                                <label for='address'> Adresse :</label>
                                <input type='text' name='address' id='address'/>
                            
                            <h3>Informations sur le logement</h3>
                                <!--Type-->
                                <label> Type de logement :</label>
                                <select id="type" name="house_type"> <!-- champs des types de logements simplifiées: partenaires-europréens.fr-->
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
                                <input type="number" name="capacity" id="capacity" />
                                <br/>
                                
                                <!--BRnb-->
                                <label>Nombre de chambre :</label>
                                <input type="number" name="brnb" id="brnb" />
                                <br/>
                                
                                <!--Facilities-->
                                <label>Aménagements :</label>
                                    <input type="checkbox"/> <label> cour </label>
                                        <input type="checkbox" value="garden"/> <label> jardin</label>
                                        <input type="checkbox" value="parking"/> <label> garage/ parking</label>
                                        <input type="checkbox" value="pool"/> <label> piscine </label>
                                        <input type="checkbox" value="disabled"/> <label> accès handicapé</label>
                        </div>
                        </article>
                        <input type="submit" value="Envoyer le formulaire" class="sub"/>
                    </form>
                    </section>
                    
		
                    <section class="LeftCol">
			<article class="RapProf"> <!--Rappel du profil du membre-->
			<?php   include '../ProfileReminder/profile_reminder_controleur.php'; ?>
			</article>
			
                    </section>
        <?php include"verf_H_form.php" ?>
    </body>
</html>