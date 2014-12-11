<?php
include('mailbox_toolbar.php');
?>

<?php
require("../model/search_my_mp.php");
?>

<table>
    <tr>
        <td>Auteur</td>
        <td>Titre</td>
        <td>Date de récéption</td>
    </tr>
<?php while ($resData = $askResearch->fetch()) 
{
?>
    <tr>
        <td> <?php echo $resData['id_author'];?> </td>
        <td><a href="content.php?page=readMsg"><?php echo $resData['title'];?></a> </td>
        <td> <?php echo $resData['date'];?> </td>
    </tr>

<?php
}
?>
</table>