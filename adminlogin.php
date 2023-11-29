<?php
error_reporting(0);
    $email = $_POST["adminemail"];
    $password = $_POST["adminpass"];
    if(!isset($_SESSION['username']))
    {
    if($email == "admin" and $password == "admin"){
        session_start();
        $_SESSION['username']="admin";
        header("location:adminpage.php");
    } 
    else{
        echo '<script>alert("Incorrect");</script>';
    }
}
else{
    echo '<script>alert("Please logout to continue....");</script>';
    echo '<meta http-equiv="refresh" content="0;url=http://localhost/IP_PROJECT/index.php"/>';
}

?>
