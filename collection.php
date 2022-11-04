<?php
    list($teamnum, $matchnum, $taxi, $aus, $als, $tus, $tls, $climbs, $fouls, $aua, $ala, $tua, $tla, $climba, $strat, $rat, $speed, $score) = explode("a", $_POST["scout"]);
    $servername = "localhost";
    $username = "lahsjazz";
    $password = "yGt51a:fSZ+68V";
    $dbname = "lahsjazz_scouting_data";
    if($strat == 0 || $strat == 2){
        $stra = "Neu";
    }
    elseif($strat == 1){
        $stra = "Def";
    }else{
        $stra = "Off";
    }
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "INSERT INTO `scores`(`TeamNum`, `MatchNum`, `Taxi`, `AUS`, `ALS`, `TUS`, `TLS`, `ClimbS`, `Fouls`, `AUA`, `ALA`, `TUA`, `TLA`, `ClimbA`, `Strat`, `Rat`, `Speed`, `Score`)
     VALUES
      ('$teamnum','$matchnum','$taxi','$aus','$als','$tus','$tls', '$climbs', '$fouls', '$aua', '$ala', '$tua', '$tla', '$climba', '$stra', '$rat', '$speed', '$score')";
    if(!$result = $conn->query($sql)){
        echo("input data is fail");
    }
    header("https://bbscouting6220.lahsjazzlibrary.com/data.php");
?>