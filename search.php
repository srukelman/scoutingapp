<?php

?>
<!DOCTYPE html>
<html>
    <head>
    <title>Team 6220 Scouting</title>
        <meta name ="viewport" context = "width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href = "styles.css" />
    </head>
    <body>
            <h3>Scouting Data</h3>
            <h5><a href="index.php">enter data</a></h5><h5><a href="search.php">all data</a></h5>
        <form action="search_res.php" method = "post">
            <table class="searchtable">
                <tr>
                    <td>Team #: </td>
                    <td colspan="2"><input id="teamnum" type="number" name="teamnum" class="input" placeholder="Team #"/></td>
                    <td colspan="2"><input class = "button" type="submit" value="Search"></td>
                </tr>
            </table>
        </form>
    </body>
</html>