<?php
function userMessage ($id)
{
    global $id;
    global $DB;
    global $user_message;
    $user_message=$DB-> query ("SELECT date, id_author, title, FROM message where user.id="+$id);
}
?>
