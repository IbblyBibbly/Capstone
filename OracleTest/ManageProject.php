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
$result = mysqli_query($con, $sql); // First parameter is just return of "mysqli_connect()" function
while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
    echo "<tr>";
    foreach ($row as $field => $value) { // I you want you can right this line like this: foreach($row as $value) {
        echo "<td>" . $value . "</td>"; // I just did not use "htmlspecialchars()" function. 
    }
    echo "</tr>";
}
echo "</table>";
    ?>

</body>
</html>