<!DOCTYPE html>
	<html>
		<head>
                    <link rel="stylesheet" href="css_ad_card.css" />
                    <meta charset="utf-8">
                    <title> Fiche maison </title> 
		</head>
                
		<body>
                    <section class='MiddlePage'>
                        <section class="RightCol">
                            <article class='title'>
                                <?php
                                    while($resAtitle=$askAtitle->fetch())
                                        {
                                            echo $resAtitle['title'];
                                        } 
                                ?>
                            </article>
                            <article class="PhotosButtons"> <!-- Mettre ici les photos et les 2 boutons --> 
                                            <div class='Photos'>
                                                <?php 
                                                    while ($resHpic=$askHpic->fetch())
                                                        {
                                                ?>
                                                            <img src="<?php echo $resHpic['pictures'] ?>" alt="photo maison" class="Hpic">
                                                <?php
                                                    }
                                                ?>
                                            </div>
                                        <div class='BD'>

                                            <div class="Dates"> <!-- Mettre ici les dates -->
                                                <?php
                                                    while($resDateB=$askDateB ->fetch()AND $resDateE=$askDateE ->fetch())
                                                        {
                                                ?>
                                                            du <?php echo $resDateB['date_begin'] ?> au <?php echo $resDateE['date_end']?> <br/>

                                                <?php
                                                        }
                                                ?>
                                            </div>

                                            <br/>
                                            <div class="Buttons">
                                                    <input type="button" name="DatePick" value="Sauvegarder" onclick="self.location.href='test n3bis.html'" style="width:130px" /> <!--Menu déroulant avec les dates possibles ???-->
                                                            <br />
                                                    <input type="button" name="SaveHouse" value="Fiche maison" onclick="self.location.href='test n3bis.html'" style="width:130px" /> <!-- Javascript ou PHP ici ?? -->
                                            </div>

                                        </div>
                            </article>


                            <article class="DescriptionMM"> <!--Mettre ici la description de la maison-->
                                <div class="txt">
                                    <?php
                                                while($resAdesc=$askAdesc->fetch())
                                                    {
                                    ?>
                                                        <p> Description du bien : <?php echo $resAdesc['description'] ?></p>
                                    <?php
                                                    }
                                    ?>          
                                </div>
                            </article>
                            <article class='Hinformation'>
                            <div class='txt'>
                                
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

                                <h3>Demandes spécifiques à l'annonce</h3>
                                ipurepothze <br/>
                                pzrjgijore<br/>
                                rgjoiej
                                
                                

                                </div>

                            </div>
                            </article>

                        </section>


                        <section class="LeftCol">
                            <div class="RapProf"> <!--Rappel du profil du membre-->
                            <?php   include '../ProfileReminder/profile_reminder_controleur.php'; ?>
                            </div>
                            
                            <div class='rating'>
                                    <?php
                                                while ( $resHrate=$askHrate->fetch())
                                                    { 
                                    ?>
                                                        <br/> Note : <?php echo $resHrate['rating'] ?> /10
                                    <?php
                                                    }
                                    ?>
                            </div>
                        </section>      
                    </section>
                </body>
			