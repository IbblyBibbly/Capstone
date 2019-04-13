<?php
//ip, user, pass, db
$con=mysqli_connect("128.198.209.178","root","123","oracle");
?>

<!DOCTYPE html>
<html>
<body>
    <link href="css/mysql.css" rel = "stylesheet" type = "text/css">   
    <title>Project One Update</title>
    <h1>Project One Update</h1>

    <br>

    <div class= "box1">
            <li><a href="ManageProjectInsert.php" target="_blank"><button type="button">Insert</button></a></li>
            <li><a href="ManageProjectUpdate.php" target="_blank"><button type="button">Update</button></a></li>
            <li><a href="ManageProjectUpdate.php" target="_blank"><button type="button">Delete</button></a></li>
    </div>
  
    <br><br>

    <table>
        <tr>
            <th>Table ID</th>
            <th>Contributions</th> 
            <th>KmArticles</th> 
            <th>ODMCEngagements</th>
            <th>DQCRRCA</th>
            <th>BestPCustEngagements</th>
            <th>LongRunning</th>
            <th>SRQuality</th>
            <th>AccountSRNRD</th>
            <th>CriticalWorkSRSNRD</th> 
        </tr>
    <?php
    
        $sql = "SELECT * FROM project2";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($result)) { 
            echo "<tr>";
            foreach ($row as $field => $value) { 
                echo "<td>" . $value . '<br> <input type="text" name="td" value= "" size="10px">' . "</td>"; 
            }
            echo "</tr>";
        }
        echo "</table>";


        echo '<br><br>
                <button class= "updateButton"type="button">Update</button>
             '
               
    ?>
</body>
</html>