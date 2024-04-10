<?php
    $db = require 'core/Database.php';

    $_SESSION['name'] = 'Happiness';

     $res =  parse_url($_SERVER['REQUEST_URI']);

     if (!empty($res['query'])) {
        $tasks = $db->query("DELETE FROM tasks WHERE id = :idNo",["idNo"=> $_GET['id']]);
        header('location: home');
        exit();
     }else{
         $tasks =  $db->query('SELECT * FROM tasks')->find();
     }
    
    require 'pages/index.php';