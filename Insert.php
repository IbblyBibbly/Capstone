<?php
//connect to db
$con=mysqli_connect("128.198.209.178","root","123","oracle");

if (isset($_POST['Button'])) {
    $contributions = $_POST['Contributions'];
    $KmArticles = $_POST['KmArticles'];
    $ODMCEngagements = $_POST['ODMCEngagements'];
    $DQCRRCA = $_POST['DQCRRCA'];
    $BestPCustEngagements = $_POST['BestPCustEngagements'];
    $LongRunning = $_POST['LongRunning'];
    $SRQuality = $_POST['SRQuality'];
    $AccountSRNRD = $_POST['AccountSRNRD'];
    $CriticalWorkSRSNRD = $_POST['CriticalWorkSRSNRD'];

    $sql = "INSERT INTO oracle.project2 
    (Contributions, KmArticles,ODMCEngagements, DQCRRCA,BestPCustEngagements, LongRunning,SRQuality, AccountSRNRD, CriticalWorkSRSNRD) 
    VALUES 
    ('$contributions','$KmArticles','$ODMCEngagements','$DQCRRCA', '$BestPCustEngagements','$LongRunning', '$SRQuality', '$AccountSRNRD', '$CriticalWorkSRSNRD')";
 if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
}else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>