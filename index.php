<?php
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Team 6220 Scouting</title>
        <meta name ="viewport" context = "width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href = "styles.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="script.js"></script>
        
    </head>
    <body>
        <!--<form action = "data.php" method="post">-->
            <h3>Match Info</h3>
            <h5><a href="data.php">see scouting data</a></h5>
            <table class="infotable">
                <tr>
                    <td>Team #: </td>
                    <td colspan="2"><input id="teamnum" type="number" name="teamnum" class="input" placeholder="Team #" onchange="teamNum();"/></td>
                </tr>
                <tr>
                    <td>Match #: </td>
                    <td colspan="2"><input id="matchnum" type="number" name="matchnum" class="input" placeholder="Match #" onchange="matchNum();"/></td>
                </tr>
            </table>
            <h3>Auto</h3>
            <table class="teleoptable">
                <tr>
                    <td colspan="2">Taxi:</td>
                    <td><input type="radio" id="taxiyes" name="taxi" value="yes" onclick="taxi(this.id);"><label for="yes" >Yes</label></td>
                    <td><input type="radio" id="taxino" name="taxi" value="no" onclick="taxi(this.id);"><label for="no" >No</label></td>
                </tr>
                <tr>
                    <td><nobr>Upper Attempts: </nobr></td>
                    <td><button class="crement" id="autoUpperAttdo" onclick="crement(this.id);">-</button></td>
                    <td><nobr id="autoUpperAtt">0</nobr></td>
                    <td><button class="crement" id="autoUpperAttup" onclick="crement(this.id);">+</button></td>
                </tr>
                <tr>
                    <td><nobr>Upper Scored: </nobr></td>
                    <td><button class="crement" id="autoUpperScodo" onclick="crement(this.id);">-</button></td>
                    <td><nobr id="autoUpperSco">0</nobr></td>
                    <td><button class="crement" id="autoUpperScoup" onclick="crement(this.id);">+</button></td>
                </tr>
                <tr>
                    <td><nobr>Lower Attempts: </nobr></td>
                    <td><button class="crement" id="autoLowerAttdo" onclick="crement(this.id);">-</button></td>
                    <td><nobr id="autoLowerAtt">0</nobr></td>
                    <td><button class="crement" id="autoLowerAttup" onclick="crement(this.id);">+</button></td>
                </tr>
                <tr>
                    <td><nobr>Lower Scored: </nobr></td>
                    <td><button class="crement" id="autoLowerScodo" onclick="crement(this.id);">-</button></td>
                    <td><nobr id="autoLowerSco">0</nobr></td>
                    <td><button class="crement" id="autoLowerScoup" onclick="crement(this.id);">+</button></td>
                </tr>
            </table>
            <h3>Teleop</h3>
            <table class="teleoptable">
                <tr>
                    <td><nobr>Upper Attempts: </nobr></td>
                    <td><button class="crement" id="teleUpperAttdo" onclick="crement(this.id);">-</button></td>
                    <td><nobr id="teleUpperAtt">0</nobr></td>
                    <td><button class="crement" id="teleUpperAttup" onclick="crement(this.id);">+</button></td>
                </tr>
                <tr>
                    <td><nobr>Upper Scored: </nobr></td>
                    <td><button class="crement" id="teleUpperScodo" onclick="crement(this.id);">-</button></td>
                    <td><nobr id="teleUpperSco">0</nobr></td>
                    <td><button class="crement" id="teleUpperScoup" onclick="crement(this.id);">+</button></td>
                </tr>
                <tr>
                    <td><nobr>Lower Attempts: </nobr></td>
                    <td><button class="crement" id="teleLowerAttdo" onclick="crement(this.id);">-</button></td>
                    <td><nobr id="teleLowerAtt">0</nobr></td>
                    <td><button class="crement" id="teleLowerAttup" onclick="crement(this.id);">+</button></td>
                </tr>
                <tr>
                    <td><nobr>Lower Scored: </nobr></td>
                    <td><button class="crement" id="teleLowerScodo" onclick="crement(this.id);">-</button></td>
                    <td><nobr id="teleLowerSco">0</nobr></td>
                    <td><button class="crement" id="teleLowerScoup" onclick="crement(this.id);">+</button></td>
                </tr>
                <tr>
                    <td><nobr>Climb Attempted: </nobr></td>
                    <td colspan="3"> 
                        <select name="climb" id="climb" onchange="climbA();">
                            <option value="none">None</option>
                            <option value="low">Low</option>
                            <option value="mid">Mid</option>
                            <option value="high">High</option>
                            <option value="traversal">Traversal</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><nobr>Climb Scored: </nobr></td>
                    <td colspan="3"> 
                        <select name="climb" id="climb" onchange="climb();">
                            <option value="none">None</option>
                            <option value="low">Low</option>
                            <option value="mid">Mid</option>
                            <option value="high">High</option>
                            <option value="traversal">Traversal</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><nobr>Fouls: </nobr></td>
                    <td><button class="crement" id="foulsdo" onclick="foul(this.id);">-</button></td>
                    <td><nobr id="fouls">0</nobr></td>
                    <td><button class="crement" id="foulsup" onclick="foul(this.id);">+</button></td>
                </tr>
            </table>
            <table class = "othertable">
                <tr>
                    <td><h2>Score: </h2></td>
                    <td><h2 id="score">0</h2></td>
                </tr>
            </table>
            <table class = "othertable">
                <tr>
                    <td colspan="3">Strategy</td>
                </tr>
                <tr>
                    <td><nobr>Defense</nobr></td>
                    <td><input type="range" min="1" max="3" value="2" class="slider" id="strat" onchange="strat();"></td>
                    <td><nobr>Offense</nobr></td>
                </tr>
                <tr>
                    <td colspan="3">Driver Quality</td>
                </tr>
                <tr>
                    <td><nobr>Bad</nobr></td>
                    <td><input type="range" min="1" max="5" value="3" class="slider" id="rating" onchange="rating();"></td>
                    <td><nobr>Good</nobr></td>
                </tr>
                <tr>
                    <td colspan="3">Bot Speed</td>
                </tr>
                <tr>
                    <td><nobr>Slow</nobr></td>
                    <td><input type="range" min="1" max="5" value="3" class="slider" id="speed" onchange="speed();"></td>
                    <td><nobr>Fast</nobr></td>
                </tr>
                <tr>
                    <td colspan="3"><button class="butt" id="sub">Submit</button></td>
                </tr>
            </table>

        <!--</form>-->
    </body>
</html>