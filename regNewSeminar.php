<?php

//Link with main php
require_once "pdo.php";

if ( isset($_POST['topic']) && isset($_POST['date']) && isset($_POST['time']) && isset($_POST['venue'])) {
    $sql = "INSERT INTO registerseminar (topic, date, time, venue) VALUES (:topic,:date,:time,:venue)";
    
    //display MYSQL statement on the page
    
    echo("<pre>\n".$sql."\n</pre>\n");
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':topic' => $_POST['topic'],
        ':date' => $_POST['date'],
        ':time' => $_POST['time'],
        ':venue' => $_POST['venue']));
}

?>
<html>
<head></head>

<body>
<h2>Add New Seminar</h2>
<form method="post">
<p>Topic:<input type="text" name="topic" size="40"></p>
<p>Date:<input type="date" name="date"></p>
<p>Time:<input type="time" name="time"></p>