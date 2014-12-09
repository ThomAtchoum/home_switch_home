<html>
    <body>
        <meta charset="utf-8" />
<?php
    $DB= new PDO ('mysql:host=localhost; dbname=home_switch_home', 'root','');
    $date = $_POST ["date"];
    $id_author = $_POST["id_author"];
    $id_receiver = $_POST ["id_receiver"];
    $title  =$_POST ["title"];
    $text = $_POST ["text"];

    $req = $DB -> prepare ('INSERT INTO messages(date, id_author, id_receiver, title, text) VALUES ( :date, :id_author, :id_receiver, :title, :text) ');
    $req->execute (array(
        'date'=>$date,
        'id_author'=>$id_author,
        'id_receiver'=>$id_receiver,
        'title'=>$title,
        'text'=>$title,
        ));
    ?>
    </body>
</html>

