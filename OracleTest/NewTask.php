<?php

/* These lines are to establish the variables from the online form */
if (isset($_POST['submit'])) {
    $name = $_POST['DOT'];
    $Stime = $_POST['Stime'];
    $Etime = $_POST['Etime'];
    $Task = $_POST['Task'];

/* This section establishes the information for sending the Email 
    $mailTo = "";//Send to database somehow.
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

//This establishes the format and order of the message being sent 
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html");
   
*/    
}

?>