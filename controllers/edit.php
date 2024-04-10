<?php
    $db =  require "core/Database.php";

    

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $task = $db->query('SELECT * FROM tasks WHERE id = :idNo',[
                'idNo' => $_GET['id']])->findOrFail();
        
                if ($task['id'] != null) {
                   $db->query('UPDATE tasks SET title = :title, time = :time, activity = :activity WHERE id = :idNo', [
                    'title' => $_POST['title'],
                    'time' => $_POST['time'],
                    'activity' => $_POST['activity'],
                    'idNo' => $_GET['id']
                   ]); 
                   header('location: home');
                   exit();
                }

        }else{
            $task = $db->query('SELECT * FROM tasks WHERE id = :idNo',[
                'idNo' => $_GET['id']])->findOrFail();

                if ($_GET['id'] === null) {
                  return  abort(404);
                }
        }

        // var_dump($task);

    require 'pages/edit.php';