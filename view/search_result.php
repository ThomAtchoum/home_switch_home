<?php

require("search_ad.php");


while($resData=$askResearch->fetch())
{
 ?>  
<p class="result_search">
    <p class="titre"> 
        <?php echo $resData['title']; ?>
    </p>
    <p class="dates">
        <?php echo $resData['date_begin'] + "/" + $data['date_end'] ; ?>
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
$research->closeCursor();
<?php
}

