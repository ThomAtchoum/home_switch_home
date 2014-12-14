<?php

//require("../modele/search_ad.php");


while($resSearch=$askPrioritySearch->fetch())
{
 ?>  
<div class="resultSearch">
    <div class="titleAd"> 
        <?php echo $resSearch['title']; ?>
    </div>
    <div class="datesAd">
        <?php echo $resSearch['date_begin']." and the length is".$resSearch['length'] ; ?>
        
            
        <?php echo '<br/>'.$resSearch['rating'] ?>
    </div>
    <div class="descriptionHouse"> 
        <?php echo $resSearch['description']; ?>
    </div>
    <div class="pictureAd"> 
        <?php echo $resSearch['pictures'] ?>
    </div>
    
        

    <?php


}
$askPrioritySearch->closeCursor();
