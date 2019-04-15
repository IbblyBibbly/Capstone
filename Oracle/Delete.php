<html>
<head></head>

<body>
<?php
    include_once 'dbhandler.php';

?>

<?php
echo "hello world";

    $Table_ID = $_POST['Table_ID'];
    echo $Table_ID;
    

     $sql = "DELETE FROM oracle.project1 WHERE Table_ID =$Table_ID";
    echo $sql;


    if(mysqli_query($con, $sql)){
        echo "Records removed successfully.";
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