<?php
error_reporting(0);
    $email = $_POST["adminemail"];
    $password = $_POST["adminpass"];
    if(!isset($_SESSION['username']))
    {
    if($email == "Mohanapriya" and $password == "mona"){
        session_start();
        $_SESSION['username']="Mohanapriya";
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