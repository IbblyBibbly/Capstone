<?php
//ip, user, pass, db
$con=mysqli_connect("100.64.14.0","root","123","oracle");

?>

<!DOCTYPE html>
<html>
<body>
    <link href="css/mysql.css" rel = "stylesheet" type = "text/css">   
    <title>Project One</title>
    <h1>Project One</h1>

    <table>
        <tr>
            <th>Contributions</th> 
            <th>KmArticles</th> 
            <th>ODMCEngagements</th>
            <th>DQCRRCA</th>
            <!--<th>BestPCustEngagements</th>
            <th>LongRunning</th>
            <th>SRQuality</th>
            <th>AccountSRNRD</th>
            <th>CriticalWorkSRSNRD</th>
            -->
        </tr>

    <?php
        $sql = "SELECT * FROM project1;";
        $result = mysqli_query($con, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row["Contributions"]. "</td><td>" . $row["KmArticles"] . "</td><td>"
                . $row["ODMCEngagements"]. "</td><td>" . $row["DQCRRCA"];//. "</td></tr>" . $row["BestPCustEngagements"]. "</td></tr>" . $row["LongRunning"]. "</td></tr>"
               //. $row["SRQuality"]. "</td></tr>" . $row["AccountSRNRD"]. "</td></tr>" . $row["CriticalWorkSRSNRD"]. "</td></tr>";
        }
        echo "</table>";
        }
    ?>
</body>
</html>