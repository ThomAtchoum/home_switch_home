<!DOCTYPE html>
<html> 
	<head>
		<meta charset="utlf-8"/>
		<link rel="stylesheet" href="view/css/mailbox_style.css" />
		<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script> <!-- nice edit -->
		<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
        </head>
	<body>
			<section class="newmsg"> 
			<div class="navnewmgs">
				<ul class="listehz">
					<li><input class="button" type ="submit" value="Envoyer"/></li>
					<li><input type ="button" value="Enregister comme brouillon"/></li>
					<li><input type ="submit" value="Annuler"/></li>
					<li><input type ="reset" value="Supprimer"/></li>
					<li><input type ="button" value="Joindre"/></li>
				</ul>
			</div>
		
			<div class="newmsgform" >
				<form method=post action="modele/add_message.php" class="form-horizontal">
					<p>
						<label> à:</label>
						<input type="text" name="id_receiver"/>
							
					
					</p>
					<p>
						<label> titre: </label>
						<input type="text" name="title"/>
					</p>
					
						<label> Message: </label>
						<textarea name="text"></textarea>
					</p>
                                        </p>
					
						<label> date: </label>
                                                <textarea name="date">
                                                <?echo .date("Y/m/d");?>    
                                                </textarea>
					</p>
				</form>
			</div>
		</section>
	</body>
</html>

