<html>
<head></head>
<title>Delete</title>
<body>
<?php
    include_once 'dbhandler.php';
?>
    <link href="css/mysql.css" rel = "stylesheet" type = "text/css">   
<?php

    $Table_ID = $_POST['Table_ID'];    

     $sql = "DELETE FROM oracle.project1 WHERE 'Table_ID' = $Table_ID";

    if(mysqli_query($con, $sql)){
        echo "Record $Table_ID removed successfully.";
    }
    else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }
?>
<br>
<br>
<a href="ManageProjectRead.php"><button class= "GoHome"type="button">Return to project!</button></a>

</body>
</html>