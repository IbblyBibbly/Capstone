<html>
<head></head>

<body>
<?php
    include_once 'dbhandler.php';

?>

<?php
echo "hello world";

    $contributions = $_POST['Contributions'];
    $KmArticles = $_POST['KmArticles'];
    $ODMCEngagements = $_POST['ODMCEngagements'];
    $DQCRRCA = $_POST['DQCRRCA'];
    $BestPCustEngagements = $_POST['BestPCustEngagements'];
    $LongRunning = $_POST['LongRunning'];
    $SRQuality = $_POST['SRQuality'];
    $AccountSRNRD = $_POST['AccountSRNRD'];
    $CriticalWorkSRSNRD = $_POST['CriticalWorkSRSNRD'];

    $sql = "INSERT INTO oracle.project1
    (Contributions, KmArticles,ODMCEngagements, DQCRRCA,BestPCustEngagements, LongRunning,SRQuality, AccountSRNRD, CriticalWorkSRSNRD) 
    VALUES 
    ('$contributions','$KmArticles','$ODMCEngagements','$DQCRRCA', '$BestPCustEngagements','$LongRunning', '$SRQuality', '$AccountSRNRD', '$CriticalWorkSRSNRD')";

echo $sql;


if(mysqli_query($con, $sql)){
    echo "Records added successfully.";
}
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>
<br>
<br>
<a href="ManageProjectRead.php"><button class= "GoHome"type="button">Return to project!</button></a>
</body>
</html>