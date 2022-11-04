<?php 
$servername = "localhost";
$username = "lahsjazz";
$password = "yGt51a:fSZ+68V";
$dbname = "lahsjazz_scouting_data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Team 6220 Scouting</title>
        <meta name ="viewport" context = "width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href = "styles.css" />
        <script src="script.js"></script>
    </head>
    <?php 
    echo "<body>";
    ?>
            <h3>Scouting Data</h3>
            <h5><a href="index.php">enter data</a></h5><h5><a href="search.php">search by team</a></h5>
            
    <?php
    $sql = "SELECT * FROM scores ORDER BY TeamNum";
    if (!$result = $conn->query($sql)) {
        /* Oh no! The query failed. */
        echo "Sorry, the website is experiencing problems.";
    }
    echo "<table class = \"datatable\"><tr><th>Team #</th><th>Match#</th><th>AUA</th><th>AUS</th><th>ALA</th><th>ALS</th><th>TUA</th><th>TUS</th><th>TLA</th><th>TLS</th><th>Taxi</th><th>ClimbA</th><th>ClimbS</th><th>Score</th><th>Strat</th><th>Rating</th><th>Speed</th></tr>";
    while($row = $result->fetch_assoc()){
        echo "<tr><td>".$row['TeamNum']."</td><td>".$row["MatchNum"]."</td><td>".$row["AUA"]."</td><td>".$row["AUS"]."</td><td>".$row["ALA"]."</td><td>".$row["ALS"]."</td><td>".$row["TUA"]."</td><td>".$row["TUS"]."</td><td>".$row["TLA"]."</td><td>".$row["TLS"]."</td><td>".$row["Taxi"]."</td><td>".$row["ClimbA"]."</td><td>".$row["ClimbS"]."</td><td>".$row["Score"]."</td><td>".$row["Strat"]."</td><td>".$row["Rat"]."</td><td>".$row["Speed"]."</td></tr>";
    }
    echo "</table>";
    echo "</body>";
    ?>