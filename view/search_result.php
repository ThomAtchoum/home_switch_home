<?php

//require("../modele/search_ad.php");


while($resData=$askResearch->fetch())
{
 ?>  
<p class="result_search">
    <p class="titre"> 
        <?php echo $resData['title']; ?>
    </p>
    <p class="dates">
        <?php echo $resData['date_begin']." and the length is".$resData['length'] ; ?>
    </p>
    <p class="description"> 
        <?php echo $resData['description']; ?>
    </p>
    <p class="photo"> 
        <?php include("${resData['photo']}.jpg") ?>
    </p>
    <p class="rating">
        <?php echo $resData['rating'] ?>
</p>
    <?php
$research->closeCursor();

}

