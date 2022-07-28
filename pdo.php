<!DOCTYPE html>
<html lang = "en">

<head>  
</head>

<body>
<?php

//Connect PHP with MYSQL
$pdo = new PDO('mysql:host=localhost;dbname=swiss_collection','root','');
//MYSQL statement or command
$stmt = $pdo->query("SELECT * FROM registerseminar");
//Display the output
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo '<table border>'."\n";
foreach ( $rows as $row ) {
    echo "<tr><td>";
    echo($row['topic']);
    echo("</td><td>");
    echo($row['date']);
    echo("</td><td>");
    echo($row['time']);
    echo("</td><td>");
    echo($row['venue']);
    echo("</td><th>send email</th><th>status</th><th>remarks</th></tr>\n");
}
echo "</table>\n";
?>
</body>
</html>