<?php 
session_start();
?>
<html>
    <body>
        <meta charset="utf-8" />
<?php
    $DB= new PDO ('mysql:host=localhost; dbname=home_switch_home', 'root','');
    $id_receiver = $_POST ["id_receiver"];
    $title  =$_POST ["title"];
    $text = $_POST ["text"];

    
    $req = $DB -> prepare ('INSERT INTO messages(date, id_author, id_receiver, title, text) VALUES ( :date, :id_author, :id_receiver, :title, :text) ');
    $req->execute (array(
        'date'=>(new DateTime("now"))->format('Y-m-d H:i:s'),
        'id_author' =>/* $_SESSION['userId'] */1,
        'id_receiver'=>$id_receiver,
        'title'=>$title,
        'text'=>$text,
        ));
?>
    </body>
</html>

