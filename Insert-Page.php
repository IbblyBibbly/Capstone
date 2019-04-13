<?php

//ip, user, pass, db
$con=mysqli_connect("128.198.209.178","root","123","oracle");
?>

<!DOCTYPE html>
<html>
<body>
    <link href="css/mysql.css" rel = "stylesheet" type = "text/css">   
    <title>Project One</title>
    <h1>Project One</h1>

    <table>
        <tr>
            <!-- <th>Table ID</th> -->
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
    
//$sql = "SELECT * FROM project2";
//$result = mysqli_query($con, $sql);
/*        echo "<td>" . '<input type="text" name="td" value= "" size="10px">' . "</td>"; 
        echo "<td>" . '<input type="text" name="td" value= "" size="10px">' . "</td>";
        echo "<td>" . '<input type="text" name="td" value= "" size="10px">' . "</td>";
        echo "<td>" . '<input type="text" name="td" value= "" size="10px">' . "</td>";
        echo "<td>" . '<input type="text" name="td" value= "" size="10px">' . "</td>";
        echo "<td>" . '<input type="text" name="td" value= "" size="10px">' . "</td>";
        echo "<td>" . '<input type="text" name="td" value= "" size="10px">' . "</td>";
        echo "<td>" . '<input type="text" name="td" value= "" size="10px">' . "</td>";
        echo "<td>" . '<input type="text" name="td" value= "" size="10px">' . "</td>";
        
echo "</table>";
*/
?>
<form action:"Insert.php" method="Insert">
<td> <input type="text" name="Contributions" value= "" size="10px" </td>
<td> <input type="text" name="KmArticles" value= "" size="10px" </td>
<td> <input type="text" name="ODMCEngagements" value= "" size="10px" </td>
<td> <input type="text" name="DQCRRCA" value= "" size="10px" </td>
<td> <input type="text" name="BestPCustEngagements" value= "" size="10px" </td>
<td> <input type="text" name="LongRunning" value= "" size="10px" </td>
<td> <input type="text" name="SRQuality" value= "" size="10px" </td>
<td> <input type="text" name="AccountSRNRD" value= "" size="10px" </td>
<td> <input type="text" name="CriticalWorkSRSNRD" value= "" size="10px" </td>
<br>
</table>
<div><a href="index.php"><input type="Button" class="button" value="Submit"></a>

</div>
</form>

   
</body>
</html>