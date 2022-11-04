<?php
    $servername = "localhost";
    $username = "lahsjazz";
    $password = "yGt51a:fSZ+68V";
    $dbname = "lahsjazz_scouting_data";
    $teamnum = $_POST["teamnum"];

    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM scores WHERE TeamNum = '".$teamnum."'";
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
            <h5><a href="search.php">back</a></h5>
            
    <?php
    if (!$result = $conn->query($sql)) {
        /* Oh no! The query failed. */
        echo "Sorry, the website is experiencing problems.";
    }
    echo "<table class = \"datatable\"><tr><th>Team #</th><th>Match#</th><th>AUP</th><th>TUA</th><th>TUS</th><th>TLA</th><th>Taxi</th><th>ClimbA</th><th>ClimbS</th><th>Score</th><th>Strat</th><th>Rating</th><th>Speed</th></tr>";
    while($row = $result->fetch_assoc()){
        if($row["AUA"] != 0){
            $AUP = $row["AUS"]/$row["AUA"];
        }
        if($row["ALA"] != 0){
            $ALP = $row["ALS"]/$row["ALA"];
        }
        if($row["TUA"] != 0){
            $TUP = $row["TUS"]/$row["TUA"];
        }
        if($row["TLA"] != 0){
            $TLP = $row["TLS"]/$row["TLA"];
        }
        echo "<tr><td>".$row['TeamNum']."</td><td>".$row["MatchNum"]."</td><td>".$AUP."</td><td>".$ALP."</td><td>".$TUP."</td><td>".$TLP."</td><td>".$row["Taxi"]."</td><td>".$row["ClimbA"]."</td><td>".$row["ClimbS"]."</td><td>".$row["Score"]."</td><td>".$row["Strat"]."</td><td>".$row["Rat"]."</td><td>".$row["Speed"]."</td></tr>";
    }
    echo "</table>";
    echo "</body>";
    ?>