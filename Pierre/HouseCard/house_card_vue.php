<!DOCTYPE html>
	<html>
		<head>
                    <link rel="stylesheet" href="css_house_card.css" />
                    <meta charset="utf-8">
                    <title> Fiche maison </title> 
		</head>
                
		<body>
                    <section class='MiddlePage'>
                    <section class="RightCol">
                        <article class='title'>
                            <?php
                                while($resHtitle=$askHtitle->fetch())
                                    {
                                        echo $resHtitle['title'];
                                    } 
                            ?>
                        </article>
			<article class="PhotosButtons"> <!-- Mettre ici les photos et les 2 boutons -->
				<aside class="PhotosMM"> 
					<p>
                                            <?php 
                                                while ($resHpic=$askHpic->fetch())
                                                    {
                                            ?>
                                                        <img src="<?php echo $resHpic['pictures'] ?>" alt="photo maison" class="Hpic">
                                            <?php
                                                }
                                            ?>
					</p>
				<div class="ButtonMM">
					<input type="button" name="DatePick" value="Choisir une date" onclick="self.location.href='test n3bis.html'" style="width:130px" /> <!--Menu déroulant avec les dates possibles ???-->
						<br />
					<input type="button" name="SaveHouse" value="Sauvegarder" onclick="self.location.href='test n3bis.html'" style="width:130px" /> <!-- Javascript ou PHP ici ?? -->
				</div>
				</aside>
			</article>
                        
		
			<article class="DescriptionMM"> <!--Mettre ici la description de la maison-->
                            <p class="txt">
                                <?php
                                            while($resHdesc=$askHdesc->fetch())
                                                {
                                ?>
                                                    <p> Description du bien : <?php echo $resHdesc['description'] ?></p>
                                <?php
                                                }
                                ?>          
                            </p>
			</article>
                        <article class='Hinformation'>
                        <div class='txt'>
                            <p class='rating'>
                                <?php
                                            while ( $resHrate=$askHrate->fetch())
                                                { 
                                ?>
                                                    <br/> Note : <?php echo $resHrate['rating'] ?> /10
                                <?php
                                                }
                                ?>
                            </p>
                            <div class='otherI'>
                            <h3>Localisation :</h3>
                            Region : <br/>
                            Ville : <br/>
                            Code postal: <br/>
                            
                            <h3>Informations sur le logement</h3>
                            Type : <br/>
                            Capacité : <br/>
                            Nombre de chambre : <br/>
                            Aménagements : <br/>
                            </div>
                        </div>
                        </article>
                        

			<article class="ComMM"> <!-- Mettre ici les commentaires -->
				<p class="TxtCom"> Liste de 3-4 commentaires (les mieux notés ??)
                                    <?php
                                        include"../CommentaryBloc/commentary_bloc_controleur.php";
                                    ?>				
			</article>
                    </section>
                    
		
                    <section class="LeftCol">
			<article class="RapProf"> <!--Rappel du profil du membre-->
			<?php   include '../ProfileReminder/profile_reminder_controleur.php'; ?>
			</article>
			
			<article class="DateMM"> <!-- Mettre ici les dates -->
                            <?php
                                while($resDateB=$askDateB ->fetch()AND $resDateE=$askDateE ->fetch())
                                    {
                            ?>
                                        du <?php echo $resDateB['date_begin'] ?> au <?php echo $resDateE['date_end']?> <br/>
                                        
                            <?php
                                    }
                            ?>
			</article>
                    </section>      
                    </section>
                </body>
			