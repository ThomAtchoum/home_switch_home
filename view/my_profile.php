<?php

$DB = new PDO('mysql:host=localhost;dbname=APP-MVC', 'root', '');
$askResearchProfile = $DB->prepare('SELECT login, description, rating, picture FROM user WHERE id='.$_POST['id']);
$  
           