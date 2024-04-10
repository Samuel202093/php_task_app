<?php
    // echo "Hello Samuel!!!!!!!!!";
    $db = require 'core/Database.php';
    require "core/Validator.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $errors = [];

        if (Validator::string($_POST['title'])) {
           $errors['title'] = "A title is required";
        }

        if (Validator::string($_POST['time'])) {
            $errors['time'] = "A time is required";
        }

        if (Validator::string($_POST['activity'])) {
            $errors['activity'] = "A brief activity is required";
        }

        if (empty($errors)) {
            $db->query('INSERT INTO tasks(title, time, activity) VALUES(:title, :time, :activity)',[
                'title' => $_POST['title'],
                'time' => $_POST['time'],
                'activity' => $_POST['activity']
            ]);
            header('location: home');
            exit();
        }
    }
    require 'pages/add.php';